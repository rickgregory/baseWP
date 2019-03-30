<?php

/* template name:  Inside Page */
  get_header();?>


    <?php
      $bg = get_field('color_background');
      if($bg == "Green") {$bg = "green";} elseif($bg == "Blue") {$bg = "blue";} elseif($bg == "White") {$bg = "white";}elseif($bg == "Teal"){$bg = "teal";}

      $list_bg = get_field('icon_list_background');
      if($list_bg == "Green") {$list_bg = "green";} elseif($list_bg == "Blue") {$list_bg = "blue";} elseif($list_bg == "White") {$list_bg = "white";}elseif($list_bg == "Teal"){$list_bg = "teal";}
    ?>
    <main class="interior">
        <div class="hero">
            <?php
            if(has_post_thumbnail()){the_post_thumbnail();} ?>
        </div>

        <section class="blurb <?php echo $bg; ?>">
            <div class="content">
                <p><?php the_field('blurb_text');?></p>
            </div>

        </section><div class="icon-list <?php echo $list_bg; ?>">
            <div class="list-container">
            <?php
                if( have_rows('icon_list') ):
                    while ( have_rows('icon_list') ) : the_row(); ?>
                        <a href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('icon'); ?>" /></a>
                <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>

        <div class="wrap flex-container">
                    <div class="post">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php the_content() ?>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>

                    </div>
            <aside class="sidebar">
                <?php get_sidebar(); ?>
            </aside>
        </div>

    </div>


    </main>
    <?php get_footer();?>
