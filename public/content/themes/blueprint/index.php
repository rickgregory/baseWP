<?php get_header();?>
<div class="content">
    <main>
        <?php if (have_posts()) : ?>
        	<?php while (have_posts()) : the_post(); ?>
                <?php the_title() ?>
                <?php the_content() ?>
        	<?php endwhile; ?>
            <?php else : ?>
        <?php endif; ?>
    </main>
    <aside class="sidebar">
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php get_footer();?>
