<?php if( have_rows('iconList') ): ?>
    <section id="imas-vision" class="section bg--grey icon-lists">
		<div class="container appear fade-up d-1">
			<div class="row">
                <div class="dot_bg" style="background-image: url(<?php echo get_template_directory_uri();?>/images/dot-pattern.svg);"></div>
				
				<?php while( have_rows('iconList') ): the_row(); 
					$vision_icon = get_sub_field('iconList_icon');
					$vision_icon_title = get_sub_field('iconList_label');
					$vision_icon_list = get_sub_field('iconList_content');
					?>
					<div class="col-12 col-lg-6 icon-lists__col">
						
						<?php if( !empty( $vision_icon ) || $vision_icon_title): ?>
							<div class="icon-block">
								<?php if( !empty( $vision_icon )) : ?>
									<div class="icon-block__icon">
										<img src="<?php echo esc_url($vision_icon['url']); ?>" alt="<?php echo esc_attr($vision_icon['alt']); ?>">
									</div>
								<?php endif;?>

								<?php if ($vision_icon_title) : ?>
									<h4 class="h4 icon-block__title"><?php echo $vision_icon_title;?></h4>
								<?php endif;?>
							</div>
						<?php endif; ?>
                            
                        <?php if($vision_icon_list) : ?>
							<div class="text-block">
								<?php echo $vision_icon_list;?>
							</div>
						<?php endif;?>
					</div>
				<?php endwhile; ?>

			</div>
		</div>
	</section>
<?php endif; ?>