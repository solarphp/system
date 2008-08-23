<?php
/**
 * all config values go in this array, which will be returned at the end of
 * this script
 */
$config = array();


/**
 * system and autoload-include directories
 */
$system = dirname(dirname(__FILE__));
$config['Solar']['system']  = $system;
$config['Solar']['include'] = "$system/include";


/**
 * ini_set values
 */
$config['Solar']['ini_set'] = array(
    'error_reporting'   => (E_ALL | E_STRICT),
    'display_errors'    => true,
    'html_errors'       => true,
    'session.save_path' => "$system/tmp/session/",
    'date.timezone'     => 'UTC',
);


/**
 * sql connection
 */
// use sqlite by default
$config['Solar_Sql']['adapter'] = 'Solar_Sql_Adapter_Sqlite';

// sqlite config
$config['Solar_Sql_Adapter_Sqlite'] = array(
    'name' => "$system/sqlite/solar.sq3",
    'mode' => 0775,
);


/**
 * authentication
 */
// use .ini file only for getting started ... passwords are stored in plain 
// text, not very secure.
$config['Solar_Auth']['adapter'] = 'Solar_Auth_Adapter_Ini';

// .ini config
$config['Solar_Auth_Adapter_Ini'] = array(
    'file' => "$system/config/auth.ini"
);

/**
 * front controller
 */
$config['Solar_Controller_Front'] = array(
    'classes' => array('Solar_App'),
    'disable'  => array('base'),
    'default' => 'hello',
    'routing' => array(),
);

/**
 * done!
 */
return $config;
