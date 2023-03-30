<?php
require_once __DIR__ . "/MovieDuration.php";
require_once  __DIR__ . "/ShortDescription.php";
require_once  __DIR__ . "/Author.php";

class movie{
    public string $nameMovies;
    public string $infoDirectorName;
    public  $type = [];
    public  $MoviesDurations;
    public  $ShortDescription;
    public $MainAuthor;
    


    // // construct
    function __construct($_nameMovies,$_infoDirectorName,MoviesDurations $_MoviesDurations,ShortDescription $_ShortDescription,MainAuthor $_MainAuthor){
        $this->nameMovies = $_nameMovies;
        $this->infoDirectorName = $_infoDirectorName;
        $this->MoviesDurations = $_MoviesDurations;
        $this->ShortDescription = $_ShortDescription;
        $this->MainAuthor = $_MainAuthor;

    }
    
    
}