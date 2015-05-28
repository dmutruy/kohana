<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Feedback extends Controller_Base{
	
	public function before()
	{
		parent::before();
	}
		
	public function action_index()
	{
		if($_POST)
		{
			$data = Arr::extract($_POST,array('name','phone','body'));// Arr::extract - выполняет 'защитные' ф-ии;
			$feed = ORM::factory('feed');
			$feed->name = $data['name'];
			$feed->phone = $data['phone'];
			$feed->body = $data['body'];
			$feed->putdate = date('y-m-d');
			try
			{
				$feed->save();
				$this->redirect('/');
			}
			catch(ORM_Validation_Exception $e)
			{
				$errors = $e->errors('validation');
			}
		}
		$content = VIEW::factory('templates/v_feedback')->bind('errors',$errors)->bind('data',$data);
		$this->template->block_center=$content;
		
	}
}