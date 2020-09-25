<?php
// create database connection 
$host = "localhost";
$dbname = "web-design";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);