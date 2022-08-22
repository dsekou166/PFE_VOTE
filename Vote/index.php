<?php
 
 if(isset($_GET['page'])){
  switch($_GET['page']){
    case 'inscription':
      require_once 'view/electeur/inscription.php';
      break;
      case 'connexion':
        
        require_once 'view/electeur/connexion.php';
        break;
        case 'Admin_connect':
          require_once 'view/candidat/Resultat.php';
          break;
          case 'Electeur_connect':
              require_once 'menu/menu2.php';
            break;
            case 'addCandidat':
             
              require_once "view/candidat/addCandiat.php";
              break;
              case 'addvote':
                require_once "model/candidat.php";
                $ob_candidat=new Candidat();
                $listeCandidat=$ob_candidat->getAllCandidat();
                  
                  require_once "view/vote/addvote.php";
                break;
                case 'detail_vote':
                  require_once "menu/menu2.php";
                  require_once "view/vote/detail.php";
                break;
                case 'addBureau':
                    require_once "menu/menu3.php";
                    require_once "view/bureau/addBureau.php";
                  break;
                case 'listeElecteur':
                   
                    require_once "view/electeur/listeElecteur.php";
                break;
                case 'listCandidat':
                  
                  require_once "view/candidat/listCandidat.php";
                break;
                case 'les_resultat':
                  
                  require_once "view/candidat/Resultat.php";
                break;
                case 'liste_vote':
                 
                  require_once "view/vote/liste_vote.php";
                break;
                case 'editCandidat':
                  require_once "menu/menu3.php";
                  require_once "view/candidat/modifCandidat.php";
                break; 
                case 'aide':
                  require_once "menu/menu2.php";
                  require_once "contact/aide.php";
                break; 
                case 'contact':
                  require_once "menu/menu2.php";
                  require_once "team/contact.php";
                break;     
                case 'suggestion':
                  require_once "menu/menu2.php";
                  require_once "contact/index.php";
                break;       
        
  }
 }else{
   require_once 'menu/menu.php';
 }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="shortcut icon" href="ico/favicon.ico" type="image/x-icon">
<link rel="icon" href="ico/favicon.ico" type="image/x-icon">
</head>
<body>
  
</body>
</html>