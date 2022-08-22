<?php include 'view/partager/header.php' ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3" style="box-shadow: 1px 1px 4px 0 rgba(0,0,0,.8); padding:20px">
        <div class="card" style="margin-top:10px;">
          <div class="card-header bg-primary">
            Formulaire d'ajout de Candidat
          </div>
          <div class="card-body">
            <form action="controller/candidatController.php" method="post">
              <div class="form-group">
                  <label class="control-label">Nom Canditat</label>
                  <input name="nom_candidat" type="text" class="form-control"  required placeholder="entrez le nom du candidat">
              </div>
              <div class="form-group mt-3">
                  <label class="control-label">Nom du Partie</label>
                  <input name="nom_partie" type="text" class="form-control" required placeholder="Nom du Partie">
              </div>
              <div class="form-group mt-3">
                  <label class="control-label">Photo</label>
                  <input name="photo_parti" type="text" class="form-control" required placeholder="photo du Partie">
              </div>
              <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary" name="btn_valider_candidat">Valider</button>
                <button type="submit" class="btn btn-danger" name="">Annuler</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include 'view/partager/footer.php' ?>