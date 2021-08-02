<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

get_header(); ?>
<?php		
while ( have_posts() ) : the_post(); 
		$pimgurl1 = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID ()), 'full' );
		$pimgurl = $pimgurl1[0];
	?>
  
      <nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo get_permalink(11); ?>">Members</a></li>            
            <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
          </ol>
        </div>
      </nav>

      <div class="wi-full membership-page content-offset page-post page-text text-size text-title">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <div class="mb-detail"><img src="<?php echo $pimgurl;?>" class="img-fluid" alt=""></div>
            </div>
            <!-- /.col-sm-4 -->
            <div class="col-sm-8 col-md-9 membership-detail">
              <h2><?php the_title();?> <small><?php the_field('subheading');?></small></h2>

              <div class="detail-information">
                <?php if(get_field('contact_name') || get_field('website_url') || get_field('email')){;?>
                <div class="id-left">
                  <?php if(get_field('contact_name')){;?>
                  <p><i class="fas fa-user"></i><?php the_field('contact_name');?></a></p>
                  <?php } if(get_field('website_url')){;?>
                  <p><a href="<?php the_field('website_url');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/images/globe.png" alt="global" /><?php the_field('website_url');?></a></p>
                  <?php }if(get_field('email')){;?>
                  <p><a href="mailto:<?php the_field('email');?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/envelop.png" alt="envelop" /><?php the_field('email');?></a></p>
                  <?php };?>
                </div>
                <?php };?>
                <!-- /.id-left -->
                <?php if(get_field('address')){;?>
                <div class="id-middle">
                  <p><img src="<?php echo get_stylesheet_directory_uri();?>/images/location.png" alt="location" />
                   <?php the_field('address');?>
                  </p>
                </div>
                <?php };?>
                <!-- /.id-middle -->
                <?php if(get_field('facebool_link')){;?>
                <div class="id-right" style="display:none;">
                  
                  <p><a href="<?php the_field('facebool_link');?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/facebook-ti.png" alt="facebook" /></a></p>

                </div>
                <?php };?>
                <!-- /.id-right -->
              </div>
              <!-- /.detail-information -->
              <style>.social-c i { font-size:32px; margin-right:10px;}</style>
				<div class="social-c">
               <?php if(get_field('facebook_link')){;?><a href="<?php the_field('facebook_link');?>"><i class="fab fa-facebook"></i></a><?php };?>

                <?php if(get_field('twitter_link')){;?><a href="<?php the_field('twitter_link');?>"><i class="fab fa-twitter"></i></a><?php };?>

                <?php if(get_field('instagram_link')){;?><a href="<?php the_field('instagram_link');?>"><i class="fab fa-instagram"></i></a><?php };?>
                
				<?php if(get_field('youtube_link')){;?><a href="<?php the_field('youtube_link');?>"><i class="fab fa-youtube-square"></i></a><?php };?>
                </div>
              <div class="mb-content">
                <p><?php the_content();?> </p>
              </div>
              <!-- /.mb-content -->

            </div>
            <!-- /.col-sm-8 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->

      <!-- /.wi-full membership-page content-offset page-text text-size text-title -->
	  <?php endwhile;
		?>
	  <?php get_footer(); ?>