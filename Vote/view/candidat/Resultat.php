<?php include 'view/partager/header.php';?>
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