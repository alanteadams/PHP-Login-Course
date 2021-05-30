<?php
  // If there is no constant defined call __CONFIG__. DO NOT load this file
  if(!defined('__CONFIG__')) {
    exit('You do not have a config file');
    // We can redirect someone in here instead of exiting or give them a 404 page
  }

  // Our config is below


  // Include the DB.php file:
  // More secure if separate the config somewhere outside of the app
  // ../../classes/db.php
  include_once "classes/db.php";

  $con = DB::getConnection();
?>
