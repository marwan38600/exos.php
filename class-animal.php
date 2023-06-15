<?php

class Animal
{

    public $paws;
    public $sound;
    public $name;
    private $owner;
    private int $age;
    public $favMeal;
    public $race;
    private $genre;

    public function __construct($paws, $sound, $name, $favMeal, $age, $owner, $race, $genre)
    {
        $this->paws = $paws;
        $this->sound = $sound;
        $this->name = $name;
        $this->favMeal = $favMeal;
        $this->setAge($age);
        $this->setOwner($owner);
        $this->race = $race;
        $this->genre = $genre;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age > 0) {
            $this->age = $age;
        } else {
            $this->age = -1;
        }
    }
    public function getGenre()
    {
        return $this->genre;
    }

    // public function setGenre($genre)
    // {
    //     if ($genre == true) {
    //         return "un";
    //     } else {
    //         return "une";
    //     }
    // }

    public function noise()
    {
        echo "Je fais du bruit et je suis chiant ";
    }

    public function jump()
    {
        if ($this->paws >= 2 && $this->age > 2) {
            return "sauter";
        } else {
            return "pas sauter";
        }
    }
    public function presentation()
    {

        $article = ($this->genre == true) ? "un " : "une ";

        echo "Je suis " . $this->name . " j'ai " . $this->getAge() . " ans" . " et vu que je suis " . $article . $this->race . " je sais " . $this->sound . " j'ai aussi " . $this->paws . " pattes" . " et mon proprio est " . $this->getOwner() . " et vu que je que suis un " . $this->race . " je peux " . $this->jump() . ". \n\n";
    }


}

?>