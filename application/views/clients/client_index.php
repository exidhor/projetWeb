<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $titre?></title>
	<link rel="stylesheet" href="<?= base_url(); ?>monCSS/mesStyles1.css" >
</head>
<body>
	<div id="container">
		<div class="row">
			<table style="margin-left: auto; margin-right: auto; margin-top: 30px;">
				<caption style="margin-bottom: 20px;">Table des produits
					<a href="<?php echo base_url();?>index.php/Produit_c/creerProduit/">Ajouter un produit</a>
				</caption>
				<thead>
				<tr><th>#</th><th>Type</th><th>Nom</th><th>Prix</th><th>Photo</th><th>Operation</th>
				</tr>
				</thead>
				<tbody>
				<?php  // print_r($produit);?>
				<?php if( $produit != NULL): ?>
					<?php foreach ($produit as $value): ?>
						<tr><td>
								<?php echo $value->id; ?>
							</td><td>
								<?= $value->libelle; ?>
							</td><td>
								<?= $value->nom; ?>
							</td><td>
								<?= $value->prix; ?>
							</td><td>
								<img style="width:40px;height:40px" src="<?php echo base_url();?>images/<?= $value->photo; ?>" alt="image de <?= $value->libelle; ?>" >
							</td><td>
                                <a href = "#">Ajouter au panier</a>
                            </td>
							<?php //endif;?>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
				<tbody>
			</table>
		</div>
		<p class="footer" style="text-align: center;">DUT Belfort-Montbélaird <strong>{elapsed_time}</strong> seconds</p>
	</div>
</body>
</html>