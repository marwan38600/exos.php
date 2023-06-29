<?php

require_once("./model.php");
$connection = new Model("localhost", "streamberry", "root", "");

$uri = strtok($_SERVER['REQUEST_URI'], "?");

if ($uri == "/") {
    //1 db via model
    $movies = $connection->getAllMovies();
    //2 afficher vue
    include("views/form-year.php");
    include("views/form-genre.php");
    include("views/list.php");
} elseif ($uri == "/genre") {
    $movies = $connection->filterType($_GET['type']);
    include("views/list.php");
    include("views/form-genre.php");
} elseif ($uri == "/year") {
    $movies = $connection->filterYear($_GET['year']);
    include("views/list.php");
    include("views/form-year.php");
} else {
    echo "<p>choissisez une adresse valide. </p>";
}