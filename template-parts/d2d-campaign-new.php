<?php /* Template Name: D2D Camapign New template */ 
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
						Globally, diagnostic delay in axSpA remains a significant challange.
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
				<p class="our-d2d-campaign-font paragraph-fixed-margin text-center">
						The average global delay to diagnosis is around 7 years.
				</p>
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
						Suffering with undiagnosed severe pain, stiffness and fatique often leads to depression and anxiety. The delay can lead to significant disease progression, even causing permanent disability. Quality of life is also severely impacted by people experiencing symptoms without effective treatment.
					</p>
				</div>
			<div class="spacer spacer-medium">

			</div>
		</section>
	</section>
</section>
<section id="sponsors">
				<div class="d2dbottom container">
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
</div>
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