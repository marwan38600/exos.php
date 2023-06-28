<?php

require_once("./class-pookemon.php");
require_once("./model.php");

// $host = "localhost";
// $dbname = "recap-php";
// $username = "root";
// $password = "";

// $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// $sql = "SELECT * from pokemon";

// $statement = $db->prepare($sql);

// $statement->execute();

// $pokemon = $statement->fetchAll(PDO::FETCH_ASSOC);

// $mewtwo = new Pokemon($pokemon["hp"], $pokemon["atk"], $pokemon["name"], $pokemon["ultimate_attack"]);

// print_r($pokemon);




function insertNewPokemon($name, $hp, $atk, $ultimateAttack, $trainerId)
{
    $connection = new ConnexionDataBase("localhost", "recap-php", "root", "");
    $dbase = $connection->dbase;
    $sql = "INSERT INTO pokemon (hp, name, atk, ultimate_attack, trainer_id) VALUES (:hp, :name, :atk, :ultimateAttack, :trainer_id)";
    $statement = $dbase->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':hp', $hp);
    $statement->bindParam(':atk', $atk);
    $statement->bindParam(':ultimateAttack', $ultimateAttack);
    $statement->bindParam(':trainer_id', $trainerId);
    $statement->execute();
}

function deletePokemon($name)
{
    $connection = new ConnexionDataBase("localhost", "recap-php", "root", "");
    $dbase = $connection->dbase;
    $sql = "DELETE FROM pokemon WHERE name = :name";
    $statement = $dbase->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->execute();
}


function updatePokemon($oldName, $newName, $hp, $atk, $ultimateAttack, $trainerId)
{
    $connection = new ConnexionDataBase("localhost", "recap-php", "root", "");
    $dbase = $connection->dbase;
    $sql = "UPDATE pokemon SET name = :newName, hp = :newHP, atk = :newAtk, ultimate_attack = :newUltimateAttack, trainer_id = :newTrainerId WHERE name = :oldName";
    $statement = $dbase->prepare($sql);
    $statement->bindParam(':newName', $newName);
    $statement->bindParam(':newHP', $hp);
    $statement->bindParam(':newAtk', $atk);
    $statement->bindParam(':newUltimateAttack', $ultimateAttack);
    $statement->bindParam(':newTrainerId', $trainerId);
    $statement->bindParam(':oldName', $oldName);
    $statement->execute();
}

function insertTrainer($name)
{
    $connection = new ConnexionDataBase("localhost", "recap-php", "root", "");
    $dbase = $connection->dbase;
    $sql = "INSERT INTO trainers (name) VALUES (:name)";
    $statement = $dbase->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->execute();
}


function deleteTrainer($name)
{
    $connection = new ConnexionDataBase("localhost", "recap-php", "root", "");
    $dbase = $connection->dbase;
    $sql = "DELETE FROM trainers WHERE name = :name";
    $statement = $dbase->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->execute();
}



function updateTrainer($oldName, $newName)
{

    $sql = "UPDATE trainers SET name = :newName WHERE name = :oldName";
    $statement = $dbase->prepare($sql);
    $statement->bindParam(':newName', $newName);
    $statement->bindParam(':oldName', $oldName);
    $statement->execute();
}

