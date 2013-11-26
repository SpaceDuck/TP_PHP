<?php
/**
 * Travaux Pratiques : MVC10
 * Fichier de mise en page
 */

global $page;

// Instanciation des class
$vheader = new VHeader();
$vnav = new VNav();
$vpage = new $page['class']();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
 <meta charset="utf-8" />
 <title>MVC 10</title>
 <link rel="icon" type="image/png" href="../Img/exo.png" />
 <link rel="stylesheet" type="text/css" href="../Css/exo.css" />
</head>

<body>

<header>
 <?php $vheader->showHeader() ?>
</header>

<div id="content">
 <?php $vpage->$page['method']($page['arg']) ?>
</div><!-- id="content" -->

<script src="../Js/exo.js"></script>

</body>
</html>
