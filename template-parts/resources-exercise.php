<?php /* Template Name: Resources Exercise Template */
get_header();
?>

<nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">About</li>
		</ol>
	</div>
</nav>

<?php
global $post;
if (!post_password_required($post)) { ?>
<section id="resources-about" class="report-page">
	<div class="container d2d">
		<div class="row py-0">
			<div class="col-md-12">
								<h1>
					RESOURCES
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 d-md-flex flex-row justify-content-between">
					<button class="select-resources-section ">
						<a href="/resources-about-axspa/">About axSpA</a>
				</button>
				
				
					<button class="select-resources-section active">
							<a href="/resources-exercise/">Exercise &#38; Movement</a>
				</button>
				
					<button class="select-resources-section">
						<a href="/resources-patient/">Patient Organisation Support</a>
				</button>
			</div>
			</div>
								<div class="row">
			<div class="col-md-12">
				<p>
					<?php the_field('first_text_exercise'); ?>

				</p>
			</div>

		</div>
		<div class="row">
			
			<div class="col-md-12  d-flex flex-row">
				
				<p style="min-width:120px" class="d2d-text"><strong>choose topic ></strong></p>
				<div style="width:calc(100% - 120px)" class="res-anchors d-md-flex flex-row justify-content-around">
					<?php if (have_rows('sections_exercise')):
		while (have_rows('sections_exercise')):
			the_row(); ?>
					<p class="d2d-text font-weight-bold">
						<a class="analytics" id="<?php the_sub_field('analytics_id'); ?>" href="<?php the_sub_field('anchor'); ?>"><?php the_sub_field('name'); ?></a>
					</p>
					<?php endwhile; endif; ?>

				</div>
			</div>
		</div>

		<div class="row" id="resources">
			<div class="col-md-12">
				<!-- Commented this to hide the selector as there is only one pdf currently  -->
				
				<!-- <h1>
					ASIF guide
				</h1>
				<p>
					<?php the_field('asif_guide'); ?>

				</p> -->
				<div class="bd-example">
					<!--
					<div id="carousel-about-top" class="carousel multi slide" data-ride="carousel" data-interval="0" 
						data-itemcount-l="4" data-itemcount-m="3" data-itemcount-s="1" autostart="0">
						<div class="full-bg-about"></div>

						<div class="carousel-inner" role="listbox">

							<?php if (have_rows('resources-exercise')):
		$i = 0;
		while (have_rows('resources-exercise')):
			the_row(); ?>

							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 text-center px-5 px-md-3 d-flex flex-column">
								<a id="carousel-selector-<?php echo $i ?>" data-slide-to="<?php echo $i ?>"
									class="carousel-selector" data-target="#custCarousel">
									<img src="<?php the_sub_field('thumbnail'); ?>" class="img-fluid" >
								</a>
								<p>
									<?php the_sub_field('name'); ?>
								</p>
								<a class="mt-auto" href="<?php the_sub_field('download'); ?>"><img class="resource-download"
										src="https://asif.flywheelstaging.com/wp-content/uploads/2022/11/resource-download.png"></a>
							</div>
							<?php
			$i++;

		endwhile;
	endif; ?>



						</div>
						<a class="left carousel-control" href="#carousel-about-top" role="button"
							data-slide="prev">
							<div class="arrow-left"></div>

						</a>
						<a class="right carousel-control" href="#carousel-about-top" role="button"
							data-slide="next">
							<div class="arrow-right"></div>

						</a>



					</div> -->
					<div id="custCarousel" class="carousel slide" data-ride="carousel" data-interval="0" align="center">
						<!-- slides --><div class="full-bg-about lighter"></div>
						<div class="carousel-inner">
							<?php if (have_rows('resources-exercise')):
		$i = 0;
		while (have_rows('resources-exercise')):
			the_row(); ?>
							<div class="carousel-item <?php if ($i == 0)
				echo "active"; ?>">
																<h2>
																		<?php the_sub_field('name'); ?>

								</h2>

								<iframe src="<?php the_sub_field('flipbook'); ?>" seamless="seamless" scrolling="no"
									frameborder="0" allowtransparency="true" allowfullscreen="true"
									class="flipbook"></iframe>
								<h2>Download this guide</h2>
								<a class="analytics" id="<?php the_sub_field('analytics_id'); ?>" download href="<?php the_sub_field('download'); ?>"><img class="resource-download"
										src="https://asif.info/wp-content/uploads/2023/03/resource-download.png"></a>
							</div>

							<?php
			$i++;

		endwhile;
	endif; ?>



						</div>
					</div>
					<script>
						$(document).ready(function (e) {

							$('.carousel-selector').click((e) => {
								console.log(this)
								$('.carousel-active').removeClass('carousel-active');
// 								$(this).addClass('carousel-active');

// 								$('.carousel-active').removeClass('carousel-active');
								$(e.target).closest("div").addClass('carousel-active');

							});
						})

							(function ($) {
								function calcStepSize(optionNode) {
									var breakM = 990;
									var breakS = 768;

									var width = $(window).innerWidth();

									if (width < breakS) {
										var key = 's';
									} else if (width < breakM) {
										key = 'm';
									} else {
										key = 'l';
									}

									var cnt = 1 * optionNode.data("itemcount-" + key);

									return cnt > 0 ? cnt : 1;
								}

								function repartition(container, items, count) {
									container.children().remove();

									for (var i = 0; i < items.length; i++) {
										var cBlock = $('<div class="carousel-item" ></div').appendTo(container);
										var cInnerBlock = $('<div class="row mx-0""></div>').appendTo(cBlock);

										for (var j = 0; j < count; j++) {
											var cIdx = (i + j) //% items.length;

											cInnerBlock.append($(items.get(cIdx)).clone());
										}
									}

									container.children().first().addClass("active");
								}

								$('.carousel.multi').each(function (idx, El) {
									var carousel = $(El);
									var container = carousel.find('.carousel-inner');

									if (!container.children().first().hasClass('carousel-item')) {
										var items = container.children().clone();

										var lastSize = calcStepSize(carousel);
										repartition(container, items, lastSize);

										$(window).resize(function () {
											var cSize = calcStepSize(carousel);

											if (cSize != lastSize) {
												repartition(container, items, cSize);
												lastSize = cSize;
											}
										});
									} else {
										container.children().first().addClass("active");
									}

									carousel.carousel({
										interval: false
									});
								});

							}(jQuery));
					</script>
				</div>

			</div>
		</div>
		

	
<div class="row" id="axspa">
			<div class="col-md-12">
				<h1>
					VIDEOS
				</h1>
				<p>
					<?php the_field('exercise-intro'); ?>

				</p>
				<div class="row webinars">

						<?php if (have_rows('exercise-videos')):
		while (have_rows('exercise-videos')):
			the_row(); ?>
<div class="col-md-4 text-center">
						<p class="resources">
							<a class="analytics" id="<?php the_sub_field('analytics_id'); ?>" class="fancybox" href='<?php the_sub_field('content'); ?>'>
								<?php
			$url = get_sub_field('content');
			parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
			$video_id = $video_id[1];
			$thumbnail = get_sub_field('thumbnail');
			echo ("<img style='width:100%'src='" . $thumbnail . "'>");
                                ?>

							</a>
						</p>
						</div>

						<?php endwhile; endif; ?>

				</div>
			</div>
		</div>
		
		<!-- test -->
	<!-- test -->
		<div id="stretch-and-move" class="col-lg-12 main-video-section d-flex justify-content-between row">
			<h1>
				STRETCH AND MOVE
			</h1>
			<br>
			<p class="col-lg-12 mb-3 main-video-premier">
				<?php the_field('stretch_description'); ?>
			</p>
			<?php if (have_rows('stretch_videos')):
		while (have_rows('stretch_videos')):
			the_row(); ?>
			<div class="col-lg-6 col-md-12">
				<p class="mb-3 subtitle-video-premier">
					<?php the_sub_field('title'); ?>	
				</p>
				<iframe class="analytics" id="<?php the_sub_field('analytics_id'); ?>" width="560" height="315" src="<?php the_sub_field('youtube_embed'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="width: 100%;"></iframe>
			</div>
			<?php endwhile; endif; ?>
			<div class="col-md-12 py-2">
				<p class="mb-3 disclaimer-video-premier">
					When participating in any exercise or exercise programme, there is the possibility of physical injury. If you engage in this exercise or exercise programme, you agree that you do so at your own risk, are voluntarily participating in these activities, assume all risk of injury to yourself, and agree to release and discharge Yoga for AS LTD and ASIF from any and all claims or causes of action, known or unknown, arising out of these videos.
				</p>
			</div>
		</div>
	<!-- test -->	

				<div class="row" id="additional">
			<div class="col-md-12">
				<h1>
					ADDITIONAL EXERCISE RESOURCES
				</h1>
				<p>
					<?php the_field('additional-exercise-intro'); ?>

				</p>
				<div class="row d-flex ">
					
					<?php if (have_rows('additional-exercise')):
		while (have_rows('additional-exercise')):
			the_row(); ?>
					<div class="col-md-4 text-center">

						<p class="resources">
							<a class="analytics" id="<?php the_sub_field('analytics_id'); ?>" target="_blank" href="<?php the_sub_field('url'); ?>">
								<img style='width:100%' src='<?php the_sub_field('thumbnail'); ?>'>

							</a>
						</p>
						<h3 class="resources pb-4">
							<?php the_sub_field('title'); ?>
						</h3>
					</div>

					<?php endwhile; endif; ?>


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
<?php get_footer(); ?>