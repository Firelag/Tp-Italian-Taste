<?php get_header();
//Template Name: Contact
?>
<div class="pagehero">
    <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div id="hero" style="background-image: url('<?php echo $thumb;?>')">
</div>
<section class="contact">
    <div class="flex">
        <div>
            <h3>Nous contacter</h3>
            <div class="groupe">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <p style="width: 55%;">ItalianTaste@gmail.com</p>
            </div>
            <div class="groupe">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>02 46 37 93 19</p>
            </div>
        </div>
        

        <?php the_content();?>
    </div>
   


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d768.7543714130238!2d2.334439434824142!3d48.88906392781652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e5084692565%3A0x9ebb8875dc2a4720!2sSquare%20Caulaincourt!5e0!3m2!1sfr!2sfr!4v1676987971341!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


<?php get_footer(); ?>