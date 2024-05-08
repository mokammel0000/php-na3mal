<?php
try{
    $con = new PDO(
      "mysql: host=localhost; dbname=kamel_store",
    //DB type  server name     scheme name
    "root",
    ""
    );
  }catch(PDOException $e){
    echo 'connection is failed';
  }
  
    