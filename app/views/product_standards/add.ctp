<div class="ingredientCaracteristics" align="left">
<?php echo $form->create('ProductStandard');?>
	<fieldset>
 		<legend>Adauga Standarde Microbiologice</legend>
	
 		<?php
echo $form->input('product_id',array('type'=>'hidden','value'=>$prod));?>
 <table align="left" >


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  ><b>STANDARDE MICROBIOLOGICE</b></td></tr>		
 	<tr><td width="140">NTG</td><td width="140">
 		<?echo $form->input('nrGermeni',array('label'=>'','style'=>'width:60px;'));?></td><td>ufc/g</td></tr>
		<!--<tr><td>NTG</td><td><?echo $form->input('ntg',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>-->
 		<tr><td>Enterobacteriaceae</td><td><?echo $form->input('entero',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
	<tr><td> Drojdii si mucegaiuri</td><td><?echo $form->input('drojdiiViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Staphylococus aureus</td><td><?echo $form->input('staphylococusViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Salmonella</td><td><?echo $form->input('salmonellaViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Listeria monocytogenes</td><td><?echo $form->input('listeriaViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Bacillus cereus</td><td><?echo $form->input('bacillusViz',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> Coliformi</td><td><?echo $form->input('coliformi',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td> E.coli</td><td><?echo $form->input('ecoli',array('label'=>'','class'=>'formscurt'));?></td><td>ufc/g</td></tr>
<tr><td colspan="3"  ><b>METALE GRELE</b></td></tr>	
<tr><td> Pb < 0,50 mg/kg</td><td><?echo $form->input('pb',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Cd < 0,10 mg/kg</td><td><?echo $form->input('cd',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Hg < 0,02 mg/kg</td><td><?echo $form->input('hg',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> As < 0,30 mg/kg</td><td><?echo $form->input('as',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Zn < 50,00 mg/kg</td><td><?echo $form->input('zn',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Cu < 20,00 mg/kg</td><td><?echo $form->input('cu',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
</table>
 		
 		
 		<?php
		
//		echo $form->input('date');
//		echo $form->input('modificare');
	//	echo $form->input('nrGermeni');
	//	echo $form->input('nrGermeniViz');
	//	echo $form->input('nrGermeniResp');
	//	echo $form->input('drojdiiViz');
	//	echo $form->input('drojdiiResp');
	//	echo $form->input('mucegaiViz');
	//	echo $form->input('mucegaiResp');
	//	echo $form->input('staphylococusViz');
	//	echo $form->input('staphylococusResp');
	//	echo $form->input('salmonellaViz');
	//	echo $form->input('salmonellaResp');
	//	echo $form->input('listeriaViz');
	//	echo $form->input('listeriaResp');
	//	echo $form->input('bacillusViz');
	// echo $form->input('bacillusResp');
	//	echo $form->input('nustiuViz');
	//	echo $form->input('nustiuResp');
	//	echo $form->input('aux1Viz');
	//	echo $form->input('aux1Resp');
	//	echo $form->input('pb');
	//	echo $form->input('hg');
	//	echo $form->input('as');
	//	echo $form->input('zn');
	//	echo $form->input('cu');
		
	//	echo $form->input('aux1');
	//	echo $form->input('aux2');
	?>
	</fieldset>
<?php// echo $form->end('Trimite Standarde Microbiologice');?>
<?php  echo $form->submit('Trimite', array('onClick' => 'this.disabled=true,this.form.submit();')); ?>
<?php echo $form->end(); ?>
<!--
	<ul>
		<li><?php echo $html->link(__('List IngredientStandards', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>-->
</div>
