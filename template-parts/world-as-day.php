<?php /* Template Name: World As Day */ 
 get_header();
?>
<div id="full-website">
      <div class="loader">
	</div>
	<div id="text">
		<h2 style="color: #fff;text-align: center;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);">
			Please wait, your files are being uploaded. It may take few moments. 
	</h2>
	</div>
		
</div>
<nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">World As Day</li>
		</ol>
	</div>
</nav>

<?php
global $post;
if ( ! post_password_required( $post ) ) { ?>
<div class="world-as-page">
	<section id="second_nav">
	    <nav>
			<ul>
				<li><a class="active" href="#about" class="sec_link">About World As Day</a></li>
				<li><a href="#theme" class="sec_link">Theme</a></li>
				<li><a href="#messages" class="sec_link">Key Messages</a></li>
				<li><a href="#resources" class="sec_link">Resources</a></li>
				<li><a href="#involved" class="sec_link">Get Involved</a></li>
			</ul>
		</nav>
	</section>
	<section id="highlights" class="container title-width">
		<h3 class="smaller-mobile-top-heighter"></h3>
		<h2 class="world-as-day-header mb-5">
			<?php the_field('wad_title_talk_high'); ?> 
		</h2>
		<?php if( have_rows('talk_text_high_repeater') ):
			while ( have_rows('talk_text_high_repeater') ) : the_row();	?>
			<p class="wad_paragraph video-paragraph"><?php the_sub_field('talk_text_high'); ?></p>
		<?php endwhile; endif;?>
		<div class="spacer spacer-medium">
					
				</div>
		<div class="world-as-day">
				<iframe width="420" height="315" src="<?php the_field('video_talk_high'); ?>" class="wad-video"></iframe>
		</div>
		<div class="spacer spacer-medium">
					
				</div>
	</section>
		<section id="awarness" class="container">
		<h2 class="world-as-day-header mb-5">
			<?php the_field('wad_title_talk'); ?> 
		</h2>
		<div class="dflex">
			<div class="left-side world-as-day">
				<iframe width="420" height="315" src="<?php the_field('video_talk'); ?>" class="wad-video"></iframe>
			</div>
			
			<div class="right-side world-as-day texts">
				<?php if( have_rows('talk_text_repeater') ):
					while ( have_rows('talk_text_repeater') ) : the_row();	?>
					<p class="wad_paragraph video-paragraph"><?php the_sub_field('talk_text'); ?></p>
				<?php endwhile; endif;?>
			</div>
		</div>
	</section>
	<section id="about" class="container">
		
		<div class="dflex"  style="position: relative;">
			<img src="<?php the_field('circled_image'); ?>" class="circle-1 circle"/>
			<div class="left-side world-as-day">
				<div class="spacer spacer-medium">
					
				</div>
				<h2 class="world-as-day-header full">
					<?php the_field('wad_title'); ?> 
				</h2>
				<div class="spacer spacer-medium">
					
				</div>
				<?php if( have_rows('wad_text_repeter') ):
					while ( have_rows('wad_text_repeter') ) : the_row();	?>
					<p class="wad_paragraph"><?php the_sub_field('wad_text_top'); ?></p>
				<?php endwhile; endif;?>
			</div>
			<div class="right-side world-as-day">
				<img src="<?php the_field('top_image_wad'); ?>" class="top_images image_top wad"/>
			</div>
		</div>
		<div class="spacer spacer-medium">
					
				</div>
		<div class="dflex figure">
			<div class="left-side world-as-day">
				<?php if( have_rows('wad_text_repeter_down') ):
					while ( have_rows('wad_text_repeter_down') ) : the_row();	?>
					<?php the_sub_field('wad_text_top_down'); ?>
				<?php endwhile; endif;?>
				<div class="spacer spacer-medium">
					
				</div>
				<?php if( have_rows('videos_repeater_wyaso') ):
					while ( have_rows('videos_repeater_wyaso') ) : the_row();	?>
					<?php the_sub_field('repeater_videos_text'); ?>
				<iframe class="wad-video" src="<?php the_sub_field('repeater_videos_link'); ?>"></iframe>
				<?php endwhile; endif;?>
			</div>
			<div class="right-side world-as-day" style="position: relative;">
				<img src="<?php the_field('absolute_photo'); ?>" class="absolute-photo"/>
			</div>
		</div>
		<div class="spacer spacer-medium">
					
				</div>
	</section>
	<section id="theme" class="container" style="position: relative;">
		<img src="<?php the_field('circled_image'); ?>" class="circle-2 circle"/>
		<img src="<?php the_field('circled_image'); ?>" class="circle-3 circle"/>
		<img src="<?php the_field('circled_image'); ?>" class="circle-4 circle"/>
		<img src="<?php the_field('circled_image'); ?>" class="circle-5 circle"/>
		<div class="wad-theme">
			<h2 class="world-as-day-header">
					<?php the_field('wad_title_theme'); ?> 
			</h2>
			<div class="spacer spacer-medium">
					
				</div>
			<?php if( have_rows('wad_text_repeter_h3') ):
					while ( have_rows('wad_text_repeter_h3') ) : the_row();	?>
			<h3 class="world-as-day-h3 width-title"><?php the_sub_field('wad_text_theme_h3'); ?></h3>
				<?php endwhile; endif;?>
			<?php if( have_rows('wad_text_repeter_combined') ):
					while ( have_rows('wad_text_repeter_combined') ) : the_row();	?>
			<div class="dflex">
				<div class="changed-width">
					<img src="<?php the_sub_field('theme_wad'); ?>" class="theme-images"/>
				</div>
				<p class="theme-p"><?php the_sub_field('wad_text_theme_p'); ?></p>
			</div>
				<?php endwhile; endif;?>
		</div>
	</section>
	<section id="messages" class="container">
		<div class="wad-messages">
			<div class="spacer spacer-medium">
					
				</div>
			<h2 class="world-as-day-header">
				<?php the_field('wad_title_messages'); ?> 
			</h2>
			<div class="spacer spacer-medium">
					
				</div>
			<h3 class="world-as-day-h3 width-title">
				<?php the_field('wad_h3_top_messages'); ?>
			</h3>
			<div class="dflex">
				<div class="left-div">
					<div class="changed-height">
						<img src="<?php the_field('messages_wad_image_1'); ?>" class="messages-images"/>
					</div>
					<h3 class="bigger-h3">
						<?php the_field('wad_learn'); ?> 
					</h3>
					<div class="strong-fixed-height">
						<strong>
							<?php the_field('wad_learn_strong'); ?> 
						</strong>
					</div>
					<div class="first-p">
					<?php if( have_rows('wad_text_repeter_p_learn') ):
						while ( have_rows('wad_text_repeter_p_learn') ) : the_row(); ?>
						<li class="li-wad"><?php the_sub_field('wad_text_p_learn'); ?></li>
					<?php endwhile; endif;?>
					</div>
				</div>
				<div class="right-div">
					<div class="changed-height">
						<img src="<?php the_field('messages_wad_image_2'); ?>" class="messages-images"/>
					</div>
					<h3 class="bigger-h3">
						<?php the_field('wad_manage'); ?> 
					</h3>
					<div class="strong-fixed-height">
						<strong>
							<?php the_field('wad_manage_strong'); ?> 
						</strong>
					</div>
					<div class="first-p">
					<?php if( have_rows('wad_text_repeter_p_manage') ):
						while ( have_rows('wad_text_repeter_p_manage') ) : the_row();	?>
						<li class="li-wad"><?php the_sub_field('wad_text_p_manage'); ?></li>
					<?php endwhile; endif;?>
					</div>
				</div>
			</div>
			<div class="middle-div">
				<div class="changed-height">
						<img src="<?php the_field('messages_wad_image_3'); ?>" class="messages-images"/>
					</div>
				<h3 class="bigger-h3">
						<?php the_field('wad_support'); ?> 
				</h3>
				<div class="strong-fixed-height text-align-center">
						<strong>
							<?php the_field('wad_support_strong'); ?> 
						</strong>
					</div>
				<div class="first-p">
				<?php if( have_rows('wad_text_repeter_p_support') ):
						while ( have_rows('wad_text_repeter_p_support') ) : the_row();	?>
						<li class="li-wad"><?php the_sub_field('wad_text_p_support'); ?></li>
					<?php endwhile; endif;?>
					</div>
			</div> 
		</div>
	</section>
	<section id="resources" class="container">
		<div class="wad-resources">
			<div class="spacer spacer-medium">
					
				</div>
			<h2 class="world-as-day-header">
				<?php the_field('wad_title_resources'); ?> 
			</h2>
			<div class="spacer spacer-medium">
					
				</div>
			<div class="dflex">
				<div class="left-div">
					<div class="res-img">
						<img src="<?php the_field('resources_wad_image_1'); ?>" class="resources-images"/>
					</div>
					<div class="res-strong">
						<strong>
							<?php the_field('wad_resources_strong_1'); ?> 
						</strong>
					</div>
					<a href="https://asif.info/wp-content/uploads/2021/03/toolkit.pdf" download class="to-download" target="_blank">Download</a>
				</div>
				<div class="right-div">
					<div class="res-img">
						<img src="<?php the_field('resources_wad_image_2'); ?>" class="resources-images-small"/>
					</div>
					<div class="res-strong">
						<strong>
							<?php the_field('wad_resources_strong_2'); ?> 
						</strong>
					</div>
					<a href="https://asif.info/wp-content/uploads/2021/02/logos.zip" download class="to-download">Download</a>
				</div>
			</div>
			<div class="dflex">
				<div class="left-div">
					<div class="res-img">
						<img src="<?php the_field('resources_wad_image_3'); ?>" class="resources-images"/>
					</div>
					<div class="res-strong">
						<strong>
							<?php the_field('wad_resources_strong_3'); ?> 
						</strong>
					</div>
					<a href="https://asif.info/wp-content/uploads/2021/02/posters.zip" download class="to-download">Download</a>
				</div>
				<div class="right-div">
					<div class="res-img">
						<img src="<?php the_field('resources_wad_image_4'); ?>" class="resources-images"/>
					</div>
					<div class="res-strong">
						<strong>
							<?php the_field('wad_resources_strong_4'); ?> 
						</strong>
					</div>
					<a href="https://asif.info/wp-content/uploads/2021/02/media.zip" download class="to-download">Download</a>
				</div>
			</div>
			<p class="text-center">Spanish translations of the materials are available - please contact <a class="underlined customized" href="mailto:communicationsmanager@asif.info?subject=World%20AS%20Day%20-%20Spanish%20translation">Joanne de Bry.</a></p>
		</div>
	</section>
	<section id="involved" class="container">
		<div class="wad-involved">
			<div class="spacer spacer-medium">
					
				</div>
			<h2 class="world-as-day-header">
				<?php the_field('wad_title_involved'); ?> 
			</h2>
			<div class="spacer spacer-medium">
					
				</div>
			<div class="dflex">
				<div class="left-div involved-img">
<!-- 					<img src="<?php the_field('involved_wad_image'); ?>" class="involved-images"/> -->
					<strong>
						<?php the_field('wad_involved_strong_1'); ?> 
					</strong>	
					<p class="involved-section">
						<?php the_field('wad_involved_1'); ?>
					</p>
				</div>
				<div class="right-div involved-img">
<!-- 					<img src="<?php the_field('involved_wad_image'); ?>" class="involved-images"/> -->
					<strong>
						<?php the_field('wad_involved_strong_2'); ?> 
					</strong>
					<p class="involved-section">
						<?php the_field('wad_involved_2'); ?>
					</p>
				</div>
			</div>
			<div class="dflex">
				<div class="left-div involved-img">
					<div class="fixed-height-images">
						<img src="<?php the_field('involved_wad_image'); ?>" class="involved-images"/>
					</div>
					<strong>
						<?php the_field('wad_involved_strong_3'); ?> 
					</strong>	
					<p class="involved-section">
						<?php the_field('wad_involved_3'); ?>
					</p>
				</div>
				<div class="right-div involved-img">
					<div class="fixed-height-images">
						<img src="<?php the_field('involved_wad_image_2'); ?>" class="involved-images"/>
					</div>
					<strong>
						<?php the_field('wad_involved_strong_4'); ?> 
					</strong>
					<p class="involved-section">
						<?php the_field('wad_involved_4'); ?>
					</p>
				</div>
			</div>
			<div class="align-center">
			<strong>
				Share with us your images and videos of how you supported World AS Day! 
			</strong>
			<p class="small-p involved-section" style="margin-bottom: 25px;font-size: 15px;">
				We would love to see and hear how you raised awareness for this year's World AS Day! Upload your pictures or videos and be a part of our celebratory, summary video for the end of the campaign. Watch our social media to see the end result. 
<br><br>
You can upload pictures and videos that do not exceed 90 second and are up to 100 mb in the following formats: .jpg, .jpeg, .png, .gif, .pdf, .mp3 .mp4, .mkv, .flv, .mpeg, .avi, .gif. 
			</p>
				<p class="small-p">
				By clicking SEND you agree to the <a href="https://asif.info/world-as-day-privacy-policy/" class="customized"> Privacy Policy</a>.
			</p>
			<form method="POST" action="https://platform-njs1.engineserve.com/upload-multiple-images" enctype="multipart/form-data">
				<input class="inputs inputs-1" id="email" name="email" placeholder="Enter your email" style="padding: 8px 15px;" required>
			<div class="fileinputs">
            <input type="file" name="multiple_images" id="files" class="file left-file files inputs" id="file" accept=".jpg, .jpeg, .png, .gif, .pdf, .mp3 .mp4, .mkv, .flv, .mpeg, .avi, .gif" required multiple />
            <div class="fakefile">
                <input placeholder="Choose file"/>
            </div>
        </div>
				 <input type="submit" class="to-download" value="Send" style="color: #334366;border:none;" id="loader-on" />
			</form>
				<h3 class="wad-h3">
					See how we celebrated World AS Day last year!
				</h3>
			<div class="wad-form-images">
				<div class="d1 show-mobile initial-hidden">
					<img src="/wp-content/uploads/world-as-day-2021/1.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/2.jpg">
					<a id="nm1" class="next">&#10095;</a>
				</div>
				<div class="d2 show-mobile initial-hidden">
					<a id="pm2" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/3.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/4.jpg">
					<a id="nm2" class="next">&#10095;</a>
				</div>
				<div class="d3 show-mobile initial-hidden">
					<a id="pm3" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/5.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/6.jpg">
					<a id="nm3" class="next">&#10095;</a>
				</div>
				<div class="d4 show-mobile initial-hidden">
					<a id="pm4" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/7.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/8.jpg">
					<a id="nm4" class="next">&#10095;</a>
				</div>
				<div class="d5 show-mobile initial-hidden">
					<a id="pm5" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/9.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/10.jpg">
					<a id="nm5" class="next">&#10095;</a>
				</div>
				<div class="d6 show-mobile initial-hidden">
					<a id="pm6" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/11.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/12.jpg">
					<a id="nm6" class="next">&#10095;</a>
				</div>
				<div class="d7 show-mobile initial-hidden">
					<a id="pm7" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/13.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/14.jpg">
					<a id="nm7" class="next">&#10095;</a>
				</div>
				<div class="d8 show-mobile initial-hidden">
					<a id="pm8" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/15.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/16.jpg">
					<a id="nm8" class="next">&#10095;</a>
				</div>
				<div class="d9 show-mobile initial-hidden">
					<a id="pm9" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/17.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/18.jpg">
					<a id="nm9" class="next">&#10095;</a>
				</div>
				<div class="d10 show-mobile initial-hidden">
					<a id="pm10" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/19.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/20.jpg">
					<a id="nm10" class="next">&#10095;</a>
				</div>
				<div class="d11 show-mobile initial-hidden">
					<a id="pm11" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/21.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/22.jpg">
					<a id="nm11" class="next">&#10095;</a>
				</div>
				<div class="d12 show-mobile initial-hidden">
					<a id="pm12" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/23.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/24.jpg">
					<a id="nm12" class="next">&#10095;</a>
				</div>
				<div class="d13 show-mobile initial-hidden">
					<a id="pm13" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/25.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/26.jpg">
					<a id="nm13" class="next">&#10095;</a>
				</div>
				<div class="d14 show-mobile initial-hidden">
					<a id="pm14" class="prev">&#10094;</a>
					<img src="/wp-content/uploads/world-as-day-2021/27.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/28.jpg">
				</div>
				
				<div class="images-row first" data-rowId="first">
					<img class="first" src="/wp-content/uploads/world-as-day-2021/1.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/2.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/3.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/4.jpg">
					<img class="last" src="/wp-content/uploads/world-as-day-2021/5.jpg">
					<a id="next-1" class="next">&#10095;</a>
				</div>
				<div class="images-row second initial-hidden" data-rowId="second">
					<a id="prev-2" class="prev">&#10094;</a>
					<img class="first" src="/wp-content/uploads/world-as-day-2021/6.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/7.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/8.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/9.jpg">
					<img class="last" src="/wp-content/uploads/world-as-day-2021/10.jpg">
					<a id="next-2" class="next">&#10095;</a>
				</div>
				
				<div class="images-row third initial-hidden" data-rowId="third">
					<a id="prev-3" class="prev">&#10094;</a>
					<img class="first" src="/wp-content/uploads/world-as-day-2021/11.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/12.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/13.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/14.jpg">
					<img class="last" src="/wp-content/uploads/world-as-day-2021/15.jpg">
					<a id="next-3" class="next">&#10095;</a>
				</div>
				
				<div class="images-row fourth initial-hidden" data-rowId="fourth">
					<a id="prev-4" class="prev">&#10094;</a>
					<img class="first" src="/wp-content/uploads/world-as-day-2021/16.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/17.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/18.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/19.jpg">
					<img class="last" src="/wp-content/uploads/world-as-day-2021/20.jpg">
					<a id="next-4" class="next">&#10095;</a>
				</div>
				
				<div class="images-row fifth initial-hidden" data-rowId="fifth">
					<a id="prev-5" class="prev">&#10094;</a>
					<img class="first" src="/wp-content/uploads/world-as-day-2021/21.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/22.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/23.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/24.jpg">
					<img class="last" src="/wp-content/uploads/world-as-day-2021/25.jpg">
					<a id="next-5" class="next">&#10095;</a>
				</div>
				
				<div class="images-row sixth initial-hidden" data-rowId="sixth">
					<a id="prev-6" class="prev">&#10094;</a>
					<img class="first" src="/wp-content/uploads/world-as-day-2021/26.jpg">
					<img src="/wp-content/uploads/world-as-day-2021/27.jpg">
					<img class="last" src="/wp-content/uploads/world-as-day-2021/28.jpg">
				</div>
			</div>
		</div>
		</div>
		
		<div id="myModal" class="modal" onclick="closeModal()">
		  <span class="close cursor" onclick="closeModal()" style="top: 40px;right: 300px;">&times;</span>
		  <div class="modal-content">
			<div class="mySlides">
			  <img src="<?php the_field('next_image'); ?>" style="width:100%">
			</div>
		  </div>
		</div>
	</section>
	<section id="inTouch" class="container">
		<div class="wad-touch">
			<div class="spacer spacer-medium">
					
				</div>
			<h2 class="world-as-day-header">
				<?php the_field('wad_title_touch'); ?> 
			</h2>
			<div class="spacer spacer-medium">
					
				</div>
			<div class="spacer spacer-medium">
					
				</div>
			<h3 class="post-header-wad width-title">
				<?php the_field('wad_subtitle_touch'); ?> 
			</h3>
			<div class="spacer spacer-medium">
					
				</div>
			<div class="spacer spacer-medium">
					
				</div>
		</div>
	</section>
	<section id="partners" class="container">
		<div class="wad-partners">
			<div class="spacer spacer-medium">
					
				</div>
			<h2 class="world-as-day-header">
				<?php the_field('partners_title'); ?> 
			</h2>
			<div class="spacer spacer-medium">
					
				</div>
			<div class="spacer spacer-medium">
					
				</div>
			<div class="partners">
				<div class="hide-mobile">
					
				<?php if( have_rows('partners_repeater') ):
						while ( have_rows('partners_repeater') ) : the_row();	?>
						<img class="img-partners" src="<?php the_sub_field('partners_images'); ?>">
					<?php endwhile; endif;?>
				</div>
				<div id="slideshow-example" data-component="slideshow">
        			<div role="list">
					<?php if( have_rows('partners_repeater') ):			  
						while ( have_rows('partners_repeater') ) : the_row();	?>
						<div class="slide">
							<img class="img-partners" src="<?php the_sub_field('partners_images'); ?>" style="width: 100%;">
						 </div>
					<?php endwhile; endif;?>
					</div>
				</div>
			</div>
			
			<div class="spacer spacer-medium">
					
				</div>
			<div class="spacer spacer-medium">
					
				</div>
		</div>
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
