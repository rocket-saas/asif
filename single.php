<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<style type="text/css">
  .page-text p strong{
    display: inline-block;
    *display: inline;
    *zoom: 1;
  }
</style>
<?php		
	while ( have_posts() ) : the_post(); 
		$pimgurl1 = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID ()), 'full' );
		$pimgurl = $pimgurl1[0];
	?>

 <nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Projects</li>
          </ol>
        </div>
      </nav>

      <div class="wi-full content-offset page-text page-post text-size text-title">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h2><?php the_title();?></h2>
                   <?php the_content();?>

              <?php  if($post->ID == 64) {
              if( have_rows('first_image')): ?>
             <?php while ( have_rows('first_image') ) : the_row();?>
              <?php if(get_sub_field('upload_pdf')){;?>
                <a href="<?php the_sub_field('upload_pdf');?>" target="_blank">
              <?php };?>
              <img src="<?php the_sub_field('image1'); ?>" alt="">
              <?php if(get_sub_field('upload_pdf')){;?>
                </a>
              <?php };?>

        <?php  endwhile; endif;?>
               <?php if( the_field('content_after_first_image')): ?>
                      <?php wp_strip_all_tags(the_field('content_after_first_image')); ?>
        <?php endif;?>
                      

              <div class="project-group">
        <?php if( have_rows('second_image_repeater')): ?>
         <?php while ( have_rows('second_image_repeater') ) : the_row();?>
                <figure>
                  <a href="<?php the_sub_field('upload_pdf');?>" target="_blank"><img src="<?php the_sub_field('project_group_image'); ?>" alt=""></a>
                  <strong><?php the_sub_field('title'); ?></strong>
                </figure>
               <?php  endwhile; endif;?>
              </div>
            <?php };?>
            </div>
            <!-- /.col-sm-8 -->
            <div class="col-md-3">
              <h2>Other NEWS</h2>
 <?php
		          $args = array( 'post_type' => 'post', 'posts_per_page' => 2, 'orderby' =>'date','order' => 'DESC','post__not_in' => array( get_the_ID (), ));
		          $loop = new WP_Query( $args );
		          while ( $loop->have_posts() ) : $loop->the_post();
		          $prjectimg1 = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID () ), 'full' );
              if($prjectimg1[0]){
		            $prjectimg = $prjectimg1[0];
              }else{
                $pingUrlClass = 'post_default';
                $prjectimg = 'http://79.170.40.35/asif.info/wp-content/themes/asif/images/logo.png';
              }
		        ?>
              <div class="box_outer">
                <a href="<?php the_permalink();?>"><div class="box_image <?php echo $pingUrlClass?>" style="background-image: url('<?php //echo $prjectimg;?>');">
                  <img src="<?php echo $prjectimg;?>" alt="">
                </div></a>
                <div class="box_info">
                  <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                   <p> <?php $nw_content = (strlen(get_the_content()) > 115) ? substr(get_the_content(),0,115) : get_the_content(); 
		                echo $nw_content;
		           ?></p>
                  <a href="<?php echo get_the_permalink();?>" class="btn btn-blue">Read More</a>
                </div>
              </div>
            
              <!-- /.box_outer -->
			  <?php
			        endwhile; 
			        wp_reset_postdata(); 
			     ?>
            </div>
            <!-- /.col-sm-4 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->
	  <?php endwhile;
		?>
<?php get_footer(); ?>
