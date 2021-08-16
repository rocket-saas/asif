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
                    <strong class="switchStats__title appear fade-up d-1">For patients, the most frequent fears and hopes related to axSpA were:</strong>
                <?php endif;?>
                <div class="row">
                    <div class="col-md-7">
                        <hr class="switchStats__hr">
                    </div>
                    <div class="col-md-5">
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
                        <!-- <ul class="switchStats__list switchStats__list--dark">
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Suffering pain</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="40">
                                        <div class="livingAxspa__activityBar--filled" style="width: 40%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">40</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Loss of mobility</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="35">
                                        <div class="livingAxspa__activityBar--filled" style="width: 35%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">35</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Loss of independence</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="29">
                                        <div class="livingAxspa__activityBar--filled" style="width: 29%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">29.2</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                        </ul> -->
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
                        <ul class="switchStats__list switchStats__list--light">
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="44">
                                        <div class="livingAxspa__activityBar--filled" style="width: 44%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">44</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                            <li class="switchStats__item row">
                                <span class="switchStats__label col-auto">Disease progression</span>
                                <div class="switchStats__activityBarWrapper col">
                                    <div class="livingAxspa__activityBar switchStats__activityBar" data-percent="76">
                                        <div class="livingAxspa__activityBar--filled" style="width: 76%;"></div>
                                    </div>
                                    <span class="livingAxspa__activityValue">76</span>%
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="switchStats__disclaimer appear fade-up d-1">
                    <strong>Additional fears include:</strong></br>
                    Financial concerns 1.8%, medication doesn’t work / stops working 1.6%, take care of family / children 1.5%, premature death 1%, paralysis 1%, pass the disease to children 0.9%, anxiety / sadness 0.9%, inability to live with condition / give up 0.6%, sleep interruptions 0.2%.
                </div>
                
            </div>
        </div>
    </div>
</section>
<?php endif; ?>