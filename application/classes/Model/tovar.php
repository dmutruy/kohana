<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tovar extends ORM {
	
	protected $_belongs_to = array(
	'categorys'=>array(//уникальное имя связи
	'model'=>'category',
	'foreign_key'=>'category'//ключ текущей таблицы
	)
	);

}