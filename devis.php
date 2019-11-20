
<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php'); ?>
<title>Demander un devis | KP10 IS</title>
<body>
      <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Demander un devis</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Demande de devis<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<div class="sib-form" style="text-align: center;
         background-color: #EFF2F7;                                 ">
  <div class="contenair" id="sib-form-container" class="sib-form-container">
    <div id="error-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-width:px; border-color:#ff4949; border-width:px;">
      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
          <path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z"
          />
        </svg>
        <span class="sib-form-message-panel__inner-text">
                          Nous n&#039;avons pas pu confirmer votre demande de devis. Veuillez réessayer s'il vous plaît.
                      </span>
      </div>
    </div>
    <div></div>
    <div id="success-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#085229; background-color:#e7faf0; border-radius:3px; border-width:px; border-color:#13ce66;max-width:540px; border-width:px;">
      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
          <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z"
          />
        </svg>
        <span class="sib-form-message-panel__inner-text">
                          Votre demande de devis a été bien envoyée. Merci.
                      </span>
      </div>
    </div>
    <div></div>
    <div id="sib-container" class="sib-container--large sib-container--vertical" style="text-align:center; background-color:rgba(255,255,255,1); max-width:900px; border-radius:3px; border-width:1px; border-color:#C0CCD9; border-style:solid;">
      <form id="sib-form" method="POST" action="https://13011f67.sibforms.com/serve/MUIEAGmiyKAEqmuRzGFNBBfRtS8mXfXKocErr33b-zsIr00oUgvWer1A4h0b9xpwQOUBllwV7abcEHw__aAar-BWR1Bti2yvT6REoSQv2rH14BCpZJEYp8LHNlTh5wX629z4QiIhPuCDuN9EisdGU9TcsErtiZxCa8DpDC8s70ZCBWXaVbHGmv-rECU2RVnVTesRU41elA-R4igd"
        data-type="subscription">
        <div style="padding: 16px 0;">
          <div class="sib-form-block" style="font-size:32px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3C4858; background-color:transparent; border-width:px;">
            <p>Demander un devis</p>
          </div>
        </div>
        <div style="padding: 16px 0;">
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858; border-width:px;" for="NOM" data-required="*">
                  NOM
                </label>

                <div class="entry__field">
                  <input class="input" maxlength="200" type="text" id="NOM" name="NOM" autocomplete="off" placeholder="NOM" data-required="true" required />
                </div>
              </div>

              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-width:px; border-color:#ff4949;">
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 16px 0;">
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858; border-width:px;" for="TELEPHONE" data-required="*">
                  TÉLÉPHONE
                </label>
                <div class="entry__field">
                  <input maxlength="200" type="text" data-numeric="true" class="input" id="TELEPHONE" name="TELEPHONE" autocomplete="off" placeholder="TELEPHONE" data-required="true" required />
                </div>
              </div>
              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-width:px; border-color:#ff4949;">
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 16px 0;">
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858; border-width:px;" for="EMAIL" data-required="*">
                  EMAIL
                </label>

                <div class="entry__field">
                  <input class="input" maxlength="200" type="email" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="EMAIL" data-required="true" required />
                </div>
              </div>

              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-width:px; border-color:#ff4949;">
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 16px 0;">
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858; border-width:px;" for="SERVICE" data-required="*">
                  SERVICE
                </label>

                <div class="entry__field">
                  <input class="input" maxlength="200" type="text" id="SERVICE" name="SERVICE" autocomplete="off" placeholder="SERVICE" data-required="true" required />
                </div>
              </div>

              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-width:px; border-color:#ff4949;">
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 16px 0;">
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858; border-width:px;" for="MESSAGE" data-required="*">
                  MESSAGE
                </label>

                <div class="entry__field">
                  <textarea rows="2" class="input" maxlength="500" id="MESSAGE" name="MESSAGE" autocomplete="off" placeholder="MESSAGE" data-required="true" required></textarea>
                </div>
              </div>

              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-width:px; border-color:#ff4949;">
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 16px 0;">
          <div class="sib-form-block" style="text-align: left">
            <button class="sib-form-block__button sib-form-block__button-with-loader" style="font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#FFFFFF; background-color:#003366; border-radius:3px; border-width:0px;"
              form="sib-form" type="submit">
              <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewBox="0 0 512 512">
                <path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z"
                />
              </svg>
              ENVOYER
            </button>
          </div>
        </div>

        <input type="text" name="email_address_check" value="" class="input--hidden">
        <input type="hidden" name="locale" value="fr">
      </form>
    </div>
  </div>
</div>

    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-5 order-md-last wrap-about align-items-stretch">
            <div class="wrap-about-border ftco-animate">
              <div class="img" style="background-image: url(images/about.jpg); border"></div>
              <div class="text">
                <h3>Quelques points à noter</h3>
                <p>Une étoile correspond à un domaine d'intervention</p>
                <p > <strong> Les domaines sont : </strong><br><strong style="font-size: 1.5em">M</strong>aintenance et réseaux<br><strong style="font-size: 1.5em">I</strong>nfographie<br> <strong style="font-size: 1.5em;">S</strong>tatistiques et prévisions <br> <strong style="font-size: 1.5em">D</strong>éveloppement informatique</p>
                <p style="font-style: italic; font-size: 0.8em;"> Par exemple, le pack à 2 étoiles peut contenir maintenance + infographie, infographie + développement informatique...</p> <br>
                <p><a href="devis.php" class="btn btn-primary py-3 px-4">Demander un devis</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-7 wrap-about pr-md-4 ftco-animate">
            <h2 class="mb-4">Nos principaux packages</h2>
            <p>Choisissez KP10 IS tout au long de l’année pour plusieurs services dans plusieurs domaines et gagner des centaines de milliers de Francs chaque année :</p>
            <div class="row mt-5">
              <div class="col-lg-6">
                <div class="services text-center">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="icon-star"><span class="icon-star"></span></span></div><br>
                  <div class="text media-body">
                  <a href="services.php"> <h3>PACK À 2 ÉTOILES</h3></a>
                    <p> Vous avez 5% de réduction gratos pour tout service.</p>
                  </div>
                </div>
                <div class="services text-center">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="icon-star "><span class="icon-star "></span><span class="icon-star "></span><span class="icon-star"></span></div>
                  <div class="text media-body"> <br>
                    <a href="services.php"><h3>PACK À 4 ÉTOILES</h3></a>
                    <p>Vous avez 10% de réduction gratos pour tout service.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services text-center">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="icon-star"></span><span class="icon-star"><span class="icon-star"></div><br>
                  <div class="text media-body">
                    <a href="services.php"><h3>PACK À 3 ÉTOILES</h3></a>
                    <p>Vous avez 8% de réduction gratos pour tout service.</p>
                  </div>
                </div>
                <div class="services text-center">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="icon-thumbs-up"></span></div>
                  <div class="text media-body"> <br>
                    <a href="services.php"><h3 style="font-size: 1em;">NOUVELLE ENTREPRISE ?</h3></a>
                    <p> Pour les nouvelles entreprises (dont la durée de vie est inférieure ou égale à 6 mois). <br> <strong>La souscription est à 0 FCFA </strong> <p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Nos Bonus</h2>
            <p></p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-3 d-flex">
            <div class="services-2 noborder-left text-center ftco-animate">
              <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="icon-check"></span></div>
              <div class="text media-body">
                <h3>Bonus diaspora</h3>
                <p>Tous les membres de toute votre famille bénéficient d’une réduction de 20% sur tous nos services</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-flex">
            <div class="services-2 text-center ftco-animate">
              <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="icon-check"></span></div>
              <div class="text media-body">
                <h3>Bonus Pub</h3>
                <p>Nous vous rendons visibles auprès de tous nos clients</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-flex">
            <div class="services-2 text-center ftco-animate">
              <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="icon-check"></span></div>
              <div class="text media-body">
                <h3>Bonus Red15</h3>
                <p>Vos clients bénéficient de 15% de réduction sur toutes nos formations (leadership, entreprenariat, gestion de ses finances, informatique…)</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-flex">
            <div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
              <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="icon-check"></span></div>
              <div class="text media-body">
                <h3>Bonus Red10</h3>
                <p>Vos salariés bénéficient de 10% de réduction sur toutes nos formations (Leadership, travail d’équipe, gestion des crises et des humeurs, informatique…)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  <?php include('include/footer.php'); ?>
</html>

