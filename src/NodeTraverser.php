<?php

namespace cweagans\TheForce;

class NodeTraverser extends \PhpParser\NodeTraverser {
  /**
   * Replace a visitor with a new one.
   *
   * @param NodeVisitor $visitor
   */
  public function replaceVisitor($type, $newinstance) {
    foreach ($this->visitors as $index => $storedVisitor) {
      if ($storedVisitor instanceof $type) {
        $this->visitors[$index] = $newinstance;
      }
    }
  }
}
