<?php get_header();
//Template name: Index
?>

<div class="pagehero">
    <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div id="hero" style="background-image: url('<?php echo $thumb;?>')">
</div>

<section class="centre">
    <h2>Bienvenue sur Italian Taste</h2>
    <button class="bouton">A propos</button>
</section>


<?php get_footer(); ?>