<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "e_vote_using_blockchain";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>