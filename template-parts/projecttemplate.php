<?php
/* Template Name: Project Page template */ 
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
              <h2>ASIF Projects</h2>
            </div>
          </div>

          <div class="row mt-2">
           <?php 						
			$wp_query = new WP_Query('post_type=projects'.','.'&order=desc&showposts=6' .','.'&paged=' . $paged);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
			$pimgurl1 = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID ()), 'full' );
			$pimgurl = $pimgurl1[0];
		?> 		
            <div class="col-sm-6 col-md-4">
              <div class="box_outer">
                <a href="<?php echo get_the_permalink();?>"><div class="box_image" style="background-image: url('<?php echo $pimgurl;?>')"></div></a>
                <div class="box_info">
                  <div class="date"><?php echo get_the_date( 'M j, Y', get_the_ID());?></div>
                  <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                  <p><?php $nw_content = (strlen(get_the_content()) > 126) ? substr(get_the_content(),0,126) : get_the_content(); 
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