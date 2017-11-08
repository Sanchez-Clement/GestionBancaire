<?php
  include("template/header.php")
 ?>

 <table class="table-hover table mt-2  display" id="tablehome">
   <thead>
     <th class="text-center">Nom</th>
     <th class="text-center">Numéro</th>
     <th class="text-center">Solde</th>
     <th class="text-center"></th>
   </thead>
   <tbody>

     <!-- for eeach vehicule make a row -->
     <?php foreach ($accounts as $key => $account) {
     ?>


     <tr class="text-center">
       <td>
         <?php echo $account->getNameUser() ?>
       </td>
       <td>
         <?php echo "000" . $account->getIdAccount() ?>
       </td>
       <td>
         <?php echo $account->getSolde() ?>
       </td>

       <td><a href="../controleur/deleteAcount.php?id=<?php echo $account->getIdAccount() ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
     </tr>
     <?php } ?>
   </tbody>
 </table>

 <?php
   include("template/footer.php")
  ?>
