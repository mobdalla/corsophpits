<?php 
 
    //operatore ternario - if su una riga //cos'è un operatore ternario ?
    $counter = isset($_POST['counter']) ? $_POST['counter'] : 0;
  /*  if(isset($_POST['counter']))
        $counter=$_POST['counter']; */
    //array 
    $image =[];
    function incrementa(){
       global $counter;
       $counter++;
    }
    function decrementa(){
      global  $counter;
      $counter--;
    }
    if(isset($_POST['azione'])){
        if ($_POST['azione'] == 'incrementa') incrementa();
        if ($_POST['azione'] == 'decrementa') decrementa(); 
    }
    


?>
<form action="?page=galleria" method="post">
    <input type="hidden" name="azione" value="incrementa">
    <input type="hidden" name="counter" value="<?=$counter?>">
    <button class="btn btn-success">+</button>
</form>
<form action="?page=galleria" method="post">
    <input type="hidden" name="azione" value="decrementa">
    <input type="hidden" name="counter" value="<?=$counter?>">
    <button class="btn btn-danger">-</button>
</form>

<div id="risult">
    <?=$counter?>
</div>