<?php
require_once __DIR__ . "/MovieDuration.php";

class movie{
    public string $nameMovies;
    public string $infoDirectorName;
    public string $type;
    public  $MoviesDurations;
    


    // // construct
    function __construct($_nameMovies,$_infoDirectorName,MoviesDurations $_MoviesDurations){
        $this->nameMovies = $_nameMovies;
        $this->infoDirectorName = $_infoDirectorName;
        $this->MoviesDurations = $_MoviesDurations;

    }
    

}