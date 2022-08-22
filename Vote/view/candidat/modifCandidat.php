<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="123.ico">
     <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <title>E-vote Intec-Sup</title>
</head>
<body>
   <?php
      require_once "model/candidat.php";
      $ob_candidat=new Candidat();
      $candidat=$ob_candidat->getCandidatById($_GET['id_Candidat']);
   ?>
     <div class="container">
         <div class="row">
             <div class="col-md-6 offset-md-3" style="box-shadow: 1px 1px 4px 0 rgba(0,0,0,.8); padding:20px">
             <div class="card">
                <div class="card-header bg-primary">
                   Formulaire de Modification Candidat
                </div>
                <div class="card-body">
                      <form action="controller/candidatController.php" method="post">
                      <div class="form-group">
                             <label class="control-label">Id Candidat</label>
                             <input name="id_candidat" readonly="readonly"   class="form-control" value="<?php echo $candidat[0]['id_candidat']; ?>">
                          </div>    
                      <div class="form-group">
                             <label class="control-label">Nom Canditat</label>
                             <input name="nom_candidat" type="text" class="form-control"  required value="<?php echo $candidat[0]['nom_candidat']; ?>">
                          </div>
                          <div class="form-group mt-3">
                             <label class="control-label">Nom du Partie</label>
                             <input name="nom_partie" type="text" class="form-control" required value="<?php echo $candidat[0]['nom_partie']; ?>">
                          </div>
                          <div class="form-group mt-3">
                             <label class="control-label">Photo</label>
                             <input name="photo_parti" type="text" class="form-control" required value="<?php echo $candidat[0]['photo_parti']; ?>">
                          </div>
                          <div class="form-group mt-3">
                              <button type="submit" class="btn btn-primary" name="btn_modif_candidat">Modifier</button>
                              <button type="reset" class="btn btn-danger" >Annuler</button>

                            </div>
                      </form>
                </div>
                </div>
             </div>
         </div>
     </div>
<?php include 'view/partager/footer.php';?>