<div class="ingredientStandards form">
<?php echo $form->create('IngredientStandard');
echo $form->input('ingredient_id',array('type'=>'hidden'));
		echo $form->input('id',array('type'=>'hidden'));?>
	<fieldset style="font-size:14px;background:#f6f6f6;width:500px;">
 		<legend><b><?php
	echo $ingredients[$ingred];?></b> - Editeaza standarde Microbiologice</legend>
	
 		 		
<table align="left" style="border:1px solid #ccc;" class="" id="">


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  ><b>STANDARDE MICROBIOLOGICE</b></td></tr>		
 	<tr><td width="140">NTG</td><td width="140">
 		<?echo $form->input('nrGermeni',array('label'=>'','style'=>'width:60px;'));?></td><td>ufc/g</td></tr>
		<tr><td>Enterobacteriaceae</td><td><?echo $form->input('entero',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
	<tr><td> Drojdii si mucegaiuri</td><td><?echo $form->input('drojdiiViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Staphylococus aureus</td><td><?echo $form->input('staphylococusViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Salmonella</td><td><?echo $form->input('salmonellaViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Listeria monocytogenes</td><td><?echo $form->input('listeriaViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Bacillus cereus</td><td><?echo $form->input('bacillusViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Coliformi</td><td><?echo $form->input('coliformi',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> E.coli</td><td><?echo $form->input('ecoli',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<!--<tr><td colspan="3"  ><b>METALE GRELE</b></td></tr>	
<tr><td> Pb < 0,50 mg/kg</td><td><?echo $form->input('pb',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Cd < 0,10 mg/kg</td><td><?echo $form->input('cd',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Hg < 0,02 mg/kg</td><td><?echo $form->input('hg',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> As < 0,30 mg/kg</td><td><?echo $form->input('as',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Zn < 50,00 mg/kg</td><td><?echo $form->input('zn',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Cu < 20,00 mg/kg</td><td><?echo $form->input('cu',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>-->
</table>
 		
 		
 		
 		
 		
 		
 		
 		
 		
 		
 		
 	
	</fieldset>
<?php echo $form->end('Trimite Modificarile');?>
<!--	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('IngredientStandard.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IngredientStandard.id'))); ?></li>
		<li><?php echo $html->link(__('List IngredientStandards', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>-->
</div>
