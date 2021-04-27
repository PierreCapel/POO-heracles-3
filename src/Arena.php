<?php
namespace App;

class Arena
{
    private Hero $hero;
    private array $monsters = [];
    private int $size = 10;
    private Fighter $FighterA;
    private Fighter $FighterB;
    private Fighter $attackingFighter;
    private Fighter $attackedFighter;
    

    public function __construct(Hero $hero, array $monsters)
    {
        $this->hero = $hero;
        $this->monsters = $monsters;
    }

    public function getHero() : Hero
    {
        return $this->hero;
    }
    public function getMonsters()
    {
        return $this->monsters;
    }
    
    public function getSize() : int
    {
        return $this->size;
    }
    public function getDistance(Fighter $FighterA, Fighter $FighterB) : float
    {
        return sqrt(($FighterB->getX() - $FighterB->getX())**2 + ($FighterB->getY() - $FighterA->getY())**2);
    }
    public function touchable(Fighter $attackingFighter, Fighter $attackedFighter) : bool
    {
        return $this->getDistance($attackedFighter, $attackingFighter) <= 1 ? true : false;
    }
}