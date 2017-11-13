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
          <?php echo $account->getSold() ?>
        </td>

        <td><a onclick="return confirm('Voulez-vous supprimez votre compte ?')" href="../controllers/deleteAccount.php?id=<?php echo $account->getIdAccount() ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>




  <div class="row hidden-sm-up justify-content-around" id="homePhone">
    <a title="Ajouter un compte" class="col-4 ml-4 text-center" href="../controllers/addAccount.php"><i class="flaticon-circle"></i></a>
    <?php if (isset($_SESSION['account'])): ?>
    <a title="Dépot" class="col-4 mr-4  text-center" href="../controllers/addMoney.php"><i class="flaticon-piggybank"></i></a>
    <a title="Retrait" class="col-4 ml-4 text-center" href="../controllers/withdrawal.php"><i class="flaticon-atm-machine" aria-hidden="true"></i></a>
    <a title="Virement" class="col-4 mr-4  text-center" href="../controllers/transfer.php"><i class="flaticon-euro"></i></a>
<?php endif; ?>
  </div>


  <?php
   include_once("template/footer.php")
  ?>
