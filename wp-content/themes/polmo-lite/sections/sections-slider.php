<?php

$jeweltheme_polmo_slider_title1 = get_theme_mod('jeweltheme_polmo_slider_title1',__('Welcome to <span>Polmo</span>','polmo-lite'));
$jeweltheme_polmo_slider_desc1 = get_theme_mod('jeweltheme_polmo_slider_desc1',__('POLMO theme is absolute free for your personal or business use','polmo-lite'));
$jeweltheme_polmo_slider_button1 = get_theme_mod('jeweltheme_polmo_slider_button1',__('Download Polmo','polmo-lite'));
$jeweltheme_polmo_slider_button_url1 = get_theme_mod('jeweltheme_polmo_slider_button_url1',__('http://jeweltheme.com/product/polmo-lite','polmo-lite'));
$jeweltheme_polmo_slider_image1 = get_theme_mod('jeweltheme_polmo_slider_image1', get_template_directory_uri() . '/images/slider/1.jpg');


$jeweltheme_polmo_slider_title2 = get_theme_mod('jeweltheme_polmo_slider_title2',__('Premium <span>Quality WordPress</span> Theme','polmo-lite'));
$jeweltheme_polmo_slider_desc2 = get_theme_mod('jeweltheme_polmo_slider_desc2',__('POLMO theme is absolute free for your personal or business use','polmo-lite'));
$jeweltheme_polmo_slider_button2 = get_theme_mod('jeweltheme_polmo_slider_button2',__('Download Polmo','polmo-lite'));
$jeweltheme_polmo_slider_button_url2 = get_theme_mod('jeweltheme_polmo_slider_button_url2',__('http://jeweltheme.com/product/polmo-lite','polmo-lite'));
$jeweltheme_polmo_slider_image2 = get_theme_mod('jeweltheme_polmo_slider_image2', get_template_directory_uri() . '/images/slider/3.jpg');

?>

  <section id="main-slider" class="main-slider text-center">
    <div class="head-overlay">
      <ul class="bxslider">
        <li>
          <div class="head-overlay">

          <?php if( !empty($jeweltheme_polmo_slider_image1) ){ ?>
            <img src="<?php echo esc_url( $jeweltheme_polmo_slider_image1 ); ?>" alt="Slider Image 1"/>
          <?php } ?>

          </div><!-- /.head-overlay -->
          <div class="slider-text">
            <div class="slide-inner">
            <?php if ( !empty($jeweltheme_polmo_slider_title1) && !empty($jeweltheme_polmo_slider_desc1) && !empty($jeweltheme_polmo_slider_button1) && !empty($jeweltheme_polmo_slider_button_url1) ){ ?>
              <h2 class="slider-title" data-animation="wow animated bounceInDown"><?php echo $jeweltheme_polmo_slider_title1; ?></h2>
              <p class="slide-description"><?php echo esc_attr( $jeweltheme_polmo_slider_desc1 ); ?></p>
              <div class="slide-btn-container">
                <a class="btn" href="<?php echo esc_url( $jeweltheme_polmo_slider_button_url1 ); ?>">
                  <?php echo esc_attr( $jeweltheme_polmo_slider_button1 ); ?>
                </a>
              </div><!-- /.slide-btn-container -->
            <?php } ?>
              

            </div><!-- /.slide-inner -->
          </div><!-- /.slider-text -->
        </li>
        <li>
          <div class="head-overlay">
            <?php if( !empty($jeweltheme_polmo_slider_image2) ){ ?>
              <img src="<?php echo esc_url( $jeweltheme_polmo_slider_image2 ); ?>"/>
            <?php } ?>
          </div><!-- /.head-overlay -->
          <div class="slider-text">
            <div class="slide-inner">

            <?php if ( !empty($jeweltheme_polmo_slider_title2) && !empty($jeweltheme_polmo_slider_desc2) && !empty($jeweltheme_polmo_slider_button2) && !empty($jeweltheme_polmo_slider_button_url2) ){ ?>
              <h2 class="slider-title"><?php echo  $jeweltheme_polmo_slider_title2; ?></h2>
              <p class="slide-description"><?php echo  $jeweltheme_polmo_slider_desc2; ?></p>
              <div class="slide-btn-container">
                <a class="btn" href="<?php echo esc_url( $jeweltheme_polmo_slider_button_url2 ); ?>"><?php echo $jeweltheme_polmo_slider_button2; ?></a>
              </div><!-- /.slide-btn-container -->
            <?php } ?>  

            </div><!-- /.slide-inner -->
          </div><!-- /.slider-text -->
        </li>
      </ul>
    </div><!-- /.head-overlay -->
  </section><!-- /#main-slider --> 