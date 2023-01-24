<?php
session_start();
?>
<!DOCTYPE html>
<head>

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
                "<td>" .number_format( $product["price"],4,",", "&nbsp;"). "&nbsp € </td>",
                "<td>"  .$product['qtt'] . "</td>",
                "<td>"  . number_format( $product["total"],4,",", "&nbsp;"). "&nbsp </td>",
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
</BOdy>