<!DOCTYPE html>

<html
  lang="en"
  class="light-style"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title><?=$titre;?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= img_url('favicon/favicon.ico');?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= vendor_url('fonts/boxicons.css');?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= vendor_url('css/core.css');?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= vendor_url('css/theme-default.css');?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= css_url('demo');?>"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= vendor_url('libs/perfect-scrollbar/perfect-scrollbar.css');?>" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= vendor_url('css/pages/page-misc.css');?>" />
    <!-- Helpers -->
    <script src="<?= vendor_url('js/helpers.js');?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= js_url('config');?>"></script>
  </head>

  <body>
    <!-- Content -->

    <!-- Error -->
    <div class="container-xxl container-p-y">
      <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">Page inaccessible :(</h2>
        <p class="mb-4 mx-2">Oops! 😖 L'url ne correspond à aucune destination.</p>
        <a href="<?=previous_url();?>" class="btn btn-primary">Retournez</a>
        <div class="mt-3">
          <img
            src="<?= img_url('illustrations/page-misc-error-light.png');?>"
            alt="page-misc-error-light"
            width="500"
            class="img-fluid"
            data-app-dark-img="illustrations/page-misc-error-dark.png"
            data-app-light-img="illustrations/page-misc-error-light.png"
          />
        </div>
      </div>
    </div>
    <!-- /Error -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= vendor_url('libs/jquery/jquery.js');?>"></script>
    <script src="<?= vendor_url('libs/popper/popper.js');?>"></script>
    <script src="<?= vendor_url('js/bootstrap.js');?>"></script>
    <script src="<?= vendor_url('libs/perfect-scrollbar/perfect-scrollbar.js');?>"></script>

    <script src="<?= vendor_url('js/menu.js');?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= js_url('main');?>"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
