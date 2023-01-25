<!DOCTYPE html>

<head>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
  <div class="centrer">
  <a id="lin" href="index.php">HOME</a>
  <a id="lin" href="recap.php">RECAPLUTIVE</a>
  </div>

  <div id="header"> 
AJOUTER LE PRODUIT
</div>
<div id="tam">
  <form action="traitement.php?action=addproducts"  method="post">

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
  <div id="traitment">
  <inpuet type="submit" name="submit" value="delet" >
  </div>


</body>