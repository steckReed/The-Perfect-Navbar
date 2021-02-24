<?php
/*
  An Auto Generate Preloads Function
  Usage is for no longer needing to add/edit header preloads
  as the function generates them each time
*/

function makePreloadStyles($sentArray){
  foreach ($sentArray as $k => $val) {
    echo "<link rel='preload' as='style' href='{$val}'>";
  }
}

function makePreloadScripts($sentArray){
  foreach ($sentArray as $k => $val) {
    echo "<link rel='preload' as='script' href='{$val}'>";
  }
}

function makePreloadImages($sentArray){
  foreach ($sentArray as $k => $val) {
    echo "<link rel='preload' as='image' href='{$val}'>";
  }
}
