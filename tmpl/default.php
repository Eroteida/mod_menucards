<?php
/**
 * @package    menucards
 *
 * @author     Eroteida Sánchez García <esanchezg@aemet.es>
 * @copyright  © AEMET
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       www.aemet.es
 .btn-outline-primary {
    @include button-outline-variant($mynewcolor, $backcolor, lighten($mynewcolor,5%), $mynewcolor);
}
 */

defined('_JEXEC') or die;

$cards = $params->get('cards'); //field name
$ncolslg = $params->get('ncolslg'); //field name
$ncolsmd = $params->get('ncolsmd'); //field name
$ncolssm = $params->get('ncolssm'); //field name
$tdisposicion = $params->get('tdisposicion'); //field name
$backcolor = $params->get('backgroundcolor'); //field name
?>



<div class="container">
<?php if ($tdisposicion == "tgrid") { ?>
	<div class="row row-cols-1 row-cols-sm-<?= $ncolssm; ?> row-cols-md-<?= $ncolsmd; ?> row-cols-lg-<?= $ncolslg; ?> g-4"> 
		<?php foreach ($cards as $card) : ?>
		<div class="col">		
			<div class="card h-100 menucard">
				<img class="img-fluid" src="<?= $card->imagen; ?>" /> 
				<div class="card-body text-center"> 
					<h3 class="card-title"><?= $card->title; ?></h3> 
					<p class="card-text"><?= $card->contenido; ?></p> 
				</div> 
				<div class="card-footer text-center border-white">
					<a class="btn btn-outline-primary rounded " style="background-color:<?= $backcolor; ?>" href="<?= $card->url_item; ?>">Ver</a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div> 
<?php } else { ?>
	
	<?php foreach ($cards as $card) : ?>
	<div class="card mb-3 menucard">
		<div class="row g-0">
			<div class="col-md-4">
				<img class="img-fluid" src="<?= $card->imagen; ?>" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h3 class="card-title"><?= $card->title; ?></h3>
					<p class="card-text"><?= $card->contenido; ?></p>
				</div>
				<div class="card-footer text-center border-white">
					<a class="btn btn-outline-primary rounded" href="<?= $card->url_item; ?>">Ver</a>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
	
<?php } ?>
</div>	
