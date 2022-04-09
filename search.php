<?php get_header(); ?>

<h1>Sökresultat för: <?php the_search_query() ?></h1>

<?php while (have_posts() ) {
    the_post(); 
} ?>

<?php get_footer();

?>
