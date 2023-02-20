<?php get_header();
//Template Name: Blog
?>
<main id="blog">
<div class="container">
<h2><?php the_title()?></h2>
<section id="allarticles">
<!-- affiche 8 extraits d'article -->
<?php
$recentPosts = new WP_Query();
$recentPosts->query('showposts=8');
?>
<!-- fin affiche 8 extraits d'article -->
<!-- boucle wordpress pour afficher les extraits d'article -->
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<!-- permet d'afficher un extrait d'article -->
<?php the_excerpt(); ?>
<!-- fin permet d'afficher un extrait d'article -->
<?php endwhile; ?>
<!-- fin boucle wordpress pour afficher les extraits d'article -->
</section>
</div>
</main>
<?php get_footer(); ?>