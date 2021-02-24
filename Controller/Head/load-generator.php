<?php

  function loadStyles($sentArray){
    foreach ($sentArray as $k => $val) {
      echo "<link rel='stylesheet' href='{$val}'>";
    }
  }

  function loadScripts($sentValue){
      echo "<script src='{$sentValue}'></script>";
  }