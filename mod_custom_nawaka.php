<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom_nawaka
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');
	$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_custom_nawaka.content');
}
$title = $module->title;
$color = $params->get('color');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

// Add CSS
$document = JFactory::getDocument();
$document->addStyleSheet(JUri::base().'modules/mod_custom_nawaka/tmpl/style.css');

require JModuleHelper::getLayoutPath('mod_custom_nawaka', $params->get('layout', 'default'));
