<?php 
 
    //operatore ternario - if su una riga //cos'è un operatore ternario ?
    $counter = isset($_POST['counter']) ? $_POST['counter'] : 0;
  /*  if(isset($_POST['counter']))
        $counter=$_POST['counter']; */
    //array 
    $image =[
        "https://m.media-amazon.com/images/M/MV5BMjA4OTYwMTcwM15BMl5BanBnXkFtZTcwNDEyNTkzMQ@@._V1_SY1000_SX677_AL_.jpg",
        "https://m.media-amazon.com/images/M/MV5BMTQxNzI4ODQ3NF5BMl5BanBnXkFtZTgwNzY5NzMwMjE@._V1_SY1000_SX677_AL_.jpg",
        "https://m.media-amazon.com/images/M/MV5BNzE1OWRlNDgtMTllNi00NTZiLWIyNTktYTk0MDY1ZWUwYTc5XkEyXkFqcGdeQXVyMjUxODE0MDY@._V1_SY1000_SX677_AL_.jpg",
        "https://m.media-amazon.com/images/M/MV5BYzg2NjNhNTctMjUxMi00ZWU4LWI3ZjYtNTI0NTQxNThjZTk2XkEyXkFqcGdeQXVyNzg5OTk2OA@@._V1_SY1000_SX677_AL_.jpg"
    ];
    function incrementa(){
       global $counter, $image;
       if($counter > count($image)-1)
       $counter = 0;
        else
       $counter++;
    }
    function decrementa(){
      global  $counter, $image;
      if($counter == count($image)-1)
       $counter = 0;
        else
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
    
    <img src="<?=$image[$counter]?>" alt="" srcset="">
</div>