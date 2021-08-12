<?php 

$title = get_sub_field('hero_title');
$titleAccent = get_sub_field('hero_title_accent');
$text = get_sub_field('hero_content');
$label = get_sub_field('section_label');
?>


<section id="hero-text" class="section hero-text">
		<div class="container">
	    	<div class="row">
			<?php if ($title || $titleAccent) : ?>
							
								<div class="axspa__title axspa__title--light accordion__title col-12">
									<h2><?php echo $title; ?>
										<?php if ($titleAccent) : ?>
											</br>
											<span style="margin-left: -10px;"><?php echo $titleAccent; ?>
										<?php endif;?>
									</h2>
									<div class="axspa__label"><?php echo $label;?></div>
								</div>
							
						<?php endif;?>
	    		<div class="col-12 col-lg-9">
					<?php if($text): ?>
						<div class="text-block">
							<?php echo $text; ?>
						</div>
					<?php endif; ?>
					<?php if(get_sub_field('hero_show_arrow')): ?>
						<div class="section__scroll">
							<a href="#imas_vision"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-arrow-down.svg" alt="#"></a>
						</div>
					<?php endif; ?>
	    		</div>
	    		<!-- <div class="col-12 col-lg-3">
	    			<h3 class="section__title">1. About Imas</h3>
	    		</div> -->
	    	</div>
		</div>
	</section>