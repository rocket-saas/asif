<?php /*Template Name: axSpa Page */ ?>

<?php get_header(); ?>
<script>
	jQuery(document).ready(function(){
    const navOffset = jQuery('#axspa-nav').offset().top; // I don`t know what is "30"
    const navHeight = jQuery('#axspa-nav').height();
    const navHeightAdmin = navHeight + 32;
    jQuery(window).scroll(function(){
        //console.log(navOffset);
        const scrolled = jQuery(this).scrollTop();
        console.log(scrolled);
        const headerHeight = jQuery('#header').height() + 'px';
        console.log(navHeight);
        // console.log(navOffset);
        // console.log(scrolled);
        if(scrolled > navOffset) {
			jQuery('.axspa-nav').css("position","fixed");
			jQuery('.axspa-nav + section').css("margin-top",navHeight);
			jQuery('.admin-bar .axspa-nav + section').css("margin-top",navHeight);
            // $('.content-area').css('margin-top',navHeight);
            // $(' .content-area').css('margin-top',navHeightAdmin);
            
        } else if (scrolled <= navOffset){
			jQuery('.axspa-nav').css("position","static");
			jQuery('.axspa-nav + section').css("margin-top",0);
            // $('.content-area').css('margin-top',0);
        }
    });
});
</script>



<?php get_template_part('template-parts/page-nav/horizontal-nav');?>



<?php if(have_rows('flexible_sections')): 
	    while(have_rows('flexible_sections')): the_row(); ?>
	    <?php get_template_part( 'template-parts/acf-blocks/' . get_row_layout() ) ?>
	    <?php endwhile;
	endif; ?>




<?php /* page content end */ ?>
<div class="published__date">
	xx/xxxx/xx/xx   <span>August 2021</span>
</div>
<?php get_footer();?>