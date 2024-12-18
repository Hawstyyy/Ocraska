<?php 
  include('..\php\main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ocraska's Skin Hub</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../images/ico.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="curva-1">
    <svg xmlns="http://www.w3.org/2000/svg" width="400" height="538" viewBox="0 0 483 538" fill="none">
    <path d="M426 212.5C504 406.9 672.833 510.5 747.5 538L877 -283.5L378 -384L0 -212C109.5 -151.5 348 18.1 426 212.5Z" fill="#AE387B"/>
    </svg>
  </div>
  <main class="main-content">
    <div class="title-container">
      <img src="../images/ico.png" class='icon'>
      <h1 class='title'>Ocraska's Skin Hub</h1>
    </div>
    <div class="skins-container">
      <?php while($rows=$exec->fetch_array()) { ?>
      <div class="skin">
        <img src="<?php echo $rows['imagem']; ?>" width='260px' height='195px' class='skin-image'>
        <h1 class="skin-title"><?php echo $rows['skin']; ?></h1>
        <a href="<?php echo $rows['link']; ?>" class='download'>Download</a>
      </div>
      <?php } ?>
    </div>
    <span class='love'>Made with ❤ by Hawsty</span>
  </main>
  <div class="curva-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="400" height="389" viewBox="0 0 608 389" fill="none">
      <path d="M89.7452 236.16C-34.1211 67.2441 -223.405 8.85402 -302.563 0.773469L-223.836 828.683L284.485 802.015L607.879 541.469C486.779 510.081 213.611 405.075 89.7452 236.16Z" fill="#AE387B"/>
      </svg>
    </div>
</body>
</html>