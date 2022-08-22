<?php
require_once 'model/db.php';

$ob_connexion=new Connexion();
$db=$ob_connexion->getDB();

$errors = array(); //To store errors
$form_data = array(); //Pass back the data to `form.php`

$id =$_POST['id'];

$etat = $_POST['etat'];

if($etat=="true"){

    $sql="UPDATE `electeur` SET `etat`='actif' WHERE id_electeur=$id";
           
}else{

    $sql="UPDATE `electeur` SET `etat`='inactif' WHERE id_electeur=$id";

}

 $result=$db->query($sql);
 $ret=$result;
/* Validate the form on the server side */
if (empty($_POST['id'])) { //Name cannot be empty
    $errors['id'] = 'id cannot be blank';
    


}

if (!empty($errors)) { //If errors in validation
    
    $form_data['success'] = false;
    $form_data['errors']  = $errors;
    
}
else { //If not, process the form, and return true on success
    $form_data['success'] = true;
    $form_data['id1'] =$id ;
    $form_data['etat'] =$etat ;
    $form_data['posted'] = 'Data Was Posted Successfully';
}

//Return the data back to form.php
//echo json_encode($form_data);
?>