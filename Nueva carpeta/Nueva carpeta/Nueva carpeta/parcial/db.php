<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
$conn = mysqli_connect(
    "localhost", 
    "root","", 
    "parcial"
);
?>