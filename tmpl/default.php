<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom_nawaka
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


<div class="custom-nawaka <?php echo $moduleclass_sfx; ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage'); ?>)"<?php endif; ?> >
	<div class="custom-nawaka-title" style="background-color: <?PHP echo $color; ?>">
		<?PHP echo $title; ?>
	</div>
	<div class="custom-nawaka-content">
		<?php echo $module->content; ?>
	</div>
</div>
