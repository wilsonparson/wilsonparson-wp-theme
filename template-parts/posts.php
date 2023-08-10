<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <article>
            <h2 class="not-prose !mb-4">
                <a href="<?php the_permalink(); ?>" class="font-semibold no-underline hover:underline hover:text-blue-700 dark:hover:text-blue-300"><?php the_title(); ?></a>
            </h2>
            <?php the_excerpt(); ?>
            <datetime class="block text-sm"><?php the_date(); ?></datetime>
            <p class="text-sm">
                <?php the_tags(''); ?>
            </p>
        </article>
        <hr>
<?php
    }
}
?>