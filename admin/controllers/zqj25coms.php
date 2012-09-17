<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.controlleradmin');

/**
 * List controller class.
 *
 * @package		Joomla.Administrator
 * @subpackage	com_zqj25coms
 * @since		1.6
 */
class Zqj25comsControllerZqj25coms extends JControllerAdmin
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function getModel($name = 'Zqj25com', $prefix = 'Zqj25comModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}

}