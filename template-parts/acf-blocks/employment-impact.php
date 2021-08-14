<?php

/* Numbers column fields */
$columnList = get_sub_field('columnList');

/* Fact fields fields */
$facttIcon = get_sub_field('facttIcon');
$factNumber = get_sub_field('factNumber');
$factContent = get_sub_field('factContent');

/* Issues list fields */
$issuestitle = get_sub_field('issuestitle');
$issuesList = get_sub_field('issuesList');

/*Disclaimer fields */
$impactDisclaimer = get_sub_field('impactDisclaimer');

?>

<?php if ($columnList || $issuesList) : ?>
<div class="emplymentImpact" id="emplymentImpact">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
                <div class="row emplymentImpact--row">
                    <?php if( have_rows('columnList') ): ?>
                        <div class="col-lg-4 emplymentImpact__numbersWrapper">
                            <ul class="remplymentImpact__numbersList">
                            <?php while( have_rows('columnList') ): the_row(); 
                                $impactNumber = get_sub_field('impactNumber');
                                $impactLabel = get_sub_field('impactLabel');
                                ?>
                                <?php if ($impactNumber && $impactLabel) : ?>
                                    <li class="emplymentImpact__numbersItem">
                                        <div class="emplymentImpact__number">
                                            <strong class="emplymentImpact__numberValue counter" data-counter="<?php echo $impactNumber;?>"></strong>
                                            <span>%</span>
                                        </div>
                                        <p class="emplymentImpact__label"><?php echo $impactLabel;?></p>
                                    </li>
                                <?php endif;?>
                            <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="col-lg-8">
                        <?php if ($facttIcon || $factNumber || $factContent) : ?>
                            <div class="emplymentImpact__fact">
                                <?php if( !empty( $facttIcon ) ): ?>
                                    <div class="emplymentImpact__factIcon">
                                        <?php echo file_get_contents(esc_url(wp_get_original_image_path($facttIcon['id']))); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="emplymentImpact__factMain">
                                    <?php if ($factNumber) : ?>
                                        <div class="emplymentImpact__factNumber">
                                            <strong class="emplymentImpact__factValue"><?php echo $factNumber;?></strong>
                                            <span>%</span>
                                        </div>
                                    <?php endif;?>
                                    <?php if ($factContent) : ?>
                                        <div class="emplymentImpact__factContent">
                                            <?php echo $factContent; ?>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        <?php endif;?>
                        <?php if( have_rows('issuesList') ): ?>
                            <div class="emplymentImpact__issuesWrapper">
                                <div class="triangle">
                                    <div class="arrow-top"></div>
                                </div>
                                <ul class="emplymentImpact__issuesList">
                                    <?php while( have_rows('issuesList') ): the_row(); 
                                        $impactNumber = get_sub_field('issuesNumber');
                                        $impactLabel = get_sub_field('issuesLabel');
                                        ?>
                                        <?php if ($impactNumber && $impactLabel) : ?>
                                            <li class="emplymentImpact__issuesItem">
                                                <p class="emplymentImpact__issuesLabel">
                                                    <?php echo $impactLabel;?>
                                                </p>
                                                <strong class="emplymentImpact__issuesValue">
                                                <?php echo $impactNumber;?><span>%</span>
                                                </strong>
                                            </li>
                                        <?php endif;?>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if($impactDisclaimer) : ?>
                        <div class="col-12 emplymentImpact__disclaimer">
                            <?php echo $impactDisclaimer;?>
                        </div>
                    <?php endif;?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>