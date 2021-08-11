<?php

$title = get_sub_field('partners_title');
?>

<section id="partnersList" class="partnersList">
    <div class="container">
        <div class="row">
            <div class="axspa__title partnersList__title axspa__title col-12">
                <h2><?php echo $title; ?></h2>
            </div>
            <?php

            if( have_rows('partners_list') ): ?>
                
                <?php while( have_rows('partners_list') ) : the_row();

                    $image = get_sub_field('partners_image');
                    $title = get_sub_field('partners_content_title');
                    $content = get_sub_field('partners_content');
                    $link = get_sub_field('partners_link');
                    $showLink = get_sub_field('show_link');
                    $showContent = get_sub_field('show_content');
                ?>

                <div class="col-sm-6 col-lg-3 partnersList__item">
                    <?php if( !empty( $image ) ): ?>
                        <div class="partnersList__imgWrapper">
                            <img class="partnersList__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                    <?php if ($showContent) : ?>
                        <?php if ($title) : ?>
                            <h3 class="partnersList__itemTitle"><?php echo $title;?></h3>
                        <?php endif;?>
                        <?php if ($content) : ?>
                            <div class="partnersList__content"><?php echo $content;?></div>
                        <?php endif;?>
                    <?php endif;?>
                    <?php if ($showLink) : ?>
                        <?php if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];

                            if (!$link['title']) : $link_title = "More information"; endif;

                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="partnersList__link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    <?php endif;?>
                </div>
                <?php endwhile;

            endif; ?>
        </div>
    </div>
</section>