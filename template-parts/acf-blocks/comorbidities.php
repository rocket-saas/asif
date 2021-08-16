<?php 

$title = get_sub_field('title');
$icon_blocks = get_sub_field('icon_blocks');
$data_table = get_sub_field('data_table');

$condition_1_title = get_sub_field('condition_1_title');
$condition_1_percents = get_sub_field('condition_1_percents');
$condition_1_text = get_sub_field('condition_1_text');

$condition_2_title = get_sub_field('condition_2_title');
$condition_2_percents = get_sub_field('condition_2_percents');
$condition_2_text = get_sub_field('condition_2_text');

$condition_3_title = get_sub_field('condition_3_title');
$condition_3_percents = get_sub_field('condition_3_percents');
$condition_3_text = get_sub_field('condition_3_text');

?>
<?php if($icon_blocks || $data_table): ?>
<section id="comorbidities" class="section bg--grey comorbidities">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                
                <?php if($title): ?>
                    <h2 class="subtitle subtitle--md comorbidities__title appear fade-up d-1"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if($icon_blocks): ?>
                    <ul class="comorbidities__icon-blocks appear fade-up d-1">
                        <?php 
                        foreach($icon_blocks as $item): 
                            $title = $item['title'];
                            $percent = $item['percents'];
                            $icon = $item['icon'];
                            ?>
                            <li class="comorbidities__icon-blocks__item">
                                <div class="comorbidities__icon-blocks__item__inner bg--green text--color--white">
                                    <p class="comorbidities__icon-blocks__item__text text--16">
                                        <?php echo $title; ?>
                                        <span class="text--18 text-h-24 font-w-700"><?php echo $percent; ?>%</span>
                                    </p>
                                    <?php if($icon): ?>
                                        <img class="comorbidities__icon-blocks__item__img" src="<?php echo $icon['url'];?>/images/axspa-numbers/comorbidities-icon-1.svg" alt="#">
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if($data_table): ?>
                    <div class="comorbidities__stat-table appear fade-up d-1">
                        <div class="comorbidities__stat-table__col">
                            <ul class="comorbidities__stat-table__list">
                                <?php for($i = 0; $i<sizeof($data_table)/2; $i++): 
                                    $title = $data_table[$i]['title'];
                                    $data = $data_table[$i]['data'];
                                    ?>
                                    <li class="comorbidities__stat-table__item">
                                        <span><?php echo $title; ?> </span>
                                        <span class="font-w-700"><?php echo $data; ?></span>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                        <div class="comorbidities__stat-table__col">
                            <ul class="comorbidities__stat-table__list">
                                <?php for($i = sizeof($data_table)/2 ; $i<sizeof($data_table); $i++): 
                                    $title = $data_table[$i]['title'];
                                    $data = $data_table[$i]['data'];
                                    ?>
                                    <li class="comorbidities__stat-table__item">
                                        <span><?php echo $title; ?> </span>
                                        <span class="font-w-700"><?php echo $data; ?></span>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="comorbidities__chart">
                    <svg id="comorbidities__chart__svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 844 512.1">
                        <circle cx="256" cy="256.1" r="236" style="fill: none;stroke: #fff;stroke-miterlimit: 9.999903734042684;stroke-width: 39.99961493617074px;opacity: 0.4"/>
                        <circle cx="256" cy="256.1" r="194.6" style="fill: none;stroke: #fff;stroke-miterlimit: 9.999903734042684;stroke-width: 39.99961493617074px;opacity: 0.6"/>
                        <circle cx="256" cy="256.1" r="153.2" style="fill: none;stroke: #fff;stroke-miterlimit: 9.999903734042684;stroke-width: 39.99961493617074px;opacity: 1"/>
                        <path class="comorbidities__chart__svg__line--1" d="M825,493.4H257.4a235,235,0,1,1,.9,0" transform="translate(-1 -1.4)" style="fill: none;stroke: #a2adc1;stroke-linecap: round;stroke-linejoin: round;stroke-width: 40px"/>
                        <path class="comorbidities__chart__svg__line--2"d="M825,452H257.4a193.86,193.86,0,1,1,.6,0" transform="translate(-1 -1.4)" style="fill: none;stroke: #455f80;stroke-linecap: round;stroke-linejoin: round;stroke-width: 40px"/>
                        <path class="comorbidities__chart__svg__line--3" d="M259.3,410.6c2,0,4-.1,5.9-.2q3.9-.15,7.8-.6c2.6-.3,5.1-.6,7.7-1s5.1-.8,7.5-1.3,5-1.1,7.4-1.7,4.9-1.3,7.3-2.1,4.8-1.5,7.1-2.4,4.7-1.8,7-2.7,4.6-2,6.8-3.1,4.4-2.2,6.6-3.4,4.3-2.4,6.4-3.7,4.2-2.6,6.2-4,4-2.8,6-4.3,3.9-3,5.8-4.5,3.7-3.2,5.6-4.8,3.6-3.3,5.3-5.1,3.4-3.5,5.1-5.3,3.3-3.7,4.8-5.6,3.1-3.8,4.5-5.8,2.9-4,4.3-6,2.7-4.1,4-6.2,2.5-4.2,3.7-6.4,2.3-4.4,3.4-6.6,2.1-4.5,3.1-6.8,1.9-4.6,2.7-7,1.7-4.7,2.4-7.1,1.4-4.8,2.1-7.3,1.2-4.9,1.7-7.4,1-5,1.3-7.5.7-5.1,1-7.7.5-5.2.6-7.8.2-5.2.2-7.9-.1-5.3-.2-7.9-.3-5.2-.6-7.8-.6-5.1-1-7.7-.8-5.1-1.3-7.5-1.1-5-1.7-7.4-1.3-4.9-2.1-7.3-1.5-4.8-2.4-7.1-1.8-4.7-2.7-7-2-4.6-3.1-6.8-2.2-4.4-3.4-6.6-2.4-4.3-3.7-6.4-2.6-4.2-4-6.2-2.8-4-4.3-6-3-3.9-4.5-5.8-3.2-3.7-4.8-5.6a63.82,63.82,0,0,0-5.1-5.3c-1.7-1.7-3.5-3.4-5.3-5.1s-3.7-3.3-5.6-4.8-3.8-3.1-5.8-4.5-4-2.9-6-4.3-4.1-2.7-6.2-4-4.2-2.5-6.4-3.7-4.4-2.3-6.6-3.4-4.5-2.1-6.8-3.1-4.6-1.9-7-2.7-4.7-1.7-7.1-2.4-4.8-1.4-7.3-2.1-4.9-1.2-7.4-1.7-5-1-7.5-1.3-5.1-.7-7.7-1-5.2-.5-7.8-.6-5.2-.2-7.9-.2-5.3.1-7.9.2-5.2.3-7.8.6-5.1.6-7.7,1-5.1.8-7.5,1.3-5,1.1-7.4,1.7-4.9,1.3-7.3,2.1-4.8,1.5-7.1,2.4-4.7,1.8-7,2.7-4.6,2-6.8,3.1-4.4,2.2-6.6,3.4-4.3,2.4-6.4,3.7-4.2,2.6-6.2,4-4,2.8-6,4.3-3.9,3-5.8,4.5-3.7,3.2-5.6,4.8a63.82,63.82,0,0,0-5.3,5.1c-1.7,1.7-3.4,3.5-5.1,5.3s-3.3,3.7-4.8,5.6-3.1,3.8-4.5,5.8-2.9,4-4.3,6-2.7,4.1-4,6.2-2.5,4.2-3.7,6.4-2.3,4.4-3.4,6.6-2.1,4.5-3.1,6.8-1.9,4.6-2.7,7-1.7,4.7-2.4,7.1-1.4,4.8-2.1,7.3-1.2,4.9-1.7,7.4-1,5-1.3,7.5-.7,5.1-1,7.7-.5,5.2-.6,7.8-.2,5.2-.2,7.9.1,5.3.2,7.9.3,5.2.6,7.8.6,5.1,1,7.7.8,5.1,1.3,7.5,1.1,5,1.7,7.4,1.3,4.9,2.1,7.3,1.5,4.8,2.4,7.1,1.8,4.7,2.7,7,2,4.6,3.1,6.8,2.2,4.4,3.4,6.6,2.4,4.3,3.7,6.4,2.6,4.2,4,6.2,2.8,4,4.3,6,3,3.9,4.5,5.8,3.2,3.7,4.8,5.6,3.3,3.6,5.1,5.3,3.5,3.4,5.3,5.1,3.7,3.3,5.6,4.8,3.8,3.1,5.8,4.5,4,2.9,6,4.3,4.1,2.7,6.2,4,4.2,2.5,6.4,3.7,4.4,2.3,6.6,3.4,4.5,2.1,6.8,3.1,4.6,1.9,7,2.7,4.7,1.7,7.1,2.4,4.8,1.4,7.3,2.1,4.9,1.2,7.4,1.7,5,1,7.5,1.3,5.1.7,7.7,1,5.2.5,7.8.6,5.2.2,7.9.2H825" transform="translate(-1 -1.4)" style="fill: none;stroke: #172541;stroke-linecap: round;stroke-linejoin: round;stroke-width: 40px"/>
                    </svg>

                    
                    <h3 class="subtitle subtitle--md comorbidities__chart__title">Conditions commonly occurring with axSpA</h3>

                    <ul class="comorbidities__chart__list text--color--white">
                        <li class="comorbidities__chart__item">
                            <p>
                                <span class="comorbidities__chart__item__title"><?php echo $condition_1_title; ?></span>
                                <span class="comorbidities__chart__item__percent"><?php echo $condition_1_percents; ?>%</span>
                                <span class="comorbidities__chart__item__text"><?php echo $condition_1_text; ?></span>
                            </p>
                        </li>
                        <li class="comorbidities__chart__item">
                            <p>
                                <span class="comorbidities__chart__item__title"><?php echo $condition_2_title; ?></span>
                                <span class="comorbidities__chart__item__percent"><?php echo $condition_2_percents; ?>%</span>
                                <span class="comorbidities__chart__item__text"><?php echo $condition_2_text; ?></span>
                            </p>
                        </li>
                        <li class="comorbidities__chart__item">
                            <p>
                                <span class="comorbidities__chart__item__title"><?php echo $condition_3_title; ?></span>
                                <span class="comorbidities__chart__item__percent"><?php echo $condition_3_percents; ?>%</span>
                                <span class="comorbidities__chart__item__text"><?php echo $condition_3_text; ?></span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>  
        </div>
    </div>
</section>
<?php endif; ?>