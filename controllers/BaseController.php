<?php
/**
 * Most basic controller!
 */

class BaseController {

  /**
   * Constructor
   */
  public function __construct() {

    // Load our view!
    // in this case we will simply include the HTML
    // note how this is relative to the front controller,
    // but we really should define an absolute path
    include "views/base.php";

  }

}
