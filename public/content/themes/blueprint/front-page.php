<?php get_header();?>
<div class="hero">
    <?php
            $image = get_field('hero_image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)

            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }
            ?>
</div>
<div class="tagline"><p><?php the_field('hero_tagline');?></p></div>

<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('home_page_content') ):

		// loop through all the rows of flexible content
		while ( have_rows('home_page_content') ) : the_row();

         	if( get_row_layout() == 'testimonial' )
			get_template_part('partials/stripe', 'quote');

 		if( get_row_layout() == 'section' )
			get_template_part('partials/stripe', 'section');

		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>
<?php get_footer();?>
