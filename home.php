<?php
/*
 * Template Name: Home 
 */
?>

<?php get_header(); ?>

<?php get_template_part("banner-slider"); ?>
<?php get_template_part("quick-menu"); ?>
<?php get_template_part("highlights"); ?>
<?php get_template_part("event-subscriber"); ?>
<?php get_template_part("schedule"); ?>

<script>
console.log("home");
</script>

<?php get_footer(); ?>