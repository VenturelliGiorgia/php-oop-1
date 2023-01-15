<?php
require_once "./classes/Movie.php";

$movies = [];

$movie1 = new Movie("Avatar: The Way of Water", "Avatar: La via dell'acqua", "azione", 2022);
$movie2 = new Movie("Home Alone", "Mamma, ho perso l'aereo", "commedia", 1990);


array_push($movies, $movie1, $movie2);
echo "<pre>", var_dump($movie1), "</pre>";
echo "name: " . $movie1->getName();
echo "<pre>", var_dump($movie2), "</pre>";
echo "name: ", $movie2->getName();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>