<?php /* Template Name: D2D Resources template */ 
 get_header();
?>

<nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Delay to Diagnosis Resources and Videos</li>
		</ol>
	</div>
</nav>

<?php
global $post;
if ( ! post_password_required( $post ) ) { ?>
<section id="delay-to-diagnosis">
		<section class="container">
			<div class="spacer spacer-210">

			</div>
			<h2 class="d2d">
				Delay To Diagnosis Resources and Videos
			</h2>
			<div class="texts">
				<?php if( have_rows('d2d_text_repeter') ):
					while ( have_rows('d2d_text_repeter') ) : the_row();	?>
					<p class="full-w">
						<?php echo the_sub_field('list_text_d2d'); ?>
					</p>
					<?php endwhile; endif;?>
			</div>
			<div class="videos">
				<?php if( have_rows('video_repeter') ):
					$count1 = 1;
					while ( have_rows('video_repeter') ) : the_row(); if($count1 == 12): ?>
					<div class="pair">
						<a href="https://asif.info/wp-content/uploads/2021/06/Delay-to-Diagnosis Members'-Tool-Kit.zip" target="_blank" class="member-tk"download><img src="<?php the_sub_field('list_video'); ?>" id="member-kit" style="width: 600px; margin-right: 100px;" class="top-image"></a>
						<h3 class="d2d"><?php the_sub_field('video_title'); ?></h3>
					</div>
					<?php else: ?>
					<div class="pair">
						<iframe width="420" height="315" src="<?php the_sub_field('list_video'); ?>" class="top-video"></iframe>
						<h3 class="d2d"><?php the_sub_field('video_title'); ?></h3>
					</div>
				<?php endif;?>
					<?php $count1++; endwhile; endif;?>
			</div>
			<div class="spacer spacer-medium">

			</div>
		</section>
	</section>
<section class="container">
			<section id="more-resources">
				<div class="spacer spacer-medium">

			</div>
				<h2 class="d2d">
					Further reading
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
													
								    				<a href="<?php the_sub_field('redir_link'); ?>" target=_blank>
								    					<span class="download_icon" style="margin-top: -10px; transform: rotate(-90deg);">
								    						<img src="<?php echo get_template_directory_uri();?>/images/openhealth/pdf-download.png" alt="#"></span>
													</a>
													
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
	</section>
<div class="spacer spacer-medium">

			</div>
<?php } else { ?>
	<section id="imas_date" class="passward_form">
		<div class="container">
			<?php echo get_the_password_form(); ?>
		</div>
	</section>
<?php } ?>
<?php get_footer();?>