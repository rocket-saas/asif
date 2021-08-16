<?php

$title =  get_sub_field('treatment_title');
$titleAccent = get_sub_field('treatment_title_accent');
$label = get_sub_field('treatment_label');
$content1 = get_sub_field('content_1');
$content2 = get_sub_field('content_2');
$contentAccent = get_sub_field('content_accent');
?>


<section id="treatmentGoals" class="treatmentGoals">
    <div class="container">
        <div class="row followCta--row">
            <?php if ($title || $titleAccent) : ?>
                <div class="axspa__title axspa__title--dark col-12 appear fade-up d-1">
                    <h2>
                        <?php if ($titleAccent) : ?>
                            <span><?php echo $titleAccent; ?></span>
                        <?php endif;?>
                        <?php echo $title; ?>
                    </h2>
                    <div class="axspa__label"><?php echo $label;?></div>
                </div>
            <?php endif;?>
            <?php if ($content1 || $content2 || $contentAccent) : ?>
            <div class="treatmentGoals__contentWrapper col-lg-10 appear fade-up d-1">
                <?php if ($content1) : ?>
                    <div class="treatmentGoals__content treatmentGoals__content--1">
                        <?php echo $content1; ?>
                    </div>
                <?php endif;?>

                <?php if( have_rows('lists_repeater') ): ?>
                    <ul class="row treatmentGoals__list appear fade-up d-1">
                        <?php while ( have_rows('lists_repeater') ) : the_row();
                            $listItem = get_sub_field('list');

                            if ($listItem) : ?>
                                <li class="treatmentGoals__listItem col-md-6">
                                    <?php echo $listItem;?>
                                </li>
                            <?php endif;?>

                        <?php endwhile;?>
                    </ul>
                <?php endif;?>

                <?php if ($content2) : ?>
                    <div class="treatmentGoals__content treatmentGoals__content--2 appear fade-up d-1">
                        <?php echo $content2; ?>
                    </div>
                <?php endif;?>

                <?php if ($contentAccent) : ?>
                    <div class="treatmentGoals__content treatmentGoals__content--accent appear fade-up d-1">
                        <?php echo $contentAccent; ?>
                    </div>
                <?php endif;?>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>