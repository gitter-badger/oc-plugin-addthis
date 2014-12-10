<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\AddThis\Models
 */

namespace AxC\AddThis\Models;

/**
 * AddThis Settings model
 */
class Settings extends \AxC\Framework\Models\Settings
{
	/**
	 * A unique code.
	 * @param string
	 */
	public $settingsCode = 'axc_addthis_settings';
}