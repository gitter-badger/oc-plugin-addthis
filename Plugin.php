<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\AddThis
 */

namespace AxC\AddThis;

/**
 * AddThis Plugin Information File
 */
class Plugin extends \System\Classes\PluginBase
{
	/**
	 * Plugin dependencies.
	 * @var array
	 */
	public $require = ['AxC.Framework'];

	/**
	 * Returns information about this plugin.
	 * @return array
	 */
	public function pluginDetails()
	{
		return [
			'name'				=> 'AddThis',
			'description'	=> trans('axc.addthis::lang.plugin.description'),
			'author'			=> 'Alex Carrega',
			'icon'				=> 'icon-plus-square'
		];
	}

	/**
	 * Register the components.
	 * @return array
	 */
	public function registerComponents()
	{
		return ['AxC\AddThis\Components\AddThis' => 'addThis'];
	}

/**
 * Register the information about the plugin settings.
 * @return array.
 */
	public function registerSettings()
	{
		return [
			'settings' => [
				'label'				=> trans('axc.addthis::lang.settings.label'),
				'icon'				=> 'icon-plus-square',
				'description'	=> trans('axc.addthis::lang.settings.description'),
				'class'				=> 'AxC\AddThis\Models\Settings',
				'category'		=> \AxC\Framework\Models\Settings::CATEGORY_AXC,
				'order'				=> 3
			]
		];
	}
}
