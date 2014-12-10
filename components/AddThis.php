<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\AddThis\Components
 */

namespace AxC\AddThis\Components;

/**
 * AddThis component class.
 */
class AddThis extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.addthis::lang.component.name'),
			'description'	=> trans('axc.addthis::lang.component.description')
		];
	}

	/**
	 * The CMS controller executes this method every time when the page or layout loads.
	 * Set the AddThis PubId.
	 * @return null
	 */
	public function onRun()
	{
		$this->page['pubid'] = \AxC\AddThis\Models\Settings::get('pubid');
	}
}