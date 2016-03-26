<?php

// The Query
$exec_query = new WP_Query( array (
  'post_type' => 'jobs',
  'job_role'  => 'executive',
  'posts_per_page' => 4
) );

// The Loop
if ( $exec_query->have_posts() ) { ?>

    <div class="executive column one-half">

      <h3 class="title">Executive</h3>

      <ul> <?php

    while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
          <small><?php the_field( 'job_location' ); ?></small>
        </li> <?php

    endwhile; ?>

      </ul>

    </div> <?php

    // Restore original Post Data
    wp_reset_postdata();

}

// The Query
$manage_query = new WP_Query( array (
  'post_type' => 'jobs',
  'job_role'  => 'management',
  'posts_per_page' => 4
) );

// The Loop
if ( $manage_query->have_posts() ) { ?>

    <div class="management column one-half">

      <h3 class="title">Management</h3>

      <ul> <?php

  	while ( $manage_query->have_posts() ) :	$manage_query->the_post(); ?>

        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
          <small><?php the_field( 'job_location' ); ?></small>
        </li> <?php

    endwhile; ?>

      </ul>

    </div> <?php

    // Restore original Post Data
    wp_reset_postdata();

}
