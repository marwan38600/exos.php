<?php

require_once("./model.php");

// $sql = "SELECT * from movies";

// $statement = $db->prepare($sql);

// $statement->execute();

// $movies = $statement->fetchAll(PDO::FETCH_ASSOC);

// print_r($movies);

    // $connection = new ConnexionDataBase("localhost", "streamberry", "root", "");
    // $dbase = $connection->dbase;
    // $sql = "SELECT * from movies";
    // $statement = $dbase->prepare($sql);
    // $statement->execute(); 
    // $movies = $statement->fetchAll(PDO::FETCH_ASSOC);
    // print_r($allMovies);


    // $connection = new ConnexionDataBase("localhost", "streamberry", "root", "");
    // $dbase = $connection->dbase;
    // $sql = "SELECT * FROM movies WHERE `type` = 'horreur'";
    // $statement = $dbase->prepare($sql);
    // $statement->execute(); 
    // $horrorMovies = $statement->fetchAll(PDO::FETCH_ASSOC);
    // print_r($horrorMovies);


    // $connection = new ConnexionDataBase("localhost", "streamberry", "root", "");
    // $dbase = $connection->dbase;
    // $sql = "SELECT * FROM movies WHERE `director_id` = '2'";
    // $statement = $dbase->prepare($sql);
    // $statement->execute(); 
    // $horrorMovies = $statement->fetchAll(PDO::FETCH_ASSOC);
    // print_r($horrorMovies);

    $res = new Model("localhost", "streamberry", "root", "");

    $res->getAllMovies();





?>