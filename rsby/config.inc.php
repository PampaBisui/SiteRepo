<?php

/**
 * Defined constants for database, session and page
 * @version v1.0
 */
/**
 * Defines MySQL Server Hostname
 */
define('HOST_Name', 'localhost');

/**
 * Defines MySQL Server Username
 */
define('MySQL_User', 'root');

/**
 * Defines MySQL Server password
 */
define('MySQL_Pass', 'mysql');

/**
 * Defines MySQL Server Database Name
 */
define('MySQL_DB', 'WebSite');

/**
 * Defines MySQL Database Table Prefix
 */
define('MySQL_Pre', 'WebSite_');

/**
 * Defines Session Timeout value in minutes
 */
define('LifeTime', '20');

/**
 * Defines Title of the page
 */
define('AppTitle', 'Rashtriya Swasthya Bima Yojna');

/**
 * Defines Application's Unique Installation ID
 *
 * 1. Validates Against Multiple applications in the same domain
 * 2. Used to Encrypt Passwords in Database (kept at server side never sent to client)
 */
define('AppKey', 'RSBY');

/**
 * Defines Existence of tables
 *
 * If set to TRUE then Database tables will be created
 */
define('NeedsDB', TRUE);

/**
 * Defines use of SMS Gateway
 *
 * If set to TRUE then SMSs will be Sent
 */
define('UseSMSGW', FALSE);
?>
