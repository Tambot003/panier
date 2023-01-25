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

    <title>Document</title>
</head>



<body>
<?php
if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
    echo "<p> Aucun produit en session ... </p>";
    
}
else{
   
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

    $totalgeneral = 0;
   
        foreach($_SESSION['products'] as $index => $product){   
        echo "<tr>",

                "<td>" . $index . "</td>",
                "<td>" . $product["name"] . "</td>",
                "<td>" .number_format( $product["price"],2,",", "&nbsp;"). "&nbsp € </td>", "<td>"  .$product['qtt'] . "</td>",
                // "<td><a class='test' style='color: red' href='traitement.php?action=lowerQtt&id=$index'> - </a>" . $product["qtt"] . "<a class='test2' href='traitement.php?action=addQtt&id=$index'> + </a>" . "<a href='traitement.php?action=" . $index . "'></a></td>",
                "<td><a class=\"test\" href='traitement.php?action=lowerQtt&id=$index'> - </a>" . $product["qtt"] . "<a class='test2' href='traitement.php?action=addQtt&id=$index'> + </a>" . "<a href=traitement.php?action=" . $index . "></a></td>",
                "<td>"  . number_format( $product["total"],2,",", "&nbsp;"). "&nbsp </td>",
                "<a href='traitement.php?action=deletePanier&id=" . $index . "'> <img src='img\poubelle.png' alt=''/> </a></td>",
            "</tr>";
         $totalgeneral += $product['total'];

        }
    echo "<tr>",
        "<td colspan=4> Total General : </td>",
        "<td> <strong>" . number_format($totalgeneral, 2, ",", "&nbsp;")."£</strong> </td>",
        "<tr>";
echo "</tbody>",
     "</table>";
}
?>
<a href="traitement.php?action=deleteAll"> delete thiiiiiii/a>
</body>
</html>