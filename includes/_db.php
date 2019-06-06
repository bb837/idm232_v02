<?php

$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {

define('DB_SERVER', 'localhost');       
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'idm-232-lets-cook');

}
else {
  // Remote database credentials
  define('DB_SERVER', 'www.briannabuissereth.com');
  define('DB_USER', 'briannp5_covibui');
  define('DB_PASS', 'Alexander03');
  define('DB_NAME', 'briannp5_idm232');
}

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
  die('Database connection failed: ' . mysqli_connect_error() . ' ' . mysqli_connect_errno());
}

mysqli_set_charset($connection,"utf8");

?>

