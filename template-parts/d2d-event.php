<?php /* Template Name: D2D Event template */ 
 get_header();
?>

<nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Delay to Diagnosis Report Launch Event</li>
		</ol>
	</div>
</nav>

<?php
global $post;
if ( ! post_password_required( $post ) ) { ?>
<section id="event" class="event-page">
	<div class="container d2d">
		<div class="text-center mb-4">
			<img src="<?php the_field('event_image'); ?>" class="full-width" />
		</div>
		<div class="event top-text">
			<?php if( have_rows('top_par_repeter') ):
			while ( have_rows('top_par_repeter') ) : the_row();	?>
			<p class="d2d-text"><?php the_sub_field('top_par_text'); ?></p>
			<?php endwhile; endif;?>
		</div>
		<div class="event list-text">
			<ul class="dflex d-flex mobile-center">
				<?php if( have_rows('event_repeter') ):
				while ( have_rows('event_repeter') ) : the_row();	?>
				<div class="list-el text-center" style="padding-left: 20px; padding-right: 20px; width: 33.33%;">
					<img src="<?php the_sub_field('event_image'); ?>" class="icon-event" />
					<p>
						<?php the_sub_field('event_text'); ?>
					</p>
				</div>
				<?php endwhile; endif;?>
			</ul>
		</div>
		<div class="event bottom-text">
			<?php if( have_rows('bottom_par_repeter') ):
			while ( have_rows('bottom_par_repeter') ) : the_row();	?>
			<p class="d2d-text"><?php the_sub_field('bottom_par_text'); ?></p>
			<?php endwhile; endif;?>
		</div>
		<div class="d-flex dflex">
			<div class="easterly left event-list list-text mx-1">
				<div class="event">
					<h3 class="grey-title my-4 mx-4 text-center">
						Easterly time-zones launch event
					</h3>
					<ul class="last-li-no-bg">
						<?php if( have_rows('event_east_repeter') ):
						while ( have_rows('event_east_repeter') ) : the_row();	?>
						<li class="text-center py-1 dark-bg px-4 el-4-mar"><?php the_sub_field('event_east_text'); ?></li>
						<?php endwhile; endif;?>
						<ul class="mar-l-2 mar-b-60 white-bg">
							<?php if( have_rows('event_east_mem_repeter') ):
							while ( have_rows('event_east_mem_repeter') ) : the_row();	?>
							<li class="list-el"><?php the_sub_field('event_east_mem_text'); ?></li>
							<?php endwhile; endif;?>
						</ul>
					</ul>
				</div>
				<a href="/east-register" class="button-alike"><strong>Click here to register</strong></a>
			</div>
			<div class="westerly right event-list list-text mx-1">
				<div class="event">
					<h3 class="grey-title my-4 mx-4 text-center">
						Westerly time-zones launch event
					</h3>
					<ul class="last-li-no-bg">
						<?php if( have_rows('event_west_repeter') ):
						while ( have_rows('event_west_repeter') ) : the_row();	?>
						<li class="text-center py-1 dark-bg px-4 el-4-mar"><?php the_sub_field('event_west_text'); ?></li>
						<?php endwhile; endif;?>
						<ul class="mar-l-2 mar-b-60 white-bg">
							<?php if( have_rows('event_west_mem_repeter') ):
							while ( have_rows('event_west_mem_repeter') ) : the_row();	?>
							<li class="list-el"><?php the_sub_field('event_west_mem_text'); ?></li>
							<?php endwhile; endif;?>
						</ul>
					</ul>
				</div>
				<a href="/west-register" class="button-alike"><strong>Click here to register</strong></a>
			</div>
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