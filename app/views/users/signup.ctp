<div class="users form">
<?php if ($form->isFieldError('User.username')) e($form->error('User.username', null, array('class'=>'message')));?>
<?php if ($form->isFieldError('User.password')) e($form->error('User.password', null, array('class'=>'message')));?>
<?php echo($form->create('User',array('action'=>'signup')));?>
	<fieldset>
 		<legend><?php __('Add User');?></legend>
	<?php

		echo $form->input('username');
		echo $form->input('name');
		echo'Parola: ';echo $form->password('password');
		echo'Repeta parola: ';echo $form->password('password2');
		/*echo $form->input('level');
		echo $form->input('active');*/
				
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
