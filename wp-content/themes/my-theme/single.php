<?php
get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        while (have_posts()): the_post();
        get_template_part('content', get_post_format());
        if (comments_open() || get_comments_number()) {
            comments_template();
        }
        endwhile;
        ?>
    </main>
</div>