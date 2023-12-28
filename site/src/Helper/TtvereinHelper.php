<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Ttverein
 * @author     Jörg Vater <joerg.vater@ttc-woeschbach.de>
 * @copyright  2024 TTC Wöschbach
 * @license    GNU General Public License Version 2 oder später; siehe LICENSE.txt
 */

namespace Ttverein\Component\Ttverein\Site\Helper;

defined('_JEXEC') or die;

use \Joomla\CMS\Factory;
use \Joomla\CMS\MVC\Model\BaseDatabaseModel;

/**
 * Class TtvereinFrontendHelper
 *
 * @since  1.0.0
 */
class TtvereinHelper
{
	

	/**
	 * Gets the files attached to an item
	 *
	 * @param   int     $pk     The item's id
	 *
	 * @param   string  $table  The table's name
	 *
	 * @param   string  $field  The field's name
	 *
	 * @return  array  The files
	 */
	public static function getFiles($pk, $table, $field)
	{
		$db = Factory::getContainer()->get('DatabaseDriver');
		$query = $db->getQuery(true);

		$query
			->select($field)
			->from($table)
			->where('id = ' . (int) $pk);

		$db->setQuery($query);

		return explode(',', $db->loadResult());
	}

	/**
	 * Gets the edit permission for an user
	 *
	 * @param   mixed  $item  The item
	 *
	 * @return  bool
	 */
	public static function canUserEdit($item)
	{
		$permission = false;
		$user       = Factory::getApplication()->getIdentity();

		if ($user->authorise('core.edit', 'com_ttverein') || (isset($item->created_by) && $user->authorise('core.edit.own', 'com_ttverein') && $item->created_by == $user->id) || $user->authorise('core.create', 'com_ttverein'))
		{
			$permission = true;
		}

		return $permission;
	}
}
