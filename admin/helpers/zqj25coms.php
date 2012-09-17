<?php
defined('_JEXEC') or die;

/**
 * Zqj25coms helper.
 */
class Zqj25comsHelper
{
	/**
	 * Configure the Linkbar.
	 * 
	 * @param string	The name of the active view.
	 */
	public static function addSubmenu($vName = 'zqj25coms')
	{
		JSubMenuHelper::addEntry(
			JText::_('COM_ZQJ25COMS_SUBMENU_ZQJ25COMS'),
			'index.php?option=com_zqj25coms&view=zqj25coms',
			$vName == 'zqj25coms'
			);
		JSubMenuHelper::addEntry(
			JText::_('COM_ZQJ25COMS_SUBMENU_CATEGORIES'),
			'index.php?option=com_categories&extension=com_zqj25coms',
			$vName == 'categories'
		);
		if ($vName=='categories') {
			JToolBarHelper::title(
				JText::sprintf('COM_CATEGORIES_CATEGORIES_TITLE',JText::_('COM_ZQJ25COMS')),
				'zqj25coms-categories'
			);
		}			
	}
	
	/**
	 * Gets a list of the actions that can be performed.
	 * 
	 * @param	int		The Category ID
	 * 
	 * @return	JObject	
	 */
	public static function getActions($categoryId = 0)
	{
		$user	= JFactory::getUser();
		$result	= new JObject;
		
			if (empty($categoryId)) {
			$assetName = 'com_zqj25coms';
			$level = 'component';
		} else {
			$assetName = 'com_zqj25coms.category.'.(int) $categoryId;
			$level = 'category';
		}

		$actions = JAccess::getActions('com_zqj25coms', $level);

		foreach ($actions as $action) {
			$result->set($action->name,	$user->authorise($action->name, $assetName));
		}
			
		return $result;
	}
}