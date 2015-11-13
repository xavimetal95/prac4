<?php
	/**
	*	Page : generates one web page
	*
	* @package lib
	* @subpackage constructs
	* @author Xavi
	*
	* */

	class Page 
	{
		private $header;
		private $menu;
		private $content;
		private $foot;

		public function __construct($title, $links, $logo,$content,$foot) 
		{
			$this->header = new Header($title, $logo);
			$this->menu = new Menu($links);
			$this->content = new Content($content);
			$this->foot = new Foot($foot);
		}

		public function show()
		{
			$this->header->show();
			$this->menu->show();
			$this->content->show();
			$this->foot->show();

		}
	}
?>