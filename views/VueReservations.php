     <main class="container-fluid">
          <h2 class="text-center">Liste des réservations</h2>

          <table class="table table-strepid table-hover">
               <tr class="table-dark">
                    <th>Chambre</th>
                    <th>Prix</th>
                    <th>Client</th>
                    <th>Tel</th>
                    <th>Arrivée</th>
                    <th>Départ</th>
                    <th>Action</th>
               </tr>

               <?php foreach($res as $value): ?>
                    <tr>   
                         <td style="width: 20rem;">
                              <img src="img/<?= $value['image'] ?>" class="img-fluid" alt="logo">
                         </td>
                         <td> <?= $value['prix'] ?> </td>
                         <td> <?= $value['prenom'] ?> </td>
                         <td> <?= $value['tel'] ?> </td>
                         <td> <?= $value['dateArrivee'] ?> </td>
                         <td> <?= $value['dateDepart'] ?> </td>
                         <td>
                              <a href="">Mof</a>
                              <a href="">Supp</a>
                         </td>
                    </tr>
               <?php endforeach; ?>


          </table>

     </main>