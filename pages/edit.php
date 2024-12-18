<?php
include('../php/edit.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Skin</title>
  <link rel="stylesheet" href="../css/edit.css">
  <link rel="shortcut icon" href="../images/ico.ico" type="image/x-icon">
</head>
<body>
  <main>
    <form action="../php/action.php" method="post">
      <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">

      <label for="skin">Nome</label>
      <input type="text" name="skin" value="<?php echo $fetch['skin']; ?>" required>

      <label for="link">Link</label>
      <input type="text" name="link" value="<?php echo $fetch['link']; ?>" required>

      <label for="imagem">Imagem</label>
      <input type="text" name="imagem" value="<?php echo $fetch['imagem']; ?>" required>

      <button type="submit" class='adicionar'>Editar</button>
      <a href="../pages/dashboard.php" class='cancelar'>Cancelar</a>
    </form>
  </main>
</body>
</html>
