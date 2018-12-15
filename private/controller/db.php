<?php
$db['db_host'] = "localhost"; // Database host name ex. localhost
$db['db_user'] = "root"; // Database user. ex. root ( if your on local server)
$db['db_pass'] = ""; // user password  (if password is not set for user then keep it empty )
$db['db_name'] = "booking_data"; // Database Database name


foreach ($db as $key => $value){
    define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){

    die();
}

?>