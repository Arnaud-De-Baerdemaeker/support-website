<?php
$description = get_field("description");
$form = get_field("formulaire");
?>

	<?php
	get_header();
	include("sections/hero.php");
	?>

	<main>
		<?php
		echo $form;
		?>
	</main>

	<?php
	get_footer();
	wp_footer();
	?>
</body>