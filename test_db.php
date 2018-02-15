<?php
require_once("heroku_postgres_database.php");
      $herokupostgrsdatabse = new HerokuPostgresDatabase();
      
      var_dump($herokupostgrsdatabse);

//  $query = "CREATE TABLE trademark_search_reports (
//   id              SERIAL PRIMARY KEY,
//   brand_name           VARCHAR(120) NOT NULL,
//   trademark_class  integer NULL,
//   trade_description varchar(200) NULL,
//   search_report VARCHAR(30) NULL,
//   meaning_of_report VARCHAR(150) NULL,
//   what_next varchar(15) NULL,
//   aws_identifier varchar(50) NULL
// )";
         $data = $herokupostgrsdatabse->query("DROP TABLE trademark_search_reports_main");

//    $query = "INSERT INTO newusers 
//    (first_name,last_name,phone,city,looking_for,email, password,random_key) 
//    VALUES 
//    ('$first_name', '$last_name','$phone','$city','$looking_for','$email','$password','$random_key')";



?>
