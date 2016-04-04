<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:' . DS . 'wamp' . DS . 'www' . DS . 'vipassana');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . DS . 'includes');
defined('LIB_PATHi') ? null : define('LIB_PATHi', SITE_ROOT . DS . 'public');

defined('A_LIB_PATH') ? null : define('A_LIB_PATH', SITE_ROOT . DS . 'public' . DS . 'admin');

require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."function.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."user.php");
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."databaseobject.php");
require_once(LIB_PATH.DS."donation.php");
require_once(LIB_PATH.DS."necessity.php");
//require_once(LIB_PATHi.DS."home.php");
// require_once(LIB_PATH.DS."editprofile.php");
//require_once(LIB_PATHi.DS.'layouts'.DS."public_header.php");
//require_once(LIB_PATHi.DS.'layouts'.DS."public_footer.php");
?>