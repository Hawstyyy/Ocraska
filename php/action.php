<?php
include('conn.php');

$id = $_POST['id'];
$skin = $_POST['skin'];
$link = $_POST['link'];
$imagem = $_POST['imagem'];

$query = "update skin set skin = '{$skin}', link = '{$link}', imagem = '{$imagem}' where id = $id;";
$exec = mysqli_query($con, $query);

mysqli_close($con);

header('location: ../pages/dashboard.php');