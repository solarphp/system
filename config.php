<?php
/**
 * all config values go in this array, which will be returned at the end of
 * this script. vendor configs should modify this array directly.
 */
$config = array();

/**
 * system directory
 */
$system = dirname(__FILE__);
$config['Solar']['system'] = $system;

/**
 * default configs for each vendor
 */
include "$system/source/solar/config/default.php";
include "$system/source/proxima/config/default.php";

/**
 * project overrides
 */

// database connection
$config['Solar_Sql']['adapter'] = 'Solar_Sql_Adapter_Sqlite';
$config['Solar_Sql_Adapter_Sqlite'] = array(
    'name' => "$system/sqlite/proxima.sq3",
);

// front controller
$config['Solar_Controller_Front'] = array(
    'classes' => array('Proxima_App'),
    'disable' => array(),
    'default' => 'bookmarks',
    'rewrite' => array(),
    'routing' => array(),
    'explain' => true,
);

// model catalog
$config['Solar_Sql_Model_Catalog']['classes'] = array('Proxima_Model');

// authentication
$config['Solar_Auth']['storage'] = array(
    'adapter' => 'Solar_Auth_Storage_Adapter_Sql',
);

$config['Solar_Auth_Storage_Adapter_Sql'] = array(
    'table'         => 'members',
    'handle_col'    => 'handle',
    'passwd_col'    => 'passwd',
    'moniker_col'   => 'moniker',
    'uri_col'       => 'uri',
    'email_col'     => 'email',
    'uid_col'       => 'id',
    'hash_algo'     => 'md5',
    'where'         => array('members.status = ?' => 'active'),
);

// access control
$config['Solar_Access']['adapter'] = 'Solar_Access_Adapter_File';
$config['Solar_Access_Adapter_File'] = array(
    'file' => "$system/source/proxima/config/access.txt",
);

/**
 * done!
 */
return $config;
