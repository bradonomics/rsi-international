<?php

// Retrieve all galleries of this post
$galleries = get_post_galleries_images( 201 );

$image_list = '<ul id="bxslider-client-logos" class="bxslider-client-logos">';

// Loop through galleries
foreach( $galleries as $gallery ) {

    // Loop through each image in each gallery
    foreach( $gallery as $image ) {

        $image_list .= '<li><img src="' . $image . '"></li>';

    }

}

$image_list .= '</ul>';

echo $image_list;
