<div id="posts">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <article class="post">
                <?php
                if (has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php } ?>
                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <p>
                    <datetime><?php the_date(); ?></datetime>
                </p>
            </article>
            <hr>
    <?php
        }
    }
    ?>
</div>