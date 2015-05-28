		<?=HTML::anchor('tovars/cats/'.$tovar->categorys,$tovar->name);// где categorys - таблица tovars(categorys)?>
		<br/>
		<?=$tovar->price;?><br/>
        <?=$tovar->body;?><br/>
		<?if($tovar->picturesmall)
		{
			$pic = HTML::image('/media/images/'.$tovar->picturesmall);
		}
		else
		{
			$pic = "";
		}
			echo $pic;	
		?>
			
				
		
					
			
