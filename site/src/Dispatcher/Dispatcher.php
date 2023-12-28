<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Ttverein
 * @author     Jörg Vater <joerg.vater@ttc-woeschbach.de>
 * @copyright  2024 TTC Wöschbach
 * @license    GNU General Public License Version 2 oder später; siehe LICENSE.txt
 */

namespace Ttverein\Component\Ttverein\Site\Dispatcher;

defined('JPATH_PLATFORM') or die;

use Joomla\CMS\Dispatcher\ComponentDispatcher;
use Joomla\CMS\Language\Text;

/**
 * ComponentDispatcher class for Com_Ttverein
 *
 * @since  1.0.0
 */
class Dispatcher extends ComponentDispatcher
{
	/**
	 * Dispatch a controller task. Redirecting the user if appropriate.
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	public function dispatch()
	{
		parent::dispatch();
	}
}
