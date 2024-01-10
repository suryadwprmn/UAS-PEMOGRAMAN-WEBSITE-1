<?php 
    try {
        $con = new PDO("mysql:host=localhost;dbname=dbtokopertanian", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
       catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
?>