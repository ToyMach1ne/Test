<!doctype html>
  <html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!--[if lt IE 9]>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <!-- wrapper -->
  <div class="wrapper">
    <header role="banner">
      <div class="container">
        <div class="row">

          <div class="header__title--block col-md-6 col-sm-6">
            <h1 class="header__title--text"><?php the_field('header_title'); ?></h1>
          </div><!-- /header__logo -->

          <div class="header__logo col-md-6 col-sm-6">
            <img class="header__logo--first" alt="logotype" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">

            <a href="tel:<?php the_field('header_phone'); ?>" class="header__phone"><?php the_field('header_phone'); ?></a>

            <?php $image = get_field('second_logo');
              if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="header__logo--second" />
            <?php endif; ?>
          </div><!-- /header__logo -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </header><!-- /header -->