<?php
/**
 * @package    menucards
 *
 * @author     Eroteida Sánchez García <esanchezg@aemet.es>
 * @copyright  © AEMET
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       www.aemet.es
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use AEMet\Module\Menucards\Site\Helper\MenucardsHelper;

$test  = MenucardsHelper::getText();

require ModuleHelper::getLayoutPath('mod_menucards', $params->get('layout', 'default'));
