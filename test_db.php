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
         //$data = $herokupostgrsdatabse->query($query);

//    $insert_query = "INSERT INTO trademark_search_reports 
//    (brand_name,trademark_class,trade_description,search_report,meaning_of_report,what_next, aws_identifier) 
//    VALUES 
//    ('startupwala', '43','Legal Services','Negative','Brand name is taken','talk with me','123')";

//   $data = $herokupostgrsdatabse->query($insert_query);

?>
