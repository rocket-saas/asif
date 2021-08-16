<?php 

$enable_nav = get_field('enable_navigation');
?>

<?php if ($enable_nav) : ?>
	<!-- list-group-item class needed for Bootstrap scroll spy working -->
	<?php if( have_rows('navigation_list') ): ?>
		<div id="axspa-nav" class="list-group axspa-nav axspa-nav--horizontal">
			<div class="container">
				<div class="row">

					<?php while( have_rows('navigation_list') ): the_row(); 

						$link = get_sub_field('navigation_item');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="list-group-item axspa-nav__item" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>

					<?php endwhile; ?>

				</div>
			</div>
		</div>
	<?php endif; ?>
<?php endif;?>


