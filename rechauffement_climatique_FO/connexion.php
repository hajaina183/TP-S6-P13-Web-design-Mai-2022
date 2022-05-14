<?php
    $host = 'localhost';
    $dbname = 'rechauffement';
    $username = 'postgres';
    $password = 'mdpprom13';
 
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