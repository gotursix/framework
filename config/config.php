<?php


define('DEBUG', true );

define('DB_NAME', 'hell'); //database name
define('DB_USER', 'root'); //database user
define('DB_PASSWORD', ''); //database password
define('DB_HOST', '127.0.0.1'); //database host ***use IP address to avoid DNS lookup

define('DEFAULT_CONTROLLER','Home'); //default controller if there isn't one in the url
define('DEFAULT_LAYOUT','default'); //if no layout is set in the controller use this s_layout
define('PROOT','/framework/'); //set this to '/' for a live server
define('SITE_TITLE','Rufus Framework'); //This will be used if no site title is set
