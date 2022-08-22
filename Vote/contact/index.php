<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-voting Intec Sup | Suggestion</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="123.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>

  <!--alert messages start-->
  <?php echo $alert; ?>
  <!--alert messages end-->

  <!--contact section start-->
  <div class="contact-section">
    <div class="contact-info">
      <div><i class="fas fa-map-marker-alt"></i>Baco djicoroni, Bamako, Mali</div>
      <div><i class="fas fa-envelope"></i>compte1@intec-sup.com</div>
      <div><i class="fas fa-phone"></i>(+223) 75 69 74 87 - 91 77 77 66</div>
      <div><i class="fas fa-clock"></i>Lundi - Vendredi 8:00 à 21:00 </div>
    </div>
    <div class="contact-form">
      <h2>Contactez-nous</h2>
      <form class="contact" action="" method="post">
        <input type="text" name="name" class="text-box" placeholder="Entrez votre nom" required>
        <input type="email" name="email" class="text-box" placeholder="Entrez votre E-mail" required>
        <textarea name="message" rows="5" placeholder="Ecrivez votre Message" required></textarea>
        <input type="submit" name="submit" class="send-btn" value="Envoyer">
      </form>
    </div>
  </div>
  <!--contact section end-->

  <script type="text/javascript">
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>

</body>

</html>