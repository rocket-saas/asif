<?php 

$title = "The International Map of";
$titleAccent = "Axial Spondyloarthritis";
$label = "1. About Imas";
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
	    			<div class="text-block">
		    			<p><b>The International Map of Axial Sponyloarthritis (IMAS) is a survey of 2,846 people diagnosed with axial spondyloarthritis (as SpA) from 13 countries across Europe, assessing the impact and burden of axSpA from the patient’s perspective.</b></p>
                        <p>IMAS brings together patients, patient organisations, clinicians and researchers from around the world to address the questions that matter the most to patients.</p>
                        <p>By generating and disseminating evidence about how people with axial spondyloarthritis (axSpA) experience their disease physically, psychologically and socially. IMAS aims to raise the voice of axSpA community, ensuring patients around the world are empowered to live happy and well. </p>
		    		</div>
                    <div class="section__scroll">
		    			<a href="#imas_vision"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-arrow-down.svg" alt="#"></a>
		    		</div>
	    		</div>
	    		<!-- <div class="col-12 col-lg-3">
	    			<h3 class="section__title">1. About Imas</h3>
	    		</div> -->
	    	</div>
		</div>
	</section>