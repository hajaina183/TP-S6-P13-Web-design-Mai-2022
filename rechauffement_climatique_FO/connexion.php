<?php
    $host = 'ec2-54-86-224-85.compute-1.amazonaws.com';
    $dbname = 'ddi6usnvt9bes6';
    $username = 'postgresqzlxhsghigmhbb';
    $password = 'dd7a9bfa463fc4a59bd5a663be7954e48c1050a040aba99f2950d3e2f60d4013';
 
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