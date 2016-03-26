<?php
/**
  Template Name: RSI Jobs
*/

//* Force full width content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Add Custom Loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'custom_do_loop' );
function custom_do_loop() {

  global $post;

  $args = wp_parse_args(
      genesis_get_custom_field( 'query_args' ),
      array(
        'posts_per_page' => 10,
        'post_type'      => 'jobs',
        'post_status'    => 'publish',
        'paged'          => get_query_var( 'paged' ) )
  );

  global $wp_query;
  $wp_query = new WP_Query( $args );

  if( have_posts() ) { ?>

      <div class="available-jobs">

        <div class="wrap">
          <ul> <?php

            $args = array(
            	'style'      => 'list',
            	'hide_empty' => 1,
            	'title_li'   => __( '' ),
            	'taxonomy'   => 'job_position'
            );
            wp_list_categories( $args ); ?>

          </ul>
        </div>

        <div class="wrap">
          <table class="table-rwd"> <?php

          while( have_posts() ): the_post(); ?>

            <tr>
              <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
              <td style="text-transform: capitalize;"><?php the_field( 'job_location' ); ?></td>
              <td><?php the_time( 'M j' ); ?></td>
            </tr> <?php

          endwhile; ?>

          </table>
        </div> <?php

        genesis_posts_nav(); ?>

      </div> <?php

      wp_reset_query();

    }

}

genesis();
