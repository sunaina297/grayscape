<?php get_header();
?>

<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/replace-c.jpg') ?>);"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">SFU TECH ENTREPRENEURS</h1>
    <h2 class="headline headline--medium"></h2>
    <h3 class="headline headline--small"></h3>
    <div class="site-header__col-four">
      <nav>
        <ul class="min-list social-icons-list group">
          <li><a href="https://www.facebook.com/techeclub/" class=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" class=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#" class=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/techeclub/?hl=en" class=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </nav>
    </div>
  </div>
  </div>
</div>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center"></h2>
      <div class="event-summary-img">
        <div class="pic1">
          <img class="img-sfuinn" src="<?php echo get_theme_file_uri('/images/sfuinn.png') ?>" height="200" width="200"></a></h1>
        </div>
        <div class="pic2">
          <img class="img-sfss" src="<?php echo get_theme_file_uri('/images/sfss.png') ?>" height="150" width="150"></a></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="full-width-split__two">
    <div class="full-width-split__inner split-two__overlay">
      <h2 class="headline headline--small-plus t-center">U P C O M I N G</h2>

      <div class="event-summary">
        <a class="event-summary__date event-summary__date--blue t-center" href="#">
          <span class="event-summary__month">Jul</span>
          <span class="event-summary__day">19</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo site_url('/career-night') ?>">Start Up Careers</a></h5>
          <p class="event-summary__subtitle">Meet the professionals behind start-ups. <a href="<?php echo site_url('/career-night') ?>" class="nu gray">Read more</a></p>
        </div>
      </div>
        <p class="t-center no-margin"><a href="<?php echo site_url('/career-night') ?>" class="btn btn--lgray">Event Details</a></p>
      </div>

    </div>
  </div>

<div class="hero-slider">
<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/letsTech-c.jpg') ?>);">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">Let's Tech about it</h2>
      <p class="t-center">Problem Identification and Market-driven Solutions.</p>
      <p class="t-center no-margin"><a href="<?php echo site_url('/lets-tech') ?>" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/sim-c.jpg') ?>);">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">From Problem to Idea</h2>
      <p class="t-center">Prototypes and Propositions.</p>
      <p class="t-center no-margin"><a href="<?php echo site_url('/problem-to-idea') ?>" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
</div>

</div>
</div>



<?php
  get_footer();
?>
