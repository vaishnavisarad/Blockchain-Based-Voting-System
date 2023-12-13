<?php
session_start(); 
if(!isset($_SESSION['minname'])){
echo "<script>window.location='../index.php';</script>";
}
?>