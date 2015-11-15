<?php get_header(); ?>

<!-- START CONTENT -->
<!-- query for front page -->
    <?php
        $args = array(
            'pagename' => 'home 2',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="jumbotron">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for quote -->
    <?php
        $args = array(
            'pagename' => 'home 2/quote',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="jumbotron">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for video -->
    <?php
        $args = array(
            'pagename' => 'home 2/video',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="jumbotron">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for about -->
    <?php
        $args = array(
            'pagename' => 'home 2/about',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="jumbotron">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for dreams -->
    <?php
        $args = array(
            'pagename' => 'home 2/dreams',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="jumbotron">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for testimonials -->
    <?php
        $args = array(
            'pagename' => 'home 2/testimonials',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="jumbotron">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for events -->
    <?php
        $args = array(
            'pagename' => 'home 2/events',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="jumbotron">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for contact -->
    <?php
        $args = array(
            'pagename' => 'home 2/contact',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="jumbotron">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for sponsors -->
    <?php
        $args = array(
            'pagename' => 'home 2/sponsors',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="jumbotron">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
<!-- END CONTENT -->

<?php get_footer(); ?>