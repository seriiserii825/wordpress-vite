<?php
/**
 * Template Name: Front page
 */
get_header()
?>
    <main>
        <h3>some title</h3>
        <?php echo do_shortcode('[main-app]'); ?>
    </main>
<?php get_footer(); ?>
