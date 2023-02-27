<?php get_header();
//Template name: Index
?>

<div class="pagehero">
    <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div id="hero" style="background-image: url('<?php echo $thumb;?>')">
</div>

<section class="centre">
    <div class="taille">
        <h2>Bienvenue sur Italian Taste</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores adipisci velit qui totam dolor consectetur cumque? Atque illo nihil tempore! Deleniti aut voluptas amet delectus corrupti ipsa quasi, aliquam quidem?</p>
        <button class="bouton">A propos</button>
    </div>
    
</section>


<?php get_footer(); ?>