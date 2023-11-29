<?php /* Template Name: Resources About Template */
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
					<button class="select-resources-section active">
						<a href="/resources-about-axspa/">About axSpA</a>
				</button>
				
				
					<button class="select-resources-section">
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
					<?php the_field('first_text'); ?>

				</p>
			</div>

		</div>
		<div class="row">
			
			<div class="col-md-12  d-flex flex-row">
				
				<p style="min-width:120px" class="d2d-text"><strong>choose topic ></strong></p>
				<div style="width:calc(100% - 120px)" class="res-anchors d-md-flex flex-row justify-content-between">
					<?php if (have_rows('sections')):
		while (have_rows('sections')):
			the_row(); ?>
					<p class="d2d-text font-weight-bold">
						<a class="analytics" id="<?php the_sub_field('analytics_id'); ?>" href="<?php the_sub_field('anchor'); ?>"><?php the_sub_field('name'); ?></a>
					</p>
					<?php endwhile; endif; ?>

				</div>
			</div>
		</div>


		<div class="row" id="disease">
			<div class="col-md-12">
				<h1>
					DISEASE INFORMATION
				</h1>
				<p>
					<?php the_field('disease_information_text'); ?>

				</p>
				<div class="bd-example">
					
					<div id="carousel-about-top" class="carousel multi slide" data-ride="carousel" data-interval="0" 
						data-itemcount-l="4" data-itemcount-m="3" data-itemcount-s="1" autostart="0">
						
							<?php the_field('guideline_description'); ?>
						
						<div class="full-bg-about"></div>

						
						<div class="carousel-inner" role="listbox">

							<?php if (have_rows('resources-section')):
		$i = 0;
		while (have_rows('resources-section')):
			the_row(); ?>

							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 text-center px-5 px-md-3 d-flex flex-column">
								<a id="carousel-selector-<?php echo $i ?>" data-slide-to="<?php echo $i ?>"
									class="carousel-selector" data-target="#custCarousel">
									<img src="<?php the_sub_field('thumbnail'); ?>" class="img-fluid" >
								</a>
								<p>
									<?php the_sub_field('name'); ?>
								</p>
								<a id="<?php the_sub_field('analytics_id'); ?>" class="mt-auto analytics" download href="<?php the_sub_field('download'); ?>"><img class="resource-download"
										src="https://asif.info/wp-content/uploads/2023/03/resource-download.png"></a>
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



					</div>
					<div id="custCarousel" class="carousel slide" data-ride="carousel" data-interval="0" align="center">
						<!-- slides --><div class="full-bg-about lighter"></div>
						<div class="carousel-inner">
							<?php if (have_rows('resources-section')):
		$i = 0;
		while (have_rows('resources-section')):
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
		
		if(width < breakS) {
			var key = 's';
		} else if(width < breakM) {
			key = 'm';
		} else {
			key = 'l';
		}
		
		var cnt = 1*optionNode.data("itemcount-"+key);
		
		return cnt > 0? cnt : 1;
	}

	function repartition(container, items, count) {
		container.children().remove();
		
		for(var i = 0; i < items.length; i++) {
			var cBlock = $('<div class="carousel-item" ></div').appendTo(container);
			var cInnerBlock = $('<div class="row"></div>').appendTo(cBlock);
                
			for(var j = 0; j < count; j++) {
				var cIdx = (i + j) % items.length;
				
				cInnerBlock.append($(items.get(cIdx)).clone());
			}
		}
		
		container.children().first().addClass("active");
	}
	
	$('.carousel.multi').each(function(idx, El) {
		var carousel = $(El);
		var container = carousel.find('.carousel-inner');
		
		if(!container.children().first().hasClass('carousel-item')) {
			var items = container.children().clone();

			var lastSize = calcStepSize(carousel);
			repartition(container, items, lastSize);

			$(window).resize(function () {
				var cSize = calcStepSize(carousel);

				if(cSize != lastSize) {
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
		<div class="row" id="tools">
			<div class="col-md-12">
								<h1 >
					Tools &#38; support
				</h1>
								<p>
					<?php the_field('tools_support'); ?>

				</p>

				<div class="text-center QUESTIONNAIRE"> 
<!-- 					<a href="https://asif.info/wp-content/uploads/2020/02/UCB-Full-axSpA-QUESTIONNAIRE.pdf" target="_blank" style="display:inline-block; padding-right:20px">
				<img src="http://asif.flywheelstaging.com/wp-content/uploads/2023/01/resouce1.jpg">
					<p>
						Self-Diagnosis questionnaire
					</p>
											</a> -->
					<a class="analytics" id="Resources-About-Discussion-Guide-pdf" download href="https://asif.info/wp-content/uploads/2023/03/Discussion-guide_Print.pdf" target="_blank" style="display:inline-block; padding-left:20px">
				<img src="https://asif.info/wp-content/uploads/2023/03/talk_to_be_heard_discussion_guide.jpg">
					<p>
						Talk to be Heard discussion guide
					</p>
											</a>

					<a class="analytics padding-tools" id="Resources-About-Assesment-pdf" download href="https://asif.info/wp-content/uploads/2023/05/Clinical-Measurement-Infographic_ASIF-Website_Approved-1-1.pdf" target="_blank" style="display:inline-block;">
				<img src="https://asif.info/wp-content/uploads/2023/05/Clinical-Measurement-Infographic_ASIF-Website_Approved-1.jpg">
					<p>
						Disease Assessment
					</p>
											</a>
					
				</div>
				<div class="symptoms-checkers">
						<h2>
		SYMPTOM CHECKERS
					</h2>
					<div class="row">
						<div class="col-md-6">
							<span>
							<strong>BULGARIAN</strong><br> 
							<a class="analytics" id="Resources-About-Bulgarian-External" href="https://www.credoweb.bg/survey/126950/test-za-ranna-diagnostika-na-bolestta-na-behterev" target="_blank">Българско сдружение на болните от болест на Бехтерев <br>
(Bulgarian Ankylosing Spondylitis Patient Society)
</a>
							</span>
							<span>
							<strong>ENGLISH</strong><br> 
							<a class="analytics" id="Resources-About-UK-Society-External" href="https://www.actonaxialspa.com/symptoms-checker/" target="_blank"> National Axial Spondyloarthritis Society in UK</a><br>
								<a class="analytics" id="Resources-About-Canadian-Association-External" href="https://spondylitis.ca/spondyloarthritis/could-i-have-spondylitis/" target="_blank">Canadian Spondylitis Association</a><br>
								<a class="analytics" id="Resources-About-CaRE-External" href="https://www.carearthritis.com/tools/tools_html.anonlaunch?toolid=1&refid=/physicians.php%23tab3" target="_blank">CaRE Arthritis</a>
							</span>
							<span>
							<strong>FRENCH</strong><br> 
							 <a class="analytics" id="Resources-About-French-External" href="https://www.bechterew.ch/fr/test-du-diagnostic/" target="_blank">Société suisse de la spondylarthrite ankylosante<br>
(Swiss Association of Ankylosing Spondylitis) 
</a>
							</span>
							
						</div>
						
						<div class="col-md-6">
							<span>
							<strong>GERMAN </strong><br> 
							<a class="analytics" id="Resources-About-German-External" href="https://www.bechterew.ch/diagnosetest/" target="_blank">Schweizerische Vereinigung Morbus Bechterew<br> (Swiss Association of Ankylosing Spondylitis)</a>
							</span>
							<span>
							<strong>JAPANESE</strong><br> 
							 <a class="analytics" id="Resources-About-Japanese-External" href="https://feigned-hope-7907.glideapp.io/" target="_blank"> 日本ASクラブ<br>
(Japan AS Club)</a>
							</span>
							<span>
							<strong>NORWEGIAN</strong><br> 
							  <a class="analytics" id="Resources-About-Norwegian-External" href="https://spafo.no/diagnosetest/" target="_blank">Spafo Norge Spondyloartrittforbundet <br>(Spondylitis Association of Norway)</a>
							</span>
							
						</div>
					</div>
				</div>
			</div>
			

		</div>
		<div class="row clinical-resources" id="clinical">
							<div class="full-bg-about clinical"></div>

			<div class="col-md-12 ">
				<h1 >
					CLINICAL RESOURCES
				</h1>
								<p>
					<?php the_field('clinical_resources_text'); ?>

				</p>
				<?php if (have_rows('patient_organisations')):
		while (have_rows('patient_organisations')):
			the_row(); ?>
				<h2 class="resources">
					<?php the_sub_field('name'); ?>
				</h2>
				<h3 class="resources">
					<?php the_sub_field('subtitle'); ?>
				</h3>
				
					<?php the_sub_field('content'); ?>

				<?php endwhile; endif; ?>


			</div>
		</div>

		<div class="row" id="axspa">
			<div class="col-md-12">
				<h1>
					axSpA WEBINARS
				</h1>
				<p>
					<?php the_field('webinars_intro'); ?>

				</p>
				<div class="row webinars">

						<?php if (have_rows('webinars')):
		while (have_rows('webinars')):
			the_row(); ?>
<div class="col-md-4 text-center">
						<p class="resources">
							<a class="fancybox analytics" id="<?php the_sub_field('analytics_id'); ?>" href='<?php the_sub_field('content'); ?>'>
								<?php
			$url = get_sub_field('content');
			parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
			$video_id = $video_id[1];
			$thumbnail = "http://img.youtube.com/vi/" . $my_array_of_vars['v'] . "/0.jpg";
			echo ("<img style='width:100%'src='" . $thumbnail . "'>");
                                ?>

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
<!-- 		<div class="row">
			<div class="col-md-12">
				<h1>
					OTHER RESOURCES
				</h1>
				<p>
					<?php the_field('other_intro'); ?>

				</p>
				<div class="row">
					<?php if (have_rows('other')):
		while (have_rows('other')):
			the_row(); ?>
					<div class="col-md-3 text-center">

						<p class="resources">
							<a href="<?php the_sub_field('download'); ?>">
								<img style='width:100%' src='<?php the_sub_field('thumbnail'); ?>'>

							</a>
						</p>
						<h2 class="resources">
							<?php the_sub_field('title'); ?>
						</h2>
					</div>

					<?php endwhile; endif; ?>


				</div>
			</div>
		</div> -->
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