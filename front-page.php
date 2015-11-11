<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content" class="page">
    <!-- loop to grab content from actual front page -->
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
    <?php endif; ?>
    
<!-- loop to grab content from children of front page -->
    <?php
        $args = array(
           'numberposts' => -1,
           'post_parent' => $post->ID,
           'post_type' => 'page',
           'post_status' => 'publish',
           'orderby' => 'menu_order,title',
           'order' => 'ASC');
        $my_pagelist = &get_children($args);

        if ($my_pagelist) : foreach($my_pagelist as $my_child) : 
        $my_child_slug = get_permalink().$my_child->post_name.'/';
    ?>
<!-- used jumbotron from bootstrap/ may change later -->
<div class="jumbotron">
    <h3><?php //echo $my_child->post_title;?></h3>
    <?php echo do_shortcode($my_child->post_content); ?>
</div><!-- end jumbotron -->
<?php endforeach; ?>
<?php endif; ?>
<!-- END CONTENT -->

<?php get_footer(); ?>