<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?=$title;?></title>
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="keywords" content=""/>
		<meta name="descripshion" content=""/>
		<meta http-equiv="content-style-type" content="text/css"/>
		
		<?foreach($styles as $one):?>
		<?=HTML::style($one);?>
		<?endforeach;?>
		<?foreach($scripts as $one):?>
		<?=HTML::script($one);?>
		<?endforeach;?>


	</head>
	
	<body>
	
		<div id="header">
			<?=HTML::image('/media/img/logo-etalon.png',array('class'=>'logo','height'=>150,'width'=>650))?>
				<h1>Главная страница</h1>
		</div>	
		<div class="menutop">
			<?=HTML::anchor('company','О компании')?>
				<?=HTML::anchor('press-centr','Пресс-центр')?>
					<?=HTML::anchor('contacts','Контакты')?>
						<?=HTML::anchor('partners','Партнерам')?>
					
		</div>
		
		<div class="main">
			<div class="col-md-2">
				<div class="menuhead">Наша продукция</div>
					<div class="menubody">
			<?=HTML::anchor('#','Каталог товаров',array('class'=>'btn btn-default'))?>
			<?=HTML::anchor('#','Поиск товаров',array('class'=>'btn btn-default'))?>
			<?=HTML::anchor('#','Роллетные системы',array('class'=>'btn btn-default'))?>
			<?=HTML::anchor('#','Профильные системы',array('class'=>'btn btn-default'))?>
			<?=HTML::anchor('#','Другие системы',array('class'=>'btn btn-default'))?>
			<?=HTML::anchor('#','Окна ПВХ',array('class'=>'btn btn-default'))?>
			<?=$logged;?>

					</div>
				</div>
				
				
				<div class="col-md-8"> 
				
			<?=$block_center;?>
			

			</div>
		
		<div class="col-md-2">
	

			
			<table id="t_2" width="100%" height="180%" cellpadding="2" cellspacing="0">
				<tr><td>
					<a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" 
					title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
				</td></tr>
				
				<tr><td>
				<table id="t_3" width=100% height=100%  cellpadding="0" cellspacing="0">
				<tr><td>
						<script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_1.js"></script>
				</td></tr>
				</table>
				</td></tr>

				<tr><td align="right">Информация сайта 
					<a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
				</td></tr>
			</table>
		</div>
	</div>
		
		<div class="footer">
			<p> &copy info<span>@</span>aethalon-group.com. &nbsp;Все права защищены.</p>
				<a href="http://www.yandex.ru" title="">Информационный партнер: Yandex.ru</a>
		</div>

	</body>
</html>