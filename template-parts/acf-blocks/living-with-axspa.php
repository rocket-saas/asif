<?php

/*Main stats content fields */
$riskNumber = get_sub_field('riskNumber');
$riskSubtitle = get_sub_field('riskSubtitle');
$riskContent  = get_sub_field('riskContent');

/*Risk groups fields */
$riskGroups_title = get_sub_field('riskGroups_title');
$riskGroups_list = get_sub_field('riskGroups_list');

/*Stats list fields */
$activities_title = get_sub_field('activities_title');
$activities_list = get_sub_field('activities_list');

/*Accent content fields */
$risksTitle = get_sub_field('risksTitle');
$risksContent = get_sub_field('risksContent');
$risksDisclaimer = get_sub_field('risksDisclaimer');

/*Icon list */

$relationTitle = get_sub_field('relationTitle');
$relationList = get_sub_field('relationList');
// -relationIcon
// -relationNumber
// -relationContent
?>

<?php if ($riskNumber || $riskGroups_list || $activities_list || $relationList) : ?>
<section id="livingAxspa" class="livingAxspa appear">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-9 static">
                <div class="row livingAxspa--row appear fade-up d-1">
                    <div class="livingAxspa__riskStats col-auto">
                        <?php if ($riskNumber) : ?>
                            <span class="livingAxspa__riskNumber counter" data-counter="<?php echo $riskNumber;?>" data-integer="true"><?php echo $riskNumber;?></span><span class="livingAxspa__riskSign">%</span>
                        <?php endif;?>
                        <?php if ($riskSubtitle) : ?>
                            <p class="livingAxspa__riskSubtitle"><?php echo $riskSubtitle;?></p>
                        <?php endif;?>
                        <?php if ($riskContent) : ?>
                            <div class="livingAxspa__riskContent">
                                <?php echo $riskContent;?>
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="livingAxspa__riskGroupsWrapper col">
                        <?php if ($riskGroups_title) : ?>
                            <strong><?php echo $riskGroups_title;?> </strong>
                        <?php endif;?>

                        <?php if( have_rows('riskGroups_list') ):
                            $i = 0;?>
                            <ul class="livingAxspa__riskGroups">
                                <?php while( have_rows('riskGroups_list') ): the_row(); 
                                    $riskgroupsIcon = get_sub_field('riskgroups_icon');
                                    $riskgroupsContent = get_sub_field('riskgroups_content');
                                    ?>
                                    <li class="livingAxspa__riskGroupsItem">

                                        <?php if( !empty( $riskgroupsIcon ) ): ?>
                                            <?php echo file_get_contents(esc_url(wp_get_original_image_path($riskgroupsIcon['id']))); ?>
                                        <?php endif; ?>

                                        <?php if($riskgroupsContent) : ?>
                                            <?php echo $riskgroupsContent;?>
                                        <?php endif;?>

                                        <?php $i++; ?>

                                        <?php if ($i == 1) : ?>
                                            <svg class="livingAxspa__connector livingAxspa__connector--1" width="132" height="33" viewBox="0 0 132 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M132 32H77.9286C69.3682 32 62.4286 25.0604 62.4286 16.5V16.5C62.4286 7.93959 55.489 1 46.9286 1H0" stroke="white" stroke-width="2"/>
                                            </svg>
                                        <?php endif;?>
                                        <?php if ($i ===2) : ?>
                                            <svg class="livingAxspa__connector livingAxspa__connector--2" width="132" height="33" viewBox="0 0 132 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M132 32H77.9286C69.3682 32 62.4286 25.0604 62.4286 16.5V16.5C62.4286 7.93959 55.489 1 46.9286 1H0" stroke="white" stroke-width="2"/>
                                            </svg>
                                        <?php endif;?>
                                        <?php if ($i == 3) : ?>
                                            <svg class="livingAxspa__connector livingAxspa__connector--3" width="132" height="35" viewBox="0 0 132 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M132 1H78.4286C69.592 1 62.4286 8.16344 62.4286 17V18C62.4286 26.8366 55.2651 34 46.4286 34H0" stroke="white" stroke-width="2"/>
                                            </svg>
                                        <?php endif;?>
                                        <?php if ($i == 4) : ?>
                                            <svg class="livingAxspa__connector livingAxspa__connector--4" width="132" height="33" viewBox="0 0 132 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M132 32H77.9286C69.3682 32 62.4286 25.0604 62.4286 16.5V16.5C62.4286 7.93959 55.489 1 46.9286 1H0" stroke="white" stroke-width="2"/>
                                            </svg>
                                        <?php endif;?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/images/imas/live-with-circle.svg';?>" alt="circle icon" class="livingAxspa__circle">
                </div>
                <div class="row appear fade-up d-1">
                    <div class="livingAxspa__activitiesWrapper col-md-7">
                        <div class="livingAxspa__activitiesInner">
                            <?php if ($riskNumber) : ?>
                                <h5 class="livingAxspa__activitiesTitle">axSpA flares limited patients’ ability to carry out / engage in everyday activities including;</h5>
                            <?php endif;?>
                            <?php if( have_rows('activities_list') ): ?>
                                <ul class="slides">
                                    <?php while( have_rows('activities_list') ): the_row(); 
                                        $activitiesName = get_sub_field('activity_name');
                                        $activitiesValue = get_sub_field('activity_value');
                                        ?>
                                        <?php if ($activitiesName && $activitiesValue ) : ?>
                                            <li class="livingAxspa__activity">
                                                <span class="livingAxspa__activityName"><?php echo $activitiesName;?> - <span class="livingAxspa__activityValue"><?php echo $activitiesValue;?></span>%</span>
                                                <div class="livingAxspa__activityBar" data-percent="<?php echo $activitiesValue;?>">
                                                    <div class="livingAxspa__activityBar--filled"></div>
                                                </div>
                                                
                                            </li>
                                        <?php endif;?>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                    </div> 
                    <?php if ($risksContent) : ?>
                        <div class="livingAxspa__risksWrapper col-md-5">
                            <div class="livingAxspa__risksInner">
                                <svg class="livingAxspa__risksInner--connector" width="156" height="108" viewBox="0 0 156 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M155.5 1H125.5C116.663 1 109.5 8.16344 109.5 17V63C109.5 71.8366 102.337 79 93.5 79H17.5C8.66344 79 1.5 86.1634 1.5 95V107.5" stroke="white" stroke-width="2"/>
                                </svg>

                                <?php if ($risksTitle) : ?>
                                    <h5 class="livingAxspa__risksTitle"><?php echo $risksTitle;?></h5>
                                <?php endif;?>
                                <?php if ($risksContent) : ?>
                                    <?php echo $risksContent;?>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if ($risksDisclaimer) : ?>
                        <div class="livingAxspa__risksDisclaimer col-lg-9 col-xl-8">
                            <?php echo $risksDisclaimer;?>
                        </div>
                    <?php endif;?>      
                </div>
                <?php if ($relationList) : ?>
                    <div class="livingAxspa__relationWrapper">
                        <?php if ($relationTitle) : ?>
                            <h3 class="livingAxspa__relationTitle"><?php echo $relationTitle;?></h3>
                        <?php endif;?>
                        <?php if( have_rows('relationList') ): ?>
                            <ul class="livingAxspa__relationList row appear fade-up d-1">
                            <?php while( have_rows('relationList') ): the_row(); 
                                $relationIcon = get_sub_field('relationIcon');
                                $relationNumber = get_sub_field('relationNumber');
                                $relationContent = get_sub_field('relationContent');
                                
                                ?>
                                <li class="livingAxspa__relationItem col-auto">
                                    <div class="livingAxspa__relationItem__inner">
                                        <?php if( !empty( $relationIcon ) ): ?>
                                            <div class="livingAxspa__relationIcon">
                                                <?php echo file_get_contents(esc_url(wp_get_original_image_path($relationIcon['id']))); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($relationNumber && $relationContent) : ?>
                                        <div class="livingAxspa__relationContent">
                                            <strong class="livingAxspa__relationPercent"><?php echo $relationNumber;?><span>%</span></strong>
                                            <p class="livingAxspa__relationGroup"><?php echo $relationContent;?></p>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
<?php endif;?>