<?php /* Template Name: D2D Forum template */ 
 get_header();
?>

<nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Delay to Diagnosis Global Forum Events</li>
		</ol>
	</div>
</nav>

<?php
global $post;
if ( ! post_password_required( $post ) ) { ?>
<div class="d2d_page"> 
<section id="second_nav"></section>
<section class="circle-clocks" style="position: relative;">
		<img src="/wp-content/uploads/2021/01/clocks-circle.png" style="    position: absolute;
    width: 150px;
    right: 0px;
    top: 700px;
    z-index: -1;">
		<section class="container">
		<section id="d2d-global-forums">
			<div class="spacer spacer-210">

			</div>
			<div class="d2d-title-up-bottom">
				<h2 class="d2d">
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
		</section>
	</section>
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