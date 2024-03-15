<div id="posts">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <article class="post">
                <?php the_post_thumbnail(); ?>
                <div class="content">

                    <h2 class="post-title">
                        <?php the_title(); ?>
                    </h2>
                    <div class="meta">
                        <p>
                            <datetime><?php the_date(); ?></datetime>
                        </p>
                        <p><?php the_tags(''); ?></p>
                    </div>
                    <?php the_excerpt(); ?>
                    <div class="read-more">
                        <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
                    </div>
                </div>
            </article>
    <?php
        }
    }
    ?>
</div>