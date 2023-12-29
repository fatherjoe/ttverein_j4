<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Ttverein
 * @author     Jörg Vater <joerg.vater@ttc-woeschbach.de>
 * @copyright  2023 TTC Wöschbach
 * @license    GNU General Public License Version 2 oder später; siehe LICENSE.txt
 */

namespace Ttverein\Component\Ttverein\Site\Controller;

\defined('_JEXEC') or die;

use Joomla\CMS\Application\SiteApplication;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Multilanguage;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Controller\FormController;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;
use Joomla\Utilities\ArrayHelper;

/**
 * Dummies class.
 *
 * @since  1.0.0
 */
class DummiesController extends FormController
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional
	 * @param   array   $config  Configuration array for model. Optional
	 *
	 * @return  object	The model
	 *
	 * @since   1.0.0
	 */
	public function getModel($name = 'Dummies', $prefix = 'Site', $config = array())
	{
		return parent::getModel($name, $prefix, array('ignore_request' => true));
	}
}
