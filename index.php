<?php
 require_once "./models/Author.php";
 require_once "./models/Movies.php";
 require_once "./models/MovieDuration.php";
 require_once "./models/ShortDescription.php";
//  istanza1
 $movie1 = new movie("Lo chiamavano Jeeg Robot","Gabriele Mainetti",new MoviesDurations("1","57"),new ShortDescription("Descrizione","Un ladruncolo di periferia, dopo essere entrato in contatto con una sostanza radioattiva, acquisisce dei superpoteri e decide di utilizzarli per combattere il crimine."), new MainAuthor("Claudio","Santamaria","49"));
//  $movie1 ->nameMovies = "Lo chiamavano Jeeg Robot";
//  $movie1 ->infoDirectorName ="Gabriele Mainetti";
 $movie1 ->type ="thriller, fantastico, noir";

 var_dump($movie1);
 var_dump($movie1->MoviesDurations->hours . "h " . $movie1->MoviesDurations->minutes . "m");
//  $duration1 = new MoviesDurations("1","57");

//  var_dump($duration1);

// istanza2
 $movie2 = new movie("L'incredibile storia dell'Isola delle Rose","Sydney Sibilia", new MoviesDurations("2","27"),new ShortDescription("Descrizione","Un ingegnere idealista costruisce la propria isola al largo delle coste italiane e la proclama nazione, attirando l'attenzione del mondo. Quando il governo italiano dichiara nemico il nuovo Stato, per l'uomo cominciano i guai."),new MainAuthor("Elio","Germano","43"));
//  $movie2 ->nameMovies = "L'incredibile storia dell'Isola delle Rose";
//  $movie2 ->infoDirectorName ="Sydney Sibilia";
 $movie2 ->type ="commedia, drammatico, storico";
 var_dump($movie2);
 var_dump($movie2->MoviesDurations->hours . "h " . $movie2->MoviesDurations->minutes . "m");
//  $duration2 = new MoviesDurations("2","27");

//  var_dump($duration2);


 
 



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    
</body>
</html>