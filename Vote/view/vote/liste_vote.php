<?php include 'view/partager/header.php';?>
<link rel="stylesheet" href="css/table.css">
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1" style="margin-top:80px">
        <div class="Titre">Liste des Vote</div>
        <div class="panel-body">
          <div>
          <table class="table table-striped-columns">
            <thead class="table-light">
              <tr>
                <th><p7>Numero vote</p7></th>
                <th><p7>Candidat</p7></th>
                <th><p7>Electeur</p7></th>
                <th><p7>Numero electeur</p7></th>
                <th><p7>Date de naissance</p7></th>
                <th><p7>Site</p7></th>
                <th><p7>Filiere</p7></th>
              </tr>
            </thead>  
            <tbody>
              <tr>
                  <?php
                    require_once "model/vote.php";
                    require_once "model/electeur.php";
                    $liste_vote=Vote::listeVote();
                    foreach($liste_vote as $vote){
                      $Electeur=Electeur::ElecteurByID($vote['id_electeur']);
                      
                      echo"<tr>
                              <td>$vote[id_vote]</td> 
                              <td>$vote[nom_candidat]</td> 
                              <td>".$Electeur[0]['prenom_electeur']." ".$Electeur[0]['nom_electeur']."</td>
                              <td>".$Electeur[0]['num_electeur']."</td> 
                              <td>".$Electeur[0]['date_nais']."</td> 
                              <td>".$Electeur[0]['lieu_nais']."</td> 
                              <td>".$Electeur[0]['adress']."</td>
                        </tr>";

                    }

                  ?>
              </tr>
            </tbody>     
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script  src="css/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
<?php include 'view/partager/footer.php';?>