<?php
$code = get_field('code');
$dateOfPrep = get_field('date_of_preparation');

if ($code || $dateOfPrep) : ?>
	<div class="published__date">
		<?php if ($code) : echo $code ; endif;
			if ($dateOfPrep) : ?> <span> <?php echo $dateOfPrep;?> </span> <?php endif;?>
	</div>
<?php endif;?>