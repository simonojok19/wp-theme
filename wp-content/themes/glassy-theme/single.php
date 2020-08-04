<?php
/*
 * Template Name: Classes Page Template
 * Classes Page
 */
get_header();
?>
<div class="row" style="width: 80%; margin-left: auto; margin-right: auto">
    <div class="col-xs-12 col-sm-8">
        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_title();
                    the_content();
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    the_category();
                    the_tags();
                    the_author_posts();
                    the_comment();
                    edit_post_link();
                }
            }
        ?>
    </div>
</div>
<?php
get_footer();
?>
