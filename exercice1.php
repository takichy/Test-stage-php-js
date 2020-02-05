<?php
// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard',60]];

//une fonction d'affichage
function affichage($moutons ){
    $sumValMoutons=0;
    foreach ($moutons as $mouton) {
        $sumValMoutons = $sumValMoutons + $mouton[1];
    }
    echo " Moyenne de la valeur de mes". count($moutons)." moutons : ".$sumValMoutons/count($moutons)."<br/>";
}

// J'ajoute un mouton
array_push($moutons, ['Gérard',120]);

// Je calcule la moyenne de la valeur de mes moutons
affichage($moutons);

// Ajout de 100 moutons aléatoires
for ($j=0; $j < 100; $j++) { 
    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
	array_push($moutons, [$chaine[rand(0,strlen($chaine)-1)],rand(10,200)]);
}

// Je calcule à nouveau la moyenne
affichage($moutons);