<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
			<?php echo 'Detalii Ingredient'; ?>
	</title>
	<?php
		echo $html->meta('icon');
 //       echo $javascript->link('Popup');
		echo $html->css('stylesheet');

//		echo $scripts_for_layout;
	?>
</head>
<body>
	<div class="popup">
<?php echo $content_for_layout; ?>
</div>
</body>