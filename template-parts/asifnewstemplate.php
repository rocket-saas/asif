<?php
/* Template Name: Asif News Page template */ 
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
            <li class="breadcrumb-item active" aria-current="page">Projects</li>
          </ol>
        </div>
      </nav>

      <div class="project_section page-text wi-full content-offset text-size text-title">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>ASIF News</h2>
            </div>
          </div>

          <div class="row mt-2">
		  
		  <?php 						
			$wp_query = new WP_Query('post_type=post & order=desc & showposts=-1 & paged=' . $paged);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
			$pimgurl1 = get_the_post_thumbnail_url(get_the_ID());
      if($pimgurl1){
			 $pimgurl = $pimgurl1;
      }else{
        $pingUrlClass = 'post_default';
        $pimgurl = 'http://79.170.40.35/asif.info/wp-content/themes/asif/images/logo.png';
      }
		?> 		
            <div class="col-sm-6 col-md-4">
              <div class="box_outer">
               <a href="<?php the_permalink();?>"> <div class="box_image <?php echo $pingUrlClass?>" style="background-image: url('')">
                 <img src="<?php echo $pimgurl;?>" alt="">
               </div></a>
                <div class="box_info">
<!--                   <div class="date"><?php echo get_the_date( 'M j, Y', get_the_ID());?></div> -->
                  <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                  <p><?php $nw_content = (strlen(get_the_content()) > 125) ? substr(get_the_content(),0,125) : get_the_content(); 
                	echo wp_strip_all_tags($nw_content);?> </p>
                  <a href="<?php echo get_the_permalink();?>" class="btn btn-blue">Read More</a>
                </div>
              </div>
              <!-- /.box_outer -->
            </div>
			<?php endwhile; echo '<div class="clearfix"></div>';
				if (function_exists("pagination")) {pagination($wp_query->max_num_pages);} ?>
		<?php 		
		endif;
		wp_reset_postdata(); 
		?>
         
            <!-- /.col-sm-6 col-md-4 -->
          
          </div>
          <!-- /.row mt-2 -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.project_section content-offset bg-gray text-size text-title -->
	  <?php get_footer();?>