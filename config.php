<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','12345678');
define('DB_NAME','vortex');


define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
define('INCLUDE_PATH',BASE_PATH .'/include');
define('TEMPLATE_PATH',INCLUDE_PATH .'/templates');
define('CLASS_PATH',INCLUDE_PATH .'/class');
define('ADMIN_PATH',BASE_PATH .'/admin');
define('PROTOCOL','http://');
define('BASE_URL',PROTOCOL .'localhost');
define('ADMIN_URL',BASE_URL .'/admin');