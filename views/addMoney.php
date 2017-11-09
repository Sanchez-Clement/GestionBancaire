<?php
  include_once("template/header.php");
 ?>
 <div class="col-md-8 card" id="addMoney">
     <div class="form-area">
         <form  method="post">

                     <h3 class="mt-3 mb-4 text-center card-header">Créditer Compte</h3>
     				<div class="form-group">
 						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
 					</div>


 					<div class="input-group">
 						<input type="text" class="form-control" id="montant" name="montant" placeholder="Montant à créditer">
            <div class="input-group-addon">€</div>
 					</div>


         <button type="button" id="submit" name="submit" class="mt-4 mb-4 btn btn-primary">Ajouter</button>
         </form>
     </div>
 </div>





 <?php
   include_once("template/footer.php");
  ?>
