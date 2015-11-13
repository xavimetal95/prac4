<?php
	/**
	*	Header : generates the page header
	*
	* @package lib
	* @subpackage constructs
	* @author Xavi
	*
	* */

	class Header 
	{
		private $title;
		private $logo;

		public function __construct($title,$logo) 
		{
			$this->title = $title;	
			$this->logo = $logo;
		}

		public function show() 
		{
			echo '<header>';
			echo '<h1>'.$this->title.'</h1>';
			echo '<img src="'.$this->logo.'"width="200px">';
			echo '</header>';
		}
	}
?>