<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $st = [];
        function conta($st){
            $contatore=0;
            
            for($i =0 ; $i < count($st) ; $i++){
                if ($st[$i] == 'a'){
                    $contatore++;
                }
            }
            return $contatore;
        }


    ?>
    <?= conta("Hello");?>
</body>
</html>