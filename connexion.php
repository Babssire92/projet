<?php

include "inc/fonction.php";


if( !empty($_POST['connection']) ) {

    
     $query = "SELECT * FROM membre WHERE login = ? ";

     $stmt = $pdo->prepare($query);
     $stmt->execute([$_POST['login']]);

     //vérifie si login est correct
     if( $stmt->rowCount() != 0 ){
          $user = $stmt->fetch();
          //test si le password est bon
          if( password_verify($_POST['mdp'], $user['mdp']) ){
               //créer la session
               $_SESSION['membre'] = $user;

               header("location:http://monhost/proget_sira/contact.php");
               exit;
          }
          
     }
          
          
     }

elseif( isset($_GET['action'])  AND $_GET['action'] == "logout" ){
     session_destroy();
     header("location:http://monhost/proget_sira/contact.php");
     exit;
}

     

    
    


include 'inc/header.php';

include 'views/vueConnexion.phtml';
include "inc/footer.html";




