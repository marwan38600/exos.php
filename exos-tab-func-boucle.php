<?php

/* EXO 2 Faire un script PHP qui demande 2 chiffres et en fait la somme*/
// $a = readline("a?");
// $c = readline("c?");
// $b = readline("b?");
// function operation($chiffre1, $opérateur, $chiffre2)
// {

//     if ($opérateur == "+") {
//         $sum = $chiffre1 + $chiffre2;
//         echo ($sum);
//     } elseif ($opérateur == "-") {
//         $sum = $chiffre1 - $chiffre2;
//         echo ($sum);
//     } elseif ($opérateur == "/") {
//         $sum = $chiffre1 / $chiffre2;
//         echo ($sum);
//     } elseif ($opérateur == "*") {
//         $sum = $chiffre1 * $chiffre2;
//         echo ($sum);
//     }
// }

// operation($a, $c, $b);



/* EXO 4 Faire un script qui demande 2 chiffres et une opération (vous pouvez demander à recevoir un “signe” : +, -, /, *) effectue l’opération et affiche le résultat */

// $arr = ["oui", "non", "peut-être", "je sais pas", "je pense ", "mais encore ? ", "pourquoi pas", "j'y pense ", "surement"];



// function checkOuiNon($a)
// {
//     return $a != "oui" && $a != "non";
// }

// $player1 = "";
// $player2 = "";
// do {
//     $i = rand(0, 8);
//     $player1 = readline("? ");
//     $player2 = $arr[$i];
//     echo $player2 . "\n";
// } while (checkOuiNon($player1) && checkOuiNon($player2));

/* EXO 5 Faire un programme qui demande des éléments et les ajoute dans un tableau
(scénario : liste de courses) ; on s'arrête quand l'utilisateur tape "fin"
à la fin : affichage du tableau */

// $liste = [];

// $add = "";

// while ($add != "fin") {
//     $add = readline("J'ajoute à ma liste: ");
//     if ($add != "fin") {
//         array_push($liste, $add);
//     }
// }

// var_dump($liste)

/* EXO 6 Faire un programme qui demande à entrer 5 chansons (titre + durée)
chaque chanson sera stockée sous la forme d'un tableau associatif array("title" => "??", "duration" => "??")
et les 5 chansons seront stockées sous la forme d'un tableau

[
    array( "title" => "???", "duration" => 2 ),
    array( "title" => "???", "duration" => 1 ),
    ...
] */

// $chansons = [];


// for ($i = 0; $i <= 5; $i++) {
//     $titre = readline("quelle est le titre de la musique ");
//     $duree = readline("quelle est la durée de la musique ");
//     array_push($chansons, array("title" => $titre, "duree" => $duree));
// } 

// var_dump($chansons);

/* EXO 7 Faire une fonction qui prend en paramètre 3 variables et qui retourne un tableau associatif
qui ressemble à ceci :

[
    "title" => $premierParam,
    "subtitle" => $secondParam,
    "author" => $thirdParam
]
*/
// function chansons($title, $subtitle, $author)
// {
//     $chansons = ["title" => $title, "subtitle" => $subtitle, "author" => $author];
//     return ($chansons);
// }

// $chansonsDeMarwan = chansons("marwan", "nabab", "bbq");
// var_dump($chansonsDeMarwan);

/* EXO 8  Déclarez un tableau associatif $user qui aura 3 clés : id, name, money

Déclarez une fonction (affichageUser) qui prend en paramètre un tableau associatif et qui affiche
la valeur de la case "money" avec un symbole € concaténé */

// $user = ["id" => 1, "name" => "marwan", "money" => 10];

// function affichageUser($toto)
// {
//     echo $toto["name"] . " " . "à" . " " . $toto["money"];
// }

// affichageUser($user);

/* EXO 9 Déclarez un tableau qui stocke des températures pour chaque jour de la semaine
Chaque chiffre doit être un nombre aléatoire entre 15 et 30.*/

// $semaine = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

// $tableau = [];

// for ($i = 0; $i <= 6; $i++) {
//     $tableau[$semaine[$i]] = rand(15, 30);
// }

// var_dump($tableau);

// echo "Ce " . $semaine[6] . " il fera " . ($tableau["Dimanche"]);


/* EXO 10 Déclarez un tableau associatif qui stocke des températures pour chaque jour de la semaine.
Les clés doivent être les noms des jours en anglais.

Affichez ensuite la température pour chaque jour de la semaine à l'aide d'un foreach */

// $tempDays = ["Monday" => rand(15, 30), "Tuesday" => rand(15, 30), "Wednesday" => rand(15, 30), "Thursday" => rand(15, 30), "Friday" => rand(15, 30), "Saturday" => rand(15, 30), "Sunday" => rand(15, 30)];


// foreach ($tempDays as $key => $value) {
//     echo "ce " . $key . " il fera " . $value . "\n";
// }

/* EXO 11 Déclarez un tableau et mettez à l'intérieur de ce tableau 7 tableaux associatifs.
Ils devront avoir une clé "day" qui contient le jour de la semaine, une clé "temp" qui sera une valeur aléatoire entre 15 et 30
et une clé "clouds" qui sera un booléen.
Affichez les jours de la semaine où il y aura des nuages (là où le booléen clouds vaut vrai).*/

// $tab = [
//     array("day" => "lundi", "temp" => rand(15, 30), "cloud" => true),
//     array("day" => "mardi", "temp" => rand(15, 30), "cloud" => false),
//     array("day" => "mercredi", "temp" => rand(15, 30), "cloud" => true),
//     array("day" => "jeudi", "temp" => rand(15, 30), "cloud" => true),
//     array("day" => "vendredi", "temp" => 40, "cloud" => false),
//     array("day" => "samedi", "temp" => rand(15, 30), "cloud" => true),
//     array("day" => "dimanche", "temp" => rand(15, 30), "cloud" => true),
// ];

// foreach ($tab as $toto) {
//     if ($toto["cloud"] == true) {
//         var_dump($toto);
//     }
// }

/* EXO 12. En utilisant le tableau de l'exercice précédent, créez une boucle while (ou do while) qui demande à l'utilisateur
d'entrer le nom d'un jour et d'afficher la température de ce jour, tant que l'utilisateur ne tape pas "exit" */

// do {
//     $u = readline("Entrer le nom d'un jour pour afficher sa temp: \n");
//     if ($u == "lundi") {
//         echo "il fera " . $tab[0]["temp"] . " degres \n";
//     } else if ($u == "mardi") {
//         echo "il fera " . $tab[1]["temp"] . " degres \n";
//     } else if ($u == "mercredi") {
//         echo "il fera " . $tab[2]["temp"] . " degres \n";
//     } else if ($u == "jeudi") {
//         echo "il fera " . $tab[3]["temp"] . " degres \n";
//     } else if ($u == "vendredi") {
//         echo "il fera " . $tab[4]["temp"] . " degres \n";
//     } else if ($u == "samedi") {
//         echo "il fera " . $tab[5]["temp"] . " degres \n";
//     } else if ($u == "dimanche") {
//         echo "il fera " . $tab[6]["temp"] . " degres \n";
//     }

// } while ($u != ("exit"));

/* EXO 13 Créez un programme qui demande le nom de l'utilisateur. Transformez cette chaine de caractères en tableau et affichez le nom de l'utilisateur en sens inverse. */

// function askName()
// {
//     $u = readline("Quelle est votre nom: ");
//     $name = str_split($u);
//     $reversed = array_reverse($name);
//     print_r($reversed);
// }

// askName()

/* EXO 14  En utilisant la variable de l'exerice précédent, affichez le nom de l'utilisateur sans les a et sans les e (en utilisant une boucle et un if).*/





















?>