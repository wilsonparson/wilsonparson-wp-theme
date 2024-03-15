<?php get_header(); ?>
<?php the_post(); ?>

<main id="single">
    <h1 class="title"><?php the_title(); ?></h1>
    <datetime><?php the_date(); ?></datetime>
    <hr>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
    <p class="tags">
        <?php the_tags('', ''); ?>
    </p>
    <hr>
    <nav class="prev-next">
        <div><?php previous_post_link(); ?></div>
        <div><?php next_post_link(); ?></div>
    </nav>
</main>

<?php get_footer(); ?>