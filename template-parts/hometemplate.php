<?php
/* Template Name: Home Page template */ 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 get_header(); ?>

<?php get_template_part( 'template-parts/world-map/world-map' ); ?>

<!-- /.world-map wi-full content-offset -->

<!-- some random section -->
 <? // php while ( have_posts() ) : the_post();?>
     <!-- <div class="about_section wi-full content-offset text-size text-title">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <? //php the_content(); ?>

              <a href="<?//php echo do_shortcode(get_field('about_more_link'));?>" class="btn mt-3 btn-blue">Read More</a>
            </div>
            <!-- /.col-sm-8 -->
          <!--  <div class="col-sm-4">
              <div class="image boxS">
                <img src="<?//php echo get_stylesheet_directory_uri();?>/images/team-image.png" alt="image" />
              </div>
            </div> -->
          <!--  <!-- /.col-sm-4 -->
        <!--  </div> -->
          <!-- /.row -->
       <!--  </div> -->
        <!-- /.container -->
    <!--   </div> -->
      <!-- /.about_section content-offset text-size text-title -->
<!--	/. <? //php endwhile;?> --> 

    <div class="news_section wi-full content-offset bg-gray text-size text-title" style="display: none;">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>ASIF News</h2>
            </div>
          </div>
	
          <div class="row mt-2">
		  <?php
			 $args = array(
				'post_type' => 'post',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 3
      );

			
// 			$wp_query = new WP_Query('post_type=post'.','.'&order=asc&showposts=3' .','.'&paged=' . $paged);
 			$wp_query = new WP_Query( $args );
			  if ( $wp_query->have_posts() ) :
			    while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?> 	
            <a href="<?php the_permalink();?>" class="col-sm-4">
              <div class="box_outer">
                <div class="box_image <?php echo $pingUrlClass?>" style="background-image: url('<?php //echo $pimgurl;?>');">
                  <img src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
                <div class="box_info">
                  <h5><?php the_title();?></h5>
                  <div class="btn btn-blue">Read More</div>
                </div>
              </div>
              <!-- /.box_outer -->
            </a>
          <?php endwhile;
			   		
		endif;
		wp_reset_postdata(); 
		?> 
            <!-- /.col-sm-4 -->
          </div>
          <!-- /.row mt-2 -->
        </div>
        <!-- /.container -->
      </div>
  <!-- 
      <div class="selfies_section wi-full content-offset text-title">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>WORLD AS DAY - SUCCESS STORIES</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="embed-responsive embed-responsive-16by9 selfiwall">
                <iframe class="embed-responsive-item" src="https://www.hashatit.com/hashtags/ASWalkSelfie/all/embed" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        -->
      </div>
      
      <!-- /.selfies_section wi-full content-offset text-title -->
   <div class="project_section wi-full content-offset bg-gray text-size text-title" style="display: none;">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>ASIF Projects</h2>
            </div>
          </div>

          <div class="row mt-2">
		   <?php 			
			 $args = array(
				'post_type' => 'projects',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 3
			);
			$wp_query = new WP_Query( $args );
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
			$pimgurl1 = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID ()), 'full' );
			$pimgurl = $pimgurl1[0];
		?> 		
            <div class="col-sm-4">
              <div class="box_outer">
                <a href="<?php the_permalink();?>"> <div class="box_image" style="background-image: url('<?php echo $pimgurl;?>');"></div></a>
                <div class="box_info">
                  <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                
                  <a href="<?php the_permalink();?>" class="btn btn-blue">Read More</a>
                </div>
              </div>
			
              <!-- /.box_outer -->
            </div>
              <?php endwhile;
			   		
		endif;
		wp_reset_postdata(); 
		?> 
           
            <!-- /.col-sm-4 -->
          </div>
          <!-- /.row mt-2 -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.project_section content-offset bg-gray text-size text-title -->
      <div data-public>
      <?php if( have_rows('boxes__list', get_option( 'page_on_front' )) ): ?>
          <div class="boxesList__wrapper wi-full content-offset bg-gray text-size text-title">
            <div class="container">
                <?php while( have_rows('boxes__list', get_option( 'page_on_front' )) ): the_row(); 
                    $show = get_sub_field('show_row');
                    $rowTitle = get_sub_field('row_title');
                    if ($show) : 
                      if($rowTitle) : ?>
                        <div class="row">
                          <div class="col-sm-12 text-center">
                            <h2><?php echo $rowTitle;?></h2>
                          </div>
                        </div>
                      <?php endif; ?>
                      <?php if( have_rows('boxes') ): ?>
                          <div class="row">
                          <?php while( have_rows('boxes') ): the_row(); 
                              $image = get_sub_field('image');
                              $title = get_sub_field('title');
							  
							  $date = get_sub_field('date');
							  
							  
                              $content = get_sub_field('content');
							  $excerpt = 'content';
							  
                              $link = get_sub_field('link');

                              $link_url = $link['url'];
                              $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                              <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="col-sm-4">
                                <div class="box_outer">
                                  <?php if ($image) : ?>
                                    <div class="box_image">
                                      <img src="<?php echo $image;?>">
                                    </div>
                                  <?php endif;?>
                                  <div class="box_info">
									<?php if ($date) : ?>
									 <span style="display: inline-block; margin-bottom: 10px;"><?php echo $date;?></span> 
									<?php endif;?>
                                    <?php if ($title) : ?>
                                      <h5 style="line-height: 1.3"><?php echo $title;?></h5>
                                    <?php endif;?>
									
                                    <?php if ($content) : ?>
                                      <p><?php echo custom_content(15,$excerpt);;?></p>
                                    <?php endif;?>
                                    <div class="btn btn-blue">Read More</div>
                                  </div>
                                </div>
                                <!-- /.box_outer -->
                              </a>
                          <?php endwhile; ?>
                          </div>
                      <?php endif; ?>
                    <?php endif;?>
                <?php endwhile; ?>
                
              
            </div>
          </div>
      <?php endif; ?>
</div>
      
	  <?php  get_footer();?>