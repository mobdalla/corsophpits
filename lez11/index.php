<?php

    session_start();

    $prodotti = [
        ['nome'=>'Mele', 'prezzo'=>1.9],
        ['nome'=>'Pere', 'prezzo'=>1.5],
        ['nome'=>'banane', 'prezzo'=>1.8],
        ['nome'=>'banane', 'prezzo'=>1.8]

    ];

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ortofrutta</title>
    </head>
    <body>
        <h1>Prodotti disponibili</h1>

        <ul>
            <?php foreach ($prodotti as $key => $value) { ?>

                <li>
                    <?=$value['nome'] ?> <?=$value['prezzo']?>
                    <form action="cart.php" method="post">
                        <input type="hidden" name="product_id" value="<?= $value['nome'] ?>">
                        <input type="submit" value="Aggiungi">
                    </form>
                </li>

           <?php } ?>
        </ul>
    </body>
    </html>