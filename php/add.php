<?php
include('conn.php');

$skin = $_POST['nome'];
$link = $_POST['link'];
$imagem = $_POST['imagem'];

$query = "insert into skin values (null, '{$skin}', '{$link}', '{$imagem}');";
$exec = mysqli_query($con, $query);

header('location: ../pages/dashboard.php');