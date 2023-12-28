<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Ttverein
 * @author     Jörg Vater <joerg.vater@ttc-woeschbach.de>
 * @copyright  2023 TTC Wöschbach
 * @license    GNU General Public License Version 2 oder später; siehe LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

use \Joomla\CMS\HTML\HTMLHelper;
use \Joomla\CMS\Factory;
use \Joomla\CMS\Uri\Uri;
use \Joomla\CMS\Router\Route;
use \Joomla\CMS\Language\Text;
use \Joomla\CMS\Session\Session;
use Joomla\Utilities\ArrayHelper;


?>

<div class="item_fields">

	<table class="table">
		

		<tr>
			<th><?php echo Text::_('COM_TTVEREIN_FORM_LBL_DUMMY_NAME'); ?></th>
			<td><?php echo $this->item->name; ?></td>
		</tr>

	</table>

</div>

