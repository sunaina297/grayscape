<?php
  get_header();

  /*for every single page*/
  while(have_posts()) {
    the_post(); ?>
    <div class="page-banner--sections">
    <div class="page-banner--sections__content container container--narrow">
      <h1 class="page-banner--sections__title"><?php the_title() ?></h1>
    </div>
  </div>

<?php
 /*if page = about us*/
  if(get_the_ID() == 9){
    the_content();
?>
  <div class='abt-img'>
    <img class="abt1" src="<?php echo get_theme_file_uri('/images/team.png') ?>">
  </div>
<?php
  }
  /*if page = sponsors*/
  else if(get_the_ID() == 17){
?>
<div class='spn-items'>
  <div class='spn-p'>
    <p> We are grateful to our sponsors for supporting the clubs' mission.
      If you would like to join as a sponser, please contact us at <b>teclub@sfu.ca</b>.
      Thank you!</p>
  </div>
  <div class='spn-img'>
    <img class="spn1" src="<?php echo get_theme_file_uri('/images/sfuinn.jpg') ?>">
    <img class="spn2" src="<?php echo get_theme_file_uri('/images/sfss.png') ?>">
  </div>
</div>
<?php
  }
  /*end of if page = sponsers*/

  /*if page = events subpages*/
  else if(get_the_ID() == 21) {
  ?>
    <div class='evt-subs'>
        <img class='evt-img' src="<?php echo get_theme_file_uri('/images/c-tech.png') ?>">
        <p class='evt-p'> <b>SFU Tech Entrepreneurs</b> hosted its' first ever event
          <b>Let's Tech About It</b> to engage the SFU community and inspire them to
          pursue their entrepreneurial dreams..
          <br><br>
          <a href="https://www.eventbrite.ca/e/lets-tech-about-it-tickets-43641766699#">Read More</a>
        </p>
    </div>
<?php }
    else if(get_the_ID() == 23) {
    ?>
    <div class='evt-subs'>
        <img class='evt-img' src="<?php echo get_theme_file_uri('/images/c-idea.png') ?>">
        <p class='evt-p'> <b>SFU Tech Entrepreneurs</b> hosted its' second event
          <b>From Problem to Idea</b>, also known as Startup Simulation, to provide an engaging environment
          to create and criticize solutions to various problems..
          <br><br>
          <a href="https://www.eventbrite.ca/e/from-problem-to-idea-tickets-45946623588#">Read More</a>
        </p>
    </div>
<?php }
    else if(get_the_ID() == 19) {
    ?>
    <div class='evt-subs'>
        <img class='evt-img' src="<?php echo get_theme_file_uri('/images/c-career.png') ?>">
        <p class='evt-p'> <b>SFU Tech Entrepreneurs</b> hosted its' first career night event with
          <b>Startup Careers in Tech</b>. It provided an opportunity for students to learn about
          various tech industries in their start-up phase, and learn first-hand from different professionals..
          <br><br>
          <a href="https://www.eventbrite.ca/e/startup-careers-in-tech-tickets-47653102713">Read More</a>
        </p>
    </div>

<?php  }
    /*if page = contact*/
    else if(get_the_ID() ==43) {
        the_content();
    }
  /*end of page = events subpages*/

  /*for every other page*/
  else {
?>
  <div class="container container--narrow page-section">
    <?php
    $parentID = wp_get_post_parent_id(get_the_ID());
    if ($parentID) { ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($parentID); ?>">
          <i class="fa fa-home" aria-hidden="true"></i>Back To <?php echo get_the_title($parentID); ?></a>
      </div>
    <?php } ?>
    <div class="page-links">
      <ul class="min-list">
        <?php
        wp_list_pages(array(
          'title_li' => NULL,
          'child_of' => get_the_ID()
        ));
        ?>
      </ul>
    </div>

    <div class="generic-content">
      <?php the_content() ?>
    </div>

  </div>
<?php } ?>
  <?php }

  get_footer();

  ?>
