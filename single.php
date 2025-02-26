<?php get_header(); ?>
<?php the_post(); ?>

<main id="single">
    <h1 class="title"><?php the_title(); ?></h1>
    <datetime><?php the_date(); ?></datetime>
    <p class="tags-global">
        <?php the_tags('', ''); ?>
    </p>
    <hr>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
    <hr>
    <?php if (comments_open()) : ?>
        <details>
            <summary>Leave a comment</summary>
            <?php comment_form(array(
                'title_reply' => null,
                'comment_notes_before' => null,
                'format' => 'html5',
            )); ?>
        </details>
        <hr>
    <?php endif; ?>
    <?php comments_template(); ?>
    <nav class="prev-next">
        <div><?php previous_post_link(); ?></div>
        <div><?php next_post_link(); ?></div>
    </nav>
</main>

<?php get_footer(); ?>