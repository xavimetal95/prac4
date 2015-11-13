<?php
	/**
	*	Menu : generates the page menu
	*
	* @package lib
	* @subpackage constructs
	* @author Xavi
	*
	* */

	class Menu 
	{
		private $links = array();

		public function __construct($links) 
		{
			$this->links=$links;
		}
		
		public function show() 
		{
			echo '<ul>';
			foreach ($this->links as $key=>$value) 
			{
				echo '<li><a href="'.$value.'">'.$key.'</li>';
			}
			echo '</ul>';
		}
	}
?>