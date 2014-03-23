
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo __('Zee 1.0 - Management and Product Research Software');?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css('stylesheet');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="header_inner">
		<div style="vertical-align:middle;padding-top:22px;padding-left:10px;width:400px;float:left;"><?php echo
					$html->image('zeelandia.png', array('alt'=> __("zeelandia romania", true), 'border'=>"0"));
			?></div>
		<div style="font-size:13px;font-style:italic;margin-left:90px;">Creating possibilities.</div>
	<div style="float:right;margin-right:30px;">
|<?php e($html->link('Acasa',array('controller'=>'ingredients','action'=>'index')));?>|
<? if($loggedIn):?>
<?php e($html->link('Delogare',array('controller'=>'users','action'=>'logout')));?>|
<? else: ?>
<?php e($html->link('Autentificare',array('controller'=>'users','action'=>'login')));?>|
<?php endif;?></div>
	</div>
		</div>
		<div id="content">
<div id="user_menu">
|<?php e($html->link('Acasa',array('controller'=>'ingredients','action'=>'index')));?>|
<? if($loggedIn):?>
<?php e($html->link('Delogare',array('controller'=>'users','action'=>'logout')));?>|
<? else: ?>
<?php e($html->link('Autentificare',array('controller'=>'users','action'=>'login')));?>|
<?php endif;?></div>



			<?php $session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $html->link(
					$html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('target'=>'_blank'), null, false
				);
			?>
		</div>
	</div>
	<?php echo $cakeDebug; ?>
</body>
</html>