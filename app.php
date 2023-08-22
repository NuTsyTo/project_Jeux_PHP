<?php

//require __DIR__.'/src/Personnage.php';
use Personnage;
// La classe monstre dépends de la classe Personnage
//require __DIR__.'/src/Monstre.php'; 
use Monstre;
// Idem pour la classe Hero
//require __DIR__.'/src/Hero.php';
use Hero;
// La classe combat contient les classes Monstre et Hero
//require __DIR__.'/src/Combat.php'; 
use Combat;

$m = new Monstre();
$m -> crier();
echo $m-> getPuissance()."\n";

$m2 = new Monstre();
$m2 
    -> setCri('CRIIII !!!')
    -> crier()
    -> setPuissance(20);

echo $m2 -> getPuissance()."\n";

$hero = new Hero();

$combat1 = new Combat($hero, $m);
// $combat1 -> setMonstre($m);
// $combat1 -> setHero($h);

$combat2 = new Combat($hero, $m2);
// $combat2 -> setMonstre($m2);
// $combat2 -> setHero($h);
echo "\n";

while ($combat1 ->isFini()== false || $combat2->isFini() == false){
    // Le combat continue
    
    // echo $this->$cri->crier()."\n";
    $combat1->action();
    $combat2->action();
    
    echo "m: ".$m->getVie()."\n";
    echo "m2: ".$m2->getVie()."\n";
    echo "hero: ".$hero->getVie()."\n";
    echo "\n";
}

if ($hero->getVie() == 0 && $m->getVie() == 0 && $m2->getVie() == 0){
    echo "Match nul\n";
} elseif ($hero->getVie() > 0){
    echo "Vous avez gagné\n";
} else{ // $h->getVie() == 0
    echo "Vous avez perdu\n";
}