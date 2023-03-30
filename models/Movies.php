<?php
require_once __DIR__ . "/MovieDuration.php";
require_once  __DIR__ . "/ShortDescription.php";

class movie{
    public string $nameMovies;
    public string $infoDirectorName;
    public string $type;
    public  $MoviesDurations;
    public  $ShortDescription;
    


    // // construct
    function __construct($_nameMovies,$_infoDirectorName,MoviesDurations $_MoviesDurations,ShortDescription $_ShortDescription){
        $this->nameMovies = $_nameMovies;
        $this->infoDirectorName = $_infoDirectorName;
        $this->MoviesDurations = $_MoviesDurations;
        $this->ShortDescription = $_ShortDescription;

    }
    

}