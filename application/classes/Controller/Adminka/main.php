<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminka_Main extends Controller_Base {
	public function before()
	{
		parent::before();
		if(!Auth::instance() -> logged_in('admin'))
		{
			$this->redirect('/auth/login');
		}		
	}
	public function action_index()
	{
		$content = VIEW::factory('templates/v_main');
		$this->template->block_center=$content;

	}

}