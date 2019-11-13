<?php include('include/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<body>
    <!-- END nav -->
    

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Commander un service</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Commande de service<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Commande de services</h3>
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
