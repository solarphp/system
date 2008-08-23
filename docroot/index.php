<?php
// Solar system directory
$system = dirname(dirname(__FILE__));

// set the include-path for the system
set_include_path(".:..:$system/include");

// load Solar
require_once 'Solar.php';

// start Solar with system config file
$config = "$system/config/Solar.config.php";
Solar::start($config);

// instantiate and run the front controller
$front = Solar::factory('Solar_Controller_Front');
$front->display();

// Done!
Solar::stop();
