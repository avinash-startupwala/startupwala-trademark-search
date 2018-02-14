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

 function get_array_from_query($query, $conn)
    {
        $output = [];
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($output, $row);
            }
        } else {
            $output = NULL;
        }
        return $output;
    }
$vv = get_array_from_query('select tm_application_no from tm_data limit 5',$var);

print_r($vv);
?>
