<?php
$description = get_field("description");
$introduction = get_field("introduction");
$form = get_field("formulaire");
?>

	<?php
	get_header();
	include("sections/hero.php");
	?>

	<main>
		<div class="form__container">
			<?php
			if (!empty($introduction)):
			?>
				<h3 class="form-title">
					<?php
					echo $introduction;
					?>
				</h3>
			<?php
			endif;


			echo $form;
			?>
		</div>
	</main>

	<?php
	get_footer();
	wp_footer();
	?>
</body>