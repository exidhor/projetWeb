<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="row">
    <table style="margin-left: auto; margin-right: auto; margin-top: 30px;">
        <caption style="margin-bottom: 20px;">Table des produits
            <!--<a href="<?php echo base_url();?>index.php/Produit_c/creerProduit/">Add a product</a>-->
        </caption>
        <thead>
        <tr><th>#</th><th>Type</th><th>Nom</th><th>Prix</th><th>Image</th><!--<th>Operation</th>-->
        </tr>
        </thead>
        <tbody>
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
                    <!--</td>
                    <?php //if(isset($_SESSION['droit']) and $_SESSION['droit']=='DROITadmin'): ?>
                    <td>
                        <a href="<?php echo base_url();?>index.php/Produit_c/modifierProduit/<?= $value->id; ?>">Modify - </a>
                        <a href="<?php echo site_url("Produit_c/supprimerProduit")."/".$value->id; ?>">Delete - </a>
                        <a href="<?php echo site_url("Produit_c/supprimerProduit")."/".$value->id; ?>">Add to cart</a>
                    </td>
                    <?php //endif;?>
                </tr> -->
            <?php endforeach; ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>
<p class="footer" style="text-align: center;">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
