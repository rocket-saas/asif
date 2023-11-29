<?php /* Template Name: World As Day 2022*/ 
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<!--[if IEMobile 7 ]> <html dir="ltr" lang="en-US"class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html dir="ltr" lang="en-US" class="no-js">
<!--<![endif]-->

<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WRCQ5XN');</script>
<!-- End Google Tag Manager -->
   	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/style.css?ver=<?php echo date('h:i:s');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/responsive.css?ver=<?php echo date('h:i:s');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_stylesheet_directory_uri();?>/fonts.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/css3-mediaqueries.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet"> 
    <!--[if lt IE 9 &!(IEMobile)]><link href="css/bootstrap-ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9 &!(IEMobile)]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
    <![endif]-->

    <style type="text/css">
      html{
        /*overflow: hidden; */
      }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async 
	src="https://www.googletagmanager.com/gtag/js?id=UA-118978734-1"></script>
	<script>
	   window.dataLayer = window.dataLayer || [];
	   function gtag(){dataLayer.push(arguments);}
	   gtag('js', new Date());

	   gtag('config', 'UA-118978734-1');
	</script>
	<?php wp_head();?>
</head>



<body <?php body_class(); ?>>

    <div id="wrapper">
      <header class="wi-full">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo-new.png" alt="logo" /></a>

            <div class="language-wpml">
              <img src="<?php echo get_stylesheet_directory_uri();?>/images/world-new.png" class="world-ASD" alt="">
              <div class="language-choose" style="display:none;">
			   <p>Language:</p>
			<?php 
                      if(is_active_sidebar('language')){
					  
                      dynamic_sidebar('language');
                        }
                      ?>
                
              </div>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg>
              </span>
            </button>
<?php
			   wp_nav_menu([
			     'theme_location'  => 'primary',
			     'container'       => 'div',
			     'container_id'    => 'navbarSupportedContent',
			     'container_class' => 'collapse navbar-collapse justify-content-lg-between',
			     'menu_id'         => false,
			     'menu_class'      => 'navbar-nav',
			     'depth'           => 2,
			     'fallback_cb'     => 'bs4navwalker::fallback',
			     'walker'          => new bs4navwalker()
			   ]);
			 ?>        
            <?php if(is_user_logged_in()) { ?>            
            <a href="<?php echo wp_logout_url( home_url() ); ?>/" class="btn d-none btn-yellow">Logout</a>
          <?php } else { ?>
            <a href="<?php echo get_site_url();?>/login/" class="btn d-none btn-yellow">Login</a>
          <?php } ?>
          </div>
        </nav>
		
			<!--<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->
		  <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '232732901593435');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=232732901593435&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
      </header>


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
			<li class="breadcrumb-item active" aria-current="page">World As Day 2022</li>
		</ol>
	</div>
</nav>

<?php
global $post;
if ( ! post_password_required( $post ) ) { ?>
<div class="world-as-2022-page">
	<section id="second_nav" class="hide-mobile position-relative z-2">
	    <nav class="wider orange-bg">
			<ul>
				<li><a class="active" href="#about" class="sec_link">About</a></li>
				<li><a href="#messages" class="sec_link">Key Messages</a></li>
				<li><a href="#checkers" class="sec_link">Symptoms Checkers</a></li>
				<li><a href="#footprint" class="sec_link">Leave Your Footprint</a></li>
				<li><a href="#involved" class="sec_link">Get Involved</a></li>
			</ul>
		</nav>
	</section>
<!--	<div class="container position-relative z-1">
		<img src="/wp-content/uploads/2022/11/AS_Day_2023_banner-1.png" style="width: 100%; max-width: 1100px; margin-top: 50px;"/>
	</div>

			<section id="resources" class="full-width   position-relative">
			<section class="container">
<!-/- 				<div class="d-flex mb-4">
			<img src="<?php the_field('resources_left_image'); ?>" class="fit-content mr-4" />
			<h2 class="title-color mt-1">
				<?php the_field('resources_title'); ?>
			</h2>
		</div> -/->
		<div class="row">
			
			
		<div class="col-md-6 offset-md-3">
							<a href="/wp-content/uploads/2022/12/AS_Day_2023_covers_post_templates.zip" id="save-the-date-assets-download" class="ml-auto" download>

				<img src="https://asif.info/wp-content/uploads/2022/12/WASD_SaveTheDate_resource.png" class="mb-5" style="width:100%; height:auto;"/>
								</a>

		</div>
				</div>

			</section>
		
	</section> -->
	<section id="thanks" class="container my-4 mx-auto mt-5 pt-5">
		<div class="d-flex py-4 mb-4 w-100">
			<img src="<?php the_field('resources_left_image'); ?>" class="mr-4" />
			<h2 class="title-color">
				World AS Day 2022
			</h2>
		</div>
		<div class="mx-3 text-center position-relative">
						<iframe id="vid3" src="https://www.youtube.com/embed/c2k2iy-CPV0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="videos-4"></iframe>
						<div id="video-top" class="clickable position-absolute video-overlay-wasd2022">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" class="svg-margin-top"><g id="Group_380" data-name="Group 380" transform="translate(-924 -391)"><circle id="Ellipse_2" data-name="Ellipse 2" cx="31" cy="31" r="31" transform="translate(924 391)" fill="#de4208" opacity="0.87"></circle><path id="Polygon_1" data-name="Polygon 1" d="M6,0l6,10H0Z" transform="translate(960 416) rotate(90)" fill="#fff"></path></g></svg>
                                            </div>
<!-- 						<div id="video-symptoms" class="clickable position-absolute video-overlay-wasd2022">
							
						</div> -->
					</div>
	</section>
		<section class="full-width grey-bg fix-height-card-small position-absolute">
	</section>
	<section class="container minus-margin higher-than-parent mx-auto position-relative above white-bg shadow small-radius px-sm-5 small-border">
		<div>
			<p class="my-3">
				<b>
					Thank you to everyone who has raised awareness of axSpA this World AS Day. We are very grateful that you could be with us another year and we loved to see your engagement on the <a href="/footprint" class="purple">Leave Your Footprint</a> page and all over social media with #WorldASDay2022.
				</b>	
			</p>
			<p class="mb-3">
				You can still visit <a href="/footprint" class="purple">Leave Your Footprint</a> to read the messages left by others or add yours. We loved reading all of the inspirational and wonderful messages that came from every side of the globe.
			</p>
			<p class="mb-3">
				Scroll down to see the Social Media wall below to see all the amazing activities that took place all around the world. 
			</p>
		</div>
	</section>
	<section id="about" class="container my-4 mx-auto">
		<div class="d-flex py-4 mb-4 w-100">
			<img src="<?php the_field('image-near-main-title'); ?>" class="mr-4" />
			<h2 class="title-color">
				<?php the_field('about_title'); ?>
			</h2>
		</div>
		<div>
			<p class="mb-3">
				<b>
					<?php the_field('about_subtitle'); ?>
				</b>	
			</p>
			<p class="mb-3">
				<?php the_field('about_text_under_subtitle'); ?>
			</p>
		</div>
	</section>
	<section class="full-width grey-bg fix-height-card-small position-absolute">
		<img src="<?php the_field('grey_background_image'); ?>" class="pt-4 pl-4 hide-mobile position-absolute under"/>
	</section>
	<section class="container minus-margin higher-than-parent mx-auto position-relative above white-bg shadow small-radius px-sm-5 small-border">
			<div class="full-width my-4">
				<div class="d-sm-flex position-relative justify-content-between">
					<div>
						<div class="d-flex my-4">
							<img src="<?php the_field('aim_of_world_as_day_image'); ?>" class="fit-content mr-4 mt-1" />
							<h3 class="title-color">
								<?php the_field('aim_of_world_as_day'); ?>
							</h3>
						</div>
						<p class="pr-sm-5 title-color">
							<?php the_field('aim_of_world_as_day_text'); ?>
						</p>
					</div>
					<div class="position-relative mr-sm-4 mt-4 fixed-width-150">
						<img src="<?php the_field('aim_of_world_as_day_right_image'); ?>" class="mr-sm-4 mt-4 w-150 hide-mobile position-absolute"/>
					</div>
				</div>
			</div>
			<div class="full-width my-4">
				<div class="d-flex my-4">
					<img src="<?php the_field('raising_awareness_image'); ?>" class="fit-content mr-4 mt-1" />
					<h3 class="title-color">
						<?php the_field('raising_awareness'); ?>
					</h3>
				</div>
				<div class="d-flex">
					<p class="title-color">
						<?php the_field('raising_awareness_text'); ?>
					</p>
				</div>
			</div>
			<div class="full-width my-4">
				<div class="d-sm-flex justify-content-between">
					<div>
						<div class="d-flex my-4">
							<img src="<?php the_field('sharing_information_image'); ?>" class="fit-content mr-4 mt-1" />
							<h3 class="title-color">
								<?php the_field('sharing_information'); ?>
							</h3>
						</div>
						<p class="pr-sm-5 title-color">
							<?php the_field('sharing_information_text'); ?>
						</p>
					</div>
					<div class="position-relative mr-sm-4 fixed-width-150">
						<img src="<?php the_field('sharing_information_right_image'); ?>" class="mr-sm-4 mt-4 w-150 hide-mobile position-relative ml-auto position-absolute"/>
					</div>
					
				</div>
			</div>
			<div class="full-width my-4">
				<div class="d-flex my-4">
					<img src="<?php the_field('connecting_with_each_other_being_together_image'); ?>" class="fit-content mr-4 mt-1" />
					<h3 class="title-color">
						<?php the_field('connecting_with_each_other_being_together'); ?>
					</h3>
				</div>
				<div class="d-flex">
					<p class="title-color">
						<?php the_field('connecting_with_each_other_being_together_text'); ?>
					</p>
				</div>
			</div>
		</section>
	<section id="theme" class="container section-top-margin mx-auto">
<!-- 		<div class="d-md-flex my-4 py-4">
			<div>
				<div class="d-flex my-4">
					<img src="<?php the_field('theme_top_image'); ?>" class="fit-content mr-4" />
					<h2 class="title-color">
						<?php the_field('theme_title'); ?>
					</h2>
				</div>
				<p>
					<b>
						<?php the_field('theme_subtitle'); ?>
					</b>
				</p>
				<p>
					<?php the_field('theme_text'); ?>	
				</p>
			</div>
			<div class="text-center">
				<img src="<?php the_field('theme_right_image'); ?>" class="fit-content mr-4 mt-2 text-center mx-auto" />
			</div>
		</div> -->
		<img src="<?php the_field('theme_blue_image'); ?>" class="full-width no-margin" />
	</section>
	<section id="messages" class="my-4 full-width">
		<div class="container mx-auto section-top-margin">
			<div class="d-flex my-4 pt-4">
					<img src="<?php the_field('messages_left_image'); ?>" class="fit-content mr-4" />
					<h2 class="title-color">
						<?php the_field('messages_title'); ?>
					</h2>
				</div>
		</div>
		<div class="grey-bg full-width">
			<div class="container mx-auto red d-flex p-4">
				<h2>
					<span class="big-font">1 </span>&nbsp<?php the_field('message_1_title'); ?>
				</h2>
			</div>
		</div>
		<div class="container mx-auto">
			<ul class="red-disc my-5">
				<div id="red-popup" class="position-relative d-none" style="height: 0px; width: 100%;">
					<p class="position-absolute red-bg white-font px-4 py-3 red-tooltip">
						<?php the_field('tooltip_1'); ?>
					</p>
				</div>
				<li class="mx-5 my-4 d-flex">
					<?php the_field('message_1_1_text'); ?><sup class="padding-sup clickable" onClick="hideAll('1')"><img src="/wp-content/uploads/2022/02/tip_info_red.png" /></sup>
				</li>
			</ul>
		</div>
		<div class="grey-bg full-width">
			<div class="container mx-auto blue d-flex p-4 position-relative">
				<h2>
					<span class="big-font">2 </span>&nbsp<?php the_field('message_2_title'); ?>
				</h2>
				<img src="<?php the_field('message_2_image'); ?>" class="position-absolute messages-image-height hide-tablet" />
			</div>
		</div>
		<div class="container mx-auto">
			<ul class="blue-disc my-5">
				<li class="mx-5 my-4 blue d-flex">
					<p class="blue">
						<?php the_field('message_2_1_text'); ?>
					</p>
				</li>
			</ul>
		</div>
		<div class="grey-bg full-width orange">
			<div class="container mx-auto orange d-flex p-4 position-relative">
				<h2>
					<span class="big-font">3 </span>&nbsp<?php the_field('message_4_title'); ?>
				</h2>
				<img src="<?php the_field('message_4_image'); ?>" class="position-absolute messages-image-height hide-tablet" />
			</div>
		</div>
		<div class="container mx-auto">
			<ul class="orange-disc my-5">
				<li class="mx-5 my-4 d-flex">
					<p>
						<?php the_field('message_4_1_text'); ?>
					</p>
				</li>
				<div id="yellow-popup-2" class="position-relative d-none" style="height: 0px; width: 100%;">
					<p class="position-absolute yellow-bg white-font px-4 py-3 yellow-tooltip-2">
						IMAS Data
					</p>
				</div>
				<li class="mx-5 my-4 d-flex">
					<p>
						<?php the_field('message_4_2_text'); ?><sup class="padding-sup clickable" onClick="hideAll('8')"><img src="/wp-content/uploads/2022/02/tip_info_yellow.png" /></sup>
					</p>
				</li>
				<li class="mx-5 my-4 no-disc">
					<p class="mx-3">
						AxSpA affects so much more than physical health, watch our video to learn more. 
					</p>
					<div class="mx-3 text-center position-relative">
						<iframe id="vid1" src="https://www.youtube.com/embed/XJNxDdKRSbk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="videos-4"></iframe>
						<div id="video-symptoms" class="clickable position-absolute video-overlay-wasd2022">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" class="svg-margin-top"><g id="Group_380" data-name="Group 380" transform="translate(-924 -391)"><circle id="Ellipse_2" data-name="Ellipse 2" cx="31" cy="31" r="31" transform="translate(924 391)" fill="#de4208" opacity="0.87"></circle><path id="Polygon_1" data-name="Polygon 1" d="M6,0l6,10H0Z" transform="translate(960 416) rotate(90)" fill="#fff"></path></g></svg>
                                            </div>
<!-- 						<div id="video-symptoms" class="clickable position-absolute video-overlay-wasd2022">
							
						</div> -->
					</div>
				</li>
				<div id="yellow-popup" class="position-relative d-none" style="height: 0px; width: 100%;">
					<p class="position-absolute yellow-bg white-font px-4 py-3 yellow-tooltip">
						<?php the_field('tooltip_3'); ?>
					</p>
				</div>
				<li class="mx-5 my-4 d-flex">
					<p>
						<?php the_field('message_4_3_text'); ?><sup class="padding-sup clickable" onClick="hideAll('7')"><img src="/wp-content/uploads/2022/02/tip_info_yellow.png" /></sup>
					</p>
				</li>
			</ul>
		</div>
		<div class="grey-bg full-width purple">
			<div class="container mx-auto d-flex position-relative p-4">
				<h2>
					<span class="big-font">4 </span>&nbsp<?php the_field('message_5_title'); ?>
				</h2>
				<img src="<?php the_field('message_5_image'); ?>" class="position-absolute messages-image-height hide-tablet" />
			</div>
		</div>
		<div class="container mx-auto">
			<ul class="purple-disc my-5">
				<li class="mx-5 my-4 d-flex">
					<p>
						<?php the_field('message_5_1_text'); ?>
					</p>
				</li>
			</ul>
		</div>
		<div class="grey-bg full-width green">
			<div class="container mx-auto green d-flex p-4 position-relative">
				<h2>
					<span class="big-font">5 </span>&nbsp<?php the_field('message_3_title'); ?>
				</h2>
				<img src="<?php the_field('message_3_image'); ?>" class="position-absolute messages-image-height hide-tablet" />
			</div>
		</div>
		<div class="container mx-auto">
			<ul class="green-disc my-5">
				<div id="green-popup-1" class="position-relative d-none" style="height: 0px; width: 100%;">
					<p class="position-absolute green-bg white-font px-4 py-3 green-tooltip-1">
						<?php the_field('tooltip_2'); ?>
					</p>
				</div>
				<li class="mx-5 my-4 d-flex">
					<p>
						<?php the_field('message_3_1_text'); ?><sup class="padding-sup clickable" onClick="hideAll('2')"><img src="/wp-content/uploads/2022/02/tip_info_green.png" /></sup>
					</p>
				</li>
				<div id="green-popup-2" class="position-relative d-none" style="height: 0px; width: 100%;">
					<p class="position-absolute green-bg white-font px-4 py-3 green-tooltip-2">
						<?php the_field('tooltip_3'); ?>
					</p>
				</div>
				<li class="mx-5 my-4 d-flex">
					<p>
						<?php the_field('message_3_2_text'); ?><sup class="padding-sup clickable" onClick="hideAll('3')"><img src="/wp-content/uploads/2022/02/tip_info_green.png" /></sup>
					</p>
				</li>
				<div id="green-popup-3" class="position-relative d-none" style="height: 0px; width: 100%;">
					<p class="position-absolute green-bg white-font px-4 py-3 green-tooltip-3">
						<?php the_field('tooltip_4_5'); ?>
					</p>
				</div>
				<li class="mx-5 my-4 d-flex">
					<p>
						<?php the_field('message_3_3_text'); ?><sup class="padding-sup clickable" onClick="hideAll('4')"><img src="/wp-content/uploads/2022/02/tip_info_green.png" /></sup>
					</p>
				</li>
				<div id="green-popup-4" class="position-relative d-none" style="height: 0px; width: 100%;">
					<p class="position-absolute green-bg white-font px-4 py-3 green-tooltip-4">
						<?php the_field('tooltip_6_7_8'); ?>
					</p>
				</div>
				<li class="mx-5 my-4 d-flex">
					<p>
						<?php the_field('message_3_4_text'); ?><sup class="padding-sup clickable" onClick="hideAll('5')"><img src="/wp-content/uploads/2022/02/tip_info_green.png" /></sup>
					</p>
				</li>
				<li class="mx-5 my-4 no-disc">
					<p class="mx-3">
						Watch the video below to learn about the diagnostic delay and visit our <a href="/delay-to-diagnosis-campaign/" class="green"><b>Delay to Diagnosis Campaign page</b></a> to find out more.
					</p>
					<div class="mx-3 text-center position-relative">
						<iframe id="vid2" src="https://www.youtube.com/embed/Wxi-Znej-wg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="videos-4"></iframe>
						<div id="video-awarness" class="clickable position-absolute video-overlay-wasd2022">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" class="svg-margin-top"><g id="Group_380" data-name="Group 380" transform="translate(-924 -391)"><circle id="Ellipse_2" data-name="Ellipse 2" cx="31" cy="31" r="31" transform="translate(924 391)" fill="#de4208" opacity="0.87"></circle><path id="Polygon_1" data-name="Polygon 1" d="M6,0l6,10H0Z" transform="translate(960 416) rotate(90)" fill="#fff"></path></g></svg>
                                            </div>
<!-- 						<div id="video-awarness" class="clickable position-absolute video-overlay-wasd2022">
							
						</div> -->
					</div>
					<script src="https://player.vimeo.com/api/player.js"></script>
				</li>
				<div id="green-popup-5" class="position-relative d-none" style="height: 0px; width: 100%;">
					<p class="position-absolute green-bg white-font px-4 py-3 green-tooltip-5">
						<?php the_field('tooltip_10_11'); ?>
					</p>
				</div>
				<li class="mx-5 my-4 d-flex">
					<p>
						<?php the_field('message_3_5_text'); ?><sup class="padding-sup clickable" onClick="hideAll('6')"><img src="/wp-content/uploads/2022/02/tip_info_green.png" /></sup>
					</p>
				</li>
			</ul>
		</div>
	</section>
	<section id="checkers" class="container section-top-margin">
		<div class="d-flex my-4">
			<img src="<?php the_field('checkers_left_image'); ?>" class="fit-content mr-4" />
			<h2 class="title-color mt-2">
				<?php the_field('checkers_title'); ?>
			</h2>
		</div>
		<p>
			<strong>
				<?php the_field('checkers_subtitle'); ?>
			</strong>
		</p>
		<p class="mb-5">
			<strong>
				<?php the_field('checkers_subtitle_2'); ?>
			</strong>
			<?php the_field('checkers_text'); ?>
		</p>
		<div>
			<p class="grey-font symptoms-font center-mobile">
				BULGARIAN
			</p>
			<div class="space-between my-5">
				<div class="max-content-h center-mobile">
					<a id="cred-web" href="https://www.credoweb.bg/survey/126950/test-za-ranna-diagnostika-na-bolestta-na-behterev" class="own-font-blue" rel="noopener noreferrer" target="_blank"><strong>CredoWeb</strong></a>
				</div>
			</div>
			<p class="grey-font symptoms-font center-mobile">
				<?php the_field('english_text'); ?>
			</p>
			<div class="space-between my-5">
				<div class="max-content-h center-mobile">
					<a id="nassuk" href="https://www.actonaxialspa.com/symptoms-checker/" class="own-font-blue" rel="noopener noreferrer" target="_blank"><strong><?php the_field('link_english_1'); ?></strong></a>
				</div>
<!-- 				<div class="max-content center-mobile text-center mt-4">
					<a href="https://www.actonaxialspa.com/symptoms-checker/" rel="noopener noreferrer" target="_blank"><img src="<?php the_field('image_english_1'); ?>" class="logo-symptoms" /></a>
				</div> -->
			</div>
			<div class="space-between my-5">
				<div class="max-content-h center-mobile">
					<a id="csa" href="https://spondylitis.ca/spondyloarthritis/could-i-have-spondylitis/" rel="noopener noreferrer" target="_blank" class="own-font-blue"><strong><?php the_field('link_english_2'); ?></strong></a>
				</div>
<!-- 				<div class="max-content center-mobile text-center mt-4">
					<a href="https://spondylitis.ca/spondyloarthritis/could-i-have-spondylitis/" rel="noopener noreferrer" target="_blank"><img src="<?php the_field('image_english_2'); ?>" class="logo-symptoms" /></a>
				</div> -->
			</div>
			<div class="space-between my-5">
				<div class="max-content-h center-mobile">
					<a id="ca" href="https://www.carearthritis.com/tools/tools_html.anonlaunch?toolid=1&refid=/physicians.php%23tab3" rel="noopener noreferrer" target="_blank" class="own-font-blue"><strong>CaRE Arthritis </strong></a>
				</div>
			</div>
			<div class="position-relative hide-mobile w-100">
				<img src="/wp-content/uploads/2022/02/MAGNIFYING-GLASS.png" class="filler position-absolute" />
			</div>
			<p class="grey-font symptoms-font center-mobile">
				<?php the_field('french_text'); ?>
			</p>
			<div class="space-between my-5">
				<div class="max-content-h center-mobile">
					<a id="svmbf" href="https://www.bechterew.ch/fr/test-du-diagnostic/" class="own-font-blue" rel="noopener noreferrer" target="_blank"><?php the_field('french_link'); ?></a>
				</div>
<!-- 				<div class="max-content center-mobile text-center mt-4">
					<a href="https://www.bechterew.ch/fr/test-du-diagnostic/" rel="noopener noreferrer" target="_blank"><img src="<?php the_field('image_french'); ?>" class="logo-symptoms" /></a>
				</div> -->
			</div>
			<p class="grey-font symptoms-font center-mobile">
				<?php the_field('german_text'); ?>
			</p>
			<div class="space-between my-5">
				<div class="max-content-h center-mobile">
					<a id="svmbg" href="https://www.bechterew.ch/diagnosetest/" class="own-font-blue" rel="noopener noreferrer" target="_blank"><?php the_field('german_link'); ?></a>
				</div>
<!-- 				<div class="max-content center-mobile text-center mt-4">
					<a href="https://www.bechterew.ch/diagnosetest/"  rel="noopener noreferrer" target="_blank"><img src="<?php the_field('german_image'); ?>" class="logo-symptoms" /></a>
				</div> -->
			</div>
			<p class="grey-font symptoms-font center-mobile">
				<?php the_field('japanese_text'); ?>
			</p>
			<div class="space-between my-5">
				<div class="max-content-h center-mobile">
					<a id="jac" href="https://feigned-hope-7907.glideapp.io/" class="own-font-blue"  rel="noopener noreferrer" target="_blank"><?php the_field('japanese_link'); ?></a>
				</div>
<!-- 				<div class="max-content center-mobile text-center mt-4">
					<a href="https://feigned-hope-7907.glideapp.io/"  rel="noopener noreferrer" target="_blank"><img src="<?php the_field('japanese_image'); ?>" class="logo-symptoms" /></a>
				</div> -->
			</div>
			<p class="grey-font symptoms-font center-mobile">
				<?php the_field('norwegian_text'); ?>
			</p>
			<div class="space-between my-5">
				<div class="max-content-h center-mobile">
					<a id="sns" href="https://spafo.no/diagnosetest/" class="own-font-blue"  rel="noopener noreferrer" target="_blank"><?php the_field('norwegian_link'); ?></a>
				</div>
<!-- 				<div class="max-content center-mobile text-center mt-4">
					<a href="https://spafo.no/diagnosetest/"  rel="noopener noreferrer" target="_blank"><img src="<?php the_field('norwegian_image'); ?>" class="logo-symptoms" /></a>
				</div> -->
			</div>
			<p class="grey-font symptoms-font center-mobile">
				<b>Disclaimer:</b>
			</p>
			<p>
			The Symptom Checkers above have not been created by ASIF and ASIF takes no responsibility for the content. 	
			</p>
		</div>
	</section>
	<section id="involved" class="full-width section-top-margin">
		<div class="container">
			<div class="d-flex my-4">
				<img src="<?php the_field('involved_left_image'); ?>" class="fit-content mr-4" />
				<h2 class="title-color mt-2">
					<?php the_field('involved_title'); ?>
				</h2>
			</div>
			<div class="blue">
				<h3 class="blue my-4">
					<?php the_field('blue_title'); ?>
				</h3>
			</div>
			<div class="my-4">
				<p>
					<b>
						<?php the_field('blue_subtitle'); ?>
					</b>
				</p>
			</div>
			<div class="my-4">
				<p>
					<?php the_field('blue_paragraph_1'); ?>
				</p>
			</div>
			<div class="my-4">
				<p>
					<?php the_field('blue_paragraph_2'); ?>
				</p>
			</div>
		</div>
		<div class="full-width grey-bg mobile-full">
			<div class="container py-4">
				<div class="d-md-flex">
					<div id="footprint" class="w-50 px-2">
						<h3 class="red my-4">
							<?php the_field('red_title'); ?>
						</h3>
						<p>
							<b>
								<?php the_field('red_subtitle'); ?>
							</b>
						</p>
						<p>
							<?php the_field('red_paragraph_1'); ?>
						</p>
						<p>
							<?php the_field('red_paragraph_2'); ?>
						</p>
						<p>
							<?php the_field('red_paragraph_3'); ?>
						</p>
 						<div class="text-center my-5">
							<a id="lyf" href="https://footprintasif.com/" target="_blank" rel="noopener noreferrer" class="red-btn py-3 px-5 white-font small-radius">Leave Your Footprint</a>
						</div>
					</div>
					<div class="w-50 text-center px-2">
						<img src="<?php the_field('red_paragraph_image'); ?>" class="my-4 full-width no-margin" />
					</div>
				</div>				
			</div>
		</div>
		<div class="container mobile-full">
			<div class="d-md-flex py-4">
				<div class="w-50 text-center px-2">
					<img src="<?php the_field('green_image'); ?>" class="my-4 full-width no-margin" />
				</div>
				<div class="w-50 px-2">
					<h3 class="green py-4">
						<?php the_field('green_title'); ?>
					</h3>
					<p>
						<b>
							<?php the_field('green_subtitle'); ?>
						</b>
					</p>
					<p>
						<?php the_field('green_paragraph_1'); ?>
					</p>
					<div class="text-center my-5">
							<a id="wyao" target="_blank" rel="noopener noreferrer" href="https://walkyourasoff.com/" class="green-btn py-3 px-5 white-font small-radius">Sign Up</a>
					</div>
					<div class="text-center my-5">
							<a id="tips-for-team-captains" target="_blank" rel="noopener noreferrer" href="/wp-content/uploads/2022/04/WYAO2022_LEAFLET_BIG5.pdf" download class="green-btn py-3 px-5 white-font small-radius">Tips</a>
						<a id="wasd-about-leaflet" target="_blank" rel="noopener noreferrer" href="/wp-content/uploads/2022/04/WYAO2022_LEAFLET.pdf" download class="green-btn py-3 px-5 white-font small-radius">About</a>
					</div>
				</div>
			</div>
		</div>
		<div class="full-width grey-bg no-margin mobile-full">
			<div class="container">
				<div class="d-md-flex">
					<div class="w-50 px-2 py-4">
						<h3 class="orange py-4">
							<?php the_field('orange_title'); ?>
						</h3>
						<p class="text-justify">
							<?php the_field('orange_text'); ?>
						</p>
						<div class="text-center my-5">
							<a id="std" target="_blank" rel="noopener noreferrer" href="https://spondylitis.org/global-spondyloarthritis-summit/" class="orange-btn py-3 px-5 white-font small-radius">Find out more</a>
						</div>
						
					</div>
					<div class="w-50 px-2">
						<img src="<?php the_field('orange_image'); ?>" class="full-width no-margin" />
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- 	<section id="connected">
		<div class="container mx-auto">
			<div class="d-flex my-4 pt-4">
				<img src="<?php the_field('connected_image'); ?>" class="fit-content mr-4" />
				<h2 class="title-color">
					<?php the_field('connected_title'); ?>
				</h2>
			</div>
			<div>
				<p class="mb-3">
					<b>
						<?php the_field('connected_subtitle'); ?>
					</b>	
				</p>
				<p class="mb-3">
					<?php the_field('conected_text'); ?>
				</p>
			</div>
			<div>
				<div class="d-md-flex mobile-full">
					<div class="mx-2 my-4 text-center w-50">
<iframe src="https://player.vimeo.com/video/675378072?h=d1499058af&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="24754LP_Itsallconnected_lilly and asif_UK_MASTER" class="videos-4"></iframe>
					</div>
					<div class="mx-2 my-4 text-center w-50">
						<iframe src="https://player.vimeo.com/video/675378116?h=a8c5c571d4&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" class="videos-4" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="24754LP_Itsallconnected_lilly and asif_UK_MASTER"></iframe>
					</div>
				</div>
				<div class="d-md-flex mobile-full">
					<div class="mx-2 my-4 text-center w-50">
						<iframe src="https://player.vimeo.com/video/675378151?h=6835062f5e&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" class="videos-4" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="24754LP_Itsallconnected_lilly and asif_UK_MASTER"></iframe>
					</div>
					<div class="mx-2 my-4 text-center w-50">
						<iframe src="https://player.vimeo.com/video/675378183?h=2cc3e41f14&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" class="videos-4" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="24754LP_Itsallconnected_lilly and asif_UK_MASTER"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<section id="wall">
		<div class="container mx-auto section-top-margin">
			<div class="d-flex my-4 pt-4">
				<img src="<?php the_field('social_image'); ?>" class="fit-content mr-4" />
				<h2 class="title-color mt-2">
					<?php the_field('social_title'); ?>
				</h2>
			</div>
			<div>
				<p class="my-3">
					<b>
						Join the global conversation
<!-- 						<?php the_field('social_subtitle'); ?> -->
					</b>	
				</p>
				<p class="my-3">
					Please tag @asif.spondylitis and use #WorldASDay2022 on Facebook. On Instagram or Twitter, tag @ASIntFed or use #WorldASDay2022 to join the global conversation.
<!-- 					<?php the_field('social_text'); ?> -->
				</p>
<!-- 				<p class="my-3">
					<b>
						World AS Day on Social!
					</b>	
				</p>
				<p class="my-3">
					If you aren’t on Facebook, Instagram or Twitter, you can still join the conversation. Simply scan the QR code on your smart phone, write your message, and it will appear below! 
				</p>
				<div class="text-center">
					<script async src="https://walls.io/js/wallsio-widget-1.2.js" data-wallurl="https://my.walls.io/i5cvw?nobackground=1&amp;show_header=0&amp;initial_posts=12" data-title="World AS Day 2022" data-width="100%" data-autoheight="1" data-injectloadmorebutton="1" data-loadmoretext="Load more posts" data-loadmorecount="12" data-height="800" data-lazyload="1"></script>
				</div> -->
				
				<p class="my-3">
					<b>
						Our Community Guidelines for Social Media
					</b>	
				</p>
				<p class="my-3">
					ASIF’s Facebook, Instagram and Twitter pages are inclusive, positive spaces where we encourage people to share their experience of living with axSpA. Please be kind, supportive and encouraging to others. 
				</p>
				<p class="my-3">
					<b>
						To keep our pages as positive and safe as we can…
					</b>	
				</p>
				<ul class="my-3 mx-5" style="list-style-type: disc;">
					<li> Inappropriate or discriminatory comments will be removed</li>
					<li>Please refrain from offering health and medical advice, or naming specific medications</li>
					<li>Avoid political or religious viewpoints</li>
					<li>Posts must follow <span style="text-decoration: underline;"><b>Facebook’s posting guidelines and Terms of Use</b></span></li>
				</ul>
				<p class="my-3">
					<strong>
						Posts that don’t follow these guidelines may be removed.
					</strong>
				</p>
				<p class="my-3">
					<b>
						Cyber Safety
					</b>	
				</p>
				<ul class="my-3 mx-5" style="list-style-type: disc;">
					<li>When sharing your experiences and opinions, be careful not to share identifiable information, such as your address.</li>
				</ul>
				<p class="my-3">
					Please contact <a href="mailto:communicationsmanager@asif.info"><b>communicationsmanager@asif.info</b></a> with any questions.
				</p>
			</div>
		</div>
	</section>
		<section id="resources" class="full-width  section-top-margin position-relative">
			<section class="container">
				<div class="d-flex my-4">
			<img src="<?php the_field('resources_left_image'); ?>" class="fit-content mr-4" />
			<h2 class="title-color mt-1">
				<?php the_field('resources_title'); ?>
			</h2>
		</div>
		<div>
			<p>
				<b>
					<?php the_field('resources_subtitle'); ?>
				</b>
			</p>
		</div>
		<div>
			<p>
				<?php the_field('resources_text'); ?>
			</p>
		</div>
		<div class="d-md-flex">
			<div class="card text-center mr-md-4 my-4 w-50 position-relative">
				<img src="<?php the_field('toolkit_logo'); ?>" class="w-fit-content mb-5" />
				<div class="d-flex space-between py-3 position-absolute card-bottom">
					<p class="title-color mt-2">
						<b>Toolkit</b>
					</p>
					<a href="/wp-content/uploads/2022/02/Toolkit.pdf" id="toolkit-download" class="ml-auto" download><img src="<?php the_field('download_icon'); ?>" class="" /></a>
				</div>
			</div>
			<div class="card text-center ml-md-4 my-4 w-50 position-relative">
				<img src="<?php the_field('resources_logo'); ?>" class="w-fit-content mb-5" />
				<div class="d-flex space-between py-3 position-absolute card-bottom">
					<p class="title-color mt-2">
						<b>World AS Day 2022 logo</b>
					</p>
					<a href="/wp-content/uploads/2022/02/Logo.zip" id="logo-download" class="ml-auto" download><img src="<?php the_field('download_icon'); ?>" class="" /></a>
				</div>
			</div>
		</div>
		<div class="d-md-flex">
			<div class="card text-center mr-md-4 my-4 w-50 position-relative">
				<img src="<?php the_field('posters'); ?>" class="w-fit-content mb-5" />
				<div class="d-flex space-between py-3 position-absolute card-bottom">
					<p class="title-color mt-2">
						<b>Save The Date Assets</b>
					</p>
					<a href="/wp-content/uploads/2022/02/Save_The_Dates_Assets.zip" id="save-the-date-assets-download" class="ml-auto" download><img src="<?php the_field('download_icon'); ?>" class="" /></a>
				</div>
			</div>
			<div class="card text-center ml-md-4 my-4 w-50 position-relative">
				<img src="<?php the_field('sm_assets'); ?>" class="w-fit-content mb-5" />
				<div class="d-flex space-between py-3 position-absolute card-bottom">
					<p class="title-color mt-2">
						<b>Social Media Assets</b>
					</p>
					<a href="/wp-content/uploads/2022/02/Social_Media_Assets.zip" id="social-media-downloads" class="ml-auto" download><img src="<?php the_field('download_icon'); ?>" class="" /></a>
				</div>
			</div>
		</div>
		<div class="d-md-flex">
			<div class="card text-center mr-md-4 my-4 w-50 position-relative">
				<img id="video-start-watching" src="/wp-content/uploads/2022/03/World-AS-Day-2022-Webinar-Presentation.jpg" class="w-fit-content clickable mb-5" onClick="openModal()"/>
				<div class="d-flex space-between py-3 position-absolute card-bottom">
					<p class="title-color mt-2">
						<b>2022 Webinar Video</b>
					</p>
					<img id="video-start-watching-2" src="/wp-content/uploads/2022/03/play_button.png" class="ml-auto clickable" onClick="openModal()"/>
				</div>
			</div>
			<div class="card text-center ml-md-4 my-4 w-50 position-relative">
				
				<img src="/wp-content/uploads/2022/03/LEAFLET_icon.png" class="w-fit-content mb-5" />
				<div class="d-flex space-between py-3 position-absolute card-bottom">
					<p class="title-color mt-2">
						<b>Health Care Practitioners Flyer</b>
					</p>
					<a href="/wp-content/uploads/2022/03/WASD2022_LEAFLET.zip" id="leaflet_download" class="ml-auto" download><img src="<?php the_field('download_icon'); ?>" class="" /></a>
				</div>
			</div>
		</div>
				<div id="myModal" class="modal" style="display: none;" onClick="closeModal()">
					<div class="modal-content">
						<span class="close" onClick="closeModal()">&times;</span>
						<iframe src="https://player.vimeo.com/video/683231660?h=ca6ca1d69c" class="video-messages-2022" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>			
			</section>
		
		<img src="<?php the_field('dots_left'); ?>" class="full-width position-absolute top-margin-fixed hide-mobile" />
	</section>
	
	<section id="touch" class="container section-top-margin">
		<div class="d-flex my-4">
			<img src="<?php the_field('touch_image'); ?>" class="mr-4" />
			<h2 class="title-color">
				<?php the_field('touch_title'); ?>
			</h2>
		</div>
		<p>
			<?php the_field('touch_text'); ?>
		</p>
		<img src="<?php the_field('touch_bottom_image'); ?>" class="full-width mb-4 no-margin" />
	</section>
	<section id="partners" class="container section-top-margin">
		<div class="d-flex my-4">
			<img src="<?php the_field('resources_left_image'); ?>" class="mr-4" />
			<h2 class="title-color">
				Partners
			</h2>
		</div>
		<div class="d-md-flex justify-content-between">
			<div class="space-around text-center">
				<img src="/wp-content/uploads/2022/03/NOVARTIS.png" class="partner-logo" />
			</div>
			<div class="space-around text-center">
				<img src="/wp-content/uploads/2022/03/UCB.png" class="partner-logo" />
			</div>
			<div class="space-around text-center">
				<img src="/wp-content/uploads/2022/03/BOEHRINGEN.png" class="partner-logo" />
			</div>
		</div>
		<div class="d-md-flex mb-5 justify-content-between">
			<div class="space-around text-center">
				<img src="/wp-content/uploads/2022/03/JANSSEN.png" class="partner-logo" />
			</div>
			<div class="space-around text-center">
				<img src="/wp-content/uploads/2022/03/LILLY.png" class="partner-logo" />
			</div>
			<div class="space-around text-center">
				<img src="/wp-content/uploads/2022/03/PFIZER.png" class="partner-logo" />
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
<script>
$(document).ready(()=>{
	$("body").on('click', (e) => {
		if(e.target.tagName != 'IMG'){
			hideAllEls()
		}
		
		$('#video-top').on('click', () => {
			$("#vid3").attr('src',$("#vid3").attr('src')+'?autoplay=1')
			$('#video-top').remove()
			gtag('event', 'Watch', {'event_category': 'Video', 'event_label' : 'Summary video watched'})
		})
		
		$('#video-symptoms').on('click', () => {
			$("#vid1").attr('src',$("#vid1").attr('src')+'?autoplay=1')
			$('#video-symptoms').remove()
			gtag('event', 'Watch', {'event_category': 'Video', 'event_label' : 'Symptoms video watched'})
		})
		
		$('#video-awarness').on('click', () => {
			$("#vid2").attr('src',$("#vid2").attr('src')+'?autoplay=1')
			$('#video-awarness').remove()
			gtag('event', 'Watch', {'event_category': 'Video', 'event_label' : 'Awarness video watched'})
		})
	})
	
	$("#tips-for-team-captains").on('click', () => {
		gtag('event', 'Download', {'event_category': 'File', 'event_label' : 'WASD22_Walk_Tips'})
	})
	
	$("#wasd-about-leaflet").on('click', () => {
		gtag('event', 'Download', {'event_category': 'File', 'event_label' : 'WASD22_Walk_About'})
	})
})
</script>
<script>
var lastNumber = 0
var hideAll = (numberToShow) => {
	if(lastNumber == numberToShow){
		numberToShow = 0
	}
	
	hideAllEls()
		
	numberToShow /= 1
	showEl(numberToShow)
	
	lastNumber = numberToShow
}

var hideAllEls = () => {
	var arr = new Array(8)
	arr[0] = document.getElementById('red-popup')
	arr[1] = document.getElementById('green-popup-1')
	arr[2] = document.getElementById('green-popup-2')
	arr[3] = document.getElementById('green-popup-3')
	arr[4] = document.getElementById('green-popup-4')
	arr[5] = document.getElementById('green-popup-5')
	arr[6] = document.getElementById('yellow-popup')
	arr[7] = document.getElementById('yellow-popup-2')
	for(var i = 0; i < arr.length; i++){
		if(arr[i] != null){
			arr[i].classList.add('d-none')
		}
		
	}
}

var showEl = (el) => {
	switch(el){
		case 1:
			var el = document.getElementById('red-popup')
			if(el){
				el.classList.remove('d-none')
				el.classList.add('clicked')
			}
			break;
		case 2:
			var el = document.getElementById('green-popup-1')
			if(el){
				el.classList.remove('d-none')
				el.classList.add('clicked')
			}
			break;
		case 3:
			var el = document.getElementById('green-popup-2')
			if(el){
				el.classList.remove('d-none')
				el.classList.add('clicked')
			}
			break;
		case 4:
			var el = document.getElementById('green-popup-3')
			if(el){
				el.classList.remove('d-none')
				el.classList.add('clicked')
			}
			break;
		case 5:
			var el = document.getElementById('green-popup-4')
			if(el){
				el.classList.remove('d-none')
				el.classList.add('clicked')
			}
			break;
		case 6:
			var el = document.getElementById('green-popup-5')
			if(el){
				el.classList.remove('d-none')
				el.classList.add('clicked')
			}
			break;
		case 7:
			var el = document.getElementById('yellow-popup')
			if(el){
				el.classList.remove('d-none')
				el.classList.add('clicked')
			}
			break;
		case 8:
			var el = document.getElementById('yellow-popup-2')
			if(el){
				el.classList.remove('d-none')
				el.classList.add('clicked')
			}
			break;
		default:
			break;
	}
}
</script>

<script>
const sliders = document.querySelectorAll(".slider");
  // interval between switching images
  // can't be less than your animation duration in css!
  const interval = 5000;
  // if you don't want to first animation last longer than other animations  
  // set animDuration (in miliseconds) to your value of animation duration in css
  const animDuration = 600;

  for (let i = 0; i < sliders.length; ++i) {
    const slider = sliders[i];
    const dots = slider.querySelector(".dots");
    const sliderImgs = slider.querySelectorAll(".img");

    let currImg = 0;
    let prevImg = sliderImgs.length - 1;
    let intrvl;
    let timeout;

    // Creates dots and add listeners to them
    for (let i = 0; i < sliderImgs.length; ++i) {
      const dot = document.createElement("div");
      dot.classList.add("dot");
      dots.appendChild(dot);
      dot.addEventListener("click", dotClick.bind(null, i), false);
    }

    const allDots = dots.querySelectorAll(".dot");
    allDots[0].classList.add("active-dot");

    sliderImgs[0].style.left = "0";
    timeout = setTimeout(() => {
      animateSlider();
      sliderImgs[0].style.left = "";
      intrvl = setInterval(animateSlider, interval);
    }, interval - animDuration);   

    /**
     * Animates images
     * @param {number} [nextImg] - index of next image to show
     * @param {boolean} [right = false] - animate to right
     */
    function animateSlider(nextImg, right) {
      if (!nextImg)
        nextImg = currImg + 1 < sliderImgs.length ? currImg + 2 : 1;

      --nextImg;
      sliderImgs[prevImg].style.animationName = "";

      if (!right) {
        sliderImgs[nextImg].style.animationName = "leftNext";
        sliderImgs[currImg].style.animationName = "leftCurr";
      } 
      else {
        sliderImgs[nextImg].style.animationName = "rightNext";
        sliderImgs[currImg].style.animationName = "rightCurr";
      }

      prevImg = currImg;
      currImg = nextImg;

      currDot = allDots[currImg];
      currDot.classList.add("active-dot");
      prevDot = allDots[prevImg];
      prevDot.classList.remove("active-dot");
    }

    /**
     * Decides if animate to left or right and highlights clicked dot
     * @param {number} num - index of clicked dot
     */
    function dotClick(num) {
      if (num == currImg)
        return false;

      clearTimeout(timeout);
      clearInterval(intrvl);

      if (num > currImg)
        animateSlider(num + 1);
      else
        animateSlider(num + 1, true);

      intrvl = setInterval(animateSlider, interval);
    }
  }
</script>

<?php get_footer();?>
