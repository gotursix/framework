<?php

define('DEBUG', true ); // show or not errors

define('DB_NAME', 'hell'); //database name
define('DB_USER', 'root'); //database user
define('DB_PASSWORD', ''); //database password
define('DB_HOST', '127.0.0.1'); //database host / use IP address to avoid DNS lookup

define('DEFAULT_CONTROLLER','Home'); //default controller if there isn't one in the url
define('DEFAULT_LAYOUT','default'); //if no layout is set in the controller use this s_layout
define('PROOT','/framework/'); //set this to '/' for a live server
define('POOT','/framework/'); //set this to '/' for a live server
define('SITE_TITLE','Rufus Framework'); //This will be used if no site title is set
define('MENU_BRAND' ,'RUFUS'); // This is the brand text in menu

define('CURRENT_USER_SESSION_NAME','GJdsadaHsdahgFGDasdaS'); // session name for loogged in use
define('REMEMBER_ME_COOKIE_NAME','nfbfbfafusibfsau548a484f'); // cookie name for logged in user remember me
define('REMEMBER_COOKIE_EXPIRY','604800'); // time in seconds for remember me cookie to live (30 days)

define('ACCESS_RESTRICTED','Restricted'); //controller name for the restriceted redirect
