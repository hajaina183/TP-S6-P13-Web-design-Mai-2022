<?php
    $host = 'ec2-54-211-255-161.compute-1.amazonaws.com';
    $dbname = 'd9vg3r1r4eo0k3';
    $username = 'hsmltsdsoihphh';
    $password = '978b8db7a694f1e8e1c6c88cdbb6a84da0147f74ce6a278fad371cee39802ed8';
 
  $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
   
  try{
     $bdd = new PDO($dsn);
     
     if($bdd){
      //echo "Connecté à $dbname avec succès!";
     }
  }catch (PDOException $e){
     echo $e->getMessage();
  }
?>