<?php

require_once("./class-pookemon.php");

$host = "localhost";
$dbname = "recap-php";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$sql = "SELECT * from pokemon WHERE name = 'Mewtwo'";

$statement = $db->prepare($sql);

$statement->execute();

$pokemon = $statement->fetch(PDO::FETCH_ASSOC);

$mewtwo = new Pokemon($pokemon["hp"], $pokemon["atk"], $pokemon["name"], $pokemon["ultimate_attack"]);


function insertNewPokemon($name, $hp, $atk, $ultimateAttack)
{
    $host = "localhost";
    $dbname = "recap-php";
    $username = "root";
    $password = "";
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO pokemon (name, hp, atk, ultimate_attack) VALUES (:name, :hp, :atk, :ultimateAttack)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':hp', $hp);
    $statement->bindParam(':atk', $atk);
    $statement->bindParam(':ultimateAttack', $ultimateAttack);
    $statement->execute();
}

function deletePokemon($name)
{
    $host = "localhost";
    $dbname = "recap-php";
    $username = "root";
    $password = "";
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = "DELETE FROM pokemon WHERE name = :name";
    $statement = $db->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->execute();
}

function updatePokemon($oldName, $newName, $hp, $atk, $ultimateAttack)
{
    $host = "localhost";
    $dbname = "recap-php";
    $username = "root";
    $password = "";
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = "UPDATE pokemon SET name = :newName, hp = :newHP, atk = :newAtk, ultimate_attack = :newUltimateAttack WHERE name = :oldName";
    $statement = $db->prepare($sql);
    $statement->bindParam(':newName', $newName);
    $statement->bindParam(':newHP', $hp);
    $statement->bindParam(':newAtk', $atk);
    $statement->bindParam(':newUltimateAttack', $ultimateAttack);
    $statement->bindParam(':oldName', $oldName);
    $statement->execute();
}


updatePokemon("Ratatac", "Ratata", 100, 30, 50);