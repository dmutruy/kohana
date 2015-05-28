<?php defined('SYSPATH') or die('No direct script access.');

class Model_Feed extends ORM {
	
	public function rules()
	{
		return array('name'=>array(array('not_empty')),
		'body'=>array(array('not_empty')),
		);
		
	}
}