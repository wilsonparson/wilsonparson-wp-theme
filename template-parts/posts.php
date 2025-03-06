<div id="posts">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <article class="post">
                <a href="<?php the_permalink(); ?>">
                    <?php
                    if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); ?>
                    <?php } ?>
                    <h2 class="post-title">
                        <?php the_title(); ?>
                    </h2>
                </a>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <p>
                    <?php if (has_tag()) : ?>
                <div class="tags-global">
                    <?php the_tags('', ''); ?>
                </div>
            <?php endif; ?>
            <datetime><?php the_date(); ?></datetime>
            </p>
            </article>
            <hr>
    <?php
        }
    }
    ?>
</div>