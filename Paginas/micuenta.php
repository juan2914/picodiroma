<?php
  require_once("menu.php");
  require_once('Plantilla6.php');

  $plantilla = new Plantilla();
  $plantilla->setMenu($menu, $submenu);
  $plantilla->setFriendly(false);
  $plantilla->setWebTitle('Pico di Roma');
  $plantilla->setDirContents('paginas/');

?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title><?php echo $plantilla->getPageTitle(); ?></title>
  <link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<body class="<?php echo $plantilla->getClassBody(); ?>">

  <div id="cabecera">
    <h1>Pico di roma </h1>
  </div>

  <div id="menu">
    <?php echo $plantilla->getMenu(); ?>
  </div>

  <div id="contenido">
    <?php $plantilla->writePageContent(); ?>
  </div>

</body>
</html>