<!DOCTYPE html>
<html lang="en">
<body>
    <!-- END nav -->
    <?php include('include/header.php'); ?>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Demande de devis</h3>
    <fieldset>
      <input placeholder="Nom" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Téléphone" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Service" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Message complementaire" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
    <?php include('include/footer.php'); ?>
  </body>
</html>
