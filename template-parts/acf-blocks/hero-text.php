<?php 

$title = get_sub_field('hero_title');
$titleAccent = get_sub_field('hero_title_accent');
$text = get_sub_field('hero_content');
$label = get_sub_field('section_label');
$image = get_sub_field('image');
?>


<section id="hero-text" class="section hero-text">
		<div class="container">
	    	<div class="row">
			<?php if ($title || $titleAccent) : ?>
							
								<div class="axspa__title axspa__title--light col-12 appear fade-up d-1">
									<h2><?php echo $title; ?>
										<?php if ($titleAccent) : ?>
											</br>
											<span style="margin-left: -10px;"><?php echo $titleAccent; ?>
										<?php endif;?>
									</h2>
									<div class="axspa__label"><?php echo $label;?></div>
								</div>
							
						<?php endif;?>
	    		<div class="col-12 col-lg-6 col-md-7">
					<?php if($text): ?>
						<div class="text-block appear fade-up d-1">
							<?php echo $text; ?>
						</div>
					<?php endif; ?>
					<?php if(get_sub_field('hero_show_arrow')): ?>
						<div class="section__scroll appear fade-up d-1">
							<a href="#imas-vision"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-arrow-down.svg" alt="#"></a>
						</div>
					<?php endif; ?>
	    		</div>
				<?php if($image): ?>
				<div class="col-md-4 offset-lg-2 offset-md-1">
					<div class="hero-text__image appear fade-up d-1"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
				</div>
				<?php endif; ?>
	    		<!-- <div class="col-12 col-lg-3">
	    			<h3 class="section__title">1. About Imas</h3>
	    		</div> -->
	    	</div>
		</div>
	</section>