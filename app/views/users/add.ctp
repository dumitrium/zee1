<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Add User');?></legend>
	<?php
		echo $form->input('login');
		echo $form->input('username');
		echo $form->input('name');
		echo $form->input('password');
		echo $form->input('level');
		echo $form->input('active');
		echo $form->input('lastLogin');
		echo $form->input('created');
		echo $form->input('Ingredient');
		echo $form->input('Product');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Users', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Logs', true), array('controller'=> 'logs', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Log', true), array('controller'=> 'logs', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
