<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     function fattoriale($num){
        $g=1;
        for ($i =1; $i <= $num; $i++){
            $g *= $i;
        }
        return $g;
    }
    ?>
    <?= fattoriale(5); ?>
</body>
</html>