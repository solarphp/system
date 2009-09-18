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
 * auto-register some default objects for common use. note that these are 
 * lazy-loaded and only get created when called for the first time.
 */
$config['Solar']['registry_set'] = array(
    'sql'           => 'Solar_Sql',
    'user'          => 'Solar_User',
    'model_catalog' => 'Solar_Sql_Model_Catalog',
);

/**
 * sql adapter to use
 */
$config['Solar_Sql'] = array(
    'adapter' => 'Solar_Sql_Adapter_Sqlite',
);

/**
 * sql adapter config for sqlite
 */
$config['Solar_Sql_Adapter_Sqlite'] = array(
    'name' => "$system/sqlite/solar.sq3",
    'mode' => 0775,
);

/**
 * authentication adapter to use
 * 
 * use .ini file only for getting started ... passwords are stored in plain 
 * text, not secure.
 */
$config['Solar_Auth'] = array(
    'adapter' => 'Solar_Auth_Adapter_Ini',
);

/**
 * authentication adapter config for .ini files
 */
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
 * model catalog
 */
$config['Solar_Sql_Model_Catalog'] = array(
    'classes' => array('Solar_Model'),
);

/**
 * done!
 */
return $config;
