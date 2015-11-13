<?php
	/**
	*	Foot : generates the page footer
	*
	* @package lib
	* @subpackage constructs
	* @author Xavi
	*
	* */

	class Foot 
	{
		private $foot;

		public function __construct($foot) 
		{
			$this->foot = $foot;	
		}
		
		public function show() 
		{
			echo '<ul>';
				echo '<li>Foot 1</li><li>Foot 2</li>';
			echo '</ul>';
		}
	}
?>