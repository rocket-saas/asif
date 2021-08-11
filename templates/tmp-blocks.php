<?php /*Template Name: Blocks Page */ ?>

<?php get_header(); ?>

<?php /* page content */ ?>

    <?php 
        if ( ! post_password_required() ) :
            ?>
            <div class="blocks font-family-base">
            <?php
            if( have_rows('flexible_sections') ):
                ?>
                <div class="blocks font-family-base">
                    <?php
                    while ( have_rows('flexible_sections') ) : the_row();
                        get_template_part('template-parts/acf-blocks/'.get_row_layout());
                    endwhile;
                    ?>
                </div>
                <?php
            else :
            
            endif;  ?> 
            <div id="axspa-nav" class="list-group axspa-nav">
	<a class="list-group-item axspa-nav__item" href="#block-1">Pre-diagnosis</a>
	<a class="list-group-item axspa-nav__item" href="#block-1">Pre-diagnosis</a>
	<a class="list-group-item axspa-nav__item" href="#livingAxspa">Diagnosis</a>
	<a class="list-group-item axspa-nav__item" href="#livingAxspa">Diagnosis</a>
	<a class="list-group-item axspa-nav__item" href="#livingAxspa">Diagnosis</a>
	<a class="list-group-item axspa-nav__item" href="#livingAxspa">Diagnosis</a>
	<a class="list-group-item axspa-nav__item" href="#livingAxspa">Diagnosis</a>
	<a class="list-group-item axspa-nav__item" href="#livingAxspa">Diagnosis</a>
  hero-text
  icon-lists
  involved
  axspa-numbers
  treatmentGoals
  accordion--downloads
  followCta
  partnersList
</div>
            <?php
            get_template_part('template-parts/acf-blocks/hero-text');
            get_template_part('template-parts/acf-blocks/icon-lists');
            get_template_part('template-parts/acf-blocks/involved');
            get_template_part('template-parts/acf-blocks/axspa-numbers');
            get_template_part('template-parts/acf-blocks/treatment-goals');
            get_template_part('template-parts/acf-blocks/downloads-accordeon');
            get_template_part('template-parts/acf-blocks/stay-connected');
            get_template_part('template-parts/acf-blocks/partners');
            ?>
            </div>
            <?php
        else :
            echo get_the_password_form();
        endif;
    ?>

<?php /* page content end */ ?>

<?php get_footer();?>