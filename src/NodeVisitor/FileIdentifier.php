<?php

namespace cweagans\TheForce\NodeVisitor;

use PhpParser\Node;
use PhpParser\Node\Stmt;
use PhpParser\NodeVisitorAbstract;

class FileIdentifier extends NodeVisitorAbstract {

  private $filepath;

  /**
   * Set the filepath that will be attached to the AST nodes.
   *
   * @param $path
   */
  public function __construct($filepath) {
    $this->filepath = $filepath;
  }

  /**
   * Add filepath to nodes.
   *
   * @param Node $node
   */
  public function enterNode(Node $node) {
    $node->setAttribute('file', $this->filepath);
  }
}
