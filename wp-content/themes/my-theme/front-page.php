<?php get_header(); ?>
<h1>Front Page</h1>
<h1><?php the_title(); ?></h1>
<h1><?php bloginfo('name'); ?></h1>
<p>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
</p>
<?php get_footer(); ?>