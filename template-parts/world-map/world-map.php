<?php 
$countries = get_field('countries'); 
$international = false;
if($countries):
    foreach($countries as $country):
        if($country['country'] == 'international') $international = true;
    endforeach;
endif;
?>
<div id="world-map" class="world-map">
    <div class="container">
        <div class="row world-map__heading">
            <div class="col-sm-12 col-md-8 col-lg-9">
                <h3><?php the_field( "map_headline" );?></h3>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 world-map__heading__countries">
                <?php the_field('map_side_content');?>
            </div>
        </div>    
    </div>
    <div class="world-map__container">
        <div class="world-map__container__inner">
            <img class="world-map__img__circle" src="<?php echo get_template_directory_uri(); ?>/template-parts/world-map/map-background.png" alt="">
            <?php echo file_get_contents(esc_url(get_template_directory().'/template-parts/world-map/map.svg'));?>
            <?php if($international): ?>
                <div class="world-map__international">
                    <h3 class="world-map__international__title"><?php _e('International Members'); ?></h3>
                    <img class="world-map__international__img" src="<?php echo get_template_directory_uri().'/template-parts/world-map/international.png'; ?>" alt="International">
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php 
    if($countries):
    ?>
        <ul class="world-map__list">
            <?php foreach($countries as $country): 
                $country_name = $country['country'];
                $country_members = $country['members'];
                ?>
                <li class="world-map__popup" data-country="<?php echo $country_name; ?>">
                    <ul class="world-map__popup__members">
                        <?php foreach($country_members as $member): 
                            $image = $member['image'];
                            $title = $member['title'];
                            $text = $member['text'];
                            $link = $member['link'];
                            ?>
                            <li class="world-map__popup__member">
                                <div class="world-map__popup__member__inner">

                                    <?php if(!empty($image)): ?>
                                        <div class="world-map__popup__member__image">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </div>
                                    <?php endif; ?>

                                    <div class="world-map__popup__member__content">
            
                                        <?php if($title): ?>
                                            <h4 class="world-map__popup__member__content__title"><?php echo $title; ?></h4>
                                        <?php endif; ?>

                                        <?php if($text): ?>
                                            <p class="world-map__popup__member__content__text"><?php echo $text; ?></p>
                                        <?php endif; ?>

                                        <?php if($link):
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                            <div style="">
                                                <a class="button-arrow world-map__popup__member__link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                                    <span class="button-arrow__text"><?php echo esc_html( $link_title ); ?></span>
                                                    <img class="button-arrow__icon" src="<?php echo get_template_directory_uri().'/images/icons/icon-arrow-right-blue.svg'; ?>" alt="arrow">
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <div class="container world-map__accordion__wrapper">
        <?php the_field('map_side_content');?>
        <!-- /.row -->
        <div class="world-map__accordion mt-3">
		    <?php if( have_rows('map_countries')): ?>
		        <?php $count= 0;?>
                <?php while ( have_rows('map_countries') ) : the_row();
                        ?>
                        <div class="world-map__accordion__item">
                            <div class="world-map__accordion__item__header">
                                <h4><?php the_sub_field('country_title'); ?></h4>
                            </div>
                            <div class="world-map__accordion__item__content" style="display:none;">
                                <p><?php the_sub_field('map_country_content'); ?></p>
                            </div>
                        </div>
                <?php $count++; endwhile; ?>
			<?php endif;?> 
          </div>
          <!-- /.row -->
    </div>
    <div class="wi-full membership-page content-offset page-text text-size text-title  world-map-homepage">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2>Member Organisations in ASIF</h2>
            </div>
            <!-- /.col-sm-12 -->

            <div class="col-sm-12">
              <div class="membership_area">
                <div class="w100p">
                  <h3>Europe</h3>
                  <ul class="flag-list">
				  <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',               
                'terms'         => 'EUROPE',
               'field' => 'name',             
                'operator'      => 'IN' 
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w100p -->
                <div class="w20p">
                  <h3>Asia</h3>
                  <ul class="flag-list">
                   <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',               
                'terms'         => 'ASIA',
               'field' => 'name',             
                'operator'      => 'IN' 
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w20p -->
                <div class="w20p">
                  <h3>America</h3>
                  <ul class="flag-list">
                      <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',               
                'terms'         => 'AMERICA',
               'field' => 'name',             
                'operator'      => 'IN' 
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w20p -->
                <div class="w20p">
                  <h3>Australia</h3>
                  <ul class="flag-list">
                   <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',               
                'terms'         => 'AUSTRALIA',
               'field' => 'name',             
                'operator'      => 'IN' 
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w20p -->
                <div class="w20p">
                  <h3>Africa</h3>
                  <ul class="flag-list">
                   <?php 
				  $args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
              array(
                'taxonomy'      => 'country_for',
				'terms'         => 'AFRICA',
				'field' => 'name',             
                'operator'      => 'IN' 
               
              )));				
			$wp_query = new WP_Query($args);
			if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
                    <?php endwhile; ?>
		<?php 		
		endif;
		wp_reset_query(); 
		?>
                  </ul>
                </div>
                <!-- /.w20p -->
				  
				  <div class="w20p">
                  <h3>INTERNATIONAL</h3>
                  <ul class="flag-list">
                   <?php 
				  	$args = array( 'post_type' => 'country','posts_per_page'=>-1,'orderby'=> 'title','order' => 'ASC', 'tax_query'  => array(
					  array(
						'taxonomy'      => 'country_for',
						'terms'         => 'INTERNATIONAL',
						'field' => 'name',             
						'operator'      => 'IN' 

					 )));				
					$wp_query = new WP_Query($args);
						if ( $wp_query->have_posts() ) :
						while ( $wp_query->have_posts() ) : $wp_query->the_post();?> 		
								<li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('country_flag');?>" alt="<?php the_title();?>"> <?php the_title();?></a></li>
								<?php endwhile; ?>
						<?php 		
						endif;
						wp_reset_query(); 
					?>
                  </ul>
                </div>
                <!-- /.w20p -->
              </div>
            
            </div>
            <!-- /.col-sm-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-offset text-size text-title -->
</div>