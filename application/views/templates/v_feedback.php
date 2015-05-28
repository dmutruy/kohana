		<h2>Форма обратной связи</h2>
		<?if(isset($errors)):?>
		<?=print_r($errors);?>
		<?endif;?>
		
		<?=FORM::open('feedback',array('method'=>'POST'));?>
		<?=FORM::label('name','Имя');?>
		<?=FORM::input('name',$data['name'],array());?><br/>
		<?=FORM::label('phone','Телефон');?>
		<?=FORM::input('phone',$data['phone'],array());?><br/>
		<?=FORM::textarea('body',$data['body'],array('placeholder'=>'Ваше сообщение'));//placeholder-символ заполнитель?>
		<?=FORM::submit('submit','Отправить');?><br/>
		<?=FORM::close();?>
