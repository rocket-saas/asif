<?php
/* Template Name: Membership Page template */ 
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
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Membership - rules and how to apply</a></li>            
          </ol>
        </div>
      </nav>

      <div class="wi-full membership-page content-offset page-text text-size text-title">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2>Member Organisations in ASIF</h2>
            </div>
            <!-- /.col-sm-12 -->

            <div class="col-sm-12">
              <div class="membership_area">
                <div class="w100p">
                  <h3>Europe</h3>
                  <ul class="flag-list">
				  <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',               
                'terms'         => 'EUROPE',
               'field' => 'name',             
                'operator'      => 'IN' 
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w100p -->
                <div class="w20p">
                  <h3>Asia</h3>
                  <ul class="flag-list">
                   <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',               
                'terms'         => 'ASIA',
               'field' => 'name',             
                'operator'      => 'IN' 
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w20p -->
                <div class="w20p">
                  <h3>America</h3>
                  <ul class="flag-list">
                      <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',               
                'terms'         => 'AMERICA',
               'field' => 'name',             
                'operator'      => 'IN' 
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w20p -->
                <div class="w20p">
                  <h3>Australia</h3>
                  <ul class="flag-list">
                   <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',               
                'terms'         => 'AUSTRALIA',
               'field' => 'name',             
                'operator'      => 'IN' 
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w20p -->
                <div class="w20p">
                  <h3>Africa</h3>
                  <ul class="flag-list">
                   <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',
				'terms'         => 'AFRICA',
				'field' => 'name',             
                'operator'      => 'IN' 
               
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w20p -->
				  
				  <div class="w20p">
                  <h3>INTERNATIONAL</h3>
                  <ul class="flag-list">
                   <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',
				'terms'         => 'INTERNATIONAL',
				'field' => 'name',             
                'operator'      => 'IN' 
               
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w20p -->
              </div>
            
            </div>
            <!-- /.col-sm-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->

      <div class="wi-full membership-page bg-gray content-offset page-text text-size text-title">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 pb-3">
              <div class="ms-login d-none">
                Members: <a href="<?php echo do_shortcode(get_field('login'));?>" class="btn-blue btn">LOGIN HERE</a>
              </div>
              <h2><?php the_field('heading_text')?></h2>
            </div>
            <!-- /.col-sm-12 -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-sm-12">
			 <?php if( have_rows('section_repeat')): ?>		  
    <?php while ( have_rows('section_repeat') ) : the_row();
	?>
              <div class="rules">
                <img src="<?php the_sub_field('icon'); ?>" alt="">
                <strong><?php the_sub_field('sub_heading'); ?></strong>
                <p><?php the_sub_field('description'); ?></p>
              </div>
			 <?php endwhile; 
			 endif;?>
             
              <!-- /.rules -->
            </div>
            <!-- /.col-sm-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wi-full membership-page content-offset page-text text-size text-title -->
	  <?php get_footer();?>