<?php
  get_header();

  while(have_posts()) {
    the_post(); ?>

    <div class="page-banner--sections">
    <div class="page-banner--sections__content container container--narrow">
      <h1 class="page-banner--sections__title"><?php the_title() ?></h1>
    </div>
  </div>

  <div class="container container--narrow page-section">

    <?php
    $parentID = wp_get_post_parent_id(get_the_ID());
    if ($parentID) { ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($parentID); ?>">
          <i class="fa fa-home" aria-hidden="true"></i>Back To <?php echo get_the_title($parentID); ?></a>
      </div>
    <?php }
  ?>

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

  <?php }

  get_footer();

  ?>
