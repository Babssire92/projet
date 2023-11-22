<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
     <title>Hôtelier</title>
</head>
<body>
     <header>
          <h1 class="text-center">Bienvenue chez Frid Hôtel</h1>
          <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
               <div class="container-fluid">                    
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                         <ul class="navbar-nav">
                              <li class="nav-item">
                                   <a class="nav-link" href=".">Home</a>
                              </li>
                              <?php if( isset($_SESSION['membre']) ): ?>
                                   <li class="nav-item">
                                        <a class="nav-link" href="reservations.php">Réservations</a>
                                   </li>
                                   <?php if( $_SESSION['membre']['statut'] == "admin" ): ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="ajouter.php">Ajouter</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                             <a class="nav-link" href="vehicule.php">chambres</a>
                                        </li>
                                   <?php endif; ?>
                                   <li class="nav-item">
                                        <a class="nav-link" href="connexion.php?action=logout">déconnexion</a>
                                   </li>

                              <?php else: ?>
                                   <li class="nav-item">
                                        <a class="nav-link" href="connexion.php">connexion</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link text-danger" href="logon.php">inscription</a>
                                   </li>
                              <?php endif; ?>
                              <li class="nav-item">
                                   <a class="nav-link" href="contact.php">Contact</a>
                              </li>
                              
                         </ul>
                    </div>
                    
     </header>
     