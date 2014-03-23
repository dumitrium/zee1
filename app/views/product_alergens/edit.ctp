<div class="productAlergens form">
<?php echo $form->create('ProductAlergen');?>
	<fieldset>
 		<legend><?php __('Edit ProductAlergen');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('product_id');
		echo $form->input('date');
		echo $form->input('modificare');
		echo $form->input('data');
		echo $form->input('cerealeGluten');
		echo $form->input('crustacee');
		echo $form->input('oua');
		echo $form->input('peste');
		echo $form->input('alune');
		echo $form->input('soia');
		echo $form->input('lapte');
		echo $form->input('nuci');
		echo $form->input('telina');
		echo $form->input('mustar');
		echo $form->input('susan');
		echo $form->input('dioxidSulf');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('ProductAlergen.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ProductAlergen.id'))); ?></li>
		<li><?php echo $html->link(__('List ProductAlergens', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
