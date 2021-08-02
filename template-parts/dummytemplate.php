<?php
/* Template Name: Dummy Page template */ 
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
            <li class="breadcrumb-item active" aria-current="page"><a href="#"><?php the_title(); ?></a></li>            
          </ol>
        </div>
      </nav>
 <div class="wi-full membership-page content-offset page-post page-text text-size text-title">
        <div class="container">
          <div class="row">        
            <!-- /.col-sm-4 -->
            <div class="col-sm-8 col-md-9">
               <?php the_content();?>
            </div>
            <!-- /.col-sm-8 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->

      
	  <?php get_footer();?>