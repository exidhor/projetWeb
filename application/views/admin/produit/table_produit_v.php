<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="row">
<table>
<caption>Recapitulatifs des produits</caption>
<thead>
<tr><th>#</th><th>Type</th><th>Name</th><th>Price</th><th>Photo</th>

<th>opération</th>
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
		<?= $value->photo; ?>
		</td><td>
		<img style="width:40px;height:40px" src="<?php echo base_url();?>images/<?= $value->photo; ?>" alt="image de <?= $value->libelle; ?>" >
		</td>
		<?php //if(isset($_SESSION['droit']) and $_SESSION['droit']=='DROITadmin'): ?>
		<td>
			<a href="<?php echo base_url();?>index.php/Produit_c/modifierProduit/<?= $value->id; ?>">Modify</a>
			<a href="<?php echo site_url("Produit_c/supprimerProduit")."/".$value->id; ?>">Delete</a>
		</td>
		<?php //endif;?>
		</tr>
	<?php endforeach; ?>
<?php endif; ?>
<tbody>
</table>
</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
