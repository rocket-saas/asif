<?php /*Template Name: Blocks Page */ ?>

<?php get_header(); ?>

<?php /* page content */ ?>

    <style>
    .site-content {
        padding-top: 0;
    }
    </style>

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



           
            </div>
            <?php
        else :
            echo get_the_password_form();
        endif;
    ?>

<?php /* page content end */ ?>

<?php get_footer();?>