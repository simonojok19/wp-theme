<?php
/*
 * Template Name: Classes Page Template
 * Classes Page
 */
get_header();
?>
<div class="row" style="width: 80%; margin-left: auto; margin-right: auto">
    <div class="col-xs-12 col-sm-8">
        <?php if (have_posts()): the_post() ?>
        <h1><?php  the_title() ?></h1>
        <?php
            $votes = get_post_meta($post -> ID, "votes", true);
            $votes = ($votes == "") ? 0 :$votes;
        ?>
        <h3>This post has <small><?php echo $votes ?></small></h3>
        <?php
        $nonce = wp_create_nonce("my_user_vote_nonce");
        $link = admin_url('admin-ajax.php?action=my_user_vote&post_id='.$post -> ID.'&nonce='.$nonce);
        echo '<a data-nonce="'.$nonce.'" data-post_id="'.$post -> ID.'" href="'.$link.'"> vote for this article</a>'
            ?>
        <p><?php the_content() ?></p>
        <?php endif; ?>
    </div>
</div>
<?php
get_footer();
?>
