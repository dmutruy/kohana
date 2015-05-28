<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Base {
	
	
	public function before()
	{
		parent::before();
	}
	
	public function action_index()
	{
			if($_POST)
		{
			$data = Arr::extract($_POST,array( 
			'username','password','password_confirm','email'
			));
			$users = ORM::factory('user');
			try
			{
				$users-> create_user($data,array('username','password','email'));
				$role = ORM::factory('role')->where('name','=','login')->find();  
				$users ->add('roles',$role);
				$this->redirect('/');

			}
			catch(ORM_Validation_Exception $e)
			{
				$errors = $e -> errors('auth');
			}
		}
		$content = VIEW::factory('templates/v_reg')->bind('errors',$errors)->bind('data',$data);
		$this->template->block_center=$content;
	}
	
	public function action_login()
	{
		if($_POST)
		{
			$data = Arr::extract($_POST,array( 
			'username','password'));
			$status = Auth::instance() ->login($data['username'],$data['password'],true);
			if($status)
			{
				$this->redirect('/');
			}
			else
			{
				$errors = array('Ошибка входа');
			}
		}
		$main = VIEW::factory('templates/v_login')->bind('data',$data);
		$this->template->block_center=$main;
	}
	
	public function action_logout()
	{
		Auth::instance() -> logout();
		$this->redirect('/');
	}	

}