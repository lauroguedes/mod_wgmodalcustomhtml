<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// insere a classe de ajuda (métodos específicos de tratamento)
require_once( dirname(__FILE__) . '/helper.php' );

// Parâmetros do módulo
$buttontext = $params->get('buttontext');
$stylemodal = $params->get('stylemodal');
$buttonsize = $params->get('buttonsize');
$showheader = $params->get('showheader');
$titlemodal = $params->get('titlemodal');
$descriptionmodal = $params->get('descriptionmodal');

$widthmodal = modWgModalCustomHtmlHelper::processWidth($params->get('widthmodal'));


if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');
	$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_wgmodalcustomhtml.content');
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// Declarando dependências
modWgModalCustomHtmlHelper::pullDependencies();

require JModuleHelper::getLayoutPath('mod_wgmodalcustomhtml', $params->get('layout', 'default'));
