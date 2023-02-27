<?php get_header();
//Template Name: Propos
?>
<div class="pagehero">
    <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div id="hero" style="background-image: url('<?php echo $thumb;?>')">
</div>

<section class="propos">
    <h2>À propos de nous</h2>
    <div class="flex">
        <div>
            <h3>Qui sommes-nous ?</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam ullam quae minima dicta? Obcaecati iure voluptatem tempora quos nemo ea aut debitis consequatur, laborum maxime ut minus, voluptate ipsa laboriosam?</p>
            <button class="bouton">Nous contacter</button>
        </div>
        <div>
            <img src="http://localhost/ItalianTaste/wp-content/uploads/2023/02/le-origini-della-pizza-napoletana-e1601990439881-1024x604-1.jpg" alt="Pizza napoletana">
        </div>
    
    </div>
   
</section>

<?php get_footer(); ?>