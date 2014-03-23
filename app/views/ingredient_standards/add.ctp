<div class="ingredientCaracteristics" align="left">
<?php echo $form->create('IngredientStandard');?>
	<fieldset>
 		<legend><b><?php
	echo $ingredients[$ingred];?></b> - Adauga Standarde Microbiologice</legend>
	<br/>
 		<?php
echo $form->input('ingredient_id',array('type'=>'hidden','value'=>$ingred));?>
 <table align="left" style="border:1px solid #ccc;" class="" id="">


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  ><b>STANDARDE MICROBIOLOGICE</b></td></tr>		
 	<tr><td width="140">NTG</td><td width="140">
 		<?echo $form->input('nrGermeni',array('label'=>'','style'=>'width:60px;'));?></td><td>ufc/g</td></tr>
		<!--<tr><td>NTG</td><td><?echo $form->input('ntg',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>-->
 		<tr><td>Enterobacteriaceae</td><td><?echo $form->input('entero',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
	<tr><td> Drojdii si mucegaiuri</td><td><?echo $form->input('drojdiiViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Staphylococus aureus</td><td><?echo $form->input('staphylococusViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Salmonella</td><td><?echo $form->input('salmonellaViz',array('label'=>'','class'=>'formscurt', 'default'=>'absent in 25g'));?></td><td>ufc/g</td></tr>
<tr><td> Listeria monocytogenes</td><td><?echo $form->input('listeriaViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Bacillus cereus</td><td><?echo $form->input('bacillusViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Coliformi</td><td><?echo $form->input('coliformi',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> E.coli</td><td><?echo $form->input('ecoli',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>

</table>
 		

	</fieldset>
<?php  echo $form->submit('Trimite', array('onClick' => 'this.disabled=true,this.form.submit();')); ?>
<?php echo $form->end(); ?>
<!--
	<ul>
		<li><?php echo $html->link(__('List IngredientStandards', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>-->
</div>
