		<h2><?=$cat->name;?></h2>
		<?foreach($cat->tovars->find_all() as $one):?>
		<?=HTML::anchor('products/tovar/'.$one->id,$one->name);?><br/>
		<?endforeach;?>