<?php
 error_reporting(E_ALL);
     ini_set('display_errors', 1);
echo "Hello World";
 


 function connection_db()
    {
   $db_user_name = 'root';
    $db_password = 'irdi@123';
     $db_name = 'startup_wala';

        return mysqli_connect('www.startupwala.in', $db_user_name, $db_password, $db_name);
    }

       $var =  connection_db();

echo $var;


?>
