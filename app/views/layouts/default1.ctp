<?php
/* SVN FILE: $Id: default.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');
        echo $html->css('stylesheet');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container" align="center">
		<div id="header">
		<?php echo $html->image('zee1.jpg', array('alt'=> __("zeelandia romania", true), 'border'=>"0", 'width'=>'100%'));?></div>
	<div id="menucontainer">
	<div id="menunav">
		<ul>
<li><a href="/app/webroot/ingredients" class="<?//if(isset($classIL)) echo 'current'; else echo'';?>"><span>Acasa</span></a></li>
<? if($loggedIn):?>
<li><a href="/app/webroot/ingredients/add" class="<? if(isset($classIA)) echo 'current'; else echo'';?>"><span>Adauga ingredient</span></a></li>
<li><a href="/app/webroot/ingredients" class="<?if(isset($classIL)) echo 'current'; else echo'';?>"><span>Lista Ingrediente</span></a></li>
<li><a href="/app/webroot/products/add" class="<?if(isset($classPA)) echo 'current'; else echo'';?>"><span>Adauga Produs</span></a></li>
<li><a href="/app/webroot/products" class="<?if(isset($classPL)) echo 'current'; else echo'';?>"><span>Lista Produse</span></a></li>
<li><a href="/app/webroot/logs/logs" class="<?if(isset($classPL)) echo 'current'; else echo'';?>"><span>Istoric</span></a></li>

<li><a href="/app/webroot/users/logout"><span>Delogare</span></a></li>
<? else: ?>
<li><a href="/app/webroot/users/login"><span>Autentificare</span></a></li>

<!--<li><?php e($html->link('Adauga ingredient',array('controller'=>'ingredients','action'=>'add')));?></li>
<li><?php e($html->link('Lista Retete',array('controller'=>'products','action'=>'index')));?></li>
<li><?php e($html->link('Adauga Reteta',array('controller'=>'products','action'=>'add')));?></li>
<li><?php e($html->link('Delogare',array('controller'=>'users','action'=>'logout')));?></li>

<li><?php e($html->link('Autentificare',array('controller'=>'users','action'=>'login')));?></li> -->
<?php endif;?></ul>
	
	</div>

</div>

	




	








  
      
      
      <div id="content">




			<?php $session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo
					$html->image('zee2.jpg', array('alt'=> __("zeelandia romania", true), 'border'=>"0", 'width'=>'100%'));
			?>
			
		</div>
	</div>
	<?php echo $cakeDebug; ?>
</body>
</html>