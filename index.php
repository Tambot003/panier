<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
  <div class="cen1">
    <a href="index.php">HOME</a>
    <a href="recap.php">RECAPLUTIVE</a>
  </div>
  <?php
  session_start();
  $message = (isset($_SESSION['message'])) ? $_SESSION['message'] : null;
  // if (isset($_SESSION['message'])){
  //   $message =  $_SESSION['message'];
  // }
  // else{
  //   $message = null;
  // }

  gg
  echo $message;
  unset($_SESSION['message']);
  ?>
  <div id="header">
    AJOUTER LE PRODUIT
  </div>
  <div id="tam">
    <form action="traitement.php?action=addproducts" method="post">

      <label for="name">NOM :
        <input type="text" name="name" id="name">
      </label>
      <br>
      <br>

      <label for="price">PRIX :
        <input type="number" name="price" id="price">
      </label>
      <br>
      <br>

      <label for="qtt">QUANTITE :
        <input type="number" name="qtt" id="qtt"><br>
      </label>
      <br>
      <br>

      <input type="submit" name="submit" value="Accept">
    </form>
  </div>
  <div id="deletB">
    <inpuet type="submit" name="submit" value="delet">
  </div>


</body>