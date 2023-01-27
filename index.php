<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>


  <li>
    <div class="cen1">
      <a id="homeb" href="index.php">HOME </a>
      &nbsp&nbsp&nbsp&nbsp
      <a id="recapb" href="recap.php">RECAPLUTIVE</a>
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
    echo $message;
    unset($_SESSION['message']);
    ?>
    <div class="cantinaier">

      <h1 id="p"> AJOUTER LE PRODUIT</h1>


      <form action="traitement.php?action=addproducts" method="post">
    
        <label id="name" for="name">NOM 
          <input type="text" name="name" id="name">
        </label>
        <br>
        <br>

        <label id="price" for="price">PRIX 
          <input type="number" name="price" id="price">
        </label>
        <br>
        <br>

        <label id="qtt" for="qtt">QUANTITE 
          <input type="number" name="qtt" id="qtt"><br>
        </label>
        <br>
        <br>

        <input id="submit" type="submit" name="submit" value="ACCEPT">
      </form>
    </div>
    <div id="deletB">
      <inpuet type="submit" name="submit" value="delet">
    </div>
    </div>


</body>