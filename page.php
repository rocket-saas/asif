<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<nav class="wi-full bg-light-blue breadcrumb_nav" aria-label="breadcrumb">
<div class="container">
  <ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
	<li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
  </ol>
</div>
</nav>

<div class="wi-full content-offset page-text text-size text-title">
<div class="container">
  <div class="row">
	<div class="col-md-12">
	  <?php the_content();?>
	</div>
	<!-- /.col-sm-12 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
</div>
<!-- /.content-offset text-size text-title -->
<?php endwhile;?>
<?php get_footer(); ?>
