<?php

include 'MovieCtr.php';
 $film=file_get_contents('https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/film/best-free-yt-movies-rt.json');

 //echo $film;

 $min = $_GET['min'] ?? 0;
 $max  = $_GET['max'] ?? 100;
 $filmPHP = json_decode($film);
 $ctr = new MovieCtr();
 foreach($filmPHP as $spe){
    
    $ctr->addMoive($spe);
     //$movie = new Movie($spe->titolo, $spe->anno, $spe->rating, $spe->regista);
     // echo '<pre>';
     // echo $spe->titolo;
     // echo '</pre>';
     //$movies[] = $movie;
}
    //var_dump($filmPHP);

header('content-type:application/json');
if($min > 0 && $max < 100)
echo json_encode($ctr->getMoviesByRating($min,$max));
else
echo json_encode($ctr->getMovies());