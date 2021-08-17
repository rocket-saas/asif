<?php /*Template Name: axSpa Page */ ?>

<?php get_header(); ?>



<?php get_template_part('template-parts/page-nav/horizontal-nav');?>



<?php if(have_rows('flexible_sections')): 
	    while(have_rows('flexible_sections')): the_row(); ?>
	    <?php get_template_part( 'template-parts/acf-blocks/' . get_row_layout() ) ?>
	    <?php endwhile;
	endif; ?>




<?php /* page content end */ ?>
<div class="published__date">
	<?php the_time('j/m/Y');?>   <span><?php the_time('F Y');?></span>
</div>
<?php get_footer();?>