<?php

include "inc/fonction.php";

if( isset($_POST['prix']) ){


     extract($_POST);


     if( isValideNumber($prix, 50) && 
          isValideNumber($nbLits, 1) && 
          isValideNumber($superficie, 30) &&
          isValideString($description, 10)){
         
               echo "good";

     exit;
          $info = pathinfo($_FILES['image']['name']);

          $ext = ["jpg", "jpeg", "png", "gif"];

          if( in_array(strtolower($info['extension']), $ext) ){
               move_uploaded_file($_FILES['image']['tmp_name'], "img/" . $info['basename']);
          }

          $query = "INSERT INTO vehicule VALUES(NULL, :prix, :lit, :cap, :desc, :image)";

          $stmt = $pdo->prepare($query);
          $stmt->execute([
               "prix"    => $prix,
               "lit"     => $nbLits,
               "cap"     => $superficie,
               "desc"    => htmlentities($description),
               "image"   => $info['basename']
          ]);


          header("location: .");
          exit;
     }


}


include 'inc/header.php';

include 'views/vueAjouter.phtml';

include "inc/footer.html";



