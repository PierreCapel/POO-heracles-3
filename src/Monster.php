<?php

namespace App;

class Monster extends Fighter
 {
    public function getDamage(): int
    {
        $damage = $this->getStrength();
        return $damage;
    }

    public function getDefense(): int
    {
        $defense = $this->getDexterity();
        return $defense;
    }

     
 }