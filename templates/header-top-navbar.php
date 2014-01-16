<!-- Navigation -->
<div class="fixed contain-to-grid show-for-small">
  <nav class="top-bar" role="banner" data-topbar>
  	<ul class="title-area">
        	<!-- Title Area -->
        	<li class="name">
          	<h1><a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
        	</li>
      	<li class="toggle-topbar menu-icon"><a href="#"><?php _e('Menu', 'roots'); ?></span></a></li>
      </ul>

  	<section class="top-bar-section" role="navigation">
        	<?php
          if (has_nav_menu('primary_navigation')) :
            	wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'right'));
          endif;
        	?>
  	</section>
  </nav>
</div>
<!-- End Top Bar -->

<header id="masthead" class="site-header show-for-medium-up row" role="banner">
  <div class="site-branding small-12 columns">
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
  </div>

  <nav id="site-navigation" class="main-navigation small-12 columns" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'primary-navigation' ) ); ?>
  </nav><!-- #site-navigation -->
</header><!-- #masthead -->