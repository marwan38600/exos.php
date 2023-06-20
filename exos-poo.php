<?php


////////////Partie 1 /////////////

require_once("./class-car.php");
require_once("./class-animal.php");


// $car1 = new Car("red", "ford");
// $car1->setKm(20000);
// $car1->getKm();
// $car1->setConstructYear(2015);
// $car1->getConstructYear();


// var_dump($car1);


// $car2 = new Car("blue", "volvo");
// $car2->setKm(10000);
// $car2->getKm();
// $car2->setConstructYear(1950);
// $car2->getConstructYear();


// var_dump($car2);

$chat = new Animal(4, "Miauler", "Robert", "croquette", 12, "Miloud", "Chat", true);

$cheval = new Animal(4, "Hennir", "Yakari", "fumier", 300, "Moustapha", "Cheval", true);

$autruche = new Animal(2, "Houmer", "Autruchinho", "mes enfants", 25, "Pascal Praud", "Autruche", false);

$renard = new Animal(4, "Glapir", "Chipper", "les déchets", 9000, "Merci Monsieur Macron", "Renard", true);

$mouton = new Animal(4, "Bêler", "Zinedine Mbappé", "de l'herbe acheté à mistral", 10, "une 406 grise bon marché", "Mouton", true);



$chat->presentation();
$cheval->presentation();
$autruche->presentation();
$renard->presentation();
$mouton->presentation();




////////////Partie 2 /////////////


$zoo = [];

array_push($zoo, $chat, $cheval, $autruche, $renard, $mouton);

foreach ($zoo as $animalNames) {
    echo $animalNames->name . " \n";
}

$ages = [];

$etat = [
    "jeunes" => [],
    "vieux" => []
];

foreach ($zoo as $animalAges) {
    array_push($ages, $animalAges->getAge());
    if ($animalAges->getAge() < 20) {
        array_push($etat["jeunes"], $animalAges->name);
    } else {
        array_push($etat["vieux"], $animalAges->name);
    }
}

print_r($ages);

var_dump($etat);






?>