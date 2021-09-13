<?php

/* Basic fields */
$switchStats_title = get_sub_field('switchStats_title');

/* Button labels */
$dark_label = get_sub_field('dark_label');
$light_label = get_sub_field('light_label');

/* Dark stats fields */
$dark_stats_list = get_sub_field('dark_stats_list');
$dark_disclaimer = get_sub_field('dark_disclaimer');

/* Light stats fields */
$light_stats_list = get_sub_field('light_stats_list');
$light_disclaimer = get_sub_field('light_disclaimer');

?>

<?php if ($dark_stats_list) : ?>
<section id="switchStats" class="switchStats">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
                <?php if ($switchStats_title) : ?>
                    <strong class="switchStats__title appear fade-up d-1"><?php echo $switchStats_title;?></strong>
                <?php endif;?>
                <div class="row">
                    <div class="col-lg-7">
                        <hr class="switchStats__hr">
                    </div>
                    <div class="col-lg-5">
                        <?php if ($dark_stats_list && $light_stats_list) : ?>
                            <div class="switchStats__switcherGroup appear fade-up d-1">
                                <a href="#1" class="two">
                                    <span><?php echo $light_label;?></span>
                                    <div class="bg"></div>
                                </button>
                                <a href="#2" class="one"><?php echo $dark_label;?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="switchStats__listWrapper appear fade-up d-1">
                    <div class="switchStats__listCarousel">
                        <?php if( have_rows('dark_stats_list') ): ?>
                            <ul class="switchStats__list switchStats__list--dark">
                                <?php while( have_rows('dark_stats_list') ): the_row(); 
                                    $darkStats_label = get_sub_field('darkStats_label');
                                    $darkStats_number = get_sub_field('darkStats_number');
                                    ?>
                                    <?php if ($darkStats_label || $darkStats_number) : ?>
                                        <li class="switchStats__item row">
                                            <span class="switchStats__label col-auto"><?php echo $darkStats_label;?></span>
                                            <div class="switchStats__activityBarWrapper col">
                                                <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="<?php echo $darkStats_number;?>">
                                                    <div class="livingAxspa__activityBar--filled"></div>
                                                </div>
                                                <span class="livingAxspa__activityValue"><?php echo $darkStats_number;?></span>%
                                            </div>
                                        </li>
                                    <?php endif;?>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if( have_rows('light_stats_list') ): ?>
                            <ul class="switchStats__list switchStats__list--light">
                                <?php while( have_rows('light_stats_list') ): the_row(); 
                                    $lightStats_label = get_sub_field('lightStats_label');
                                    $lightStats_number = get_sub_field('lightStats_number');
                                    ?>
                                    <?php if ($lightStats_label || $lightStats_number) : ?>
                                        <li class="switchStats__item row">
                                            <span class="switchStats__label col-auto"><?php echo $lightStats_label;?></span>
                                            <div class="switchStats__activityBarWrapper col">
                                                <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="<?php echo $lightStats_number;?>">
                                                    <div class="livingAxspa__activityBar--filled"></div>
                                                </div>
                                                <span class="livingAxspa__activityValue"><?php echo $lightStats_number;?></span>%
                                            </div>
                                        </li>
                                    <?php endif;?>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    
                </div>
                <?php if ($dark_disclaimer || $light_disclaimer) : ?>
                    <div class="switchStats__disclaimerWrapper">
                        <div class="switchStats__listCarousel">
                            <?php if ($dark_disclaimer) : ?>
                                <div class="switchStats__disclaimer appear fade-up d-1" style="width: 50%">
                                    <?php echo $dark_disclaimer;?>
                                </div>
                            <?php endif;?>

                            <?php if ($light_disclaimer) : ?>
                                <div class="switchStats__disclaimer appear fade-up d-1" style="width: 50%">
                                    <?php echo $light_disclaimer;?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endif;?>
                

                
            </div>
        </div>
    </div>
</section>
<?php endif; ?>