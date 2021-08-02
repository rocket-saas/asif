<?php /* Template Name: D2D Campaign template */ 
 get_header();
?>

<nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Delay to Diagnosis Campaign</li>
		</ol>
	</div>
</nav>

<?php
global $post;
if ( ! post_password_required( $post ) ) { ?>
<div class="d2d_page">
	<section id="second_nav">
	    <nav>
			<ul>
				<li><a class="active" href="#delay-to-diagnosis" class="sec_link">What is Delay to Diagnosis?</a></li>
				<li><a href="#d2d-campaign" class="sec_link">Our Delay to Diagnosis Campaign</a></li>
<!-- 				<li><a href="#get-involved" class="sec_link">Get involved</a></li> -->
				<li><a href="#more-resources" class="sec_link">More resources</a></li>
			</ul>
		</nav>
	</section>
	
		<section id="delay-to-diagnosis">
			<section class="top-bg" style="background-image: url(<?php the_field('top_bg_image'); ?>);background-repeat: no-repeat; background-size: cover;">
			<section class="container">
			<div class="dflex dflex-d2d">
				<div class="d2d-top-top-text">
					<h2 class="d2d-top-title d2d">
						<?php the_field('d2d_title'); ?> 
					</h2>
						<?php if( have_rows('d2d_text_repeter') ):
						while ( have_rows('d2d_text_repeter') ) : the_row();	?>
						<p class="d2d"><?php the_sub_field('list_text_d2d'); ?></p>
						<?php endwhile; endif;?>
				</div>
				<div class="d2d-top-img">
					<img src="<?php the_field('top_image'); ?>" class="top_images image_top"/>
<!--  					<img src="<?php the_field('top_image_bottom'); ?>" style="width: 100px" class="top_images" />  -->
				</div>
			</div>
			<div class="spacer spacer-medium">

			</div>
			</section>
				</section>
		<section class="container">
			<div class="spacer spacer-medium">

			</div>
			<div class="videos">
				<?php if( have_rows('video_repeter') ):
					while ( have_rows('video_repeter') ) : the_row();	?>
					<div class="pair">
						<iframe width="420" height="315" src="<?php the_sub_field('list_video'); ?>" class="top-video"></iframe>
						<h3 class="d2d"><?php the_sub_field('video_title'); ?></h3>
					</div>
					<?php endwhile; endif;?>
			</div>
			<div class="spacer spacer-medium">

			</div>
		</section>
	</section>
	<section class="light-grey-bg">
		<section class="container">
			<section id="d2d-campaign">
				<div class="spacer spacer-medium">

			</div>
			<div class="dflex dflex-d2d">
				<div class="d2d-top-text">
					<h2 class="d2d-top-title d2d">
						<?php the_field('top_title'); ?> 
					</h2>
						<?php if( have_rows('d2d_top_text_repeter') ):
						while ( have_rows('d2d_top_text_repeter') ) : the_row(); 	?>
						<p class="d2d"><?php the_sub_field('top_text'); ?></p>
						<?php endwhile; endif;?>
				</div>
				<div class="dflex d2d-top-image">
					<img src="<?php the_field('top_image_campaign'); ?>" style="vertical-align: bottom;"/>
					<img src="<?php the_field('top_image_campaign_2'); ?>" style="vertical-align: bottom;"/>
				</div>
			</div>
			<ul class="ordinary-list">
						<?php if( have_rows('ordinary_list_repeter') ):
						while ( have_rows('ordinary_list_repeter') ) : the_row();	?>
						<li class="d2d-ordinary"><?php the_sub_field('ordinary_list_text'); ?></li>
						<?php endwhile; endif;?>
					</ul>
				<div class="spacer spacer-medium">

			</div>
			<div class="dflex dflex-d2d" style="width: 100%;">
				<div class="fixed-width">
					<img src="<?php the_field('web_image'); ?>" style="width: 200px;" class="fixed-margin-middle"/>
				</div>
				<div class="header-and-text">
					<h2 class="d2d-top-middle-title d2d">
						Why does this matter?
					</h2>
					<p class="our-d2d-campaign-font">
						Globally, diagnostic delay in axSpA remains a significant challenge.
					</p>
				</div>
			</div>
				<div class="spacer spacer-medium">

			</div>
			<div class="dflex dflex-d2d  change-to-flex">
				<div class="header-and-text">
					<p class="our-d2d-campaign-font paragraph-fixed-margin">
						AxSpA is a disease that affects people at a pivotal phase in their life, with symptoms starting on average around the age of 26.
					</p>
				</div>
				<div class="fixed-width">
					<img src="<?php the_field('image_26'); ?>" style="width: 200px;" class="fixed-margin-middle"/>
				</div>
			</div>
				<div class="spacer spacer-medium">

			</div>
			<div class="dflex dflex-d2d" style="width: 100%; text-align: center;">
				<img src="<?php the_field('turn_image'); ?>" class="fixed-margin-middle change-at-small-screen"/>
			</div>
				<div class="spacer spacer-medium">

			</div>
				<div class="text-with-header">
					<h2 class="d2d-top-middle-title d2d">
						What is the impact on patients?
					</h2>
					<p class="our-d2d-campaign-font">
						Suffering with undiagnosed severe pain, stiffness and fatigue often leads to depression and anxiety. The delay can lead to significant disease progression, even causing permanent disability. Quality of life is also severely impacted by people experiencing symptoms without effective treatment.
					</p>
				</div>
			<div class="spacer spacer-medium">

			</div>
		</section>

		<section id="d2d-campaign">
<!-- 			<div class="spacer spacer-medium">

			</div> -->
			<div class="d2d-title-middle">
<!-- 				<h2 class="d2d-top-middle-title d2d">
					<?php the_field('middle_top_header'); ?> 
				</h2> -->
			</div>
			<div class="d2d-middle-text">
<!-- 				<p class="d2d">
					<?php the_field('d2d_middle_text'); ?> 
				</p> -->
			</div>
<!-- 			<div class="spacer spacer-medium">

			</div> -->
		</section>
		<section id="project-progress">
<!-- 			<div class="spacer spacer-medium">

			</div> -->
			<div class="d2d-title-under-middle">
<!-- 				<h2 class="d2d">
					<?php the_field('middle_title'); ?> 
				</h2>	 -->
			</div>
			<div class="d2d-movie">
<!-- 				<p class="d2d">
					TBA
				</p> -->
<!-- 				<iframe width="420" height="315" src="<?php the_field('first_video_middle'); ?> " class="middle-first-video"></iframe>
				<iframe width="420" height="315" src="<?php the_field('second_video_middle'); ?> " class="middle-second-video"></iframe> -->
			</div>
<!-- 			<div class="spacer spacer-medium">

			</div> -->
		</section>
			</section>
		</section>
	<section class="circle-clocks" style="position: relative;">
		<img src="/wp-content/uploads/2021/01/clocks-circle.png" style="    position: absolute;
    width: 150px;
    right: 0px;
    top: 700px;
    z-index: -1;">
		<section class="container">
		<section id="d2d-global-forums">
			<div class="spacer spacer-medium">

			</div>
			<div class="d2d-title-up-bottom">
				<h2 class="d2d-top-middle-title d2d">
					<?php the_field('middle_bottom_header'); ?> 
				</h2>
			</div>
			<div class="d2d-up-bottom-text">
				<?php if( have_rows('d2d_up_bottom_text_repeter') ):
				while ( have_rows('d2d_up_bottom_text_repeter') ) : the_row();	?>
				<p class="d2d"><?php the_sub_field('middle_bottom_text'); ?></p>
				<?php endwhile; endif;?>
			</div>
			<div class="d2d-up-bottom-list">
				<ul class="white-pointer-list d2d-fixed-margin">
					<?php if( have_rows('list_repeter') ):
					while ( have_rows('list_repeter') ) : the_row();	?>
					<li class="d2d"><?php the_sub_field('list_text'); ?></li>
					<?php endwhile; endif;?>
				</ul>
			</div>
			
		</section>
			
		<section id="video-Tone-Foss">
			<div class="spacer spacer-medium">

			</div>
			<div class="d2d-title-bottom">
				<h3 class="d2d-top-middle-title d2d">
					<?php the_field('bottom_title'); ?> 
				</h3>
			</div>
			<div class="d2d-movie">
				<iframe width="420" height="315" src="<?php the_field('bottom_video'); ?> " class="bottom-video"></iframe> 
			</div>
			<div class="d2d-bottom-text">
				<?php if( have_rows('d2d_bottom_text_repeter') ):
				while ( have_rows('d2d_bottom_text_repeter') ) : the_row();	?>
				<p class="d2d"><?php the_sub_field('bottom_text'); ?></p>
				<?php endwhile; endif;?>
			</div>
			<div class="d2d-movie">
				<iframe width="420" height="315" src="<?php the_field('bottom_video_jo'); ?> " class="bottom-video"></iframe> 
			</div>
			<div class="spacer spacer-medium">

			</div>
			<h2 class="d2d-top-middle-title d2d">
						World Health Organization Regions
					</h2>
					<p class="our-d2d-campaign-font">
						Mean avarage delay to diagnosis in years
					</p>
			<img src="<?php the_field('world_image'); ?>" style="    width: calc(100% - 100px);margin-left: 50px;" class="fixed-margin-middle"/>
		</section>
<!-- 			<section id="get-involved">
				<div class="spacer spacer-medium">

			</div>
				<h2 class="d2d">
					Get involved
				</h2>
				<p class="d2d">
					TBA
				</p>
				<div class="spacer spacer-medium">

			</div>
			</section> -->
			<section id="more-resources">
				<div class="spacer spacer-medium">

			</div>
				<h2 class="d2d">
					More resources
				</h2>
									<div class="col-12">
						<div class="imas_accordion">
							<div id="accordion">
							<?php if( have_rows('more_resources_repeater') ):
								$count = 1;
								while ( have_rows('more_resources_repeater') ) : the_row();
									if($count == 1) {
										$show_class = 'show';
										$ariaexpanded = 'true';
									}
									else {
										$show_class = '';
										$ariaexpanded = 'false';
									}
								?>
								<div class="card" style="margin-bottom: 1em;">
									<div style="padding:0px;" class="card-header" id="title_<?php echo $count; ?>">
								    	<a class="" role="button" data-toggle="collapse" href="#collapse_<?php echo $count; ?>" aria-expanded="false" aria-controls="collapse_<?php echo $count; ?>">												<span><?php the_sub_field('accordion_title'); ?></span></a>
									</div>
									<div style="padding: 20px;" id="collapse_<?php echo $count; ?>" class="collapse " data-parent="#accordion" aria-labelledby="title_<?php echo $count; ?>" style="">
								  		<div class="card-body" style="pading: 0px;">
								    		<ul class="pdf_list">
											<?php if( have_rows('acc_rep') ):
												while ( have_rows('acc_rep') ) : the_row();	?>
								    			<li>
													
								    				<p><?php the_sub_field('accordion_text'); ?></p>
													<?php if( have_rows('file_rep') ):
													while ( have_rows('file_rep') ) : the_row();	?>
								    				<a href="<?php the_sub_field('accordion_file'); ?>" download>
								    					<span class="download_icon" style="margin-top: -10px;">
								    						<img src="<?php echo get_template_directory_uri();?>/images/openhealth/pdf-download.png" alt="#"></span>
													</a>
													<?php endwhile; endif;?>
													
													<?php if( have_rows('vid_rep') ):
													while ( have_rows('vid_rep') ) : the_row();	?>
													<div class="d2d-movie">
								    					<iframe width="420" height="315" src="<?php the_sub_field('resources_video'); ?>" class="ressources-video" style="margin: auto;"></iframe>
													</div>
													<?php endwhile; endif;?>
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
				<div class="spacer spacer-medium">

			</div>
			</section>
			<section id="sponsors">
				<div class="d2dbottom">
					<p class="d2d" style="font-size: 30px;">
						<?php the_field('sponsors_text'); ?> 
					</p>
					<div class="dlfex">
					<?php if( have_rows('sponsor_repeater') ):
					while ( have_rows('sponsor_repeater') ) : the_row();	?>
					<img class="d2d fixed-wid" src="<?php the_sub_field('sponsor_image'); ?>"/>
					<?php endwhile; endif;?>
					</div>
					<p class="d2d" style="font-size: 20px;"><i>
						<?php the_field('sponsors_text_bottom'); ?>
						</i>
					</p>
				</div>
			</section>
		</section>
		</section>
</div>

<?php } else { ?>
	<section id="imas_date" class="passward_form">
		<div class="container">
			<?php echo get_the_password_form(); ?>
		</div>
	</section>
<?php } ?>
<?php get_footer();?>