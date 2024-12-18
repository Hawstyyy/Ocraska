<?php
include('conn.php');

$query = 'select * from skin';
$exec = mysqli_query($con, $query);

mysqli_close($con);