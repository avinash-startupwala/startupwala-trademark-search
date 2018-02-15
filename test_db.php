<?php
require_once("heroku_postgres_database.php");
      $herokupostgrsdatabse = new HerokuPostgresDatabase();
      
      var_dump($herokupostgrsdatabse);

 $query = "CREATE TABLE trademark_search_reports (
  report_id              SERIAL PRIMARY KEY,
  brand_name           VARCHAR(120) NOT NULL,
  trademark_class  INTEGER(3) NULL,
  trade_description varchar(200) NULL,
  search_report VARCHAR(30) NULL,
  meaning_of_report VARCHAR(150) NULL,
  what_next varchar(15) NULL,
  aws_identifier varchar(50) NULL
)";
        $data = $herokupostgrsdatabse->query($query);



?>
