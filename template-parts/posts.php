<div id="posts">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <article class="post">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <div class="meta">
                    <p>
                        <datetime><?php the_date(); ?></datetime>
                    </p>
                    <p><?php the_tags(''); ?></p>
                </div>
            </article>
    <?php
        }
    }
    ?>
</div>