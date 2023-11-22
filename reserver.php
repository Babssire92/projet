<?php

include "inc/fonction.php";


if( isset($_POST['prenom']) ){
	extract($_POST);
	var_dump($_POST);
	//insertion client
	$query ="INSERT INTO membre VALUES(NULL, :nom, :prenom, :login, :mdp, :tel,  :mail,
	 :addr, :cp, :ville, :statut, now())";

	$stmt = $pdo->prepare($query);
	$stmt->execute([
		 "nom"     => $nom,
		 "prenom"  => $prenom,
		 "login"  => $login,
		 "mdp"  => $mdp,
		 "tel"     => $tel,
		 "mail"   => $email,
		 "addr"    => $adresse,
		 "cp"      => $cp,
		 "ville"   => $ville,
		 "statut"  => 'client'
	]);



	header("location: .");
	exit;
};





include 'inc/header.php';

include 'views/vueReserver.phtml';

include "inc/footer.html";