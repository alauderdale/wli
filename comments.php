<?php 



if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))

die ('please do not load this page directly, Thanks!');



if ( post_password_required() ) { ?>

    <p class="nocomments">This post is password protected. Enter the password to view comments. </p>

    <?php

    return;

}

?>



<div class="comments" id="comments">

    <h3><?php comments_number( 'No Comments', '1 Comment' , '% Comments' );?></h3>

    <?php if ( have_comments() ) : ?>



    <ul class="commentlist">

    <?php wp_list_comments('avatar_size=64&type=comment'); ?>

    </ul>

    <?php endif; ?>

</div>







<?php if ( comments_open() ) : ?>



<div class="respond">

    <h1>Leave a response</h1>



    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

        <fieldset>

            <div class="left respond-left">

                <input type="text" placeholder="name" name="author" id="author" value="<?php echo $comment_author; ?>" />



                <input type="text" placeholder="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" />



                <input type="text" placeholder="website" name="url" id="url" value="<?php echo $comment_author_url; ?>" />

            </div>

            <div class="left respond-right">

                <textarea name="comment" id="comment" rows="" cols=""></textarea>



                <input type="submit" class="commentsubmit" value="submit comment" />



                <?php comment_id_fields(); ?>

                <?php do_action('comment_form', $post->ID); ?>

            </div>

        </fieldset>

    </form>

    <p class="cancel"><?php cancel_comment_reply_link('Cancel Reply'); ?></p>

    <?php else : ?>

    <h3>Comments are now closed.</h3>

    <?php endif; ?>

</div> 



