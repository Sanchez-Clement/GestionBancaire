<?php
  include_once("template/header.php")
 ?>

 <table class="table-hover table mt-2  display" id="tablehome">
   <thead>
     <th class="text-center">Nom</th>
     <th class="text-center">Numéro</th>
     <th class="text-center">Solde</th>
     <th class="text-center"></th>
   </thead>
   <tbody>

     <!-- for eeach account make a row -->
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


 

 <div class="row hidden-sm-up justify-content-around" id="homePhone">
<a class="col-4 ml-4 text-center" href="../controllers/addAccount.php"><i class="flaticon-circle"></i></a>
<a class="col-4 mr-4  text-center" href="../controllers/addMoney.php"><i class="flaticon-piggybank"></i></a>
<a class="col-4 ml-4 text-center" href="../controllers/addAccount.php"><i class="flaticon-atm-machine" aria-hidden="true"></i></a>
<a class="col-4 mr-4  text-center" href="../controllers/addAccount.php"><i class="flaticon-euro"></i></a>

 </div>


 <?php
   include_once("template/footer.php")
  ?>
