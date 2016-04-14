<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

//$wgModalCustomHtmlId = 'wgModalCustomHtmlId'.$module->id;

?>

<?php $wgModalCustomHtmlOpen = 'wgModalCustomHtmlOpen'.$module->id; ?>
<div class="remodal-bg">
	<button class="wg-modalcustomhtml-btn-cta <?php echo $stylemodal.' '.$buttonsize; ?>" data-remodal-target="<?php echo $wgModalCustomHtmlOpen; ?>">
		<?php
			if (empty($buttontext)){
				JText::_('MOD_WGMODALCUSTOMHTML_SITE_BUTTONTEXT');
			}else{
				switch($useicon){
					case 0 : echo $buttontext; break;
					case 1 : echo '<i class="fa fa-'.$classicon.'"></i> '.$buttontext; break;
					case 2 : echo $buttontext.' <i class="fa fa-'.$classicon.'"></i>'; break;
					case 3 : echo '<i class="fa fa-'.$classicon.'"></i>'; break;
				}
			}
		?>
	</button>
</div>

<div class="wg-modalcustomhtml-content remodal <?php echo $stylemodal; ?>" style="width: <?php echo $widthmodal; ?>" data-remodal-id="<?php echo $wgModalCustomHtmlOpen; ?>"  role="dialog">
	<div class="remodal-close" data-remodal-action="close"></div>
	<?php if ($showheader) : ?>
		<div class="wg-modalcustomhtml-header">
			<h3><?php echo $titlemodal; ?></h3>
			<p><?php echo $descriptionmodal; ?></p>
			<hr>
		</div>
	<?php endif; ?>
	<div class="custom <?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
		<?php echo $module->content;?>
	</div>
</div>
