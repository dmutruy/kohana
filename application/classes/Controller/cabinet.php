<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet extends Controller_Base {
	
	public function before()
	{
		parent::before();
		
		if(!Auth::instance() -> logged_in())
		{
		$this->redirect('/auth/login');
		}
		
	}
	
	public function action_index()
	{
        $user = Auth::instance() -> get_user();
		$main = VIEW::factory('templates/v_cabinet')->bind('user',$user);
		$this->template->block_center=$main;
	}

}