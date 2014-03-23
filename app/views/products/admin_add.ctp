<div class="products form">
<?php echo $form->create('Product');?>
	<fieldset>
 		<legend><?php __('Add Product');?></legend>
	<?php
		echo $form->input('user_id');
		echo $form->input('name');
		echo $form->input('date');
		echo $form->input('modificare');
		echo $form->input('furnizor');
		echo $form->input('producator');
		echo $form->input('taraOrigine');
		echo $form->input('grupaProdusului');
		echo $form->input('descriere');
		echo $form->input('posibileAplicatii');
		echo $form->input('stadiulAutorizarii');
		echo $form->input('observatii');
		echo $form->input('Ingredient');
		echo $form->input('User');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Products', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Alergens', true), array('controller'=> 'product_alergens', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Alergen', true), array('controller'=> 'product_alergens', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Caracteristics', true), array('controller'=> 'product_caracteristics', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Caracteristic', true), array('controller'=> 'product_caracteristics', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Genetic Modifications', true), array('controller'=> 'product_genetic_modifications', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Genetic Modification', true), array('controller'=> 'product_genetic_modifications', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Standards', true), array('controller'=> 'product_standards', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Standard', true), array('controller'=> 'product_standards', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>
</div>
