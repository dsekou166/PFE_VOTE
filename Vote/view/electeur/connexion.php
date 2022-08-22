<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>Document</title>
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
<header>
<nav class="navbar navbar-expand-lg  shadow-lg p-3 mb-5 rounded">
  <div class="container-fluid">
    <a href="?page=connexion"><img src="111.png" alt="" width="200" height="200" href="?page=connexion"></a>

    <a class="navbar-brand" href="#" style="color:black; font-weight:bolder" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-dark"></span>
    </button>
  </div>
</nav>
</header>
<body>
     <div class="container">
         <div class="row">
             <div class="col-md-5 offset-md-1" style="box-shadow: 1px 1px 4px 0 rgba(0,0,0,.8); padding:20px">
             <div class="card">
             <!-- si on a click sur la bouton deconnexion -->
            <?php
            //print_r($_GET);

               if(isset($_GET['deconnexion'])){
                  session_start();
                  unset($_SESSION["CURRENT_electeur"]);
                  echo "
                  <div class='alert alert-success text-center' role='alert'>
                     vous etes deconnecter, connecter a nouveau !!!! 
                  </div>
                  ";
               }
               if(isset($_GET['inscrpt_reussi'])){
                  echo "
                  <div class='alert alert-success text-center' role='alert'>
                     Inscription reussi ! Connecter 
                  </div>
                  ";
               }
               if(isset($_GET['etat_non_correct'])){
                  echo "
                  <div class='alert alert-danger text-center' role='alert'>
                  votre compte n'est pas activer veuille contacter la Direction !
                  </div>
                  ";
               }
               if(isset($_GET['non_correct_info'])){
                  echo "
                  <div class='alert alert-danger text-center' role='alert'>
                    veuillez verifier le information d authentification !
                  </div>
                  ";
               }
               
            ?>
                <div class="card-header bg-primary " style="margin-top:30px;">
                   Formulaire de connexion
                </div>
                <div class="card-body">
               <form action="controller/electeurController.php" method="post">
                  <div class="field">
                     <label class="label">Login</label>
                     <div class="control has-icons-left has-icons-right">
                        <input class="input is-success" type="text" placeholder="Login" name="login" required>
                        <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                        </span>
                     </div>
                     <p class="help is-success">Entrez un votre login</p>
                     </div>
                     <div class="field">
                     <label class="label">Mots de Passe</label>
                     <div class="control has-icons-left has-icons-right">
                        <input class="input is-success" type="password" placeholder="mots de passe" name="mdp" required>
                        <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                        </span>
                     </div>
                     <p class="help is-success">Entrez un votre mots de passe</p>
                     </div>
                     <div class="form-group mt-3">
                          <button  type="submit" name="btn_connexion" class="button is-link is-outlined">Connecter</button>
                          <button  type="reset"  class="button is-danger is-outlined">Annuler</button>
                   </div>
                      </form>
                </div>
                </div>
             </div>
             <div class="col-md-5 offset-md-1" style="box-shadow: 1px 1px 4px 0 rgba(0,0,0,.8); padding:20px">
              <img src="image/img_vote.png" class="img-fluid">
            </div>
         </div>
     </div>
<?php include 'view/partager/footer.php';?>