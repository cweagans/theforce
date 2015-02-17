<?php

namespace cweagans\TheForce\NodeVisitor;

use PhpParser\Node;
use PhpParser\Node\Stmt;
use cweagans\TheForce\SymbolTable;

class ClassFinder extends SymbolFinder {

  /**
   * Save info about classes to SymbolTable.
   *
   * @param Node $node
   */
  public function enterNode(Node $node) {
    if ($node instanceof Stmt\Class_) {
      SymbolTable::getInstance()->addClass($node->namespacedName->parts, $this->gatherMetadata($node));
    }
  }
}
