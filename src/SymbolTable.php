<?php

namespace cweagans\TheForce;

class SymbolTable {
  private static $_instance = null;
  private function __construct() {}
  public static function getInstance() {
    if (is_null(self::$_instance)) {
      self::$_instance = new self;
    }
    return self::$_instance;
  }

  /**
   * A list of classes found by the parser.
   *
   * @var array
   */
  protected $classList = array();

  /**
   * A list of functions found by the parser.
   *
   * @var array
   */
  protected $functionList = array();

  /**
   * A list of class methods found by the parser.
   *
   * @var array
   */
  protected $methodList = array();

  /**
   * Add a class to the symbol table.
   *
   * @param $namespacedClass
   * @param $metadata
   */
  public function addClass($namespacedClass, $metadata) {
    $namespacedClass = implode('\\', $namespacedClass);
    $this->processMetadata($metadata);
    $this->classList[$namespacedClass] = $metadata;
  }

  /**
   * Get a list of classes that we know about.
   *
   * @return array
   */
  public function getClasses($prefix = '') {
    if ($prefix != '') {
      return $this->filterArrayByPrefix($this->classList, $prefix);
    }
    return $this->classList;
  }

  /**
   * Add a function to the symbol table
   *
   * @param $functionName
   * @param $metadata
   */
  public function addFunction($functionName, $metadata) {
    $this->processMetadata($metadata);
    $this->functionList[$functionName] = $metadata;
  }

  /**
   * Return the list of functions that we know about.
   *
   * @return array
   */
  public function getFunctions($prefix = '') {
    if ($prefix != '') {
      return $this->filterArrayByPrefix($this->functionList, $prefix);
    }
    return $this->functionList;
  }

  /**
   * Add a class method to the symbol table.
   *
   * @param $className
   * @param $methodName
   * @param $metadata
   */
  public function addMethod($className, $methodName, $metadata) {
    $this->processMetadata($metadata);
    $this->methodList[$className][$methodName] = $metadata;
  }

  /**
   * Return the full list of class methods we know about.
   *
   * @return array
   */
  public function getMethods() {
    return $this->methodList;
  }

  /**
   * Return an optionally filtered list of methods found in a class and it's parents.
   *
   * @param string $classname The fully qualified class name.
   * @param string $prefix The prefix to filter by.
   * @return array
   */
  public function getFilteredMethodsByClass($classname, $prefix = '') {
    if (!array_key_exists($classname, $this->methodList)) {
      throw new \InvalidArgumentException($classname . ' is not in the method list!');
    }

    if ($prefix != '') {
      $class_methods = $this->getMethodsByClass($classname);
      return $this->filterArrayByPrefix($class_methods, $prefix);
    }
    return $this->getMethodsByClass($classname);
  }

  /**
   * Return a list of class methods (including parents) filtered by classname.
   *
   * @param $classname
   * @return array $fullMethodList
   */
  public function getMethodsByClass($classname) {
    $methods = $this->getMethods();

    // If we were given a fully qualified classpath, strip the leading backslash.
    if (substr($classname, 0, 1) == '\\') {
      $classname = substr($classname, 1);
    }

    // Start the list of methods with the class given to us.
    $fullMethodList = $methods[$classname];

    $classList = $this->getClasses();
    if (isset($classList[$classname]['parent'])) {
      $fullMethodList = array_merge($fullMethodList, $this->getMethodsByClass($classList[$classname]['parent']));
    }

    return $fullMethodList;
  }

  public function purgeData() {
    $this->classList = array();
    $this->methodList = array();
    $this->functionList = array();
  }

  /**
   * Process any associated metadata that comes with the symbol.
   *
   * @param array $metadata
   */
  protected function processMetadata(array &$metadata) {
    if (isset($metadata['docblock'])) {
      $metadata['docblock'] = $this->parseDocblock($metadata['docblock']);
    }
    if (isset($metadata['parent'])) {
      $metadata['parent'] = implode('\\', $metadata['parent']);
    }
  }

  /**
   * Parse a docblock into usable data.
   *
   * @param $docblock
   * @return array $docblock
   */
  protected function parseDocblock($docblock) {
    if (is_object($docblock)) {
      $docblock = $docblock->__toString();
    }
    else {
      return array();
    }

    try {
      $phpdoc = new \phpDocumentor\Reflection\DocBlock($docblock);
    }
    catch (\Exception $e) {
      // Something's messed up with the docblock.
      // @TODO: Do something better here.
      return array();
    }

    $docblock = array();
    $docblock['description'] = $phpdoc->getText();
    $return = $phpdoc->getTagsByName('return');
    if (!empty($return)) {
      $docblock['return'] = $this->parseDocTag($return[0]->getContent());
    }

    foreach ($phpdoc->getTagsByName('param') as $param) {
      $docblock['params'][] = $this->parseDocTag($param->getContent());

    }

    return $docblock;
  }

  /**
   * Parse a doctag into machine-readable data.
   *
   * The doctag should be in the form of @tagname ($optionalVarName) type short_description.
   *
   * @param $doctag
   * @return array $doctag
   */
  protected function parseDocTag($doctag) {
    $doctag = explode(" ", $doctag);

    // First, check to see if there's something that starts with $. Name of the var for params.
    $paramName = '';
    if (substr($doctag[0], 0, 1) == '$') {
      $paramName = array_shift($doctag);
    }

    // Next, we can assume there's a type and a description for all tags passed to this function.
    // @TODO: Add better checking as to whether the first word of the content is actually the type.
    $type = array_shift($doctag);
    $description = implode(" ", $doctag);

    $doctag = array(
      'type' => $type,
      'description' => $description,
    );

    if ($paramName !== '') {
      $doctag['paramName'] = $paramName;
    }

    return $doctag;
  }

  protected function filterArrayByPrefix(array $array, $prefix) {
    $allowed_keys = array_filter(array_keys($array), function($key) use($prefix) {
      return (strrpos($key, $prefix, -strlen($key)) !== FALSE);
    });
    return array_intersect_key($array, array_flip($allowed_keys));
  }
}
