<?php

include "inc/fonction.php";

$query = "SELECT 
               prenom,
               tel,
               image,
               prix,
               dateArrivee,
               dateDepart
          FROM reservation 
          INNER JOIN client 
          ON client.id_client = reservation.id_client
          INNER JOIN vehicule
          ON vehicule.id_chambre = reservation.id_chambre
          AND dateDepart >= now()";

$stmt = $pdo->prepare($query);
$stmt->execute();

$res = $stmt->fetchAll();

include 'inc/header.php';

include 'views/VueReservations.php';
include "inc/footer.html";




