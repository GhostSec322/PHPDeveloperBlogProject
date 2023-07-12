<?php
/**
 * Time Zone
 */
//date_default_timezone_get('Asia/Seoul');

/**
 * Error Handling 
 */
ini_set('display_errors','On');

/**
 * databases connect mysqli
 */
$GLOBALS['DB_Connection'] = mysqli_connect(
    'localhost',
    'root',
    'backdoor8175@',
    'phpblog'
);
if(!$GLOBALS['DB_Connection']){
    exit;
}
register_shutdown_function(function(){
    if(array_key_exists('DB_Connection',$GLOBALS) && $GLOBALS['DB_Connection']){
        mysqli_close($GLOBALS['DB_Connection']);
    }
});
/**
 * Session
 */
ini_set('session.gc_maxlifetime', 1440);
session_set_cookie_params(1440);
session_start();