<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );


/************* REGISTER CHILD THEME *************/

//* Child theme info (you can change it if you like)
define( 'CHILD_THEME_NAME', __( 'Genesis Boilerplate', 'geneplate' ) );
define( 'CHILD_THEME_URL', 'http://github.com/bradonomics/genesis-boilerplate/' );
define( 'CHILD_THEME_VERSION', '0.1.0' );


/************* THEME SUPPORT *************/

//* Include Google fonts, responsive menu icon and dashicons and remove comment-reply script.
add_action( 'wp_enqueue_scripts', 'geneplate_enqueue_scripts' );
function geneplate_enqueue_scripts() {
  wp_enqueue_style( 'fonts-net', '//fast.fonts.net/cssapi/527bcc72-7a7a-484b-83aa-d948f640b397.css', array(), CHILD_THEME_VERSION );
  wp_enqueue_style( 'dashicons' );

  wp_dequeue_script ( 'comment-reply' );

  //* Move jQuery before closing body tag.
  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );

  //* To use jQuery Migrate uncomment the wp_register_script & wp_enqueue_script lines.
  wp_deregister_script( 'jquery-ui' );
//  wp_enqueue_script( 'jquery-ui', includes_url( '/js/jquery/jquery-migrate.min.js' ), false, NULL, true );

  wp_enqueue_script( 'main', get_bloginfo( 'stylesheet_directory' ) . '/js/main.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

  if ( is_page( 'client' ) || is_page( 'candidate' ) ) {
      wp_enqueue_script( 'bxslider', get_bloginfo( 'stylesheet_directory' ) . '/js/jquery.bxslider.js', array( 'jquery' ), '4.2.5', true );
      wp_enqueue_script( 'bxslider-plugin', get_bloginfo( 'stylesheet_directory' ) . '/js/bxslider.plugin.js', array( 'bxslider' ), CHILD_THEME_VERSION, true );
      wp_enqueue_script( 'google-maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyBwhETiTQIhmwISWz1lylMBId7HIiXId0I&callback=initMap', array( 'jquery' ), CHILD_THEME_VERSION, true );
  }

}

//* Move Gravity Forms Scripts to footer
add_filter( 'gform_init_scripts_footer', 'init_scripts' );
function init_scripts() {
    return true;
}

//* Automatically scroll to the confirmation text upon submission of Gravity Forms
add_filter( 'gform_confirmation_anchor', '__return_true' );

//* Move child theme stylesheet to the end of the line so it takes precedence over plugin stylesheets.
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
add_action( 'wp_enqueue_scripts', 'genesis_enqueue_main_stylesheet', 999 );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Include Custom Post Types
include_once( get_stylesheet_directory() . '/inc/custom-post-types.php' );

//* Include Custom Taxonomies
include_once( get_stylesheet_directory() . '/inc/custom-taxonomies.php' );

//* Add Structural Wraps
add_theme_support( 'genesis-structural-wraps', array( 'header', 'footer-widgets', 'footer' ) );

//* Remove Edit Link
add_filter( 'edit_post_link', '__return_false' );

//* Remove Emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/************* UNREGISTER LAYOUTS AND WIDGETS *************/

//* Unregister layout settings
// genesis_unregister_layout( 'full-width-content' );
genesis_unregister_layout( 'content-sidebar' );
genesis_unregister_layout( 'sidebar-content' );
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
genesis_unregister_layout( 'sidebar-content-sidebar' );

//* Unregister Sidebars
unregister_sidebar( 'sidebar' );
unregister_sidebar( 'sidebar-alt' );
unregister_sidebar( 'header-right' );

//* Remove unused Genesis Widgets
add_action( 'widgets_init', 'remove_genesis_widgets', 20 );
function remove_genesis_widgets() {
  unregister_widget( 'Genesis_Featured_Page' );
  unregister_widget( 'Genesis_Featured_Post' );
  unregister_widget( 'Genesis_User_Profile_Widget' );
}


/************* HEAD *************/

//* Remove WordPress version
remove_action( 'wp_head', 'wp_generator' );

//* Remove RSD Link in Header
remove_action( 'wp_head', 'rsd_link' );


/************* HEADER *************/

//* Add Headline Area to Homepage
add_action( 'genesis_header', 'rsi_front_headline' );
function rsi_front_headline() {
    if ( is_front_page() ) { ?>
        <div class="site-branding column one-half">
          <h1>RSI International Asia</h1>
          <p>Premier Executive Search in ASEAN</p>
        </div>

        <div class="home-learnmore">
          <a href="#home_learnmore" class="button">Learn More</a>
        </div> <?php
    }
}


/************* NAVIGATION *************/

//* Reposition the primary navigation menu inside the header
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav' );

//* Remove Navigation on Homepage
add_action( 'get_header', 'child_remove_genesis_do_nav' );
function child_remove_genesis_do_nav() {
    if ( is_front_page() ) {
        remove_action( 'genesis_header', 'genesis_do_nav' );
    }
}

//* Assign different menus to client and candidate pages
add_action( 'genesis_before', 'sk_replace_menu_in_primary' );
function sk_replace_menu_in_primary() {
	if( is_page( 'client' ) ) {
		add_filter( 'wp_nav_menu_args', 'rsi_do_client_menu' );
	}
  	if( is_page( 'candidate' ) ) {
		add_filter( 'wp_nav_menu_args', 'rsi_do_candidate_menu' );
	}
}
function rsi_do_client_menu( $args ) {
	if ( $args['theme_location'] == 'primary' ) {
		$args['menu'] = 'Client Nav';
	}
	return $args;
}
function rsi_do_candidate_menu( $args ) {
	if ( $args['theme_location'] == 'primary' ) {
		$args['menu'] = 'Candidate Nav';
	}
	return $args;
}


/************* CONTENT AREA *************/

//* Add After Header Image
add_action( 'genesis_before_content_sidebar_wrap', 'rsi_do_header_image' );
function rsi_do_header_image() {

    if ( is_page( 'client' ) ) {
        echo '<div style="background-image: ';
        echo "url('" . get_bloginfo( 'url' ) . "/wp-content/themes/RSI/images/top-header-1.jpg')";
        echo ';" class="top-header">';
        echo '<div class="intro"><div class="wrap"><h2 class="entry-title column one-half">.Client</h2><p>Whether you\'re searching for your dream job or looking to recruit the ideal person for your business, we can help. At RSI International Asia we bring business executives and employers together.</p></div></div>';
        echo '</div>';
    }

    if ( is_page( 'candidate' ) ) {
        echo '<div style="background-image: ';
        echo "url('" . get_bloginfo( 'url' ) . "/wp-content/themes/RSI/images/top-header-2.jpg')";
        echo ';" class="top-header">';
        echo '<div class="intro"><div class="wrap"><h2 class="entry-title column one-half">.Candidate</h2><p>Whether you\'re searching for your dream job or looking to recruit the ideal person for your business, we can help. At RSI International Asia we bring business executives and employers together.</p></div></div>';
        echo '</div>';
    }

    if ( is_page( 'available-jobs' ) ) {
        echo '<div style="background-image: ';
        echo "url('" . get_bloginfo( 'url' ) . "/wp-content/themes/RSI/images/top-header-3.jpg')";
        echo ';" class="top-header">';
        echo '<div class="intro"><div class="wrap"><h2 class="entry-title column one-half">.Available Jobs</h2><p>Whether you\'re searching for your dream job or looking to recruit the ideal person for your business, we can help. At RSI International Asia we bring business executives and employers together.</p></div></div>';
        echo '</div>';
    }

    $headerImage = rand(1,2);

    if ( !is_front_page() && !is_page( 'client' ) && !is_page( 'candidate' ) && !is_page( 'available-jobs' ) ) {
        echo '<div style="background-image: ';
        echo "url('" . get_bloginfo( 'url' ) . "/wp-content/themes/RSI/images/top-header-{$headerImage}.jpg')";
        echo ';" class="top-header shrinked-header">';
        echo '</div>';
    }

}

//* Remove the entry meta in the entry header
add_action( 'genesis_entry_header', 'jobs_remove_entry_meta' );
function jobs_remove_entry_meta() {
    if ( is_singular( 'jobs' ) || is_singular( 'testimonials' ) ) {
        remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    }
}

//* Add wrap inside entry-content div in case full-width images are needed.
add_action( 'genesis_entry_content', 'entry_content_wrap_open', 1 );
add_action( 'genesis_entry_content', 'entry_content_wrap_close', 25 );
function entry_content_wrap_open() {
    echo '<div class="wrap">';
}
function entry_content_wrap_close() {
    echo '</div>';
}

//* Add a 'iframe-embed' div around videos and such for responsive designs
add_filter('the_content', 'iframe_responsive_wrapper');
function iframe_responsive_wrapper($content) {

  $pattern = '~<iframe.*</iframe>|<embed.*</embed>~';
  preg_match_all($pattern, $content, $matches);

  foreach ($matches[0] as $match) {
    $wrappedframe = '<div class="iframe-embed">' . $match . '</div>';
    $content = str_replace($match, $wrappedframe, $content);
  }

  return $content;

}

// Add id="content" attribute to <main> element
add_filter( 'genesis_attr_content', 'my_attr_content' );
function my_attr_content( $attr ) {

     $attr['id'] .= 'content';
     return $attr;

}

//* Add "view all jobs" button at bottom of single job listings
add_action( 'genesis_after_entry', 'return_all_jobs_button' );
function return_all_jobs_button() {

    $taxonomy = 'job_position';
    $terms = get_terms( $taxonomy, '' );
    if ($terms) {
      foreach($terms as $term) {
        $category_button = '<a href="' . esc_attr( get_term_link( $term, $taxonomy ) ) . '" class="button">View All Jobs In ' . $term->name . '</a>';
      }
    }

    if ( is_singular( 'jobs' ) ) {
        echo '<aside class="single-job">';
        echo '<div style="text-align:center;"><a href="' . get_site_url()  . '/available-jobs/" class="button">View all jobs</a>' . $category_button . '</div>';
        echo '<div class="wrap">';
        echo '<h2 class="job-application">Apply For This Job</h2>';
        gravity_form( 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true );
        echo '</div>';
        echo '</aside>';
    }

}


/************* SIDEBARS *************/

//* Add wrap inside sidebar div.
add_action( 'genesis_before_sidebar_widget_area', 'sidebar_wrap_open' );
add_action( 'genesis_after_sidebar_widget_area', 'sidebar_wrap_close' );
function sidebar_wrap_open() {
  echo '<div class="wrap">';
}
function sidebar_wrap_close() {
  echo '</div>';
}


/************* FOOTER WIDGETS *************/

//* Add 2, 3 or 4-Column Footer Widget Area
// add_theme_support( 'genesis-footer-widgets', 3 );


/************* FOOTER *************/

//* Custom footer text and copyright info
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'geneplate_footer' );
function geneplate_footer() { ?>
  <div class="column one-half">
    <ul class="footer-menu">
      <li>&copy; <?php echo date('Y') ?> RSI International Asia. All Rights Reserved.</li>
      <li>น.1283/2555</li>
    </ul>
  </div>
  <div class="column one-half">
    <ul class="footer-menu">
      <li><a href="<?php get_site_url(); ?>/blog/">News and Events(Blog)</a>
      </li>
      <li><a href="<?php get_site_url(); ?>/privacy-policy/">Privacy Policy</a>
      </li>
      <li><a href="<?php get_site_url(); ?>/terms-and-conditions/">Terms and Conditions</a>
      </li>
    </ul>
  </div><?php
}


/************* TESTING *************/


