<?php

class Pokemon
{
    public $pv;
    public $atk;
    public $ultimateAttack;
    public $name;

    public function __construct($pv, $atk, $name, $ultimateAttack)
    {
        $this->pv = $pv;
        $this->atk = $atk;
        $this->name = $name;
        $this->ultimateAttack = $ultimateAttack;
    }

    public function attack($opponent)
    {
        if ($this->pv > 0 && $opponent->pv > 0) {
            // if ($opponent->pv <= 0) {
            //     echo "Mon adversaire est déjà mort ☠️ \n";
            // } else {
            $opponent->pv = $opponent->pv - $this->atk;
            echo $this->name . " attaque " . $opponent->name . " et lui inflige " . $this->atk . " de degat (reste $opponent->pv) \n";
            // }
        } else {
            echo " $this->name peux pas attaquer car il est mort \n";
        }
    }
    public function littlePotion()
    {
        $restoredPV = 20;
        if ($this->pv >= 100 || $this->pv >= 0) {
            echo $this->name . " ne peux pas se soigner. \n";
        } else {
            $this->pv += $restoredPV;
            echo $this->name . " se soigne de " . $restoredPV . " pv \n";
        }

    }

    public function ultimateAttack($opponent)
    {
        if ($this->pv > 0) {
            if ($opponent->pv <= 0) {
                echo "Mon adversaire est déjà mort ☠️ \n";
            } else {
                $opponent->pv = $opponent->pv - $this->ultimateAttack;
                echo $this->name . " envoi son attaque ultime à " . $opponent->name . " et lui inflige " . $this->ultimateAttack . " de degat \n";
            }
        } else {
            echo "im ded\n";
        }

    }

    public function healingChance()
    {
        $chance = rand(0, 3);
        if ($this->pv < 50 && $chance == 2) {
            $this->littlePotion() . " \n";
        }
    }
    public function checkDeath()
    {
        if ($this->pv == 0) {
            echo "$this->name est mort ☠️";
        }
    }




}

// class MonsterAqua extends Monster {
//     public 
// }