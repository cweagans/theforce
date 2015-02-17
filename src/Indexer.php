<?php

namespace cweagans\TheForce;

use PhpParser\Lexer;
use PhpParser\Node\Name;
use PhpParser\Parser;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitor\NameResolver;
use PhpParser\NodeDumper;
use cweagans\TheForce\SymbolTable;
use cweagans\TheForce\NodeVisitor\ClassFinder;
use cweagans\TheForce\NodeVisitor\FunctionFinder;
use cweagans\TheForce\NodeVisitor\MethodFinder;

class Indexer {

  /**
   * Paths to search for indexable files.
   *
   * @var array
   */
  private $paths = array();

  /**
   * A regex that defines which files should be indexed.
   *
   * @var string
   */
  private $filemask = '';

  /**
   * A list of files that the indexer will scan for symbols.
   *
   * @var array
   */
  private $filelist = array();

  private $parser;
  private $traverser;

  /**
   * Build a new indexer.
   *
   * @param array $paths Paths to search for indexable files.
   * @param string $filemask A regex that defines what files to index.
   */
  public function __construct(array $paths, $filemask = '/^.+\.php$/i') {
    // Set up the directory path related options.
    $this->paths = $paths;
    $this->filemask = $filemask;

    // Build a new parser and store it for later.
    $lexer = new Lexer();
    $this->parser = new Parser($lexer);

    // Build a new traverser and store it for later.
    $this->traverser = new NodeTraverser();
    $this->traverser->addVisitor(new NameResolver());
    $this->traverser->addVisitor(new ClassFinder());
    $this->traverser->addVisitor(new FunctionFinder());
    $this->traverser->addVisitor(new MethodFinder());

    // Rebuild the list of files to be indexed.
    $this->rebuildFileList();
  }

  /**
   * Build a list of files to index.
   */
  protected function rebuildFileList() {
    $this->filelist = array();
    foreach ($this->paths as $path) {
      $directory = new \RecursiveDirectoryIterator($path, \RecursiveDirectoryIterator::SKIP_DOTS);
      $iterator = new \RecursiveIteratorIterator($directory, \RecursiveIteratorIterator::SELF_FIRST);
      $files = new \RegexIterator($iterator, $this->filemask, \RecursiveRegexIterator::GET_MATCH);
      foreach($files as $file) {
        $this->filelist[] = $file[0];
      }
    }
  }

  /**
   * Reindex all symbols.
   *
   * @TODO: Can this be parallelized with pthreads?
   */
  public function index($reportFunction = NULL) {
    SymbolTable::getInstance()->purgeData();
    $this->rebuildFileList();

    $current = 0;
    $total = count($this->filelist);
    foreach ($this->filelist as $file) {
      $this->indexFile($file);
      $current++;
      if (is_callable($reportFunction)) {
        $reportFunction($file, $current, $total);
      }
    }
  }

  /**
   * Reindex a specific file.
   */
  public function indexFile($path) {
    $this->traverser->traverse($this->parser->parse(file_get_contents($path)));
  }
}
