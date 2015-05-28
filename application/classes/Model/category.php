<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM {
	
	protected $_table_name = 'categorys';
	
	protected $_has_many = array(
	'tovars'=>array(//уникальное имя связи
	'model'=>'tovar',
	'foreign_key'=>'category'//ключ противоположной таблицы
	)
	);

}