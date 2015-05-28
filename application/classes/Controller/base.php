<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
	public $template = 'v_base';
	
	public function before()
	{
		parent::before();
		$this->template->block_center='';// для неизменности центра
		$this->template->title=('Главная страница сайта');
		$this->template->scripts=array(1=>'/media/js/jquery.js');
		$this->template->styles=array(1=>'/media/css/style.css',2=>'/media/bootstrap/css/bootstrap.min.css');
		if(Auth::instance()->logged_in())
		{
			$logged = VIEW::factory('templates/v_logged_in');
		}
		else
		{
			$logged = VIEW::factory('templates/v_logged_out');
		}
		$this->template->logged=$logged;
		

	}
		
	public function action_index()
	{
		
		$main = VIEW::factory('templates/v_index');
		$this->template->block_center=$main;
		
	}

}