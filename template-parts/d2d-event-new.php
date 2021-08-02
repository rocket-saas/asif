<?php /* Template Name: D2D Event New template */ 
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
		<div style="height: 200px;">
			
		</div>
		<h2 class="d2d-top-title d2d mobile-100w w-630" style="margin: 0px auto 50px; width:max-content;">
			<?php the_field('page_title'); ?> 
		</h2>
		<div class="event top-text">
			<?php if( have_rows('top_par_repeter') ):
			while ( have_rows('top_par_repeter') ) : the_row();	?>
			<p class="d2d-text"><?php the_sub_field('top_par_text'); ?></p>
			<?php endwhile; endif;?>
		</div>
		<div class="d-flex dflex">
			<div class="left">
				<iframe src="https://player.vimeo.com/video/572128978" class="top-video video-placeholder"></iframe>
			</div>
			<div class="easterly right event-list list-text mx-1 own-pad">
				<div class="event">
					<ul class="mar-l-2 mar-b-60 white-bg">
						<?php if( have_rows('event_east_mem_repeter') ):
										  while ( have_rows('event_east_mem_repeter') ) : the_row();	?>
						<li class="list-el"><?php the_sub_field('event_east_mem_text'); ?></li>
						<?php endwhile; endif;?>
					</ul>
				</div>
			</div>
			</div>
		<div class="event top-text">
			<p class="d2d-text">
				You can view the agenda for the 16:00 (BST) event <a href="/wp-content/uploads/2021/07/agenda-pm.pdf" target="_blank" rel="noopener noreferrer" class="sea-color">here</a> and watch the full event, including live panel discussion here. 
			</p>
			<p class="d2d-text">
				The live panel discussion explored questions such as whether we need to put more resources into paediatric diagnosis, given that so many people experience their first symptoms at a very young age; and how we can raise awareness about types of back pain, and how we target these messages.
			</p>
		</div>
		<div class="d-flex dflex">
			<div class="left">
				<iframe src="https://player.vimeo.com/video/572559377" class="top-video video-placeholder"></iframe>
			</div>
			<div class="westerly right event-list list-text mx-1 own-pad">
				<div class="event">
					<ul class="mar-l-2 mar-b-60 white-bg">
						<?php if( have_rows('event_west_mem_repeter') ):
										  while ( have_rows('event_west_mem_repeter') ) : the_row();	?>
						<li class="list-el"><?php the_sub_field('event_west_mem_text'); ?></li>
						<?php endwhile; endif;?>
					</ul>
				</div>
			</div>
		</div>
		<div class="event top-text">
			<?php if( have_rows('bottom_par_repeter') ):
			while ( have_rows('bottom_par_repeter') ) : the_row();	?>
			<p class="d2d-text"><?php the_sub_field('bottom_par_text'); ?></p>
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