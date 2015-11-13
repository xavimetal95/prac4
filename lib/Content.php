<?php
	/**
	*	Content : generates the page content
	*
	* @package lib
	* @subpackage constructs
	* @author Xavi
	*
	* */

	class Content 
	{
		private $content;

		public function __construct($content) 
		{
			$this->content = $content;
		}	

		public function show() 
		{
			echo '<p>Lorem Ipsum és un text de farciment usat per la indústria de la tipografia i la impremta. 
			Lorem Ipsum ha estat el text estàndard de la indústria des de lany 1500, quan un impressor desconegut va 
			fer servir una galerada de text i la va mesclar per crear un llibre de mostres tipogràfiques. No només ha 
			sobreviscut cinc segles, sinó que ha fet el salt cap a la creació de tipus de lletra electrònics, romanent 
			essencialment sense canvis. Es va popularitzar lany 1960 amb el llançament de fulls Letraset que contenien 
			passatges de Lorem Ipsum, i més recentment amb programari dautoedició com Aldus Pagemaker que inclou versions 
			Lorem Ipsum.</p>';
		}
	}
?>