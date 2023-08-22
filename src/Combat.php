<?php declare(strict_types = 1);

use Hero;
use Monstre;

class Combat
{
    private $hero = null;
    private $monstre = null;

    public function __construct(Hero $hero, Monstre $monstre)
    {
        $this->hero = $hero;
        $this->monstre = $monstre;
    }

    public function getHero() : Hero
    {
        return $this->hero;
    }

    public function setHero(Hero $hero) : Static
    {
        $this->hero = $hero;
        return $this;
    }

    public function getMonstre() : Monstre
    {
        return $this->monstre;
    }

    public function setMonstre(Monstre $monstre) : Static
    {
        $this->monstre = $monstre;
        return $this;
    }

    public function action()
    {
        // le monstre attaque
        $cri = $this->monstre->crier();
        $attaque = $this->monstre->getPuissance() * random_int(5, 15) /10;
        $vie = $this->hero->getVie() - $attaque;
        $this->hero->setVie($vie);

        //Si le héro est mort, il ne peut pas contre-attaquer.
        if($this->hero->getVie() == 0){
            return;
        }

        // le hero contre attaque
        $cri = $this->hero->crier();
        $attaque = $this->hero->getPuissance() * random_int(5, 15) /10;
        $vie = $this->monstre->getVie() - $attaque;
        $this->monstre->setVie($vie);

    }

    public function isFini()
    {
        if ($this->hero->getVie() == 0 || $this->monstre->getVie() == 0){
            return true;
        }

        return false;
    }
}