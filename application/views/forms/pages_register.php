<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>S'inscrire</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="<?php echo site_url("assets/img/favicon.png"); ?>" rel="icon">
  <link href="<?php echo site_url("assets/img/apple-touch-icon.png"); ?>" rel="apple-touch-icon"> -->

  <link href="<?php echo site_url("assets/img/icone.png"); ?>" rel="icon">


  <!-- Vendor CSS Files -->
  <link href="<?php echo site_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo site_url("assets/vendor/bootstrap-icons/bootstrap-icons.css"); ?>" rel="stylesheet">
  <link href="<?php echo site_url("assets/vendor/boxicons/css/boxicons.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo site_url("assets/vendor/quill/quill.snow.css"); ?>" rel="stylesheet">
  <link href="<?php echo site_url("assets/vendor/quill/quill.bubble.css"); ?>" rel="stylesheet">
  <link href="<?php echo site_url("assets/vendor/remixicon/remixicon.css"); ?>" rel="stylesheet">
  <link href="<?php echo site_url("assets/vendor/simple-datatables/style.css"); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo site_url("assets/css/style2.css"); ?>" rel="stylesheet">

  <link href="<?php echo site_url("assets/css/register.css"); ?>" rel="stylesheet">


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">

                  <!-- <span class="d-none d-lg-block">Inscription</span> -->

                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

              <div class="case_image">
                    <img src="<?php echo base_url(); ?>assets/img/sary_login.png">
                </div>

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Creer un compte</h5>
                    <p class="text-center small">Entrer vos details personnels</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="<?php echo site_url('acceuil/newuseradd'); ?>" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nom d'utilisateur</label>
                      <input type="text" name="newname" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">S'il vous plait, entrer votre nom d'utilisateur</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="newemail" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">S'il vous plait, entrer votre Email!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="newpassword" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">S'il vous plait, entrer votre mot de passe!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourGenre" class="form-label">Genre</label>
                      <select name="newgenre">
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                      </select>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Creer un compte</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous avez deja un compte? <a href="<?php echo base_url('acceuil/return_login'); ?> ">Se connecter</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">

                <!-- Designed by <a href="#"></a> -->

              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo site_url("assets/vendor/apexcharts/apexcharts.min.js"); ?>"></script>
  <script src="<?php echo site_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
  <script src="<?php echo site_url("assets/vendor/chart.js/chart.min.js"); ?>"></script>
  <script src="<?php echo site_url("assets/vendor/echarts/echarts.min.js"); ?>"></script>
  <script src="<?php echo site_url("assets/vendor/quill/quill.min.js"); ?>"></script>
  <script src="<?php echo site_url("assets/vendor/simple-datatables/simple-datatables.js"); ?>"></script>
  <script src="<?php echo site_url("assets/vendor/tinymce/tinymce.min.js"); ?>"></script>
  <script src="<?php echo site_url("assets/vendor/php-email-form/validate.js"); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo site_url("assets/js/main2.js"); ?>"></script>

</body>

</html>