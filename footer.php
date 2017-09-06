<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>
</div></div>
<div class="wrapper" id="wrapper-footer">

    <?php wp_footer(); ?>

</div><!-- wrapper end -->

</div>




</body>

</html>

