<?php

require_once("./model.php");

$connection = new Model("localhost", "streamberry", "root", "");

do {
    echo "Taper 1 pour voir la liste des films. \n";
    echo "Taper 2 pour choisir le genre de films que vous recherchez ?. \n";
    echo "Taper 3 pour choisir l'année à laquelle le film est sortie ?. \n";
    echo "Ou bien taper exit. \n";
    $u = readline(">");
    if ($u == "1") {
        $connection->getAllMovies();
    } else if ($u == "2") {
        echo ("Quel genre ? \n");
        $u = readline(">");
        $connection->filterType($u);
    } else if ($u == "3") {
        echo ("Quelle année ? \n");
        $u = readline(">");
        $connection->filterYear($u);
    }
} while ($u != "exit");