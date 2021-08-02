<?php
/* Template Name: Resource Page template */ 
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
            <li class="breadcrumb-item active" aria-current="page">Resources</li>
          </ol>
        </div>
      </nav>

      <div class="wi-full content-offset page-text text-size text-title rsrc_brder">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h2>Resources for patients and health professionals</h2>
              
                <div class="professionl-group">
				  <?php if( have_rows('resources_for_patients')):
		  while ( have_rows('resources_for_patients') ) : the_row();?>
                <figure>
                  <img src="<?php the_sub_field('image_field'); ?>" alt="">
                    <h2><?php the_sub_field('sub_heading'); ?></h2>
                    <p><?php the_sub_field('description'); ?></p>
					<?php


if( have_rows('download_button_copy') ):


    while ( have_rows('download_button_copy') ) : the_row(); ?>
    <a href="<?php the_sub_field('download_button'); ?>" target="_blank" class="btn btn-blue rscr_btn mb-1">

		<?php if(get_sub_field('name-button')): the_sub_field('name-button'); else : echo 'download';endif; ?> <img src="<?php echo get_template_directory_uri(); ?>/images/dwnload_icon.png"></a>
   <?php endwhile;

else :



endif;

?>
                 
                </figure>
                <?php endwhile; endif;?>
              </div>
                
            </div>
              <div class="col-sm-12">
              <div class="professional-desc">
                 <?php the_field('below_resource_for_patient'); ?>
				 <?php if( have_rows('languagewise_button')):
		     while ( have_rows('languagewise_button') ) : the_row();?>
                  <a href="<?php the_sub_field('button')?>" target="_blank" class="btn btn-blue rscr_btn"><?php the_sub_field('language_name')?><img src="<?php echo get_template_directory_uri(); ?>/images/dwnload_icon.png"></a>
                   <?php endwhile; endif;?>
                </div>
              </div>
            <!-- /.col-sm-10 -->
            
            
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->
        
        
        <div class="wi-full content-offset page-text text-size text-title rsrc_brder">
        <div class="container">
		<?php if( have_rows('exercise_resources')):
		     while ( have_rows('exercise_resources') ) : the_row();?>
          <div class="row" style="margin-top: 65px;">
            <div class="col-md-12">
				<?php if (get_sub_field('main_title')) : ?>
              		<h2><?php the_sub_field('main_title')?></h2>
				<?php endif;?>
              
                
                <div class="row resource--row">
				<?php if (get_sub_field('main_image')) : ?>
            <div class="col-sm-4 col-md-3">
              <div class="mb-detail nass-detail"><img src="<?php the_sub_field('main_image')?>" class="img-fluid" alt=""></div>
            </div>
			<?php endif;?>
            <!-- /.col-sm-4 -->
			<?php if (get_sub_field('sub_heading') || get_sub_field('content')) : ?>
            <div class="col-sm-8 col-md-9 membership-detail nass-sec">
				<?php if (get_sub_field('sub_heading')) : ?>
              		<h4><?php the_sub_field('sub_heading'); ?></h4>
				<?php endif;?>
				<?php if (get_sub_field('content')) : ?>
               		<?php the_sub_field('content'); ?>
				<?php endif;?>
				<?php if (get_sub_field('logo_image')) : ?>
                <p><img class="nass" src="<?php echo the_sub_field('logo_image');?>"></p>
              <!-- /.detail-information -->
				<?php endif;?>
			  <?php if(get_sub_field('download_button') != '') { ?>
                <a href="<?php echo the_sub_field('download_button');?>" target="_blank" class="btn btn-blue rscr_btn lol">Download<img src="<?php echo get_template_directory_uri(); ?>/images/dwnload_icon.png"></a>
			  <?php } ?>
				<?php 
			$link = get_sub_field('download_link');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="btn btn-blue rscr_btn lol" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="margin-top: 15px;"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>
              
              <!-- /.mb-content -->

            </div>
            <!-- /.col-sm-8 -->
			<?php endif;?>
          </div>
            </div>
             
			<?php if (get_sub_field('you_tube__heading') || get_sub_field('you_tube_subheading')) : ?> 
            <div class="col-md-12">
                <div class="exercise_video_sec text-center as_videosec">
                    <h4><?php echo the_sub_field('you_tube__heading');?></h4>
                    <p><?php echo the_sub_field('you_tube_subheading');?></p>			
					 
				 <?php if( have_rows('video_part')):
		     while ( have_rows('video_part') ) : the_row();?>
					<?php if(get_sub_field('upload_video') != '') { ?>
						<figure>	
						<iframe class="embed-responsive-item" src="<?php the_sub_field('upload_video')?>" frameborder="0" allowfullscreen></iframe>
							<h2><a href="#"><?php the_sub_field('video_title')?></a></h2>
						</figure>
					<?php } ?>
                    
					 <?php endwhile; endif;?>
                </div>
            </div>
             <?php endif;?>
            
          </div>
		  <?php endwhile; endif;?>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->
        
        
    <div class="wi-full content-offset page-text text-size text-title rsrc_brder">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2>More Exercise Resources</h2>
                  <div class="ankylosing-img">
                      <img src="<?php the_field('more_logo_image');?>">
                  </div>
                <div class="ankylosing-desc">
                  <h4><?php the_field('more_excercise_sub') ?></h4>
                  <?php the_field('more_excercise_content');?>
                  </div>
              </div>
            <div class="col-md-12">
                
                <div class="exercise_video_sec text-center excercise_video">
				 <?php if( have_rows('more_excercise_videos')):
		     while ( have_rows('more_excercise_videos') ) : the_row();?>
                    <figure>
                     <iframe class="embed-responsive-item" src="<?php the_sub_field('more_excercise_video_upload')?>" frameborder="0" allowfullscreen></iframe>
                        <h2><a href="#"><?php the_sub_field('more_excercise_video_title');?></a></h2>
                    </figure>
					<?php endwhile; endif;?>
                    
                </div>
            </div>
              
            
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->
        
    <!------------------------------------------------------------>
        
    <div class="wi-full content-offset page-text text-size text-title rsrc_brder">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Bath AS Assessment Forms</h2>
              
                <div class="exercise_video_sec text-center bath_asse">
				<?php if( have_rows('bath_as_assessment_image')):
		              while ( have_rows('bath_as_assessment_image') ) : the_row();?>
                    <figure>
                        <a href="#"><img src="<?php echo the_sub_field('bath_aasessment_images'); ?>" alt=""></a>
                        <a href="<?php the_sub_field('bath_assessment_download_button');?>" target="_blank" class="btn btn-blue rscr_btn"><?php the_sub_field('language_button_name');?><img src="<?php echo get_template_directory_uri(); ?>/images/dwnload_icon.png"></a>
                    </figure>
					<?php endwhile; endif;?>
                    
                </div>
            </div>
              
            
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->
        
    <!------------------------------------------>
        
    <div class="wi-full membership-page content-offset page-text text-size text-title">
        <div class="container">
            <h2>ASAS Teaching Slides</h2>
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <div class="mb-detail asa-img-sec"><img src="<?php the_field('slide_image'); ?>" class="img-fluid" alt=""></div>
            </div>
            <!-- /.col-sm-4 -->
            <div class="col-sm-8 col-md-9 membership-detail">
              

              <div class="mb-content asas_list">
              <?php the_field('slide_content'); ?>
                  
                  <a href="http://slides.asas-group.org/app/slides/search?q=" target="_blank" class="btn btn-blue rscr_btn">Link to Slides</a>
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
	  <?php get_footer();?>