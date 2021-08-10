<?php /*Template Name: axSpa Page */ ?>

<?php get_header(); ?>

<?php if(have_rows('flexible_sections')): 
	    while(have_rows('flexible_sections')): the_row(); ?>
	    <?php get_template_part( 'template-parts/acf-blocks/' . get_row_layout() ) ?>
	    <?php endwhile;
	endif; ?>


<!-- list-group-item class needed for Bootstrap scroll spy working -->
<div id="axspa-nav" class="list-group axspa-nav">
  <a class="list-group-item axspa-nav__item" href="#block-1">Pre-diagnosis</a>
  <a class="list-group-item axspa-nav__item" href="#livingAxspa">Diagnosis</a>
  <a class="list-group-item axspa-nav__item" href="#emplymentImpact">Treatment</a>

</div>
<?php /* page content end */ ?>

<?php get_footer();?>