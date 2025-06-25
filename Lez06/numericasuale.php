<?php 

function diffirenzaduedate($date, $date1){

  $d = new DateTime($date);
  $d1 = new DateTime($date1);
  $int = $d->diff($d1);
  return $int->days;

}
echo "Diffirenza in giorni".diffirenzaduedate('2024-01-10','2024-01-20');
