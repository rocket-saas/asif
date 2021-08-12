<?php 

$title = get_sub_field('title');
$icon_blocks = get_sub_field('icon_blocks');
$data_table = get_sub_field('data_table');

?>

<section class="section bg--grey comorbidities">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                
                <?php if($title): ?>
                    <h2 class="subtitle subtitle--md comorbidities__title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if($icon_blocks): ?>
                    <ul class="comorbidities__icon-blocks">
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
                    <div class="comorbidities__stat-table">
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
                    <img class="comorbidities__chart__img" src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/comorbidities.svg" alt="#">
                </div>
            </div>  
        </div>
    </div>
</section>
