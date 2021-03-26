<?php

// TEST SUR CHAMP TEXT
switch($_POST['code']){
    case 'alphanum':
        AlphaNumverification($_POST['texte']);
        break;
        
    case 'alpha':
        Alphaverification($_POST['texte']);
        break;
        
    case 'num':
        Numverification($_POST['texte']);
        break;
        
    case 'mail':
        Mailverification($_POST['texte']);
        break;
}


function AlphaNumverification($x){
    $verifTexte = New stdClass;

    //Si Champ vide
    if ($x=='' || !preg_match("/^[a-zA-Z-0-9_;:. .,-]*$/",$x)) {
        $verifTexte -> res = 2;
    }
     //Si tout est ok
    else {
        //$top2 = 3;
        $verifTexte -> res = 3;
    };

     $verifTexte = json_encode($verifTexte);
     echo $verifTexte;
}



function Alphaverification($x){
    $verifTexte = New stdClass;
    if ($x=='' || !preg_match("/^[a-zA-Z_;:. .,-]*$/",$x)) {
        $verifTexte -> res = 2;
    }
     //Si tout est ok
    else {
        //$top2 = 3;
        $verifTexte -> res = 3;
    };

     $verifTexte = json_encode($verifTexte);
     echo $verifTexte;
}


function Numverification($x){
    $verifTexte = New stdClass;
    if ($x=='' || !preg_match("/^[0-9]*$/",$x)) {
        $verifTexte -> res = 2;
    }
     //Si tout est ok
    else {
        //$top2 = 3;
        $verifTexte -> res = 3;
    };

     $verifTexte = json_encode($verifTexte);
     echo $verifTexte;
}

function Mailverification($x){
    $verifTexte = New stdClass;
    if ($x=='' || !filter_var($_POST['texte'], FILTER_VALIDATE_EMAIL)) {
        $verifTexte -> res = 2;
    }
     //Si tout est ok
    else {
        //$top2 = 3;
        $verifTexte -> res = 3;
    };

     $verifTexte = json_encode($verifTexte);
     echo $verifTexte;
}

?>