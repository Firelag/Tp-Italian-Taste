<?php get_header();
//Template Name: Recette
?>
<div class="pagehero">
    <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div id="hero" style="background-image: url('<?php echo $thumb;?>')">
</div>


<section class="irecettes">
<div class="recette">
    <?php 

    $image = get_field('recette_image');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $image ) {
        echo wp_get_attachment_image( $image, $size );
    }

?>
    <div class="ingred">
        <h3><?php the_field('recette_tingred'); ?></h3>
        <p><?php the_field('recette_ingredients'); ?></p>
    </div>
    
</div>

<h3><?php the_field('recette_tprepa'); ?></h3>
<p><?php the_field('recette_preparation'); ?></p>

<h3>Conseils</h3>

<p><?php the_field('recette_conseils'); ?></p>

<div class="recette">
    <?php 

    $image = get_field('recette1_image');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $image ) {
        echo wp_get_attachment_image( $image, $size );
    }

?>
    <div class="ingred">
        <h3><?php the_field('recette1_tingred'); ?></h3>
        <p><?php the_field('recette1_ingredients'); ?></p>
    </div>
    
</div>

<h3><?php the_field('recette1_tprepa'); ?></h3>
<p><?php the_field('recette1_preparation'); ?></p>

<h3>Conseils</h3>

<p><?php the_field('recette1_conseils'); ?></p>


<div class="recette">
    <?php 

    $image = get_field('recette2_image');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $image ) {
        echo wp_get_attachment_image( $image, $size );
    }

?>
    <div class="ingred">
        <h3><?php the_field('recette2_tingred'); ?></h3>
        <p><?php the_field('recette2_ingredients'); ?></p>
    </div>
    
</div>

<h3><?php the_field('recette2_tprepa'); ?></h3>
<p><?php the_field('recette2_preparation'); ?></p>

<h3>Conseils</h3>

<p><?php the_field('recette2_conseils'); ?></p>
</section>


<?php get_footer(); ?>