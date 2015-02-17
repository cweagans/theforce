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
   * {"cmd": "setConfig", "data": {"path": "/path/to/your/config.json"}}
   */
  public function setConfig($data) {
    $config = parse_ini_file($data->path);
    $this->indexer = new Indexer($config['paths'], $config['mask']);
    $this->indexer->index(function($file, $current, $total) {
      echo("($current/$total) Processing $file\n");
    });
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
