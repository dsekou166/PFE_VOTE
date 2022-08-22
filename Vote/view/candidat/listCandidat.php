<?php include 'view/partager/header.php';?>
  
       <?php
          if(isset($_GET['result'])){
            echo "<script>
                alert($_GET[result]);
            </script>";
          }
       ?>
  <div class="container">
      <div class="row">
      <div class="col-md-10 offset-md-1">
        <?php
          if(isset($_GET['ok_mofif'])){
            echo "
            <div class='alert alert-success text-center' role='alert'>
                   Modification reussi ! 
             </div>
            ";
          }
          if(isset($_GET['non_ok_mofif'])){
            echo "
            <div class='alert alert-danger text-center' role='alert'>
                   Echec Modification  !! 
             </div>
            ";
          }

        ?>
      <div class="panel-heading bg-primary">Liste des Candidat</div>
			<div class="panel-body">
				<table class="table table-bordered table-striped">
            <tr>
                <th>Id Candidat</th>
                <th>Nom Candidat</th>
                <th>Parti</th>
                <th>Photo de Partie</th>
                <th>Supprimer</th>
                <th>Modifier</th>
                <th>Voix</th>
            </tr>   
            <tr>
                <?php
                  require_once "model/candidat.php";
                  $obj_candidat=new Candidat();
                  $liste_candidat=$obj_candidat->getAllCandidat();
                  foreach($liste_candidat as $candidat){
                    echo"<tr>
                            <td>$candidat[id_candidat]</td> 
                            <td>$candidat[nom_candidat]</td> 
                            <td>$candidat[nom_partie]</td>
                            <td><img src='$candidat[photo_parti]' width='50' height='50' ></td> 
                            <td><a href='controller/candidatController.php?id_Candidat=$candidat[id_candidat]' class='btn btn-danger'><i class='far fa-trash-alt'></i><a/></td>
                            <td><a href='?page=editCandidat&id_Candidat=$candidat[id_candidat]' class='btn btn-info '><i class='far fa-edit'></i><a/></td>
                            <td><a href='controller/candidatController.php?id_Candidat_nb_vote=$candidat[id_candidat]' class='btn btn-success '><i class='far fa-eye'></i><a/></td>
                      </tr>";

                  }

                ?>
            </tr>     
       </table>
       </div>
      </div>
   </div>
  </div>
<br>
<br>
<br>

</body>
</html>
<?php include 'view/partager/footer.php';?> 