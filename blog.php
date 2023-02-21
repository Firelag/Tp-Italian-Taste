<?php get_header();
//Template Name: Blog
?>

<div class="pagehero">
    <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div id="hero" style="background-image: url('<?php echo $thumb;?>')">
</div>
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

<div class="bgimg" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ,'blogpage_thumb' ) ); ?>');">
            </div>
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