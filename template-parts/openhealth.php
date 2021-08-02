<?php
/* Template Name: Open Health template */ 
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
			<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
		</ol>
	</div>
</nav>
<?php
global $post;
if ( ! post_password_required( $post ) ) { ?>
<div class="openhealth_page">
	<section id="second_nav">
	    <nav>
			<ul>
				<li><a class="active" href="#imas_mainsec" class="sec_link">About</a></li>
				<li><a href="#imas_involve" class="sec_link">Who is involved</a></li>
				<li><a href="#imas_publication" class="sec_link">IMAS publications</a></li>
				<li><a href="#imas_connected" class="sec_link">Stay connected</a></li>
			</ul>
		</nav>
	</section>

	<section id="imas_mainsec">
		<div class="container">
	    	<div class="row v_align">
	    		<div class="sec_title">
	    			<div class="col-12 col-md-8 col-lg-6">
	    				<h2><?php the_field('section_title'); ?> <span><?php the_field('section_sub_title'); ?></span></h2>
					</div>
					<div class="small_txt">1. ABOUT</div>
	    		</div>
	    		<div class="col-12 col-md-4 col-lg-6">
	    			<!-- <div class="imas_logo">
	    				<img src="<?php the_field('imas_logo'); ?>" alt="#">
	    			</div> -->
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-12 col-lg-6">
	    			<div class="txt_block">
		    			<?php the_field('section_content'); ?>
		    			<div class="scroll_next">
		    				<a href="#imas_vision"><img src="<?php echo get_template_directory_uri();?>/images/openhealth/down-arrow.svg" alt="#"></a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-12 col-lg-6">
	    			<div class="mental_health_box">
	    				<div class="inner_box">
							<?php if( have_rows('mental_health_box') ):
							$count = 1;
							while ( have_rows('mental_health_box') ) : the_row();	?>
		    				<div class="detail_block">
		    					<span class="cal_num colr_<?php echo $count; ?>"><?php the_sub_field('title'); ?></span>
		    					<span class="desc_txt"><?php the_sub_field('content'); ?></span>
		    				</div>
		    				<?php $count++; endwhile; endif;?>
		    				<div class="detail_block">
		    					<p><?php the_field('mental_health_content'); ?></p>
		    				</div>
		    				<div class="lrn_more_btn">
		    					<a href="<?php the_field('button_link'); ?>" class="button lrn_more"><span><?php the_field('button_text'); ?></span>&nbsp;<img src="<?php echo get_template_directory_uri();?>/images/openhealth/btn-arrow.svg" alt="#"></a>
		    				</div>
		    			</div>
	    			</div>
	    		</div>
	    	</div>
		</div>
	</section>

	<section id="imas_vision" class="py_3">
		<div class="container">
			<div class="dot_bg" style="background-image: url(<?php echo get_template_directory_uri();?>/images/openhealth/vision-pattern.svg);"></div>
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="padng_lft">
						<div class="sec_title">
							<img src="<?php the_field('vision_image'); ?>" class="title_icon" alt="#">
							<h4><?php the_field('vision_title'); ?></h4>
						</div>
						<div class="sec_list">
							<ul class="vision_list">
								<?php if( have_rows('vision_list') ):
									while ( have_rows('vision_list') ) : the_row();	?>
								<li><?php the_sub_field('list_text'); ?></li>
								<?php endwhile; endif;?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="sec_title">
						<img src="<?php the_field('value_image'); ?>" class="title_icon" alt="#">
						<h4><?php the_field('value_title'); ?></h4>
					</div>
					<div class="sec_list">
						<ul class="value_list">
						<?php if( have_rows('value_list') ):
							while ( have_rows('value_list') ) : the_row();	?>
							<li><?php the_sub_field('list_text_2'); ?></li>
							<?php endwhile; endif;?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="imas_involve" class="py_3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sec_title">
						<h2><?php the_field('section_Involved_title'); ?> <span><?php the_field('sub_Involved_heading'); ?></span></h2>
						<div class="small_txt"><?php the_field('small_heading'); ?></div>
					</div>
					<div class="sec_img">
						<img src="<?php the_field('section_image'); ?>" class="img-fluid" alt="#">
					</div>
					<div class="imas_logo">
	    				<img src="<?php the_field('imas_logo'); ?>" alt="#">
	    			</div>
					<div class="respondant_txt">
						<h3><?php the_field('bottom_image_text'); ?> </h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="combined_sec">
		<section id="imas_publication" class="py_3">
			<div class="parabola_bg" style="background-image: url(<?php echo get_template_directory_uri();?>/images/openhealth/parabola-circle.png);"></div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="sec_title">
							<h2><?php the_field('section_publications_title'); ?> <span><?php the_field('section_publications_subheading'); ?></span></h2>
							<div class="small_txt"><?php the_field('small_publications_text'); ?></div>
						</div>
					</div>
					<div class="col-12">
						<div class="imas_accordion">
							<div id="accordion">
							<?php if( have_rows('publication_accordion') ):
								$count = 1;
								while ( have_rows('publication_accordion') ) : the_row();
									if($count == 1) {
										$show_class = 'show';
										$ariaexpanded = 'true';
									}
									else {
										$show_class = '';
										$ariaexpanded = 'false';
									}
								?>
								<div class="card">
									<div class="card-header" id="title_<?php echo $count; ?>">
								    	<a class="" role="button" data-toggle="collapse" href="#collapse_<?php echo $count; ?>" aria-expanded="false" aria-controls="collapse_<?php echo $count; ?>"><img src="<?php the_sub_field('tab_image'); ?>" alt="#"><span><?php the_sub_field('tab_titel'); ?></span></a>
									</div>
									<div id="collapse_<?php echo $count; ?>" class="collapse " data-parent="#accordion" aria-labelledby="title_<?php echo $count; ?>" style="">
								  		<div class="card-body">
								    		<ul class="pdf_list">
											<?php if( have_rows('tab_text') ):
												while ( have_rows('tab_text') ) : the_row();	?>
								    			<li>
								    				<p><?php the_sub_field('content'); ?></p>
								    				<a href="<?php the_sub_field('pdf'); ?>" download>
								    					<span class="download_icon">
								    						<img src="<?php echo get_template_directory_uri();?>/images/openhealth/pdf-download.png" alt="#"></a>
								    					</span>
								    			</li>
								    			<?php endwhile; endif;?>
								    		</ul>
										</div>
									</div>
								</div>
								<?php $count++; endwhile; endif;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="imas_connected" class="py_3">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="sec_title">
		    				<h2><?php the_field('section_con_title'); ?> <span><?php the_field('sub_con_title'); ?></span></h2>
							<div class="small_txt"><?php the_field('small_con_text'); ?></div>
						</div>
					</div>
					<div class="col-12 col-lg-7">
						<?php the_field('section_con_content'); ?>
						<h4><?php the_field('social_icon_title'); ?></h4>
						<ul class="social_list">
							<li>
								<?php if( have_rows('social_icons') ):
									while ( have_rows('social_icons') ) : the_row();	?>
								<a href="<?php the_sub_field('link'); ?>" target="_blank"><img src="<?php the_sub_field('icon'); ?>" alt="#"></a>
								<?php endwhile; endif;?>
							</li>
						</ul>
					</div>
					<div class="col-12 col-lg-5">
						<div class="content_box" style="background-image: url(<?php echo get_template_directory_uri();?>/images/openhealth/connect-pattern.svg);">
							<div class="txt_wrapper">
								<?php the_field('participant_content'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section id="imas_partner" class="py_3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sec_title">
						<h3><?php the_field('section_partner_title'); ?></h3>
					</div>
				</div>
				<div class="col-12">
					<div class="partner_list">
						<ul class="pimas_list">
							<?php if( have_rows('partner_list') ):
								while ( have_rows('partner_list') ) : the_row();	?>
							<li>
								<div class="icon_box">
									<img src="<?php the_sub_field('logo_image'); ?>" alt="#">
								</div>
								<?php if(get_sub_field('button_link') != '') { ?>
								<a href="<?php the_sub_field('button_link'); ?>" target="_blank">More information<img src="<?php echo get_template_directory_uri();?>/images/openhealth/right-arrow.svg" alt="#"></a>
								<?php } if(get_sub_field('logo_title') != '') { ?>
								<h5><?php the_sub_field('logo_title'); ?></h5>
								<p><?php the_sub_field('logo_content'); ?></p>
								<?php } ?>
							</li>
							<?php endwhile; endif;?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="imas_date" class="">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p><?php the_field('date_text'); ?></p>
				</div>
			</div>
		</div>
	</section>
<?php } else { ?>
	<section id="imas_date" class="passward_form">
		<div class="container">
			<?php echo get_the_password_form(); ?>
		</div>
	</section>
<?php } ?>
</div>


<?php get_footer();?>