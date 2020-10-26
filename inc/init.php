<?php 
  
  $dbhost = '127.0.0.1';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'wordlist';
  
  $db = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);
  if(mysqli_connect_errno()) {
    echo 'Database connection aborted because: ' . mysqli_connect_error();
    die();
  }
  
?>