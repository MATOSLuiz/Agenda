<?php 

session_start();

include_once("conexao.php");
include_once("url.php");

$query = "SELECT * FROM contacts";

$stmt = $con->prepare($query);

$stmt->execute;

$contacts = $stmt->fetchAll();


?>