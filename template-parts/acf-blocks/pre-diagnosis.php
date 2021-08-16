<?php 

$timeline_box_text = get_sub_field('timeline_box_text');
$timeline_notice = get_sub_field('timeline_notice');
$timeline_selected_period_text = get_sub_field('timeline_selected_period_text');

$bar_charts_title = get_sub_field('bar_charts_title');
$bar_charts = get_sub_field('bar_charts');
$notice_text = get_sub_field('notice_text');
?>

<section id="pre-diagnosis" class="section pre-diagnosis bg--grey axspa-nav--vertical">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php get_template_part( 'template-parts/page-nav/vertical-nav');?>
            </div>
            <div class="col-lg-9">
                <div class="pre-diagnosis__timeline appear fade-up d-1">
                    <div class="pre-diagnosis__timeline__inner">
                        <div class="pre-diagnosis__timeline__top">

                            <?php if($timeline_selected_period_text): ?>
                                <p class="pre-diagnosis__timeline__top__text text--16"><?php echo $timeline_selected_period_text;  ?></p>
                            <?php endif; ?>

                            <?php if($timeline_notice): ?>
                                <p class="pre-diagnosis__timeline__top__notice text--12"><?php echo $timeline_notice; ?></p>
                            <?php endif; ?>

                        </div>
                        <img class="pre-diagnosis__timeline__img" src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/pre-diagnosis.svg" alt="#">
                        <div class="pre-diagnosis__timeline__bottom">
                            <span class="pre-diagnosis__timeline__bottom__start subtitle subtitle--lg">0 Years</span>

                            <p class="pre-diagnosis__timeline__bottom__content text--center text--16 text--color--white"><?php echo $timeline_box_text; ?></p>

                            <span class="pre-diagnosis__timeline__bottom__end subtitle subtitle--lg">70 Years</span>
                        </div>
                    </div>
                </div>
                <div class="pre-diagnosis__stat appear fade-up d-1">

                    <?php if($bar_charts_title): ?>
                        <h3 class="subtitle subtitle--lg text--color--secondary pre-diagnosis__stat__title">Healthcare professionals visited before diagnosis:</h3>
                    <?php endif; ?>

                    <?php if($bar_charts): ?>
                        <ul class="pre-diagnosis__stat__list">
                            <?php foreach($bar_charts as $item): 
                                $title = $item['title'];
                                $percent = $item['percents'];
                                if($percent):
                                ?>
                                    <li class="pre-diagnosis__stat__item">
                                        <div class="pre-diagnosis__stat__item__inner">
                                            <h4 class="text--16 font-w-700 pre-diagnosis__stat__item__title"><?php echo $title; ?></h4>
                                            <div class="pre-diagnosis__stat__item__bar" data-percent="<?php echo $percent; ?>">
                                                <span class="pre-diagnosis__stat__item__bar__txt" style="bottom: <?php echo $percent; ?>%"><span class="counter" data-counter="<?php echo $percent; ?>"><?php echo $percent; ?></span>%</span>
                                                <div class="pre-diagnosis__stat__item__bar__inner" style="height: <?php echo $percent; ?>%"></div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    
                    <?php if($notice_text): ?>
                        <div class="pre-diagnosis__stat__alert">
                            <img class="pre-diagnosis__stat__alert__top" src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/pre-diagnosis-alert-top.svg" alt="#">
                            <div class="pre-diagnosis__stat__alert__inner bg--blue">
                                <img class="pre-diagnosis__stat__alert__arrow" src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/pre-diagnosis-alert-arrow.svg" alt="#">
                                <p class="text--16 text--color--white"><?php echo $notice_text; ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>