<?php get_header(); ?>
<?php the_post(); ?>

<main>
    <h1><?php the_title(); ?></h1>
    <div class="text-sm -mt-4 mb-12">
        <datetime class="block"><?php the_date(); ?></datetime>
        <p>
            <?php the_tags(''); ?>
        </p>
    </div>
    <?php the_content(); ?>
    <hr>
    <div class="flex gap-8 justify-between">
        <div class="text-left flex-1">
            <?php previous_post_link(); ?>
        </div>
        <div class="text-right flex-1">
            <?php next_post_link(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>