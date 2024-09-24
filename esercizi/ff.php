<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       
        function jjj($t){
            $st[] = $t ;
            for ($i=0; $i < sizeof($st) ; $i++) { 
        # code...
                    if($st[$i] == 'e'){
                        return 'yes';
                    }
             }
            }
    ?>
    <?= jjj("Hello") ?>
</body>
</html>