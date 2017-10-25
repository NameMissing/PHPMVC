<?php

/**
 * Front controller
 */

 // load configuration files
 // For now, we simply load our routes
 include "routes.php";

// First we need to get the
$path = $_GET["path"];

// run through routes and find controller
foreach ($GLOBALS["routes"] as $key => $value) {

  if ($path == $key) {

    // get class name
    $class = $value . "Controller";

    // load requested controller using the class name
    // and instantiate
    include "controllers/$class.php";
    $controller = new $class();

    // Stop loop if we found a match
    break;
  }
}
