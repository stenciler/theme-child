
<footer class="ux-footer">
  <div class="container">
    <figure class="footer-logo">
     <?php
      $logo_img = get_option('site_logo_footer');
      if(!$logo_img) {
        $logo_img = get_stylesheet_directory_uri().'/assets/img/logo.png';
      }
      ?>
      <a class="logo navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img src="<?php echo $logo_img; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
      </a>
    </figure>
    <address class="footer-address">
      <p>Hesslewood Lodge Dental Practice</p>
      <p>The Lodge. 95, Ferriby Rd</p>
      <p>Hessle</p>
      <p>East Yorkshire</p>
      <p>HU13 0HX</p>
    </address>
    <div class="copyright">
      <a href="#">Web Design - Getextra<span class="domain">.co.uk</span></a>
    </div>
  </div>
</footer>