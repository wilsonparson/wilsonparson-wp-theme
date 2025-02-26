<?php if (have_comments()) : ?>
    <div id="comments">
        <h2>Comments</h2>
        <ul>
            <?php wp_list_comments(); ?>
        </ul>
    </div>
    <hr>
<?php endif ?>