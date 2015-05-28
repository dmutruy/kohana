		<?if($errors):?>
			<?print_r($errors);?>
		<?endif;?>
		<h2>Регистрация:</h2>
		<?=FORM::open('auth',array('method'=>'POST'));?>
		<?=FORM::label('username','Логин');?>
		<?=FORM::input('username',$data['username'],array());?><br/>
		<?=FORM::label('email','E-mail');?>
		<?=FORM::input('email',$data['email'],array());?><br/>
		<?=FORM::label('password','Пароль');?>
		<?=FORM::password('password',$data['password'],array());?><br/>
		<?=FORM::label('password_confirm','Повтор пароля');?>
		<?=FORM::password('password_confirm',$data['password_confirm'],array());?><br/>
		<?=FORM::submit('submit','Зарегистрироваться');?><br/>
		<?=FORM::close();?>
