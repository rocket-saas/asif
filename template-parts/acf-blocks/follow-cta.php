<?php

$title =  get_sub_field('follow_title');
$titleAccent = get_sub_field('follow_title_accent');
$label = get_sub_field('follow_label');
$content = get_sub_field('follow_content');
$quote = get_sub_field('follow_blockquote');
$quoteAuthor = get_sub_field('follow_blockquote_author');
?>


<section id="followCta" class="followCta">
    <div class="container">
        <div class="row followCta--row">
            <?php if ($title || $titleAccent) : ?>
                <div class="axspa__title axspa__title--light col-12">
                    <h2><?php echo $title; ?>
                        <?php if ($titleAccent) : ?>
                            <span><?php echo $titleAccent; ?>
                        <?php endif;?>
                    </h2>
                    <div class="axspa__label"><?php echo $label;?></div>
                </div>
            <?php endif;?>
            <?php if ($content) : ?>
                <div class="followCta__contentWrapper col-12 col-lg-7">
                    <div class="followCta__content">
                        <?php echo $content; ?>
                    </div>
                    <?php if( have_rows('media_list','option') ): ?>
                        <h4 class="socialList__title"><?php printf( _e('Follow us on', 'twentysixteen'))?></h4>
                        <ul class="socialList row">
                            <?php while ( have_rows('media_list','option') ) : the_row();
                                $icon = get_sub_field('media_icon');
                                $url = get_sub_field('media_url');
                            ?>
                                <li class="socialList__item col-auto">
                                    <a href="<?php echo $url;?>" target="_blank" class="socialList__link">
                                        <?php echo file_get_contents(wp_get_original_image_path($icon['id'])); ?>
                                    </a>
                                </li>
                            <?php endwhile;?>
                        </ul>
                    <?php endif;?>
                </div>
            <?php endif;?>
            <?php if ($quote) : ?>
                <div class="followCta__quoteWrapper col-12 col-lg-5">
                    <img src="<?php echo get_template_directory_uri() . '/images/imas/dot-pattern.svg';?>" alt="dotted-pattern" class="followCta__quoteBg">
                    <div class="followCta__quote">
                        <?php echo $quote; ?>
                        <?php if ($quoteAuthor) : ?>
                            <span class="followCta__quoteAuthor"><?php echo $quoteAuthor;?></span>
                        <?php endif;?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>