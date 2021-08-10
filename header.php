<?php
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



<body <?php body_class(); ?> data-spy="scroll" data-target="#axspa-nav" data-offset="0" class="scrollspy-axspa" style="position: relative;">

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
      </header>
      <!-- /.wi-full -->

		<div id="content" class="site-content">
