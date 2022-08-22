<?php include 'view/partager/header.php';?>
<div class="container">
    <?php
              if(isset($_GET['non_valider'])){
                  echo "
                  <div class='alert alert-danger text-center' role='alert'>
                      Inscription invalide !!!! 
                  </div>
                  ";
              }
              if(isset($_GET['existe_num_electeur'])){
                  echo "
                  <div class='alert alert-danger text-center' role='alert'>
                      Le Numero d'electeur existe deja !!!! 
                  </div>
                  ";
              }
        ?>
  <div class="row">
    <div class="col-md-12" style="box-shadow: 0px 0px 4px 4px rgba(0.1,0.1,0.1,0.1); padding:20px">
      <div class="card">
        <div class="card-header bg-primary">
            Formulaire d'Inscription
        </div>
        <div class="card-body">
          <form action="controller/electeurController.php" method="post">
            <div class="row">
              <div class="col-md-3 offset-md-1">
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input name="nom_electeur" type="text" class="form-control" placeholder="Entrez votre nom"  required>
                </div>
                <div class="form-group mt-3">
                    <label class="control-label">Prenom</label>
                    <input name="prenom_electeur" type="text" class="form-control" placeholder="Entrez votre prenom"  required>
                </div>
                <div class="form-group mt-3">
                    <label class="control-label">Matricule</label>
                    <input name="num_electeur" type="text" class="form-control" placeholder="Entrez votre Matricule"  required>
                </div>
                <div class="form-group mt-3">
                  <label class="control-label">Sexe</label> </br>
                  <input type="radio" style="width:50px; " value="masculin" name="sexe"  required><label for="masculin">Masculin</label><br> <br>
                  <input type="radio" style="width:50px; " value="feminin" name="sexe"  required ><label for="feminin">Feminin</label>
                </div>
              </div>
              <div class="col-md-3 offset-md-1">
                  <div class="form-group">
                      <label class="control-label">date naissance</label>
                      <input name="date_nais" type="Date" class="form-control" placeholder="Entrez votre date naissance"  required>
                  </div>
                <div class="form-group mt-3">
                  <label class="control-label">SITE</label><br>
                  <input type="radio" style="width:50px; " value="ACI 2000 SIEGE" name="lieu_nais"  required><label for="ACI 2000 SIEGE">ACI 2000 SIEGE</label><br>
                  <input type="radio" style="width:50px; " value="BACO DJICORONI" name="lieu_nais"  required><label for="BACO DJICORONI">BACO DJICORONI</label><br>
                  <input type="radio" style="width:50px; " value="HIPPODROME" name="lieu_nais"  required><label for="HIPPODROME">HIPPODROME</label><br>
                </div>
                <div class="form-group mt-3">
                  <label class="control-label">FILIERE</label>
                  <input name="adress" type="text" class="form-control" placeholder="Votre classe et filiere s'il vous plait"  required>
                </div>
                <div class="form-group mt-3">
                      <label class="control-label">Login</label>
                      <input name="login" type="text" class="form-control" placeholder="Login"  required>
                </div>
                <div class="form-group mt-3">
                      <label class="control-label">Mot de Passe</label>
                      <input name="mdp" type="password" class="form-control" placeholder="Entrez votre mdp"  required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="form-group mt-3">
                      <button type="submit" class="button is-link is-outlined" name="inscription">Inscription</button>
                      <button type="reset" class="button is-danger is-outlined" >Annuler</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div></div>
  </div></div>
</div>
<!-- code  de chargement automatique formulaire -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="css/ajax.js"></script>
 <!-- ======= Footer ======= -->
 <?php include 'view/partager/footer.php';?>