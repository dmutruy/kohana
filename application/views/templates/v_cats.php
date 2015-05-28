				<h2>Продукты:</h2>
				<?foreach($cats as $one):?>
				<?=HTML::anchor('products/catigorie/'.$one->id,$one->name);?><br/>
				<?foreach($one->tovars->limit(1)->find_all() as $tov):?>
				<?=$tov;//id товара?>
				<?endforeach;?>
				<?endforeach;?>

