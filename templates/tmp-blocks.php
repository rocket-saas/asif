<?php /*Template Name: Blocks Page */ ?>

<?php get_header(); ?>

<?php /* page content */ ?>

    <?php 
        if ( ! post_password_required() ) :
            ?>
            <div class="blocks font-family-base">
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
            if( have_rows('blocks') ):
                ?>
                <div class="blocks font-family-base">
                    <?php
                    while ( have_rows('blocks') ) : the_row();
                        get_template_part('template-parts/acf-blocks/'.get_row_layout());
                    endwhile;
                    ?>
                </div>
                <?php
            else :
            
            endif;     
        else :
            echo get_the_password_form();
        endif;
    ?>

<?php /* page content end */ ?>

<?php get_footer();?>