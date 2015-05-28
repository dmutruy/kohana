	    <h2>Авторизация:</h2>
		<?=FORM::open('auth/login',array('method'=>'POST'));?>
		<?=FORM::label('username','Логин');?>
		<?=FORM::input('username',$data['username'],array());?><br/>
		<?=FORM::label('password','Пароль');?>
		<?=FORM::password('password',$data['password'],array());?><br/>
		<?=FORM::submit('submit','Войти');?><br/>
		<?=FORM::close();?>