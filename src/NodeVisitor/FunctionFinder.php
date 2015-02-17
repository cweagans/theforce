<?php

namespace cweagans\TheForce\NodeVisitor;

use PhpParser\Node;
use PhpParser\Node\Stmt;
use cweagans\TheForce\SymbolTable;

class FunctionFinder extends SymbolFinder {

  /**
   * Save info about functions to SymbolTable.
   *
   * @param Node $node
   */
  public function enterNode(Node $node) {
    if ($node instanceof Stmt\Function_) {
      SymbolTable::getInstance()->addFunction($node->name, $this->gatherMetadata($node));
    }
  }
}
