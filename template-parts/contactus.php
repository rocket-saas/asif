<?php
/* Template Name: Contactus Page template */ 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 get_header();
?>
 <nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </div>
      </nav>

      <div class="wi-full contact-page content-offset page-text text-size text-title">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
              <div class="text-center pb-2">
                <h2><?php the_field('form_title'); ?></h2>
              </div>

              <div class="row">
                <div class="col-sm-7">
                  <address>
                    <i class="fas fa-map-marker-alt"></i>
                    <?php the_field('address'); ?>
                  </address>
                  <address>
                    <i class="fas fa-envelope"></i>
                    <strong>Email:</strong>
                    <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                  </address>

                  <a href="<?php the_field('facebook_link'); ?>" target="_blank" class="fbox"><img src="<?php the_field('facebook_image'); ?>" alt="facebook" /></a>
                </div>
                <!-- /.col-sm-7 -->
                <div class="col-sm-5">
                  <div class="form_area">
                   <?php echo do_shortcode('[ninja_form id=1]');?>
                   <p><small>By submitting this form I agree to my details being used in sole connection with the intended enquiry. Please check our <a href="http://asif.info/privacy-policy">privacy policy</a> to see how we protect and manage your submitted data.</small></p>
                  </div>
                </div>
                <!-- /.col-sm-5 -->
              </div>
            </div>
            <!-- /.col-sm-8 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->
	  <?php get_footer();?>