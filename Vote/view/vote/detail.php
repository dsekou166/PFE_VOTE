<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     <link rel="stylesheet" href="../../css/style.css">
     <link rel="icon" href="123.ico">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2" style="margin-top:80px;">
       
            <?php 
                if(isset($_GET['reussi_vote'])){
                echo "
                    <div class='alert alert-success text-center' role='alert'>
                        vote reussi Merci :les details sont les suivant ! 
                     </div>
                    ";
                }
                if(isset($_GET['deja_vote'])){
                    echo "
                        <div class='alert alert-danger text-center' role='alert'>
                            Vous avez deja Voter ! 
                         </div>
                        ";
                    }
                session_start();
                require_once "model/vote.php";
                require_once "model/electeur.php";
                $id_electeur= $_SESSION["CURRENT_electeur"]['id_electeur'];
                $tab_ele=Electeur::ElecteurByID($id_electeur);
                $detail_vote=Vote::detail_vote($id_electeur);
                 
                ?>
                
                    <div class="row">
                       <?php  echo 'vous :'.$tab_ele[0]['prenom_electeur'].' '.$tab_ele[0]['nom_electeur']; ?>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                         N° Vote
                        </div>
                        <div class="col-md-2">
                        Candidat
                        </div>
                        <div class="col-md-2">
                         Matricule
                        </div>
                        <div class="col-md-2">
                         Site
                        </div>
                        <div class="col-md-2">
                        Filiere
                        </div>
                        <div class="col-md-2">
                         Status Vote
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                           <?php  echo $detail_vote[0]['id_vote']; ?>
                        </div>
                        <div class="col-md-2">
                           <?php echo $detail_vote[0]['nom_candidat']; ?>
                        </div>
                        <div class="col-md-2">
                           <?php echo $tab_ele[0]['num_electeur']; ?>
                        </div>
                        <div class="col-md-2">
                           <?php echo $tab_ele[0]['lieu_nais']; ?>
                        </div>
                        <div class="col-md-2">
                           <?php echo $tab_ele[0]['adress']; ?>
                        </div>
                        <div class="col-md-2">
                          <?php if($tab_ele[0]['status_vote']==1){
                                 echo "Voté";
                          }else{
                              echo "non voté";
                          }
                          
                          ?>
                        </div>
                    </div>
        </div>
    </div>
    </div>
    
    <h3 class="mt-6" style="text-align: center ;color:blue;">Résultats partiel des votes</h3>

    <div class="container">
        <div class="row">
            <?php
                require_once "model/candidat.php";
                require_once "model/vote.php";
                $resutats=Vote::Resultat();
                foreach($resutats as $resutat){
                    $data = $label = [];
                    foreach($resutats as $resutat){
                        array_push($label, $resutat['nom_candidat']);
                        array_push($data, (int) $resutat['nbre_voix']);
                    }
                    $data = implode(", ", $data);
                    $label = implode('", "', $label);
                }
            ?>
            <div class="my-3">
                <canvas id="myChart"></canvas>
            </div>
    </div>
    <script>
      const bar = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(bar, {
          type: 'bar',
          data: {
              labels: ["<?=$label?>"],
              datasets: [{
                  label: 'Nombre de voix',
                  data: [<?=$data?>],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
    </script>
</body>
</html>
