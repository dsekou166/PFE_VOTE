<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="123.ico">
     <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

    <title>E-vote Intec-Sup</title>
</head>
<header>
<nav class="navbar navbar-expand-lg  shadow-lg p-3 mb-5 rounded">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=connexion"  style="color:black; font-weight:bolder"><img src="111.png" alt="" width="200" height="200" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-dark text-white"> 
        <img src="https://static.vecteezy.com/system/resources/previews/007/231/546/non_2x/menu-bar-icon-which-is-suitable-for-commercial-work-and-easily-modify-or-edit-it-vector.jpg" class="w-100" alt="">
      </span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarScroll" >
      <ul class="navbar-nav  my-2 my-lg-0 " style="--bs-scroll-height: 100px;">
      <li>
        <a class="btn btn-outline-primary" href="contact/index.php" role="button"style="margin: 5px; padding:10px;">VOS SUGGESTION</a>
      </li>
        <li class="nav-item">
          <a class="btn btn-outline-primary" href="?page=les_resultat" role="button"style="margin: 5px; padding:10px;">RESULTATS</a>
        </li>
       
        <li class="nav-item">
        <li><a class="btn btn-outline-danger" href="?page=connexion&deconnexion" role="button"style="margin: 5px; padding:10px;">DECONNEXION</a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<body>
<body>
  <div class="">
    <div class="container m-auto pb-5">
      <div class="title text-center fw-bold">
        <h3>Résultats des votes</h3>
      </div>
      <div class="text-center">
        <?php
          require_once "model/candidat.php";
          require_once "model/vote.php";
          $resutats=Vote::Resultat();
          $data = $label = [];
          foreach($resutats as $resutat){
            array_push($label, $resutat['nom_candidat']);
            array_push($data, (int) $resutat['nbre_voix']);
          }
          $data = implode(", ", $data);
          $label = implode('", "', $label);

        ?>
      </div>
      <div class="d-flex flex-column align-items-center">
        <div class="col-md-8">
          <canvas id="myChart"></canvas>
        </div>
        <div class="col-md-8 mt-3">
          <div class="title text-center fw-bold">
            <h3>Une autre forme des résultats</h3>
          </div>
          <canvas id="myChart2"></canvas>
        </div>
      </div>
    </div>
  </div>
    <script>
      const bar = document.getElementById('myChart').getContext('2d');
      const doughnut = document.getElementById('myChart2').getContext('2d');

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
      const data = {
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
          borderWidth: 1,
          hoverOffset: 4
        }]
      };
      const config = {
        type: 'doughnut',
        data: data,
      };
      const myChartdoughnut = new Chart(doughnut, config);
    </script>
 <!-- ======= Footer ======= -->
 <?php include 'view/partager/footer.php';?>