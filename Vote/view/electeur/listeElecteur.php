<?php include 'view/partager/header.php';?>
<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <table class="table table-bordered">
          <tr>
              <th>Etat</th>
              <th>Id Electeur</th>
              <th>Nom Electeurs</th>
              <th>Prenom Electeur</th>
              <th>Matricule</th>
              <th>Site</th>
              <th>Filiere</th>
              <th>Vote</th>
            
          </tr>   
          <tr>
              <?php
                require_once "model/electeur.php";
                $liste_electeur=Electeur::Afficher_electeur();
                foreach($liste_electeur as $ele)
                {
              ?>
                <tr>
                  <td>
                  <?php if($ele['etat']=="actif")
                      {
                    ?>
                      <input type="checkbox" checked data-toggle="toggle" data-style="ios" class="togglebtn">
                    <?php
                      }else{ 
                    ?>
                        <input type="checkbox"  data-toggle="toggle" data-style="ios" id="toggle-off" class="togglebtn">
                      <?php
                      } ?>
                    </td>
                    <td><?php echo $ele['id_electeur'] ?></td>
                    <td><?php echo $ele['nom_electeur'] ?></td> 
                    <td><?php echo $ele['prenom_electeur'] ?></td> 
                    <td><?php echo $ele['num_electeur'] ?></td>
                    <td><?php echo $ele['lieu_nais'] ?></td>
                    <td><?php echo $ele['adress'] ?></td>
                    <?php
                      if($ele['status_vote']==false)
                      {
                        echo "<td class='bg-danger text-light'>Non voté</td>";
                      }else{
                        echo "<td class='bg-success text-light'>Voté</td>";
                      }
                    ?>
                </tr>
              <?php
                }
              ?>
          </tr>     
      </table>
    </div>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

  <script>
    function toggleOff() {
      $('#toggle-off').bootstrapToggle('off')  
    }
    $(function() {
      $('.togglebtn').change(function() {
        var id1 = $(this).closest('tr').children('td:eq(1)').text();
        var etat1 = $(this).prop('checked')
        //console.log( )
        $.post('changeetat.php',
          {
              id: id1,
              etat: etat1
          }, function(data) {
              alert(data);
              location.reload();
        });
      })
    })
  </script>
 <!-- ======= Footer ======= -->
 <?php include 'view/partager/footer.php';?>