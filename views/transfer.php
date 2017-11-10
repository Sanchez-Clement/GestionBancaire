<?php
  include_once("template/header.php");
 ?>

  <div class="col-md-8 card" id="transfer">

    <div class="form-area">

      <form method="post">

        <h3 class="mt-3 mb-4 text-center card-header">Virement</h3>
        <p class="error">
          <?php if(isset($error)) {echo $error;} ?>
        </p>

        <div class="form-group">
          <label for="">Compte à débiter : </label>
          <select class="" name="idAccount">
 						  <?php foreach ($accounts as $key => $account) { ?>
 						   <option value="<?php echo $account->getIdAccount() ?>"><?php echo $account->getnameUser() ?> | <?php echo $account->getSold() ?> € </option>
 						<?php  } ?>
 						</select>
        </div>

        <p>Vers : </p>

        <div class="form-group">
          <label for="">Compte à créditer : </label>
          <select class="" name="idAccountB">
            <?php foreach ($accounts as $key => $account) { ?>
             <option value="<?php echo $account->getIdAccount() ?>"><?php echo $account->getnameUser() ?> | <?php echo $account->getSold() ?> € </option>
          <?php  } ?>
          </select>
        </div>


        <div class="input-group">
          <input type="text" class="form-control" name="transfer" placeholder="Montant à transfer">
          <div class="input-group-addon">€</div>
        </div>


        <input type="submit" name="transferMoney" class="mt-4 mb-4 btn btn-primary" value="Transférer">
      </form>
    </div>
  </div>
  <?php
   include_once("template/footer.php");
  ?>
