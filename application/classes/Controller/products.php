<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Products extends Controller_Base {
	
	public function before()
	{
		parent::before();
	}
	
	public function action_index()
	{
		$cats = ORM::factory('category')->where('showhide','=','show')->find_all();
		$content = VIEW::factory('templates/v_cats')->bind('cats',$cats);
		$this->template->block_center=$content;
	}
	
	public function action_catigorie()
	{
		$id = $this -> request -> param('id');
		$cat = ORM::factory('category')->where('id','=',$id)->find();
		$main = VIEW::factory('templates/v_cat')->bind('cat',$cat);
		$this->template->block_center=$main;
	}
	
	public function action_tovar()
	{
		$id = $this -> request -> param('id');
		$tovar = ORM::factory('tovar')->where('id','=',$id)->find();
		$main = VIEW::factory('templates/v_one')->bind('tovar',$tovar);
		$this->template->block_center=$main;
		
	}

}