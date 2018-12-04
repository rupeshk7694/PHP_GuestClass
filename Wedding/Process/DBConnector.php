<?php

namespace Wedding\Process;

/**
 * Class DBConnector
 */
Class DBConnector
{

  protected $host 	  = '127.0.0.1';
  protected $port 	  = '3306';
  protected $username = 'root';
  protected $password = 'root';
  protected $database = 'wedding_guests';
  protected $charset 	= 'utf8';
  /**
   * @var $connection
   */
  protected $connection;

  /**
   * DBConnector constructor.
   * Opens the database connection in singleton pattern.
   */
  public function __construct($config = array())
  {
    $this->host = isset($config['host']) ? $config['host'] : $this->host;
    $this->port = isset($config['port']) ? $config['port'] : $this->port;
    $this->username = isset($config['username']) ? $config['username'] : $this->username;
    $this->password = isset($config['password']) ? $config['password'] : $this->password;
    $this->database = isset($config['database']) ? $config['database'] : $this->database;
    if (empty($this->connection)) {
      $this->initDBConnection();
    }
  }

  /**
   * @return PDO
   */
  public function getConnection()
  {
    return $this->connection;
  }

  /**
   * Closes the database connection
   */
  public function __destruct()
  {
    $this->connection = NULL;
  }

  /**
   * @param array $config
   */
  private function initDBConnection()
  {
    $dsn = "mysql:host=$this->host;dbname=$this->database;charset=$this->charset";

    try {
      $this->connection = new \PDO($dsn, $this->username, $this->password);
    } catch (\PDOException $ex) {
      // Handle this properly on PROD environment.
      // Instead of blowing the error, redirect to user friendly error page
      die('Error!: '.$ex->getMessage());
    }
  }
}