<section id="accordion--downloads" class="accordion accordion--downloads">
    <div class="container">
        <div class="row">
            <div class="axspa__title accordion__title axspa__title col-12">
                <h2>Download IMAS <?php the_field('section_publications_title'); ?>
                    <span>publications<?php the_field('section_publications_subheading'); ?></span></h2>
                <div class="accordion__label">5. IMAS publications<?php the_field('small_publications_text'); ?></div>
            </div>
            <div class="col-12 accordion__mainContent">
                <div class="imas_accordion">
                    <div id="accordion">
                        <?php if( have_rows('publication_accordion') ):
								$count = 1;
                                while ( have_rows('publication_accordion') ) : the_row();
                                    
                                    $icon = get_sub_field('tab_image');

									if($count == 1) {
										$show_class = 'show';
										$ariaexpanded = 'true';
									}
									else {
										$show_class = '';
										$ariaexpanded = 'false';
									}
								?>
                        <div class="card">
                            <div class="card-header" id="title_<?php echo $count; ?>">
                                <a class="card-header__inner" role="button" data-toggle="collapse" href="#collapse_<?php echo $count; ?>"
                                    aria-expanded="false" aria-controls="collapse_<?php echo $count; ?>">
                                    <?php echo file_get_contents(wp_get_original_image_path($icon['id'])); ?>
                                    <div class="accordion__tabTitle"><?php the_sub_field('tab_titel'); ?>Diagnostic delay</div>
                                </a>
                            </div>
                            <div id="collapse_<?php echo $count; ?>" class="collapse " data-parent="#accordion"
                                aria-labelledby="title_<?php echo $count; ?>" style="">
                                <div class="accordion__contentWrapper">
                                    <ul class="accordion__pdfList">
                                        <?php if( have_rows('tab_content') ):
												while ( have_rows('tab_content') ) : the_row();	?>
                                        <li class="accordion__pdf">
                                            <div class="accordion__pdfTitle"><?php the_sub_field('content'); ?></div>
                                            <a href="<?php the_sub_field('pdf'); ?>" download>
                                                <img class="accordion__icon" src="<?php echo get_template_directory_uri() . "/images/icons/accordion_pdf_download.svg";?>" alt="download icon">
                                            </a>
                                        </li>
                                        <?php endwhile; endif;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php $count++; endwhile; endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

