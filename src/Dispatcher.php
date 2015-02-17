<?php

namespace cweagans\TheForce;

use \React\Stream\DuplexStreamInterface;
use \cweagans\TheForce\Indexer;

class Dispatcher {

  private $connection;
  private $indexer;

  public function __construct(DuplexStreamInterface $connection) {
    $this->connection = $connection;
    $this->connection->write("The Force (PHP Autocompletion Daemon) v1.0.0!\n");
    $this->connection->write("Ready\n");
  }

  public function dispatch($input) {
    $input = json_decode($input);
    if (method_exists($this, $input->cmd)) {
      if (property_exists($input, "data")) {
        call_user_func(array($this, $input->cmd), $input->data);
      }
      else {
        call_user_func(array($this, $input->cmd));
      }
    }
  }

  /**
   * Set the directory to index.
   *
   * Example:
   * {"cmd": "setDirectory", "data": {"path": "/path/to/your/project"}}
   */
  public function setDirectory($data) {
    $this->indexer = new Indexer(array($data->path));
    $this->indexer->index(function($file, $current, $total) {
      echo("($current/$total) Processing $file\n");
    });
  }

  /**
   * Use a config file for the indexer.
   *
   * Example:
   * {"cmd": "setConfig", "data": {"path": "/path/to/your/config.ini"}}
   */
  public function setConfig($data) {
    $config = parse_ini_file($data->path);
    $this->indexer = new Indexer($config['paths'], $config['mask']);
    $this->indexer->index(function($file, $current, $total) {
      echo("($current/$total) Processing $file\n");
    });
  }

  /**
   * Get function completions from SymbolTable.
   *
   * Example:
   * {"cmd": "getFunctions", "data": {"prefix": "drupal_ge"}}
   */
  public function getFunctions($data) {
    if (isset($data->prefix)) {
      $this->connection->write(json_encode(SymbolTable::getInstance()->getFunctions($data->prefix)));
      return;
    }
    $this->connection->write(json_encode(SymbolTable::getInstance()->getFunctions()));
  }

  /**
   * Get information for a specific function.
   *
   * Example:
   * {"cmd": "getFunction", "data": {"prefix": "drupal_get_path"}}
   */
  public function getFunction($data) {
    $function_name = $data->function;
    $function_info = SymbolTable::getInstance()->getFunctions($function_name);
    $this->connection->write(json_encode($function_info[$function_name]));
  }

  /**
   * Disconnect the currently connected client.
   *
   * Example:
   * {"cmd": "disconnect"}
   */
  public function disconnect() {
    $this->connection->close();
  }
}
