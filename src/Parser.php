<?php

namespace cweagans\TheForce;

class Parser extends \PhpParser\Parser {

  /**
   * Parse a PHP file at a given path.
   *
   * @param $path
   * @return \PhpParser\Node[]
   */
  public function parseFile($path) {
    if (!file_exists($path) || !is_readable($path)) {
      throw new \InvalidArgumentException("File at $path does not exist or is unreadable!");
    }

    return $this->parse(file_get_contents($path));
  }
}
