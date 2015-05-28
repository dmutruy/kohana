<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base{
	
	public function before()
	{
		parent::before();
	}
		
	public function action_index()
	{
		$id = $this -> request -> param('id');
		if($id)
		{
			$val = $id;	
		}
		else
		{
			$val = 'index';	
		}
		$text = ORM::factory('maintext')->where('url','=',$val)->find();
		$content = VIEW::factory('templates/v_index')->bind('text',$text);
		$this->template->block_center=$content;
		
	}
	public function action_insert()
	{
		$a = ORM::factory('maintext');
		$a->url='ggg';
		$a->name='fff';
		$a->body='fff';
		$a->showhide='show';
		$a->lang='ru';
		$a->putdate=date('y-m-d');
		$a->save();
		$this->redirect('/');
	}

}