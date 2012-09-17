<?php
defined('_JEXEC') or die;

// Component helper
jimport('joomla.application.component.helper');
jimport('joomla.application.categories');

/**
 * Zqj25coms Component Category Tree
 * 
 * @static
 * @package		Joomla.Site
 * @subpackage	com_zqj25coms
 * @since		1.6
 */
class Zqj25comsCategories	extends JCategories
{
	public function __construct($options = array()) 
	{
		$options['table'] = '#_zqj25_zqj25coms';
		$options['extension'] = 'com_zqj25coms';
		$options['statefield'] = 'published';
		parent::__construct($options);
	}
}