<?php

//* Force full width content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Add Custom Loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'custom_do_loop' );
function custom_do_loop() { ?>
<div class="wrap">

  <section class="intro purple-light">

    <h2 class="entry-title">What We Do</h2>

    <?php the_field( 'what_we_do_intro_text' ); ?>

  </section>

  <section class="key-highlight purple-light">

    <p><b>Key highlights include:</b></p>

    <div class="column one-half">
      <?php the_field( 'key_highlights_left' ); ?>
    </div>

    <div class="column one-half">
      <?php the_field( 'key_highlights_right' ); ?>
    </div>

  </section>

  <div class="clear-6rem title-quote"><?php the_field( 'transition_text' ); ?></div>

  <section id="home_learnmore" class="cilent column one-half">

    <h3 class="title-content">.Client</h3>
    <p><?php the_field( 'client_text_home_page' ); ?></p>

    <footer>
      <a href="./client/" class="button">Read More</a>
    </footer>

  </section>

  <section class="candidate column one-half">

  <h3 class="title-content">.Candidate</h3>
  <p><?php the_field( 'candidate_text_home_page' ); ?></p>

  <footer>
    <a href="./candidate/" class="button">Read More</a>
  </footer>

  </section>

</div>

<div class="clear-6rem"></div> <?php
}

genesis();
