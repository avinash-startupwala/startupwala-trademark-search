<?php
 error_reporting(E_ALL);
     ini_set('display_errors', 1);
echo "Hello World";
 


 function connection_db()
    {
   $db_user_name = 'startupwala';
    $db_password = '1234';
     $db_name = 'startup_wala';

        return mysqli_connect('www.startupwala.in:3306', $db_user_name, $db_password, $db_name);
    }

       $var =  connection_db();

echo $var;


?>
