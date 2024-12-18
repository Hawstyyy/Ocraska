<?php 
  include('../php/main.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/dashboard.css">
  <link rel="shortcut icon" href="../images/ico.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="../js/dashboard.js" defer></script>
</head>
<body>
  <main>
    <div class="skins-container">
    <?php while($rows=$exec->fetch_array()) { ?>
      <div class="skin">
        <img src="<?php echo $rows['imagem']; ?>" width='260px' height='195px' class='skin-image'>
        <h1 class="skin-title"><?php echo $rows['skin']; ?></h1>
        <a href="edit.php?id=<?php echo $rows['id']; ?>" class='edit' id='edit'>Editar</a>
      </div>
      <?php } ?>
      <button class='add' id='add' onclick=openPopup()><img src="../images/+.svg"></button>
    </div>
  </main>
  <div class="popup" id='popup'>
      <div class="inner-popup">
        <form action="../php/add.php" method="post">
          <label for="nome">Nome</label>
          <input type="text" name="nome">
          <label for="link">Link</label>
          <input type="text" name='link'>
          <label for="Imagem">Imagem</label>
          <input type="text" name='imagem'>
          <button type="submit" class='adicionar'>Adicionar</button>
        </form>
      </div>
  </div>
</body>
</html>