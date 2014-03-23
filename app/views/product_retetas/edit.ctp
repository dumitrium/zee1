<div class="productRetetas form">
<?php echo $form->create('ProductReteta');?>
	<fieldset>
 		<legend>Editare reteta</legend>
	<?php
		//echo $form->input('id');
				echo $form->input('product_id',array('type'=>'hidden','value'=>$prod,'class'=>''));
		echo $form->input('ingredient_id');
		echo $form->input('procent');
		echo $form->input('functia',array('label'=>'Functia'));
	?>
	</fieldset>
<?php echo $form->end('Trimite');?>
</div>
<div class="actions">
	
</div>
