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

<!-- list-group-item class needed for Bootstrap scroll spy working -->
<div id="axspa-nav" class="list-group axspa-nav axspa-nav--horizontal">
	<div class="container">
		<div class="row">
			<a class="list-group-item axspa-nav__item" href="#hero-text">About IMAS</a>
			<a class="list-group-item axspa-nav__item" href="#involved">Who is involved</a>
			<a class="list-group-item axspa-nav__item" href="#axspa-numbers">AxSpA in numbers</a>
			<a class="list-group-item axspa-nav__item" href="#treatmentGoals">Treatment goals</a>
			<a class="list-group-item axspa-nav__item" href="#accordion--downloads">IMAS publications</a>
			<a class="list-group-item axspa-nav__item" href="#followCta">Get connected</a>
		</div>
	</div>
</div>





<?php if(have_rows('flexible_sections')): 
	    while(have_rows('flexible_sections')): the_row(); ?>
	    <?php get_template_part( 'template-parts/acf-blocks/' . get_row_layout() ) ?>
	    <?php endwhile;
	endif; ?>



<!-- <div id="axspa-nav" class="list-group axspa-nav">
	<a class="list-group-item axspa-nav__item" href="#hero-text">About IMAS</a>
	<a class="list-group-item axspa-nav__item" href="#involved">Who is involved</a>
	<a class="list-group-item axspa-nav__item" href="#axspa-numbers">AxSpA in numbers</a>
	<a class="list-group-item axspa-nav__item" href="#treatmentGoals">Treatment goals</a>
	<a class="list-group-item axspa-nav__item" href="#accordion--downloads">IMAS publications</a>
	<a class="list-group-item axspa-nav__item" href="#followCta">Get connected</a>
</div> -->
<?php /* page content end */ ?>

<?php get_footer();?>