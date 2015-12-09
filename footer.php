     <hr>

    </div> <!-- /container -->

<!-- query for subscribe -->
    <?php
        $args = array(
            'pagename' => 'home-2/subscribe',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="subscribe">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<!-- query for donate -->
    <?php
        $args = array(
            'pagename' => 'home-2/donate',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="donate">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


<div id="social" class="text-center"> 
        <ul>
        <li><a href="https://www.facebook.com/taynval" target="_blank"><img class="social-logo" src="http://52.11.250.158/wp-content/uploads/2015/11/facebook.svg" alt="Facebook"></a></li>
        <li><a href="https://www.twitter.com/taynval" target="_blank"><img class="social-logo" src="http://52.11.250.158/wp-content/uploads/2015/11/twitter.svg" alt="Twitter"></a></li>
        <li><a href="https://www.youtube.com/channel/UCibiDo4HiLXAcaalJsM5SAQ?sub_confirmation=1" target="_blank"><img class="social-logo" src="http://52.11.250.158/wp-content/uploads/2015/11/youtube.svg" alt="YouTube"></a></li>
        <li><a href="https://www.pinterest.com/taynval/" target="_blank"><img class="social-logo" src="http://52.11.250.158/wp-content/uploads/2015/11/pinterest.svg" alt="Pinterest"></a></li>
        </ul>       
</div><!-- End Social -->


<footer>
    <div class="footer">
        <p class="text-center">© Dreams Unlimited <?php echo date('Y'); ?> | <a href="#">Privacy And Terms of Agreement</a></p>
    </div>
</footer>
<?php wp_footer(); ?>

  </body>
</html>