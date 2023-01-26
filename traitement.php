<?php
session_start();

switch ($_GET["action"]) {

    case "addproducts":

        if (isset($_POST["submit"])) {

            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);

            if (isset($name) && isset($price) && isset($qtt)) {
                $product = [
                    "name" => $name,
                    "price" => $price,
                    "qtt" => $qtt,
                    "total" => $price * $qtt,
                ];
                $_SESSION["products"][] = $product;
                $_SESSION['message'] = "Product has been Aadded";
            } else {
                echo "Something very wrong has happened";
            }



            header("Location: index.php");
        }
        break;

    // Decrease Quantity product
    case "lowerQtt":
        if ($_SESSION['products'][$_GET['id']]['qtt'] > 1) {
            $_SESSION['products'][$_GET['id']]['qtt']--;
            $_SESSION['products'][$_GET['id']]['total'] -= $_SESSION['products'][$_GET['id']]['price'];
        } else {
            unset($_SESSION['products'][$_GET['id']]);
        }
        header("Location: recap.php"); //Redirige vers recap.php
        die;
        break;

    // Increase Quantity product
    case "addQtt":
        $_SESSION['products'][$_GET['id']]['qtt']++;
        $_SESSION['products'][$_GET['id']]['total'] += $_SESSION['products'][$_GET['id']]['price'];
        header("Location: recap.php");
        die;
        break;


    // Delet panier
    case "deletePanier":
        unset($_SESSION['products'][$_GET['id']]); //unset($_SESSION['products'][$_GET['index']]['total']);
        header("Location: recap.php");
        die;
        break;

    // Delete all Qtt product
    case "deleteAll":
        unset($_SESSION["products"]); // $_get va prendre comme paramètre ici id qu'on va mettre ligne 55 dans le recap
        $_SESSION['message'] = "<p>Le produit " . $product['name'] . " a bien été supprimé</p>";
        header("Location: recap.php");
        die;
        break;


}