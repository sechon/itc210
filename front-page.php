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
    
<!-- Start of tab section -->
<div id="about">
<div class="jumbotron">
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#about2">ABOUT</a></li>
    <li><a data-toggle="tab" href="#history">HISTORY</a></li>
    <li><a data-toggle="tab" href="#book">BOOK TAY & VAL</a></li>
  </ul>

  <div class="tab-content">
    <div id="about2" class="tab-pane fade in active">
      <!-- query for about --><p>
        <?php
            $args = array(
                'pagename' => 'home 2/about',);
            $query = new WP_Query($args);
        ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </p>
    </div>
    <div id="history" class="tab-pane fade">
      <!-- query for history --><p>
        <?php
            $args = array(
                'pagename' => 'home 2/history-2',);
            $query = new WP_Query($args);
        ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </p>
    </div>
    <div id="book" class="tab-pane fade">
        <!-- query for book --><p>
        <?php
            $args = array(
                'pagename' => 'home 2/book-tay-val-2',);
            $query = new WP_Query($args);
        ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </p>
    </div>
  </div>
</div>
</div>
</div><!-- close about id -->

    
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
    
<!-- Testimonial/Events Section -->
<div class="jumbotron">    
<div class="row"> 
    <div class="col-md-3 col-md-offset-1">
    <!-- query for testimonials -->
        <?php
            $args = array(
                'pagename' => 'home 2/testimonials',);
            $query = new WP_Query($args);
        ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>

    <div class="col-md-6 col-md-offset-2">
    <!-- query for events -->
        <?php
            $args = array(
                'pagename' => 'home 2/events',);
            $query = new WP_Query($args);
        ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</div>        
</div>
    
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