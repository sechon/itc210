<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content" class="page">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
    <?php the_content('<p class="serif">More &raquo;</p>'); ?>
    <?php endwhile; ?>
    <?php endif; ?>

</div>
<!-- END CONTENT -->

<?php get_footer(); ?>