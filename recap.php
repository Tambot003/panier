<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
       <div class="cen2">
        <div id="homeR">
        <a  href="index.php">HOME</a>
        </div>
        &nbsp &nbsp&nbsp&nbsp
        <div id="recapR">
        <a  href="recap.php">RECAPLUTIVE</a>
        </div>
    </div>
    <?php
    if (!isset($_SESSION['products']) || empty($_SESSION['products'])) {
        echo "<p> Aucun produit en session ... </p>";

    } else {

        echo "<table>",
            "<thead>",
            "<tr>",
            "<th>#</th>",
            "<th>Nom</th>",
            "<th>Prix</th>",
            "<th>Quantite</th>",
            "<th>Total</th>",
            "</tr></thead>",
            "<tbody>";

        $totalGeneral = 0;

        foreach ($_SESSION["products"] as $index => $product) {
            echo "<tr>",
                "<td>" . $index . "</td>",
                "<td>" . $product["name"] . "</td>",
                "<td>" . number_format($product["price"], 2, ",", "") . " €</td>",
                //dans la ligne suivante id est lié a $_GET['id'] si $_GET['id'] serait $_GET['lol'], id ici serait lol
                "<td><a class='mminimization' href='traitement.php?action=lowerQtt&id=$index'> - </a>" . $product["qtt"] . "<a class='maximization'  href='traitement.php?action=addQtt&id=$index'> + </a>" . "<a href='traitement.php?action=" . $index . "'></a></td>",
                "<td>" . number_format($product["total"], 2, ",", "") . " € </a>" . "<a href='traitement.php?action=deletePanier&id=" . $index . "'> <img src='photo\le potit.png' alt=''/> </a></td>",
                "</tr>";
            $totalGeneral += $product["total"];
        }
        echo "<tr>",
            "<td colspan=4>Total général : </td>",
            "<td><strong>" . number_format($totalGeneral, 2, ",", "") . " €</strong></td>",
            "<tr>",
            "</tbody>",
            "</table>";
    }
    ?>
  <div id="delet">
    <a  href="traitement.php?action=deleteAll"> DELET ALL</a>
    </div>
</body>

</html>