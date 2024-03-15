<?php get_header(); ?>
<?php the_post(); ?>

<main id="single">
    <h1 class="title"><?php the_title(); ?></h1>
    <div class="meta">
        <datetime><?php the_date(); ?></datetime>
        <p>
            <?php the_tags(''); ?>
        </p>
    </div>
    <hr>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
    <hr>
    <nav class="prev-next">
        <div><?php previous_post_link(); ?></div>
        <div><?php next_post_link(); ?></div>
    </nav>
</main>

<?php get_footer(); ?>