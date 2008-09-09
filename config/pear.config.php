<?php
/**
 * 
 * Configuration file for local pear command
 * 
 */

// path to Solar-system
$system = dirname(dirname(__FILE__));

// PEAR base path
$pear = $system  . DIRECTORY_SEPARATOR
      . 'source' . DIRECTORY_SEPARATOR
      . 'pear';

$config = array();

$config['auto_discover']   = 0;
$config['preferred_state'] = 'stable';

return $config;
