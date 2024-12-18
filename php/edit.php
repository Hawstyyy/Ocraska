<?php
include('conn.php');

if (isset($_GET['id'])) {
  $id = (int) $_GET['id'];

  $stmt = $con->prepare("SELECT * FROM skin WHERE id = ?");
  $stmt->bind_param('i', $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
      $fetch = $result->fetch_array();
  } else {
      echo "Skin não encontrada!";
      exit;
  }
} else {
  echo "ID não fornecido!";
  exit;
}

mysqli_close($con);