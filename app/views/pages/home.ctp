<h2>Zeelandia - Aplicatie Software!</h2>

<?php
if (Configure::read() > 0):
	Debugger::checkSessionKey();
endif;
?>
<ul>
<li><?php echo $html->link('Listeaza ingredientele', array('controller'=>'ingredients', 'action'=>'index'));?></li>
<li><?php echo $html->link('Listeaza produsele', array('controller'=>'products', 'action'=>'index'));?></li>
</ul>
