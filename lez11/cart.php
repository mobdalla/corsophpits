<?php
session_start();

 //$carrello = isset($_SESSION['carrello']) ? $_SESSION['carrello'] : [];
 $carrello = $_SESSION['carrello'] ?? [] ;

 if (isset($_POST['product_id'])){
    var_dump($_POST['product_id']);

    $carrello[] = $_POST['product_id'];
    $_SESSION['carrello'] = $carrello;
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ortofrutta</title>
</head>
<body>
    <h1>Carrello</h1>
    <ul>

        <?php  foreach ($carrello as $prodotto) : ?>

            <li>
                <?=$prodotto ?>
            </li>
        <?php  endforeach;?>
    </ul>
</body>
</html>