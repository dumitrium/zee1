<div class="ingredientComps form">
<?php echo $form->create('IngredientComp');?>
	<fieldset>
 		<legend>Editeaza subingredient</legend>
	<?php
		echo $form->input('id');
		
			echo $form->input('ingredient_id',array('type'=>'hidden','value'=>$ingred,'class'=>''));
		
			if ($this->data['IngredientComp']['ingred_id']==0){echo $form->input('faranume');}else{
			echo $form->input('ingred_id');}
		echo $form->input('procent');
		echo $form->input('functia',array('label'=>'Functia'));
		echo $form->input('eticheta',array('label'=>'Text Eticheta'));
	?>
	</fieldset>
<?php echo $form->end('Trimite');?>
</div>
<div class="actions">
	
</div>
