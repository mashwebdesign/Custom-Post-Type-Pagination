
<?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      		  $the_query = new WP_Query(array(
                'post_type'             => 'name',
                'posts_per_page'        => 8,
                'paged'                 => $paged,
                                                               
        ));
?>

	<?php if (have_posts() ) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<?php the_content(); ?>
    <?php endwhile; ?>
 
 

<div class="pagenav">
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts', $the_query->max_num_pages ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
</div>
<?php wp_reset_postdata(); ?>

<?php endif; ?>