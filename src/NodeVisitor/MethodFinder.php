<?php

namespace cweagans\TheForce\NodeVisitor;

use PhpParser\NodeVisitorAbstract;
use PhpParser\Node;
use PhpParser\Node\Stmt;
use cweagans\TheForce\SymbolTable;

class MethodFinder extends SymbolFinder {

  private $currentClass;

  /**
   * Store info about class methods (indexed by class) in SymbolTable.
   *
   * @param Node $node
   */
  public function enterNode(Node $node) {
    if ($node instanceof Stmt\Class_) {
      $this->currentClass = implode('\\', $node->namespacedName->parts);
    }

    if ($node instanceof Stmt\ClassMethod) {
      SymbolTable::getInstance()->addMethod($this->currentClass, $node->name, $this->gatherMetadata($node));
//      var_dump($node);
//      SymbolTable::getInstance()->addMethod();
    }
  }

  public function leaveNode(Node $node) {
    if ($node instanceof Stmt\Class_) {
      $this->currentClass = '';
    }
  }
}
