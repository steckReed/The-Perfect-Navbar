<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- Meta Tags -->
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- Meta Tags -->

    <?php 
    // Required Includes
        include './Controller/Head/preload-generator.php';
        include './Controller/Head/load-generator.php';
        include './Controller/Head/url-paths.php'; 
        include './Controller/Head/Page-Paths/global-paths.php'; 
    // Required Includes

    // Header Scripts
        loadScripts($globalScriptsArr['jQuery']);
        loadScripts($globalScriptsArr['reCaptcha']);
    // Header Scripts
    ?>

    <!-- Tab Icon -->
    <link rel='shortcut icon' type='image/x-icon' href='<?= $globalImagesArr['companyIconLogo'] ?>'/>

    <title></title>