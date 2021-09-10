<?php 

$title = get_sub_field('title');
$titleAccent = get_sub_field('title_accent');
$label = get_sub_field('section_label');

$countries = get_sub_field('countries');

$bottom_logo = get_sub_field('bottom_logo');
$bottom_box_big_text = get_sub_field('bottom_box_big_text');
$bottom_box_text = get_sub_field('bottom_box_text');

?>


<section id="involved" class="section section--bg bg--blue involved">
    <div class="container">

        <div class="row involved__header">
            <?php if ($title || $titleAccent) : ?>
                    <div class="axspa__title axspa__title--light col-12 appear fade-up d-1">
                        <h2><?php echo $title; ?>
                            <?php if ($titleAccent) : ?>
                                <span><?php echo $titleAccent; ?>
                            <?php endif;?>
                        </h2>
                        <div class="axspa__label"><?php echo $label;?></div>
                    </div>
                <?php endif;?>
        </div>
        <div class="involved__map__dropdown appear fade-up d-1">
            <select name="" id="js-involved-dropdown" class="involved__map__dropdown__select js-involved-dropdown">
                <option value="">Select country</option>
                <?php if($countries['argentina_content']): ?>
                    <option value="argentina">Argentina</option>
                <?php endif; ?>
                <?php if($countries['austria_content']): ?>
                    <option value="austria">Austria</option>
                <?php endif; ?>
                <?php if($countries['belgium_content']): ?>
                    <option value="belgium">Belgium</option>
                <?php endif; ?>
                <?php if($countries['brazil_content']): ?>
                    <option value="brazil">Brazil</option>
                <?php endif; ?>
                <?php if($countries['canada_content']): ?>
                    <option value="canada">Canada</option>
                <?php endif; ?>
                <?php if($countries['colombia_content']): ?>
                    <option value="colombia">Colombia</option>
                <?php endif; ?>
                <?php if($countries['costa_rica_content']): ?>
                    <option value="costa-rica">Costa Rica</option>
                <?php endif; ?>
                <?php if($countries['china_content']): ?>
                    <option value="china">China</option>
                <?php endif; ?>
                <?php if($countries['france_content']): ?>
                    <option value="france">France</option>
                <?php endif; ?>
                <?php if($countries['germany_content']): ?>
                    <option value="germany">Germany</option>
                <?php endif; ?>
                <?php if($countries['india_content']): ?>
                    <option value="india">India</option>
                <?php endif; ?>
                <?php if($countries['italy_content']): ?>
                    <option value="lithuania">Italy</option>
                <?php endif; ?>
                <?php if($countries['lithuania_content']): ?>
                    <option value="lithuania">Lithuania</option>
                <?php endif; ?>
                <?php if($countries['mexico_content']): ?>
                    <option value="mexico">Mexico</option>
                <?php endif; ?>
                <?php if($countries['netherlands_content']): ?>
                    <option value="netherlands">Netherlands</option>
                <?php endif; ?>
                <?php if($countries['norway_content']): ?>
                    <option value="norway">Norway</option>
                <?php endif; ?>
                <?php if($countries['philippines_content']): ?>
                    <option value="philippines">Philippines</option>
                <?php endif; ?>
                <?php if($countries['russia_content']): ?>
                    <option value="russia">Russia</option>
                <?php endif; ?>
                <?php if($countries['slovenia_content']): ?>
                    <option value="slovenia">Slovenia</option>
                <?php endif; ?>
                <?php if($countries['switzerland_content']): ?>
                    <option value="switzerland">Switzerland</option>
                <?php endif; ?>
                <?php if($countries['south_korea_content']): ?>
                    <option value="south-korea">South Korea</option>
                <?php endif; ?>
                <?php if($countries['spain_content']): ?>
                    <option value="spain">Spain</option>
                <?php endif; ?>
                <?php if($countries['sweden_content']): ?>
                    <option value="sweden">Sweden</option>
                <?php endif; ?>
                <?php if($countries['south_africa_content']): ?>
                    <option value="africa">South Africa</option>
                <?php endif; ?>
                <?php if($countries['turkey_content']): ?>
                    <option value="turkey">Turkey</option>
                <?php endif; ?>
                <?php if($countries['taiwan_content']): ?>
                    <option value="taiwan">Taiwan</option>
                <?php endif; ?>
                <?php if($countries['united_states_content']): ?>
                    <option value="us">United States</option>
                <?php endif; ?>
                <?php if($countries['united_kingdom_content']): ?>
                    <option value="uk">United Kingdom</option>
                <?php endif; ?>

            </select>
        </div>

        <div class="involved__map appear fade-up d-1">
            <img class="involved__map__bg" src="<?php echo get_template_directory_uri();?>/images/maps/map-involved.png" alt="#">
            <div class="involved__map__svg"><?php echo get_inline_svg('images/maps/map-involved.svg');?></div>
            <ul class="involved__map__points">
                <?php if($countries['united_states_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--us" data-country="us"></li>
                <?php endif; ?>
                <?php if($countries['brazil_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--brazil" data-country="brazil"></li>
                <?php endif; ?>
                <?php if($countries['canada_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--canada" data-country="canada"></li>
                <?php endif; ?>
                <?php if($countries['spain_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--spain" data-country="spain"></li>
                <?php endif; ?>
                <?php if($countries['united_kingdom_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--uk" data-country="uk"></li>
                <?php endif; ?>
                <?php if($countries['turkey_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--turkey" data-country="turkey"></li>
                <?php endif; ?>
                <?php if($countries['sweden_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--sweden" data-country="sweden"></li>
                <?php endif; ?>
                <?php if($countries['russia_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--russia" data-country="russia"></li>
                <?php endif; ?>
                <?php if($countries['china_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--china" data-country="china"></li>
                <?php endif; ?>
                <?php if($countries['south_africa_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--africa" data-country="africa"></li>
                <?php endif; ?>
                <?php if($countries['taiwan_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--taiwan" data-country="taiwan"></li>
                <?php endif; ?>
                <?php if($countries['belgium_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--belgium" data-country="belgium"></li>
                <?php endif; ?>
                <?php if($countries['colombia_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--colombia" data-country="colombia"></li>
                <?php endif; ?>
                <?php if($countries['france_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--france" data-country="france"></li>
                <?php endif; ?>
                <?php if($countries['india_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--india" data-country="india"></li>
                <?php endif; ?>
                <?php if($countries['italy_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--italy" data-country="italy"></li>
                <?php endif; ?>
                <?php if($countries['lithuania_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--lithuania" data-country="lithuania"></li>
                <?php endif; ?>
                <?php if($countries['norway_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--norway" data-country="norway"></li>
                <?php endif; ?>
                <?php if($countries['philippines_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--philippines" data-country="philippines"></li>
                <?php endif; ?>
                <?php if($countries['slovenia_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--slovenia" data-country="slovenia"></li>
                <?php endif; ?>
                <?php if($countries['germany_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--germany" data-country="germany"></li>
                <?php endif; ?>
                <?php if($countries['switzerland_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--switzerland" data-country="switzerland"></li>
                <?php endif; ?>
                <?php if($countries['austria_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--austria" data-country="austria"></li>
                <?php endif; ?>
                <?php if($countries['netherlands_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--netherlands" data-country="netherlands"></li>
                <?php endif; ?>
                <?php if($countries['south_korea_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--south-korea" data-country="south-korea"></li>
                <?php endif; ?>
                <?php if($countries['mexico_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--mexico" data-country="mexico"></li>
                <?php endif; ?>
                <?php if($countries['argentina_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--argentina" data-country="argentina"></li>
                <?php endif; ?>
                <?php if($countries['costa_rica_content']): ?>
                    <li class="involved__map__points__item involved__map__points__item--costa-rica" data-country="costa-rica"></li>
                <?php endif; ?>
            </ul>
            <ul class="involved__list">
                <?php if($countries['united_states_content']): ?>
                    <li class="involved__item" data-country="us">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['united_states_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['brazil_content']): ?>
                    <li class="involved__item" data-country="brazil">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['brazil_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['canada_content']): ?>
                    <li class="involved__item" data-country="canada">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['canada_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['spain_content']): ?>
                    <li class="involved__item" data-country="spain">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['spain_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['united_kingdom_content']): ?>
                    <li class="involved__item" data-country="uk">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['united_kingdom_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['turkey_content']): ?>
                    <li class="involved__item" data-country="turkey">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['turkey_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['sweden_content']): ?>
                    <li class="involved__item" data-country="sweden">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['sweden_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['russia_content']): ?>
                    <li class="involved__item" data-country="russia">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['russia_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['china_content']): ?>
                    <li class="involved__item" data-country="china">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['china_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['south_africa_content']): ?>
                    <li class="involved__item" data-country="africa">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['south_africa_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['taiwan_content']): ?>
                    <li class="involved__item" data-country="taiwan">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['taiwan_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['belgium_content']): ?>
                    <li class="involved__item" data-country="belgium">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['belgium_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['colombia_content']): ?>
                    <li class="involved__item" data-country="colombia">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['colombia_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['france_content']): ?>
                    <li class="involved__item" data-country="france">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['france_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['india_content']): ?>
                    <li class="involved__item" data-country="india">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['india_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['italy_content']): ?>
                    <li class="involved__item" data-country="italy">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['italy_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['lithuania_content']): ?>
                    <li class="involved__item" data-country="lithuania">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['lithuania_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['norway_content']): ?>
                    <li class="involved__item" data-country="norway">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['norway_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['philippines_content']): ?>
                    <li class="involved__item" data-country="philippines">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['philippines_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['slovenia_content']): ?>
                    <li class="involved__item" data-country="slovenia">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['slovenia_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['germany_content']): ?>
                    <li class="involved__item" data-country="germany">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['germany_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['switzerland_content']): ?>
                    <li class="involved__item" data-country="switzerland">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['switzerland_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['austria_content']): ?>
                    <li class="involved__item" data-country="austria">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['austria_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['netherlands_content']): ?>
                    <li class="involved__item" data-country="netherlands">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['netherlands_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['south_korea_content']): ?>
                    <li class="involved__item" data-country="south-korea">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['south_korea_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['mexico_content']): ?>
                    <li class="involved__item" data-country="mexico">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['mexico_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['argentina_content']): ?>
                    <li class="involved__item" data-country="argentina">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['argentina_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['costa_rica_content']): ?>
                    <li class="involved__item" data-country="costa-rica">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['costa_rica_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="row involved__footer appear fade-up d-1">
            <?php if($bottom_logo): ?>
                <div class="col-12 col-lg-4 offset-lg-4">
                    <img class="involved__footer__logo" src="<?php echo $bottom_logo['url']; ?>" alt="#">
                </div>
            <?php endif; ?>

            <?php if($bottom_box_big_text || $bottom_box_text): ?>
                <div class="col-12 col-lg-10 offset-lg-1 appear fade-up d-1">
                    <div class="involved__footer__results text--center">
                        <h4 class="h1"> <?php echo $bottom_box_big_text; ?> <span class="h4"><?php echo $bottom_box_text; ?></span></h4>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>