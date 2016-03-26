<?php

//* Call only Testimonial post type
$post_items = new WP_Query(
    array(
        'post_type' => array( 'testimonials' ),
        'showposts' => '-1',
    )
);

//* Featured images and content
echo '<ul id="bxslider-testimonials" class="bxslider-testimonials">';

//* Run through all published testimonial post types
while( $post_items->have_posts() ) : $post_items->the_post();

    echo '<li>';
    echo the_post_thumbnail( array(100, 100) );
    echo '<blockquote>';
    echo the_excerpt();

    if ( empty( get_the_content() ) ) {
        echo '</blockquote>';
        echo '</li>';
    }
    else {
        echo '<footer>';
        echo '<a href="';
        echo the_permalink();
        echo '">';
        echo 'Read More';
        echo '</a>';
        echo '</footer>';
        echo '</blockquote>';
        echo '</li>';
    }

endwhile;

echo '</ul>';

//* Add counter variable for the data-slide-index below
$counter = 0;

//* Featured images for pager
echo '<div id="bx-pager-testimonials">';

//* Run through all published testimonial post types again
while( $post_items->have_posts() ) : $post_items->the_post();

    echo '<a data-slide-index="' . $counter . '" href="">';
    echo the_post_thumbnail( array(50, 50) );
    echo '</a>';

//* Increase counter
$counter++;

endwhile;

echo '</div>';