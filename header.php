<!DOCTYPE html>
<html lang="fr">
<head <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>">
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php the_title(); ?> </title>
<?php wp_head(); ?>
</head>
<body>
<header>
    <img src="http://localhost/ItalianTaste/wp-content/uploads/2023/02/1777015e11cf4a4d8ab93e96720491f7.png" alt="logo">
<hr width="80%">
<div id="myLinks">
<?php
wp_nav_menu(array(
'menu' => 'Menu principal',
'container' => 'nav'
));
?> 
  </div>

<hr width="80%">
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</header>