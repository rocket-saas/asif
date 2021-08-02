<?php /* Template Name: D2D Report template */ 
 get_header();
?>

<nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Delay to Diagnosis Report</li>
		</ol>
	</div>
</nav>

<?php
global $post;
if ( ! post_password_required( $post ) ) { ?>
<section id="report" class="report-page">
	<div class="container d2d">
		<div class="text-center mb-4">
			<img src="<?php the_field('report_image'); ?>" class="full-width" />
		</div>
		<div class="report top-text">
			<?php if( have_rows('top_par_repeter') ):
			while ( have_rows('top_par_repeter') ) : the_row();	?>
			<p class="d2d-text"><?php the_sub_field('top_par_text'); ?></p>
			<?php endwhile; endif;?>
		</div>
		<div class="mx-auto mx-width text-center">
			<h2 class="d2d-top-title d2d fixed-header-width">
				<?php the_field('header_about'); ?>
			</h2>
		</div>
		<div class="report middle-text">
			<?php if( have_rows('middle_par_repeter') ):
			while ( have_rows('middle_par_repeter') ) : the_row();	?>
			<p class="d2d-text"><?php the_sub_field('middle_par_text'); ?></p>
			<?php endwhile; endif;?>
		</div>
		<div class="mx-auto mx-width text-center">
			<h2 class="d2d-top-title d2d fixed-header-width">
				<?php the_field('header_needed'); ?>
			</h2>
		</div>
		<div class="report bottom-text">
			<?php if( have_rows('bottom_par_repeter') ):
			while ( have_rows('bottom_par_repeter') ) : the_row();	?>
			<p class="d2d-text"><?php the_sub_field('bottom_par_text'); ?></p>
			<?php endwhile; endif;?>
		</div>
		<div class="mx-auto mx-width text-center">
			<h2 class="d2d-top-title d2d fixed-header-width">
				<?php the_field('header_contains'); ?>
			</h2>
		</div>
		<div class="report list-text">
			<ul class="dflex d-flex no-flex-mobile">
				<?php if( have_rows('report_contains_repeter') ):
				while ( have_rows('report_contains_repeter') ) : the_row();	?>
				<li class="list-el grey-bg-list"><?php the_sub_field('report_contains_text'); ?></li>
				<?php endwhile; endif;?>
			</ul>
			<?php if( have_rows('text_list_repeter') ):
			while ( have_rows('text_list_repeter') ) : the_row();	?>
			<p class="d2d-text"><?php the_sub_field('text_list_text'); ?></p>
			<?php endwhile; endif;?>
		</div>
	</div>	
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