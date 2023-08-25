<?php declare(strict_types = 1);

// La classe combat contient les classes Monstre et Hero
use App\Combat\Combat;
use App\Decor\Arbre;
// La classe Hero dépend de la classe Personnage
use App\Personnage\Hero;
// La classe monstre dépends de la classe Personnage
use App\Personnage\Monstre;
use App\Personnage\Personnage;
// La classe Vampire dépend de la classe Personnage
use App\Personnage\Vampire;

require __DIR__.'/../vendor/autoload.php';

$a = new Arbre();
$a  
    ->setCri('JE S\'APPELLE GROOT !!!')
    ->crier();

$m = new Monstre();
$m -> crier();
echo $m-> getPuissance()."\n";

$v = new Vampire();
$v 
    -> crier()
    -> setPuissance(20);

echo $v -> getPuissance()."\n";

$hero = new Hero();

$combat1 = new Combat($hero, $m);
$combat2 = new Combat($hero, $v);

echo "\n";

while ($combat1 ->isFini()== false || $combat2->isFini() == false){
    // Le combat continue
    
    // echo $this->$cri->crier()."\n";
    $combat1->action();
    $combat2->action();
    
    echo "m: ".$m->getVie()."\n";
    echo "v: ".$v->getVie()."\n";
    echo "hero: ".$hero->getVie()."\n";
    echo "\n";
}

if ($hero->getVie() == 0 && $m->getVie() == 0 && $v->getVie() == 0){
    echo "Match nul\n";
} elseif ($hero->getVie() > 0){
    echo "Vous avez gagné\n";
} else{ // $h->getVie() == 0
    echo "Vous avez perdu\n";
}