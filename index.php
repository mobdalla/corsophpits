<?php include 'configurazione.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITOLO?></title>
    <style>
      div#console > div{
        width: 100px;
        height: 100px;
        margin: 10px;
        border: 2px solid black;
        float: left;
      } 
      #pulsante{
        clear: left;
       
      }
    </style>
</head>
<body>
   <h1><?=TITOLO?></h1>
      <div id="console">
        <div><img src="<?=$img_dado1?>"></div>
        <div><img src="<?=$img_dado2?>"></div>
      </div>
      <div id="pulsante">
        <a href="?s" id="bottone"><Button>Gioca</Button></a>
      </div>
      <h2><?=$ris?></h2>
      <h1><?=$_SESSION['partite']?></h1>
      <h2><?=$_SESSION['vittorie']?></h2>
  
  
</body>
</html>