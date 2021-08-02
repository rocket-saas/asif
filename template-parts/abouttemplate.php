<?php
/* Template Name: About Page template */ 
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
            <li class="breadcrumb-item active" aria-current="page">About Asif</li>
          </ol>
        </div>
      </nav>
 <?php $i = 1 ?>
      <div class="wi-full content-offset page-text text-size text-title">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
			  <?php while ( have_posts() ) : the_post(); ?>
                   <?php the_content(); ?> 
			<?php
			endwhile; //resetting the page loop
			wp_reset_query(); //resetting the page query
			?>
        <div class="row align-items-center">
    			 <?php if( have_rows('sponsors_logos')): ?>
    			 <?php while ( have_rows('sponsors_logos') ) : the_row();
    			 $image = get_sub_field('select_logo');?>
            <div class="col-sm-4 mt-3">
              <img src="<?php echo $image ; ?>" class="img-fluid" alt="">
            </div>
            <?php endwhile;endif;?>
        </div>
              <?php the_field('content_below_sponsors');?>
            </div>
            <!-- /.col-sm-8 -->
            <div class="col-md-4">
			 <?php if( have_rows('images_right')): ?>
			 <?php while ( have_rows('images_right') ) : the_row();
			 $imageright = get_sub_field('add_right_image');?>
              <div class="image boxS">
                <img src="<?php echo $imageright?> " alt="image" />
              </div>
			   <?php endwhile;endif;?>
                       </div>
            <!-- /.col-sm-4 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->

      <div class="team_section content-offset bg-gray text-title text-size wi-full">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>ASIF Team</h2>
				<p>
					Please click on our team members to read more about them.
				</p>
            </div>

            <div class="col-sm-12">
              <ul class="team wi-full">
			  <?php 	
				  
             $args = array( 'post_type' => 'asifteam','posts_per_page'=>-1,'order' => 'desc');			  
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
			$pimgurl1 = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID ()), 'full' );
			$pimgurl = $pimgurl1[0];
		?> 		
                <li>
                  <div class="person" >
                      <div  <?php if( get_field('description_team') ): ?>data-fancybox="gallery" href="#class-for-fancybox-<?php echo $i;?>" style="cursor: pointer"<?php endif; ?>>
                    <div class="person-pic" >
                      <img src="<?php echo $pimgurl;?>" alt="<?php the_title();?>">
                    </div>
                    <div class="person-info">
                      <span><?php the_field('designation');?></span>
                      <strong><?php the_title();?></strong>
                      <span><?php the_field('location');?></span>
                    </div>
                </div>
                  </div>
					<?php if( get_field('description_team') ): ?>
                  <div id="class-for-fancybox-<?php echo $i; $i++;?>"  style="display: none;" class="one-team">
					
                    <div class="row row-spaced">
                        <div class="col-sm-4 text-center-on-desktop">
                                                                <div>
                                    
                                                                    <img src="<?php echo $pimgurl;?>" alt="<?php the_title();?>">
                                    
                                </div>
                                                            <p class="one-team-name mt-3"><?php the_field('designation');?></p>
                            <p class="one-team-name"><b><?php the_title();?></b></p>
                            <p class="one-team-location"><?php the_field('location');?></p>

                                                        </div>
						
                        <div class="col-sm-8">
                            <p>
                                <?php the_field('description_team') ?>                             </p>
                        </div>
                    </div>
		<?php endif; ?>
                   
                </li>
                <?php endwhile;
			   		
		endif;
		wp_reset_postdata(); 
		?> 
              </ul>
            </div>
          </div>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.team_section content-offset text-title text-size wi-full -->
	  <?php get_footer();?>