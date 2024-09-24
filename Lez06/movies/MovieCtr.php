<?php
include 'Movie.php';



class MovieCtr{
        public $movies =[];
        public function addMoive($spe){
            $this->movies[] = new Movie($spe->titolo, $spe->anno, $spe->rating, $spe->regista);
     
        }
        public function getMovies(){
            return $this->movies;
        }
        public function getMoviesByRating($min, $max){
            $moviesByRating =[];
            foreach($this->movies as $movie){
                if($movie->anno >= $min && $movie->anno <= $max){
                    $moviesByRating[] = $movie;
                }

            }
            return $moviesByRating;
        }
}