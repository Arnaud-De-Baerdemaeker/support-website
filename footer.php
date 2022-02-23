	<?php
	$footer = get_field("pied_de_page");
	?>

	<footer id="footer" class="footer">
		<div class="footer__container">
			<?php
			if ($footer["logo"]):
			?>
				<div class="footer__logo">
					<img src="<?php echo esc_url($footer["logo"]["url"]); ?>" alt="<?php echo esc_attr($footer["logo"]["alt"]); ?>" class="footer__image" />
				</div>
			<?php
			endif;
			?>

			<div class="footer__informations">
				<?php
				if ($footer["adresse"]):
				?>
					<section class="footer__address">
						<h4 class="footer__title">Adresse</h4>
						<ul class="footer__entry-list">
							<li class="footer__entry-item"><?php echo $footer["adresse"]["rue_et_numero"]; ?></li>
							<li class="footer__entry-item"><?php echo $footer["adresse"]["code_postal_et_ville"]; ?></li>
							<li class="footer__entry-item"><?php echo $footer["adresse"]["pays"]; ?></li>
						</ul>
					</section>
				<?php
				endif;
				?>

				<?php
				if ($footer["contact"]):
				?>
					<section class="footer__contact">
						<h4 class="footer__title">Contact</h4>
						<ul class="footer__entry-list">
							<li class="footer__entry-item"><?php echo $footer["contact"]["telephone"]; ?></li>
							<li class="footer__entry-item"><?php echo $footer["contact"]["e-mail"]; ?></li>
						</ul>
					</section>
				<?php
				endif;
				?>

				<?php
				if ($footer["reseaux_sociaux"]):
				?>
					<section class="footer__social">
						<h4 class="footer__title">Réseaux sociaux</h4>
						<ul class="footer__network-list">
							<?php
							for ($i = 0, $j = 1; $i < count($footer["reseaux_sociaux"]); $i++, $j++):
								if (!empty($footer["reseaux_sociaux"]["reseau_".$j]["lien"]) || !empty($footer["reseaux_sociaux"]["reseau_".$j]["icone"])):
								?>
									<li class="footer__network-item">
										<a href="<?php echo $footer["reseaux_sociaux"]["reseau_".$j]["lien"]["url"]; ?>" target="_blank" class="footer__network-url">
											<img src="<?php echo $footer["reseaux_sociaux"]["reseau_".$j]["icone"]; ?>" alt="<?php echo $footer["reseaux_sociaux"]["reseau_".$j]["icone"]["alt"]; ?>" class="footer__network-icon" />
										</a>
									</li>
								<?php
								endif;
							endfor;
							?>
						</ul>
					</section>
				<?php
				endif;
				?>
			</div>
		</div>
		<p class="footer__copyright">2019 - <?php echo date("Y"); ?> | <?php echo $footer["copyright"]; ?></p>
	</footer>
</html>