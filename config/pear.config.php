<?php
/**
 * Configuration file for local pear command
 */

// config values to be returned
$config = array();

// path to Solar-system, in case we need it for configs
$system = dirname(dirname(__FILE__));

// path to pear source, in case we need it for configs
$pear = "$system/source/pear";

// be just a little verbose
$config['verbose'] = 1;

// done!
return $config;
