<?php
 require_once "./models/Author.php";
 require_once "./models/Movies.php";
 require_once "./models/MovieDuration.php";
 require_once "./models/ShortDescription.php";
//  istanza1
 $movie1 = new movie("Lo chiamavano Jeeg Robot","Gabriele Mainetti",new MoviesDurations("1","57"),new ShortDescription("Descrizione","In una Roma attraversata da una serie di attentati dinamitardi, il ladruncolo Enzo Ceccotti, inseguito dalla Polizia per il furto di un orologio, si getta nelle acque del Tevere entrando così in contatto con alcune sostanze radioattive, contenute in alcuni bidoni nascosti sotto la superficie. Dopo una notte in preda a febbre, nausea e brividi di freddo, si risveglia al mattino apparentemente guarito."));
//  $movie1 ->nameMovies = "Lo chiamavano Jeeg Robot";
//  $movie1 ->infoDirectorName ="Gabriele Mainetti";
 $movie1 ->type ="thriller, fantastico, noir";

 var_dump($movie1);

//  $duration1 = new MoviesDurations("1","57");

//  var_dump($duration1);

// istanza2
 $movie2 = new movie("L'incredibile storia dell'Isola delle Rose","Sydney Sibilia", new MoviesDurations("2","27"),new ShortDescription("Descrizione","In una Roma attraversata da una serie di attentati dinamitardi, il ladruncolo Enzo Ceccotti, inseguito dalla Polizia per il furto di un orologio, si getta nelle acque del Tevere entrando così in contatto con alcune sostanze radioattive, contenute in alcuni bidoni nascosti sotto la superficie. Dopo una notte in preda a febbre, nausea e brividi di freddo, si risveglia al mattino apparentemente guarito."));
//  $movie2 ->nameMovies = "L'incredibile storia dell'Isola delle Rose";
//  $movie2 ->infoDirectorName ="Sydney Sibilia";
 $movie2 ->type ="commedia, drammatico, storico";
 var_dump($movie2);

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