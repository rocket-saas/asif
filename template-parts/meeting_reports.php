<?php
/* Template Name: Meeting Report Page template */ 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 get_header();

?>
 <div class="wi-full membership-page content-offset page-text text-size text-title">
        <div class="container">
          <div class="row">        
            <!-- /.col-sm-4 -->
            <div class="col-sm-8 col-md-9 membership-detail">
           <div class="mb-content">
		   <h2>ASIF Council Meeting Reports</h2>
		   <?php if( have_rows('pdf_text')): ?>		  
    <?php while ( have_rows('pdf_text') ) : the_row();	?>
                <h4><a href="<?php the_sub_field('pdf_file'); ?>" target="_blank"><?php the_sub_field('pdf_heading'); ?></a></h4>
				<?php endwhile; endif;?>
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