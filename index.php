<?php
	require('lib/Page.php');
	require('lib/Header.php');
	require('lib/Menu.php');
	require('lib/Content.php');
	require('lib/Foot.php');

	define('LAYOUT',
		'<!DOCTYPE html>
		<html>
		<head>
			<style type="text/css"');

	$links = array(
		'Inicio'=>'/Pt4',
		'Nosotros'=>'');

	$content='';

	$foot = array(
		'Footer 1'=>'/',
		'Footer 2'=>'');

	define ('LOGO','img/kalista.jpg');

	$page = new Page('Pag. de prova', $links, LOGO, $content, $foot);
	$page->show();
?>