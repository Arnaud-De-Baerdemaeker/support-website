<?php
$hero = get_field("hero");
?>

<div
	id="hero"
	<?php
	if (!empty($hero["arriere-plan"])):
	?>
		style="background-image: url('<?php echo $hero["arriere-plan"]; ?>');"
	<?php
	endif;
	?>
	class="hero"
>
	<?php
	echo $hero["parallax"];
	?>
	<section class="introduction <?php if ($hero["effet_degrade"]) {echo "gradient";} ?>">
		<div class="introduction__container">
			<?php
			if (!empty($hero["logo"])):
			?>
				<a href="#top" class="introduction__logo-link">
					<h1 class="introduction__logo-container">
						<img src="<?php echo $hero["logo"]["url"]; ?>" alt="Wooops Agency" class="introduction__logo-image" />
					</h1>
				</a>
			<?php
			endif;
			?>

			<div class="introduction__description">
				<?php
				if (!empty($hero["description"])):
					echo $hero["description"];
				endif;
				?>
			</div>
		</div>
	</section>
</div>