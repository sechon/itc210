<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content" class="page">
    <?php
        $my_slug = get_permalink();
        $args = array(
           'numberposts' => -1,
           'post_parent' => $post->ID,
           'post_type' => 'page',
           'post_status' => 'publish',
           'orderby' => 'menu_order,title',
           'order' => 'ASC');
        $my_pagelist = &get_children($args);

        if ($my_pagelist) : foreach($my_pagelist as $my_child) : 
        $my_child_slug = $my_slug.$my_child->post_name.'/';
    ?>
<div class="jumbotron">
    <h3><?php //echo $my_child->post_title;?></h3>
    <?php echo $my_child->post_content; ?>
</div><!-- end jumbotron -->
<?php endforeach; ?>
<?php endif; ?>
<!-- END CONTENT -->

<?php get_footer(); ?>