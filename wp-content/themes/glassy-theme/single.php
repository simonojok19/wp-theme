<?php
get_header(); ?>
<div id="primary" class="content-area">
    <h1>Single PHP</h1>
	<main id="main" class="site-main" role="main">
		<?php
			while (have_posts()) : the_post();
//			the_post();
//			the_content();
//			if (comments_open() || get_comments_number()):
//				comments_template();
//			endif;
//			the_post_navigation(array(
//				'next_text' => '<span class="meta-nav" aria-hidden="true"',
//
//			));
			endwhile;
		?>
	</main>
</div>
<?php get_footer(); ?>