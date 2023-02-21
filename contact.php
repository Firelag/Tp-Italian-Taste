<?php get_header();
//Template Name: Contact
?>
<div class="pagehero">
    <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div id="hero" style="background-image: url('<?php echo $thumb;?>')">
</div>



<?php get_footer(); ?>