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
<?php if($main_circle_total_num): ?>
<section id="diagnosis" class="section diagnosis bg--blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div class="diagnosis__stat text--color--white">

                    <?php if($top_text): ?>
                        <div class="diagnosis__stat__content appear fade-up d-1">
                            <div class="dot_bg" style="background-image: url(<?php echo get_template_directory_uri();?>/images/dot-pattern-blue.svg);"></div>
                            <p class="content-block diagnosis__stat__text text--18">
                                <?php echo $top_text; ?>
                            </p>
                        </div>
                    <?php endif; ?>

                    <div class="diagnosis__stat__bubbles__wrapper appear fade-up d-1">
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

                        
                                </div>
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
                                                        <p class="text--center diagnosis__stat__bubble__item__txt">
                                                            <span class="diagnosis__stat__bubble__item__title text--color--primary font-w-700 text--24"><?php echo $percent; ?><span class="diagnosis__stat__bubble__item__title__percent">%</span></span>
                                                            <span class="diagnosis__stat__bubble__item__subtext text--14"><?php echo $subtext; ?></span>
                                                            <span class="diagnosis__stat__bubble__item__text text--16"><?php echo $text; ?></span>
                                                        </p>
                                                    </div>
                                                </li>
                                            <?php 
                                                $loopCounter++;
                                            endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
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
                                            <div class="diagnosis__stat__bubble__line"><?php echo get_inline_svg('images/axspa-numbers/diagnosis-bubble-'.$loopCounter.'.svg'); ?></div>
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
                    <div class="diagnosis__map appear fade-up">

                        <?php if($map_title): ?>
                            <h3 class="subtitle subtitle--md text--color--white"><?php echo $map_title; ?></h3>
                        <?php endif; ?>

                        <div class="diagnosis__map__block">
                            <div class="diagnosis__map__wrapper">
                                <?php echo get_inline_svg('images/axspa-numbers/diagnosis-map.svg'); ?>
                                <?php if($countries): ?>
                                    <ul class="diagnosis__map__points">
                                        <?php if($countries['sweden_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--sweden" data-country="sweden">
                                                <svg width="257" height="146" viewBox="0 0 257 146" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 49.9994L2 136.5C2.00001 140.918 5.58173 144.5 10 144.5L247 144.5C251.418 144.5 255 140.918 255 136.5L255 4.19981e-06" stroke="white" stroke-width="3"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['norway_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--norway" data-country="norway">
                                                <svg width="147" height="45" viewBox="0 0 147 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M146.5 43.5H9C4.58173 43.5 1 39.9183 1 35.5V0.5" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['germany_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--germany" data-country="germany">
                                                <svg width="152" height="207" viewBox="0 0 152 207" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 0V198C1 202.418 4.58172 206 9 206H152" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['belgium_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--belgium" data-country="belgium">
                                                <svg width="95" height="215" viewBox="0 0 95 215" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 0V206C1 210.418 4.58172 214 9 214H95" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['switzerland_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--switzerland" data-country="switzerland">
                                                <svg width="133" height="272" viewBox="0 0 133 272" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 0V263C1 267.418 4.58172 271 9 271H133" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['slovenia_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--slovenia" data-country="slovenia">
                                                <svg width="207" height="285" viewBox="0 0 207 285" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 0V276C1 280.418 4.58172 284 9 284H207" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['spain_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--spain" data-country="spain">
                                                <svg width="11" height="366" viewBox="0 0 11 366" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.5 0V315C9.5 317.209 7.70914 319 5.5 319V319C3.29086 319 1.5 320.791 1.5 323V366" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['united_kingdom_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--uk" data-country="uk">
                                                <svg width="3" height="175" viewBox="0 0 3 175" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 175V0" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['netherlands_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--netherlands" data-country="netherlands">
                                                <svg width="99" height="181" viewBox="0 0 99 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M99 180H11C5.47715 180 1 175.523 1 170V0" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['austria_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--austria" data-country="austria">
                                                <svg width="210" height="256" viewBox="0 0 210 256" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M210 255H11C5.47716 255 1 250.523 1 245V0" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['italy_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--italy" data-country="italy">
                                                <svg width="174" height="346" viewBox="0 0 174 346" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M174 345H11C5.47715 345 1 340.523 1 335V0" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['france_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--france" data-country="france">
                                                <svg width="59" height="285" viewBox="0 0 59 285" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M59 283.5H11.5C5.97715 283.5 1.5 279.023 1.5 273.5V0.5" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countries['russia_title']): ?>
                                            <li class="diagnosis__map__point diagnosis__map__point--russia" data-country="russia">
                                                <svg width="477" height="181" viewBox="0 0 477 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M477 180H11C5.47717 180 1 175.523 1 170V0" stroke="white" stroke-width="2"/>
                                                </svg>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <?php if($countries): ?>
                                <ul class="diagnosis__map__list">

                                    <?php if($countries['sweden_title']): ?>
                                        <li class="diagnosis__map__item" data-country="sweden">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['sweden_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['sweden_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['sweden_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['norway_title']): ?>
                                        <li class="diagnosis__map__item" data-country="norway">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['norway_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['norway_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['norway_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['germany_title']): ?>
                                        <li class="diagnosis__map__item" data-country="germany">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['germany_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['germany_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['germany_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['belgium_title']): ?>
                                        <li class="diagnosis__map__item" data-country="belgium">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['belgium_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['belgium_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['belgium_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['switzerland_title']): ?>
                                        <li class="diagnosis__map__item" data-country="switzerland">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['switzerland_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['switzerland_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['switzerland_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['slovenia_title']): ?>
                                        <li class="diagnosis__map__item" data-country="slovenia">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['slovenia_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['slovenia_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['slovenia_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['spain_title']): ?>
                                        <li class="diagnosis__map__item" data-country="spain">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['spain_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['spain_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['spain_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['united_kingdom_title']): ?>
                                        <li class="diagnosis__map__item" data-country="uk">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['united_kingdom_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['united_kingdom_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['united_kingdom_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['netherlands_title']): ?>
                                        <li class="diagnosis__map__item" data-country="netherlands">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['netherlands_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['netherlands_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['netherlands_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['austria_title']): ?>
                                        <li class="diagnosis__map__item" data-country="austria">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['austria_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['austria_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['austria_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['italy_title']): ?>
                                        <li class="diagnosis__map__item" data-country="italy">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['italy_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['italy_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['italy_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['france_title']): ?>
                                        <li class="diagnosis__map__item" data-country="france">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['france_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['france_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['france_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($countries['russia_title']): ?>
                                        <li class="diagnosis__map__item" data-country="russia">
                                            <div class="text--center diagnosis__map__item__inner">
                                                <p class="text--18 text--color--secondary diagnosis__map__item__text"><?php echo $countries['russia_title']; ?> <br/><span class="text--32 font-w-700"><?php echo $countries['russia_text']; ?></span></p>
                                                <span class="text--12 diagnosis__map__item__notice"><?php echo $countries['russia_subtext']; ?></span>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="diagnosis__prof appear fade-up">
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
                                    <li class="stat-bar__item" data-percent="<?php echo $percent; ?>">
                                        <span class="stat-bar__item__title"><?php echo $title; ?> - <?php echo $percent; ?>%</span>
                                        <div class="stat-bar__item__bar">
                                            <div class="stat-bar__item__bar__inner"></div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                    </div>
                    <div class="diagnosis__delay text--color--white">
                        <?php if($diagnostic_delay_title): ?>
                            <h3 class="diagnosis__delay__title subtitle subtitle--md text--color--white appear fade-up"><?php echo $diagnostic_delay_title; ?></h3>
                        <?php endif; ?>
                        <div class="diagnosis__delay__content ">
                            <div class="diagnosis__delay__women text--center appear fade-up">
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
                                <?php 
                                $loopCounter = 0;
                                foreach($diagnostic_delay_items as $item): 
                                    $age = $item['age'];
                                    $data = $item['data'];
                                    ?>
                                    <li class="diagnosis__delay__stat__item appear from-bottom">
                                        <div class="diagnosis__delay__stat__item__inner from-bottom__inner d-<?php echo $loopCounter; ?>">
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
                                <?php 
                                    $loopCounter++;
                                endforeach; ?>
                               
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>