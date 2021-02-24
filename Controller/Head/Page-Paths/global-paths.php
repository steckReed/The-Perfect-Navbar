<?php
// Styles
  $globalStylesArr = array(
    // Custom Global Style
    'globalCustomStyle' => './View/Public/CSS/fit-global-styles.css?version=' . date('yyyyMMddhhmmss'),

    // Bootstrap Style
    'bootstrapStyle' => 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css\' integrity=\'sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK\' crossorigin=\'anonymous',
  );
// Styles

// Images
  $globalImagesArr = array(
    // Icon Logo
    'companyLogo' => './View/Public/Images/logo.png',
  );
// Images

// Scripts
  $globalScriptsArr = array(
    // Header
      // jQuery
      'jQuery' => 'https://code.jquery.com/jquery-3.5.1.min.js\' integrity=\'sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\' crossorigin=\'anonymous',

      // Bootstrap Script
      'bootstrapScript' => 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js\' integrity=\'sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD\' crossorigin=\'anonymous',

      // reCaptcha
      'reCaptcha' => 'https://www.google.com/recaptcha/api.js\' async=\'\' defer=\'',
    // Header

    // Footer
      // AJAX
      'ajax' => 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js',

      // Font Awesome
      'fontAwesome' => 'https://kit.fontawesome.com/a2caf9c750.js',
    // Footer
  );
// Scripts

// Generate Preloads
  makePreloadStyles($globalStylesArr);
  makePreloadImages($globalImagesArr);
// Generate Preloads

// Loads
  loadStyles($globalStylesArr);
// Loads