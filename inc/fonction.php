<?php
session_start();

$pdo = new PDO("mysql:host=127.0.0.1;dbname=23_24_b2_projet_sira", "root", "", [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

function searchByPrice($prix)  {
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM vehicule WHERE prix BETWEEN ? AND ? ORDER BY prix ASC");
    $stmt->execute([$prix-100, $prix+100]);

    return $stmt->fetchAll();
}

function existe($login){
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM vehicule WHERE login = ?");
    $req->execute([$login]);

    return $req->rowCount() != 0;
}

//VERIFIE LA VALIDITE D'UN CHAMPS
function isValideNumber($number, $max){

    if( ctype_digit($number) && $number >= $max ){
        return true;
    }
    
    return false;
}

function isValideString($texte, $max){

    // if( strlen( trim($texte) ) >= 10 )
    //     return true;
    // return false;
    return strlen( trim($texte) ) >= $max;
}

