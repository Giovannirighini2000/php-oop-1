<?php

class movie{
    public string $nameMovies;
    public string $infoDirectorName;
    public string $type;


    // // construct
    function __construct($_nameMovies,$_infoDirectorName){
        $this->nameMovies = $_nameMovies;
        $this->infoDirectorName = $_infoDirectorName;

    }
    

}