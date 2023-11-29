<?php /* Template Name: D2D Awareness New template */ 
get_header();
?>

<nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Delay to Diagnosis Awareness</li>
		</ol>
	</div>
</nav>

<?php
$dynamic_pid =  get_the_ID();
if( have_rows('flexible_content',$dynamic_pid) ):
    while ( have_rows('flexible_content',$dynamic_pid) ) : the_row();
        if(get_row_layout() == 'delay_to_diagnosis_videos')
        { ?>

<div class="d2d_page"> 
	<section id="second_nav">
	</section>
	<section id="delay-to-diagnosis">
		<section class="top-bg" style="background-image: url(<?php the_field('top_bg_image'); ?>);background-repeat: no-repeat; background-size: cover;">
			<section class="container">
				<div class="dflex dflex-d2d">
					<div class="">
						<h2 class="d2d-top-title d2d awareness-infographics"  style="width: 70%;">
							Delay to Diagnosis: Raising Awareness of axSpA
						</h2>
						<p class="d2d">The low awareness of axSpA is a challenge that significantly contributes to the delay in diagnosing the disease. It tends to be an under-recognised condition, both by the general public and healthcare professionals. In order to address this, we have created a series of materials to help people better understand the signs and symptoms of axSpA. Our members will use these videos, communication and infographic materials with different audiences to create better awareness of the disease and the impact of the delay. We have created three short films, which you can watch below.</p>
					</div>
				</div>
				<div class="spacer spacer-medium">

				</div>
			</section>
		</section>
	</section>
	<section class="">
		<section class="container">
			<section id="d2d-campaign">
				<div class="spacer spacer-medium">

				</div>

				<div class="dflex dflex-d2d ">
					<div class="awareness-video-text" style="">
						This sketch animation raises awareness by highlighting the key signs and symptoms of axSpA, including some of the lesser-known ones. This film will be used to raise awareness with those who may be experiencing symptoms, as well as the broader public.
					</div>
					<div class="awareness-video-video" style="width: 55%;">
						<div class="header-vid-sec">
                            <?php 	$header_lang_id = get_sub_field('select_language_awareness_1'); 
		 							if(get_sub_field('select_language_awareness_1') != '') { 
                                    foreach ($header_lang_id as $lang_id) { ?>
                                        <div class="header-group" id="process-video">
                                            
                                            <iframe class="analytics" id="vimeoheader1" src="<?php echo get_field('bottom_video_awareness_1',$lang_id); ?>" width="670" height="345" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay" style="width: 100%"></iframe>
                                            
                                        </div>
                                        <div class="language-sec">
                                            <div class="lang-icnam">
                                                <img src="<?php echo get_field('language_flag',$lang_id) ?>">
                                                <?php echo get_the_title($lang_id); ?>
                                            </div>
                                            <div class="lang-dropa">
                                                <button type="button" class="dropdown-toggle category-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg id="Group_17" data-name="Group 17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
                                                        <defs>
                                                            <clipPath id="clip-path">
                                                            <rect id="Rectangle_7" data-name="Rectangle 7" width="23" height="23" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="Group_16" data-name="Group 16" clip-path="url(#clip-path)">
                                                            <path id="Path_3" data-name="Path 3" d="M11.383,0A11.383,11.383,0,1,0,22.766,11.383,11.4,11.4,0,0,0,11.383,0m9.708,11.383A9.671,9.671,0,0,1,19.08,17.29a1.551,1.551,0,0,1-.378-1.807,8.647,8.647,0,0,0,.371-3.3c-.079-.7-.445-2.4-1.44-2.419a2.3,2.3,0,0,1-2.265-1.522c-1.225-2.452,2.3-2.922,1.074-4.281-.343-.381-2.114,1.57-2.374-1.03a1.356,1.356,0,0,1,.4-.751,9.722,9.722,0,0,1,6.625,9.2M10.049,1.771c-.232.452-.845.636-1.218.976-.81.734-1.158.632-1.6,1.336S5.378,5.8,5.378,6.312s.716,1.11,1.075.993a3.828,3.828,0,0,1,1.858.084c.556.2,4.641.393,3.34,3.846-.412,1.1-2.221.913-2.7,2.732a14.84,14.84,0,0,0-.339,1.779c-.03.576.408,2.748-.148,2.748S6.4,16.551,6.4,16.2a22.275,22.275,0,0,1-.39-2.644c0-1.057-1.8-1.04-1.8-2.446,0-1.269.976-1.9.756-2.506s-1.929-.627-2.643-.7a9.732,9.732,0,0,1,7.724-6.132M8.33,20.6c.583-.308.642-.705,1.171-.727a10.755,10.755,0,0,0,1.779-.385,16.375,16.375,0,0,1,2.641-.825c.8-.065,2.389.042,2.816.818A9.668,9.668,0,0,1,8.33,20.6" transform="translate(0 -0.051)" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <ul id="header-lang">
                                                        <?php $args = array(
                                                            'post_type' => 'languages',
                                                            'posts_per_page' => -1
                                                        );
                                                        $query = new WP_Query($args);
                                                        if ($query->have_posts() ) : 
                                                            
                                                            while ( $query->have_posts() ) : $query->the_post(); 
                                                            if(get_field('bottom_video_awareness_1',get_the_ID()) != '') { ?>
                                                                <li data-target="<?php echo get_the_ID(); ?>" class="dropdown-item"><?php echo get_the_title(); ?></li>
                                                                <?php } ?>
                                                        <?php endwhile;
                                                            
                                                            wp_reset_postdata();
                                                        endif; ?>
                                                        
                                                    </ul>                                            
                                                    <div></div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php } ?>
                            <?php } 
							else{
								echo 'hello';
							}
							?>
                            </div>
					</div>
				</div>

				<div class="spacer spacer-medium">

				</div>

				<div class="dflex dflex-d2d">
					<div class="awareness-video-text" style="">
						This film, aimed at healthcare professionals, is introduced by Dr Raj Sengupta, an axSpA-expert rheumatologist, based in the UK. Dr Sengupta outlines the way the disease presents clinically as well as the importance of achieving a timely diagnosis. He is supported by four patients illustrating his points by talking about their own symptoms and diagnosis. This film will be used to emphasise the key signs and symptoms that healthcare professionals (usually in primary care) should look out for.
					</div>
					<div class="awareness-video-video" style="width: 55%;">
						<div class="header-vid-sec2">
                            <?php 	$header_lang_id2 = get_sub_field('select_language_awareness_2'); 
		 							if(get_sub_field('select_language_awareness_2') != '') { 
                                    foreach ($header_lang_id2 as $lang_id2) { ?>
                                        <div class="header-group" id="process-video">
                                            
                                            <iframe class="analytics" id="vimeoheader2" src="<?php echo get_field('bottom_video_awareness_2',$lang_id2); ?>" width="670" height="345" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay" style="width: 100%"></iframe>
                                            
                                        </div>
                                        <div class="language-sec">
                                            <div class="lang-icnam">
                                                <img src="<?php echo get_field('language_flag',$lang_id2) ?>">
                                                <?php echo get_the_title($lang_id2); ?>
                                            </div>
                                            <div class="lang-dropa">
                                                <button type="button" class="dropdown-toggle category-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg id="Group_17" data-name="Group 17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
                                                        <defs>
                                                            <clipPath id="clip-path">
                                                            <rect id="Rectangle_7" data-name="Rectangle 7" width="23" height="23" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="Group_16" data-name="Group 16" clip-path="url(#clip-path)">
                                                            <path id="Path_3" data-name="Path 3" d="M11.383,0A11.383,11.383,0,1,0,22.766,11.383,11.4,11.4,0,0,0,11.383,0m9.708,11.383A9.671,9.671,0,0,1,19.08,17.29a1.551,1.551,0,0,1-.378-1.807,8.647,8.647,0,0,0,.371-3.3c-.079-.7-.445-2.4-1.44-2.419a2.3,2.3,0,0,1-2.265-1.522c-1.225-2.452,2.3-2.922,1.074-4.281-.343-.381-2.114,1.57-2.374-1.03a1.356,1.356,0,0,1,.4-.751,9.722,9.722,0,0,1,6.625,9.2M10.049,1.771c-.232.452-.845.636-1.218.976-.81.734-1.158.632-1.6,1.336S5.378,5.8,5.378,6.312s.716,1.11,1.075.993a3.828,3.828,0,0,1,1.858.084c.556.2,4.641.393,3.34,3.846-.412,1.1-2.221.913-2.7,2.732a14.84,14.84,0,0,0-.339,1.779c-.03.576.408,2.748-.148,2.748S6.4,16.551,6.4,16.2a22.275,22.275,0,0,1-.39-2.644c0-1.057-1.8-1.04-1.8-2.446,0-1.269.976-1.9.756-2.506s-1.929-.627-2.643-.7a9.732,9.732,0,0,1,7.724-6.132M8.33,20.6c.583-.308.642-.705,1.171-.727a10.755,10.755,0,0,0,1.779-.385,16.375,16.375,0,0,1,2.641-.825c.8-.065,2.389.042,2.816.818A9.668,9.668,0,0,1,8.33,20.6" transform="translate(0 -0.051)" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <ul id="header-lang2">
                                                        <?php $args = array(
                                                            'post_type' => 'languages',
                                                            'posts_per_page' => -1
                                                        );
                                                        $query = new WP_Query($args);
                                                        if ($query->have_posts() ) : 
                                                            
                                                            while ( $query->have_posts() ) : $query->the_post(); 
                                                            if(get_field('bottom_video_awareness_2',get_the_ID()) != '') { ?>
                                                                <li data-target="<?php echo get_the_ID(); ?>" class="dropdown-item"><?php echo get_the_title(); ?></li>
                                                                <?php } ?>
                                                        <?php endwhile;
                                                            
                                                            wp_reset_postdata();
                                                        endif; ?>
                                                        
                                                    </ul>                                            
                                                    <div></div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php } ?>
                            <?php } 
							else{
								echo 'hello';
							}
							?>
                            </div>
					</div>
				</div>

				<div class="spacer spacer-medium">

				</div>

				<div class="dflex dflex-d2d">
					<div class="awareness-video-text" style="">
						In this film four people share their experiences of living with axSpA symptoms, how they responded to their diagnosis, the day-to-day burden and how they can live better with the disease.
					</div>
					<div class="awareness-video-video" style="width: 55%;">
						<div class="header-vid-sec3">
                            <?php 	$header_lang_id3 = get_sub_field('select_language_awareness_3'); 
		 							if(get_sub_field('select_language_awareness_3') != '') { 
                                    foreach ($header_lang_id3 as $lang_id3) { ?>
                                        <div class="header-group" id="process-video">
                                            
                                            <iframe class="analytics" id="vimeoheader3" src="<?php echo get_field('bottom_video_awareness_3',$lang_id); ?>" width="670" height="345" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay" style="width: 100%"></iframe>
                                            
                                        </div>
                                        <div class="language-sec">
                                            <div class="lang-icnam">
                                                <img src="<?php echo get_field('language_flag',$lang_id3) ?>">
                                                <?php echo get_the_title($lang_id3); ?>
                                            </div>
                                            <div class="lang-dropa">
                                                <button type="button" class="dropdown-toggle category-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg id="Group_17" data-name="Group 17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
                                                        <defs>
                                                            <clipPath id="clip-path">
                                                            <rect id="Rectangle_7" data-name="Rectangle 7" width="23" height="23" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="Group_16" data-name="Group 16" clip-path="url(#clip-path)">
                                                            <path id="Path_3" data-name="Path 3" d="M11.383,0A11.383,11.383,0,1,0,22.766,11.383,11.4,11.4,0,0,0,11.383,0m9.708,11.383A9.671,9.671,0,0,1,19.08,17.29a1.551,1.551,0,0,1-.378-1.807,8.647,8.647,0,0,0,.371-3.3c-.079-.7-.445-2.4-1.44-2.419a2.3,2.3,0,0,1-2.265-1.522c-1.225-2.452,2.3-2.922,1.074-4.281-.343-.381-2.114,1.57-2.374-1.03a1.356,1.356,0,0,1,.4-.751,9.722,9.722,0,0,1,6.625,9.2M10.049,1.771c-.232.452-.845.636-1.218.976-.81.734-1.158.632-1.6,1.336S5.378,5.8,5.378,6.312s.716,1.11,1.075.993a3.828,3.828,0,0,1,1.858.084c.556.2,4.641.393,3.34,3.846-.412,1.1-2.221.913-2.7,2.732a14.84,14.84,0,0,0-.339,1.779c-.03.576.408,2.748-.148,2.748S6.4,16.551,6.4,16.2a22.275,22.275,0,0,1-.39-2.644c0-1.057-1.8-1.04-1.8-2.446,0-1.269.976-1.9.756-2.506s-1.929-.627-2.643-.7a9.732,9.732,0,0,1,7.724-6.132M8.33,20.6c.583-.308.642-.705,1.171-.727a10.755,10.755,0,0,0,1.779-.385,16.375,16.375,0,0,1,2.641-.825c.8-.065,2.389.042,2.816.818A9.668,9.668,0,0,1,8.33,20.6" transform="translate(0 -0.051)" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <ul id="header-lang3">
                                                        <?php $args = array(
                                                            'post_type' => 'languages',
                                                            'posts_per_page' => -1
                                                        );
                                                        $query = new WP_Query($args);
                                                        if ($query->have_posts() ) : 
                                                            
                                                            while ( $query->have_posts() ) : $query->the_post(); 
                                                            if(get_field('bottom_video_awareness_3',get_the_ID()) != '') { ?>
                                                                <li data-target="<?php echo get_the_ID(); ?>" class="dropdown-item"><?php echo get_the_title(); ?></li>
                                                                <?php } ?>
                                                        <?php endwhile;
                                                            
                                                            wp_reset_postdata();
                                                        endif; ?>
                                                        
                                                    </ul>                                            
                                                    <div></div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php } ?>
                            <?php } 
							else{
								echo 'hello';
							}
							?>
                            </div>
					</div>
				</div>

				<div class="spacer spacer-medium">

				</div>
			</section>
		</section>
	</section>
	<section>
		<section class="container">
			<h2 class="d2d-top-title d2d "  style="">
				Infographics
			</h2>	
		</section>
	</section>	
	<section style="background-color: #E6E8ED;">
		<section class="container">
			<div class="spacer spacer-medium">

			</div>
			<p class="" style="font: normal normal normal 14px/22px Open Sans;">
				These infographics has been developed to show the key facts and impact associated with the diagnostic delay and can be used to raise awareness or as a starting point for advocacy conversations. If you would like this infographic translating, please contact <a href="mailto:projectmanager@asif.info"><strong>Jo Lowe (projectmanager@asif.info)</strong></a>.
			</p>
			<p>
				Click on the images to enlarge them below or use the download button
			</p>
			<div class="spacer spacer-medium">

			</div>

			<div class="row" id="resources">
				<div class="col-md-12">
					<p>
						<?php the_field('asif_guide'); ?>

					</p>
					<div class="bd-example">

						<div id="carousel-about-top" class="carousel multi slide" data-ride="carousel" data-interval="0" 
							 data-itemcount-l="4" data-itemcount-m="3" data-itemcount-s="1" autostart="0" style="padding-top: 0;">
							<div class="full-bg-about"></div>

							<div class="carousel-inner" role="listbox">

								<?php if (have_rows('resources-exercise')):
										  $i = 0;
										  while (have_rows('resources-exercise')):
										  the_row(); ?>

								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center px-5 px-md-3 d-flex flex-column">
									<a id="carousel-selector-<?php echo $i ?>" data-slide-to="<?php echo $i ?>"
									   class="carousel-selector" data-target="#custCarousel">
										<img src="<?php the_sub_field('thumbnail'); ?>" class="img-fluid max-car" style="">
									</a>
									<p>
										<?php the_sub_field('name'); ?>
									</p>
									<a class="mt-auto analytics" id="<?php the_sub_field('analytics_id'); ?>" download href="<?php the_sub_field('download'); ?>"><img class="resource-download"
																									   src="https://asif.info/wp-content/uploads/2023/03/resource-download.png"></a>
								</div>
								<?php
										  $i++;

										  endwhile;
										  endif; ?>

							</div>
							<a class="left carousel-control d2d-awareness-arrrow" href="#carousel-about-top" role="button"
							   data-slide="prev">
								<div class="arrow-left"></div>

							</a>
							<a class="right carousel-control d2d-awareness-arrrow" href="#carousel-about-top" role="button"
							   data-slide="next">
								<div class="arrow-right"></div>

							</a>

							</div>
						</div>
						<div id="custCarousel" class="carousel slide" data-ride="carousel" data-interval="0" align="center">
							<!-- slides --><div class="full-bg-about lighter"></div>
							<div class="carousel-inner">
								<?php if (have_rows('resources-exercise')):
										  $i = 0;
										  while (have_rows('resources-exercise')):
										  the_row(); ?>
								<div class="carousel-item <?php if ($i == 0)
											  echo "active"; ?>">
									<h2 style="font: normal normal bold 30px/37px Montserrat; letter-spacing: 0px; color: #023E62;">
										<?php the_sub_field('name'); ?>

									</h2>

									<iframe src="<?php the_sub_field('flipbook'); ?>" seamless="seamless" scrolling="no"
											frameborder="0" allowtransparency="true" allowfullscreen="true"
											class="flipbook"></iframe>
									<h2 style="font: normal normal bold 30px/37px Montserrat; letter-spacing: 0px; color: #023E62; padding-top: 20px;">Download</h2>
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
		</section>
	</section>
	<div class="spacer spacer-medium">

	</div>
	<section>
		<section class="container">
			<h2 class="d2d-top-title d2d awareness-infographics"  style="width: 40%; margin-bottom: 0">
				Toolkit
			</h2>
			<div class="dflex dflex-d2d">
				<div class="col-lg-8" style="">
					<br>
					<br>
					<p style="font: normal normal normal 14px/22px Open Sans; letter-spacing: 0px; color: #023E62;">
					You can access the films, social media content and other useful tools in our toolkit.  It contains:
					</p>
					<br>
					<ul style="font: normal normal normal 14px/22px Open Sans; letter-spacing: 0px; color: #023E62;  list-style-type: circle; margin-left: 30px;">
						<li>
							three full length films
						</li>
						<li>
							social media short film versions
						</li>
						<li>
							suggested social media posts
						</li>
						<li>
							social media visual content
						</li>
						<li>
							communications and social media guide
						</li>
					</ul>
					<br>
					<p style="font: normal normal normal 14px/22px Open Sans; letter-spacing: 0px; color: #023E62;">
						Please contact Jo Lowe at <a class="analytics" id="mail-awareness-toolkit" href="mailto:projectmanager@asif.info"><strong>projectmanager@asif.info</strong></a> to access the full toolkit in any of these languages: Bulgarian; English; French; German; Greek; Hebrew; Hindi; Norwegian; Spanish; Tagalog.
					</p>
				</div>
				<!--div class="col-lg-4" style="display:flex;justify-content:center;align-items:center;">
					<a class="analytics" id="<?php the_sub_field('analytics_id'); ?>" download href="<?php the_sub_field('download'); ?>"><img class="resource-download" src="https://asif.info/wp-content/uploads/2023/03/resource-download.png">
					</a>
					<div class="w-100"></div>
					<h2 style="font: normal normal bold 25px/30px Montserrat; letter-spacing: 0px; color: #023E62; padding-top: 20px;">Download toolkit</h2>
				</div-->
			</div>
		</section>
	</section>
</div>
<div class="spacer spacer-medium">
<?php } 
    endwhile;
endif;
?>
</div>
<?php get_footer();?>
<script>
	document.getElementsByClassName("flip_button_right")[0].classList.add("hidden-arrow")
</script>
<script type="text/javascript">
jQuery(document).ready(function(){

   jQuery(document).on("click",'#header-lang li', function() { 
      jQuery.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                dataType: 'html',
                data: {
                  action: 'd2d_vid1',
                  postid: jQuery(this).data('target')
                },
                success: function(res) {
                  jQuery('.header-vid-sec').html(res); 
                 
                 
                }
              })
    });
	
	jQuery(document).on("click",'#header-lang2 li', function() { 
      jQuery.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                dataType: 'html',
                data: {
                  action: 'd2d_vid2',
                  postid: jQuery(this).data('target')
                },
                success: function(res) {
                  jQuery('.header-vid-sec2').html(res); 
                 
                 
                }
              })
    });
	
	jQuery(document).on("click",'#header-lang3 li', function() { 
      jQuery.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                dataType: 'html',
                data: {
                  action: 'd2d_vid3',
                  postid: jQuery(this).data('target')
                },
                success: function(res) {
                  jQuery('.header-vid-sec3').html(res); 
                 
                 
                }
              })
    });
    
});
</script>