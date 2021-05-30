<?php

// If there is no constant defined call __CONFIG__. DO NOT load this file
if(!defined('__CONFIG__')) {
  exit('You do not have a config file');
  // We can redirect someone in here instead of exiting or give them a 404 page
}
class DB {
  protected static $con;

  private function __construct() {

    try {

      self::$con = new PDO( 'mysql:charset=utf8mb4; host=localhost;port=3306;dbname=login_course', 'root', 'Wagki2021!thisisouryear' );
      self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );

    } catch (PDOException $e) {
        echo "Could not connect to database."; exit;
    }
  }

  public static function getConnection() {
    // If this instance has not been started, start it
    if (!self::$con) {
      new DB();
    }

    // Return the writeable db connection
    return self::$con;
  }
}
?>
