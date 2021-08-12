<?php 

$top_text = get_sub_field('top_text');
$main_circle_text = get_sub_field('main_circle_text');
$main_circle_total_num = get_sub_field('main_circle_total_num');
$circles = get_sub_field('circles');

$map_title = get_sub_field('map_title');
$countries = get_sub_field('countries');

$statistics_title = get_sub_field('statistics_title');
$statistics_block_from = get_sub_field('statistics_block_from');
$statistics_block_to = get_sub_field('statistics_block_to');
$statistics_block_text = get_sub_field('statistics_block_text');
$statistics_charts = get_sub_field('statistics_charts');

$diagnostic_delay_title = get_sub_field('diagnostic_delay_title');
$women_delay_title = get_sub_field('women_delay_title');
$women_delay_subtitle = get_sub_field('women_delay_subtitle');
$women_delay_text = get_sub_field('women_delay_text');
$diagnostic_delay_items = get_sub_field('diagnostic_delay_items');



?>

<section id="diagnosis" class="section diagnosis bg--blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div class="diagnosis__stat text--color--white">

                    <?php if($top_text): ?>
                        <div class="diagnosis__stat__content">
                            <div class="dot_bg" style="background-image: url(<?php echo get_template_directory_uri();?>/images/dot-pattern-blue.svg);"></div>
                            <p class="content-block diagnosis__stat__text text--18">
                                <?php echo $top_text; ?>
                            </p>
                        </div>
                    <?php endif; ?>

                    <div class="diagnosis__stat__bubbles__wrapper">
                        <div class="diagnosis__stat__bubbles">
                            <div class="diagnosis__stat__bubbles__main">
                                <div class="diagnosis__stat__bubbles__main__inner">
                                    <img class="diagnosis__stat__bubbles__main__img" src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/diagnosis-bubble-main.svg" alt="#">
                                    <p class="diagnosis__stat__bubbles__main__text text--18">
                                        <?php echo $main_circle_text; ?>
                                    </p>

                                    <?php if($main_circle_total_num): ?>
                                        <span class="diagnosis__stat__bubbles__main__notice text--color--white text--12"><?php echo $main_circle_total_num; ?></span>
                                    <?php endif; ?>

                                    <?php if($circles): ?>
                                        <ul class="diagnosis__stat__bubbles__main__list">
                                            <?php 
                                            $loopCounter = 1;
                                            foreach($circles as $item): 
                                                $percent = $item['percent'];
                                                $subtext = $item['subtext'];
                                                $text = $item['text'];
                                                ?>
                                                <li class="diagnosis__stat__bubble__content diagnosis__stat__bubble-<?php echo $loopCounter; ?>__content" data-index="<?php echo $loopCounter; ?>">
                                                    <div class="diagnosis__stat__bubble__content__inner">
                                                        <?php echo $percent; ?>%
                                                        <?php echo $subtext; ?>
                                                        <?php echo $text; ?>
                                                    </div>
                                                </li>
                                            <?php 
                                                $loopCounter++;
                                            endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if($circles): ?>
                                <ul class="diagnosis__stat__bubbles__list">
                                    <?php 
                                    $loopCounter = 1;
                                    foreach($circles as $item): 
                                        $percent = $item['percent'];
                                        $subtext = $item['subtext'];
                                        $text = $item['text'];
                                        ?>
                                        <li class="diagnosis__stat__bubble diagnosis__stat__bubble-<?php echo $loopCounter; ?>" data-index="<?php echo $loopCounter; ?>">
                                            <div class="diagnosis__stat__bubble__inner">
                                                <span class="diagnosis__stat__bubble__text"><?php echo $percent; ?>%</span>
                                            </div>
                                            <img class="diagnosis__stat__bubble__line" src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/diagnosis-bubble-1.svg" alt="#">
                                        </li>
                                        <?php 
                                        $loopCounter++;
                                    endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="diagnosis__content">
                    <div class="diagnosis__map">

                        <?php if($map_title): ?>
                            <h3 class="subtitle subtitle--md text--color--white"><?php echo $map_title; ?></h3>
                        <?php endif; ?>

                        <div class="diagnosis__map__block">
                            <div class="diagnosis__map__wrapper">
                                <img class="diagnosis__map__img" src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/diagnosis-map.svg" alt="#">
                            </div>
                            <?php if($countries): ?>
                                <ul class="diagnosis__map__list">

                                    <?php if($countries['sweden_title']): ?>
                                        <li class="diagnosis__map__item">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['sweden_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['sweden_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['sweden_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['norway_title']): ?>
                                        <li class="diagnosis__map__item">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['norway_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['norway_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['norway_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['germany_title']): ?>
                                        <li class="diagnosis__map__item">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['germany_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['germany_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['germany_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['netherlands_title']): ?>
                                        <li class="diagnosis__map__item">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['netherlands_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['netherlands_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['netherlands_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['switzerland_title']): ?>
                                        <li class="diagnosis__map__item">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['switzerland_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['switzerland_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['switzerland_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['slovenia_title']): ?>
                                        <li class="diagnosis__map__item">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['slovenia_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['slovenia_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['slovenia_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['spain_title']): ?>
                                        <li class="diagnosis__map__item">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['spain_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['spain_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['spain_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="diagnosis__prof">
                        <?php if($statistics_title): ?>
                            <h3 class="subtitle subtitle--md text--color--white"><?php echo $statistics_title; ?></h3>
                        <?php endif; ?>
                        <div class="diagnosis__prof__stat">
                            <p class="diagnosis__prof__stat__txt text--color--white">
                                <span class="diagnosis__prof__stat__txt__big text--32"><?php echo $statistics_block_from; ?><span class="font-w-400 text--18">/<?php echo $statistics_block_to; ?></span></span>
                                <span class=""><?php echo $statistics_block_text; ?></span>
                            </p>
                        </div>

                        <?php if($statistics_charts): ?>
                            <ul class="text--color--white stat-bar">
                                <?php foreach($statistics_charts as $item): 
                                    $percent = $item['percents'];
                                    $title = $item['title'];
                                    ?>
                                    <li class="stat-bar__item">
                                        <span class="stat-bar__item__title"><?php echo $title; ?> - <?php echo $percent; ?>%</span>
                                        <div class="stat-bar__item__bar">
                                            <div class="stat-bar__item__bar__inner" style="width: <?php echo $percent; ?>%; "></div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                    </div>
                    <div class="diagnosis__delay text--color--white">
                        <?php if($diagnostic_delay_title): ?>
                            <h3 class="diagnosis__delay__title subtitle subtitle--md text--color--white"><?php echo $diagnostic_delay_title; ?></h3>
                        <?php endif; ?>
                        <div class="diagnosis__delay__content">
                            <div class="diagnosis__delay__women text--center">
                                <img class="diagnosis__delay__women__img" src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/diagnosis-women.svg" alt="#">
                                <div>
                                    <h4 class="text--16 diagnosis__delay__women__title"><span class="text--32 font-w-700"><?php echo $women_delay_title; ?></span> <?php echo $women_delay_subtitle; ?></h4>
                                    <?php if($women_delay_text): ?>
                                        <p class="text--12 diagnosis__delay__women__text"><?php echo $women_delay_text; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php if($diagnostic_delay_items): ?>
                            <ul class="diagnosis__delay__stat">
                                <?php foreach($diagnostic_delay_items as $item): 
                                    $age = $item['age'];
                                    $data = $item['data'];
                                    ?>
                                    <li class="diagnosis__delay__stat__item">
                                        <div class="diagnosis__delay__stat__item__inner">
                                            <div class="diagnosis__delay__stat__item__body">
                                                <img src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/diagnosis-delay-body.svg" alt="#">
                                            </div>
                                            <h4 class="subtitle diagnosis__delay__stat__item__age"><?php echo $age; ?></h4>
                                            <div class="diagnosis__delay__stat__item__head">
                                                <img class="diagnosis__delay__stat__item__circle" src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/diagnosis-delay-circle.svg" alt="#">
                                                <p class="text--center text--16 font-w-700"><?php echo $data; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                               
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>