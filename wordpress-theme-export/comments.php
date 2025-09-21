<?php
/**
 * The template for displaying comments
 *
 * @package Export_Business_Theme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area mt-12 pt-12 border-t">

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()) :
    ?>
        <h2 class="comments-title text-2xl font-bold mb-6">
            <?php
            $comment_count = get_comments_number();
            if ('1' === $comment_count) {
                printf(
                    /* translators: 1: title. */
                    esc_html__('One thought on &ldquo;%1$s&rdquo;', 'export-theme'),
                    '<span>' . wp_kses_post(get_the_title()) . '</span>'
                );
            } else {
                printf( 
                    /* translators: 1: comment count number, 2: title. */
                    esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'export-theme')),
                    number_format_i18n($comment_count),
                    '<span>' . wp_kses_post(get_the_title()) . '</span>'
                );
            }
            ?>
        </h2>

        <?php the_comments_navigation(); ?>

        <ol class="comment-list space-y-6">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'callback'   => 'export_theme_comment',
            ));
            ?>
        </ol>

        <?php
        the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if (!comments_open()) :
        ?>
            <p class="no-comments text-muted-foreground"><?php esc_html_e('Comments are closed.', 'export-theme'); ?></p>
        <?php
        endif;

    endif; // Check for have_comments().
    ?>

    <?php
    // Comment form
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ($req ? " aria-required='true'" : '');

    $fields = array(
        'author' =>
            '<div class="comment-form-author mb-4">' .
            '<label for="author" class="label mb-2 block">' . __('Name', 'export-theme') . ($req ? ' <span class="required text-red-500">*</span>' : '') . '</label> ' .
            '<input id="author" name="author" type="text" class="input" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />' .
            '</div>',

        'email' =>
            '<div class="comment-form-email mb-4">' .
            '<label for="email" class="label mb-2 block">' . __('Email', 'export-theme') . ($req ? ' <span class="required text-red-500">*</span>' : '') . '</label> ' .
            '<input id="email" name="email" type="email" class="input" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' />' .
            '</div>',

        'url' =>
            '<div class="comment-form-url mb-4">' .
            '<label for="url" class="label mb-2 block">' . __('Website', 'export-theme') . '</label>' .
            '<input id="url" name="url" type="url" class="input" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" />' .
            '</div>',

        'cookies' =>
            '<div class="comment-form-cookies-consent mb-4">' .
            '<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" class="mr-2"' . (empty($commenter['comment_author_email']) ? '' : ' checked="checked"') . ' />' .
            '<label for="wp-comment-cookies-consent" class="text-sm text-muted-foreground">' . __('Save my name, email, and website in this browser for the next time I comment.', 'export-theme') . '</label>' .
            '</div>',
    );

    $args = array(
        'fields' => $fields,
        'comment_field' =>
            '<div class="comment-form-comment mb-4">' .
            '<label for="comment" class="label mb-2 block">' . _x('Comment', 'noun', 'export-theme') . ' <span class="required text-red-500">*</span></label>' .
            '<textarea id="comment" name="comment" class="textarea" rows="8" aria-required="true" required></textarea>' .
            '</div>',
        'class_form' => 'comment-form',
        'class_submit' => 'btn btn-primary',
        'title_reply' => __('Leave a Reply', 'export-theme'),
        'title_reply_to' => __('Leave a Reply to %s', 'export-theme'),
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title text-xl font-bold mb-6">',
        'title_reply_after' => '</h3>',
        'cancel_reply_link' => __('Cancel reply', 'export-theme'),
        'label_submit' => __('Post Comment', 'export-theme'),
        'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>',
        'format' => 'xhtml',
    );

    comment_form($args);
    ?>

</div>

<?php
/**
 * Custom comment template
 */
function export_theme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class('card'); ?> id="comment-<?php comment_ID(); ?>">
        <article class="card-content">
            <header class="comment-meta flex items-start mb-4">
                <div class="comment-author vcard flex items-center">
                    <?php echo get_avatar($comment, 48, '', '', array('class' => 'rounded-full mr-3')); ?>
                    <div>
                        <b class="fn text-foreground"><?php comment_author_link(); ?></b>
                        <div class="comment-metadata text-sm text-muted-foreground">
                            <time datetime="<?php comment_time('c'); ?>">
                                <?php
                                /* translators: 1: date, 2: time */
                                printf(__('%1$s at %2$s', 'export-theme'), get_comment_date(), get_comment_time());
                                ?>
                            </time>
                            <?php edit_comment_link(__('Edit', 'export-theme'), ' <span class="edit-link">', '</span>'); ?>
                        </div>
                    </div>
                </div>
            </header>

            <?php if ('0' == $comment->comment_approved) : ?>
                <p class="comment-awaiting-moderation bg-yellow-100 text-yellow-800 p-3 rounded mb-4">
                    <?php _e('Your comment is awaiting moderation.', 'export-theme'); ?>
                </p>
            <?php endif; ?>

            <div class="comment-content prose prose-sm max-w-none mb-4">
                <?php comment_text(); ?>
            </div>

            <div class="reply">
                <?php
                comment_reply_link(array_merge($args, array(
                    'depth' => $depth,
                    'max_depth' => $args['max_depth'],
                    'reply_text' => __('Reply', 'export-theme'),
                    'before' => '<span class="btn btn-ghost btn-sm">',
                    'after' => '</span>',
                )));
                ?>
            </div>
        </article>
    </li>
    <?php
}