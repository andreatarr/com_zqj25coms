<?php
defined('_JEXEC') or die;

/**
 * Main Controller
 * 
 * @package		Joomla.Administrator
 * @subpackage	com_zqj25coms
 * @since		1.5
 */
class Zqj25comsController extends JControllerLegacy
{
	/**
	 * @var		string	The default view.
	 * @since	1.6
	 */
	protected $default_view = 'zqj25coms';
	/**
	 * Method to display a view.
	 * 
	 * @param	boolean $cachable	If true, the view output will be cached
	 * @param	array	$urlparams	An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 * 
	 * @return	JController	This object to support chaining
	 * @since 1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		// Loads this class, matching class name to the filename
		// could use require_once, but this is quicker
		JLoader::register('Zqj25comsHelper', JPATH_COMPONENT.'/helpers/zqj25coms.php');
		// Load the submenu using a method from this class.
		Zqj25comsHelper::addSubmenu(JRequest::getCmd('view', 'zqj25coms'));
		
		$view	= JRequest::getCmd('view', 'zqj25coms');
		$layout	= JRequest::getCmd('layout', 'default');
		$id		= JRequest::getInt('id');
		
		// Check for edit form.
		if ($view == 'zqj25com' && $layout == 'edit' && !$this->checkEditId('com_zqj25coms.edit.zqj25com', $id)) {
			// Somehow the person just went to the form - we don't allow that.
			$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
			$this->setMessage($this->getError(), 'error');
			$this->setRedirect(JRoute::_('index.php?option=com_zqj25coms&view=zqj25coms', false));
			
			return false;
		}
		
		parent::display();
		
		return $this;
	}
}