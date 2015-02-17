<?php

namespace cweagans\TheForce\NodeVisitor;

use PhpParser\NodeVisitorAbstract;
use PhpParser\Node;
use PhpParser\Node\Stmt;
use cweagans\TheForce\SymbolTable;

/**
 * This class should not be used directly. Use a child class instead.
 *
 * Class SymbolFinder
 * @package cweagans\TheForce\NodeVisitor
 */
class SymbolFinder extends NodeVisitorAbstract {

  private $filepath;

  /**
   * enterNode must be defined by a child class.
   * @param Node $node
   */
  public function enterNode(Node $node) {
    throw new \LogicException('enterNode must be defined!');
  }

  /**
   * Get the file path that we're operating on for use in metadata.
   *
   * Each file is parsed and traversed individually, so this should be set for
   * each file that's indexed by \cweagans\TheForce\Indexer.
   *
   * @param $filepath
   */
  public function setFileContext($filepath) {
    $this->filepath = $filepath;
  }

  /**
   * Gathers any important metadata about the node, which will be passed to the SymbolTable.
   *
   * @param Node $node
   */
  protected function gatherMetadata(Node $node) {
    $metadata = array();

    // Every node will have an associated file.
    $metadata['file'] = $node->getAttribute("file");

    // Every node will have an associated line number.
    $metadata['line_number'] = $node->getLine();

    // Not every node has a docblock.
    $metadata['docblock'] = '';
    if (method_exists($node, 'getDocComment')) {
      $metadata['docblock'] = $node->getDocComment();
    }

    // If we're operating on a class, it might extend another class...
    if ($node instanceof Stmt\Class_ && property_exists($node, 'extends')) {
      $metadata['parent'] = $node->extends->parts;
    }

    return $metadata;
  }
}
