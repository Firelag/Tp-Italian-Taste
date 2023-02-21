<!DOCTYPE html>
<html lang="fr">
<head <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php the_title(); ?> </title>
<?php wp_head(); ?>
</head>
<body>
<header>
    <img src="http://localhost/ItalianTaste/wp-content/uploads/2023/02/1777015e11cf4a4d8ab93e96720491f7.png" alt="logo">
<hr width="80%">
<?php
wp_nav_menu(array(
'menu' => 'Menu principal',
'container' => 'nav'
));
?>
<hr width="80%">
</header>