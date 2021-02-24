<?php
// Styles
  $stylesArr = array(
    'customStyle' => './View/Public/CSS/fit-index-styles.css?version=' . date('yyyyMMddhhmmss')
  );
// Styles

// Images
  $imagesArr = array(
      '' => '',
  );
// Images

// Scripts
  $scriptsArr = array(
    '' => '',
  );
// Scripts

// Generate Preloads
  makePreloadStyles($stylesArr);
  // makePreloadImages($imagesArr);
  // makePreloadScripts($scriptsArr);
// Generate Preloads

// Loads
  loadStyles($stylesArr);
// Loads