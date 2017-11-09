<?php
  include_once("template/header.php");
 ?>
 <div class="col-md-8 card" id="addaccount">
     <div class="form-area">
         <form action="addAccount.php" method="post">

                     <h3 class="mt-3 mb-4 text-center card-header">Ajouter compte</h3>
                     <p class="error">   <?php if(isset($error)) {echo $error;} ?></p>
     				<div class="form-group">
 						<input type="text" class="form-control"  name="nameUser" placeholder="Name" required>
 					</div>


 					<div class="input-group">
 						<input type="text" class="form-control" name="sold" placeholder="Montant à créditer">
            <div class="input-group-addon">€</div>
 					</div>


         <input type="submit"  name="submit" class="mt-4 mb-4 btn btn-primary" value="Ajouter" >
         </form>
     </div>
 </div>





 <?php
   include_once("template/footer.php");
  ?>
