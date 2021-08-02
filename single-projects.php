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
		//echo  get_the_ID();die;
 
	?>
 <nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Projects</li>
          </ol>
        </div>
      </nav>

      <div class="wi-full content-offset page-post page-text text-size text-title">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h2><?php the_title();?></h2>
              <p><?php the_content();?></p>
              <?php if( have_rows('first_image')): ?>
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
            </div>
            <!-- /.col-sm-8 -->
            <div class="col-md-3">
              <h2>Other Projects</h2>

              <?php
		          $args = array( 'post_type' => 'projects', 'posts_per_page' => 2, 'orderby' =>'date','order' => 'DESC','post__not_in' => array( get_the_ID (), ));
		          $loop = new WP_Query( $args );
		          while ( $loop->have_posts() ) : $loop->the_post();
		          $prjectimg1 = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID () ), 'full' );
		          $prjectimg = $prjectimg1[0];
		        ?>
              <!-- /.box_outer -->
              <div class="box_outer">
                <a href="<?php echo get_the_permalink();?>"><div class="box_image" style="background-image: url('<?php //echo $prjectimg;?>');">
                  <img src="<?php echo $prjectimg;?>" alt="">
                </div></a>
                <div class="box_info">
                  <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                  <p><?php $nw_content = (strlen(get_the_content()) > 115) ? substr(get_the_content(),0,115) : get_the_content(); 
		                echo $nw_content;
		           ?></p>
                  <a href="<?php echo get_the_permalink();?>" class="btn btn-blue">Read More</a>
                </div>
              </div>
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
<?php if(get_the_ID()==75) { ?>
      <div class="selfies_section wi-full bg-gray content-offset text-title">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>WALK YOUR AS OFF SELFIES</h2>
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
        <!-- /.container -->
      </div><?php } ?>
      <!-- /.selfies_section wi-full content-offset text-title -->
	  <?php endwhile;
		?>
	  <?php get_footer(); ?>