<div style="width:480px; ">
&nbsp;|&nbsp; <?php echo $html->link(__('Vizualizare ingredient',true), array('controller'=>'ingredients','action'=>'view', 
		$ingred),array('class'=>'btn'), null, false);echo'&nbsp;|&nbsp'; echo $html->link(__('Sterge caracteristicile ingredientului', true), array('action'=>'delete', $form->value('IngredientCaracteristic.id')), array('class'=>'btn'), sprintf(__('Esti sigur ca vrei sa stergi # %s?', true), $form->value('IngredientCaracteristic.id'))); ?>&nbsp;|&nbsp;
<!--<?php echo $html->link(__('Listeaza caracteristicile tuturor ingredientelor', true), array('action'=>'index'));?>-->


<?php echo $form->create('IngredientCaracteristic');?>
<fieldset style="background:#f8f8f8;font-size:14px;">
 		<legend>Editeaza caracteristici ingredient</legend>
	<?php
	echo $form->input('ingredient_id',array('type'=>'hidden'));
		echo $form->input('id',array('type'=>'hidden'));
//		echo $form->input('ingredient_id');
//		echo $form->input('date');
//		echo $form->input('modificare');?>


 <table align="left" width="357">


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  ><b>STANDARDE FIZICE/CHIMICE</b></td></tr>
		
 <tr><td width="180">Aspect</td><td colspan="2">     <?echo $form->input('aspect',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td>Culoare</td><td colspan="2">   <? echo $form->input('culoare',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td>Miros</td><td colspan="2">   	<? echo $form->input('miros',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td>gust</td><td colspan="2">   	  <? echo $form->input('gust',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td>Brix</td><td colspan="2">   	  <? echo $form->input('brix',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td>Vascozitate</td><td colspan="2"> <? echo $form->input('vascozitate',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td> Ph</td><td colspan="2">         <? echo $form->input('ph',array('label'=>'','style'=>'width:200px;'));?></td></tr>
	

	<tr><td colspan="3"><b>ANALIZA/VALOARE NUTRITIVA</b></td>
    </tr>	
	<tr><td width="170"><u>Valoare energetica</u></td><td width="50">	<? echo $form->input('valKj',array('label'=>'','class'=>'formscurt'));?></td><td width="61">kJ/100g</td></tr>
		<tr><td> </td><td><?echo $form->input('valKcal',array('label'=>'','class'=>'formscurt'));?></td><td>kcal/100g</td></tr>
		
	<tr><td colspan="2"><u>Valoare nutritiva</u></td><td></td></tr>
	<tr ><td style="background:#ecf0f6;"><b>PROTEINE</b></td><td style="background:#ecf0f6;"><? echo $form->input('proteine',array('label'=>'','class'=>'formscurt'));?></td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - vegetale</td><td><?echo $form->input('proteineVegetale',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>
	<tr><td> - animale</td><td><?echo $form->input('proteineAnimale',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>
	<tr><td colspan="3" height="20"></td>
		</tr>
	<tr><td style="background:#ecf0f6;"><B>CARBOHIDRATI</b></td><td style="background:#ecf0f6;"><? echo $form->input('carbohidrati',array('label'=>'','class'=>'formscurt'));?></td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - zaharuri</td><td><?echo $form->input('carboxidratiZahar',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>
	<tr><td> - polioli</td><td><?echo $form->input('carbohidratiPolioli',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>
	<tr><td> - amidon</td><td><?echo $form->input('carbohidratiAmidon',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>
	<tr><td colspan="3" height="20"></td>
		</tr>
	<tr><td style="background:#ecf0f6;"><B>GRASIMI</b></td><td style="background:#ecf0f6;"><? echo $form->input('grasimi',array('label'=>'','class'=>'formscurt'));?></td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - saturate</td><td><?echo $form->input('grasimiSaturate',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>
	<tr><td> - mononesaturate</td><td><?echo $form->input('grasimiMonoNesaturate',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>
	<tr><td> - polinesaturate</td><td><?echo $form->input('grasimiPoliNesaturate',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>
    <tr><td> - vegetale</td><td><?echo $form->input('grasimiPoliNesaturateVegetale',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>
	<tr><td> - animale</td><td><?echo $form->input('grasimiPoliNesaturateAnimale',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>

    <tr><td><b>Fibre dietetice</b></td><td><? echo $form->input('fibredietetice',array('label'=>'','class'=>'formscurt'));?></td><td>g/100g</td></tr>
<tr><td colspan="3" height="20"></td>
		</tr>
 <tr><td style="background:#ecf0f6;"><b>MINERALE</b></td><td style="background:#ecf0f6;"><? echo $form->input('minerale',array('label'=>'','class'=>'formscurt'));?></td><td style="background:#ecf0f6;">g/100g</td></tr>
<tr><td> - sodiu</td><td><?echo $form->input('mineraleSodiu',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td> - calciu</td><td><?echo $form->input('mineraleCalciu',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td> - fosfor</td><td><?echo $form->input('mineraleFosfor',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td> - fier</td><td><?echo $form->input('mineraleFier',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td> - magneziu</td><td><?echo $form->input('mineraleMagneziu',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td> - zinc</td><td><?echo $form->input('mineraleZinc',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td> - iod</td><td><?echo $form->input('mineraleIod',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td colspan="3" height="20"></td>
		</tr>
<tr>
  <td style="background:#ecf0f6;"><b>VITAMINE</b></td><td style="background:#ecf0f6;"><? echo $form->input('vitamine',array('label'=>'','class'=>'formscurt'));?></td><td style="background:#ecf0f6;">g/100g</td></tr>
<tr><td>Vitamina A</td><td><? echo $form->input('vitaminaA',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td>Vitamina E</td><td><? echo $form->input('vitaminaE',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td>Vitamina C</td><td><? echo $form->input('vitaminaC',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td>Vitamina B1(Tianina)</td><td><? echo $form->input('vitaminaB1',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td>Vitamina B2(Riboflavina)</td><td><? echo $form->input('vitaminaB2',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td>Vitamina B6(Piridoxina)</td><td><? echo $form->input('vitaminaB6',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td>Vitamina pp(Niacina)</td><td><? echo $form->input('vitaminaPp',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td>Acid folic</td><td><? echo $form->input('acidFolic',array('label'=>'','class'=>'formscurt'));?></td><td>ug/100g</td></tr>
<tr><td>Vitamina D</td><td><? echo $form->input('vitaminaD',array('label'=>'','class'=>'formscurt'));?></td><td>ug/100g</td></tr>
<tr><td>Vitamina B12</td><td><? echo $form->input('vitaminaB12',array('label'=>'','class'=>'formscurt'));?></td><td>ug/100g</td></tr>
<tr><td>Biotina</td><td><? echo $form->input('vitaminaBiotina',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td>Acid pantotenic</td><td><? echo $form->input('acidPantotenic',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td style="background:#ecf0f6;" colspan="3"  ><b>METALE GRELE</b></td></tr>	
<tr><td> Pb < 0,50 mg/kg</td><td><?echo $form->input('pb',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Cd < 0,10 mg/kg</td><td><?echo $form->input('cd',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Hg < 0,02 mg/kg</td><td><?echo $form->input('hg',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> As < 0,30 mg/kg</td><td><?echo $form->input('as',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Zn < 50,00 mg/kg</td><td><?echo $form->input('zn',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td> Cu < 20,00 mg/kg</td><td><?echo $form->input('cu',array('label'=>'','class'=>'formscurt'));?></td><td>mg/kg</td></tr>
<tr><td style="background:#ecf0f6;"><b>Umiditate</b></td><td style="background:#ecf0f6;"><? echo $form->input('umiditate',array('label'=>'','class'=>'formscurt'));?></td><td style="background:#ecf0f6;">g/100g</td></tr>

<tr><td style="background:#ecf0f6;"><b>Alcool</b></td><td style="background:#ecf0f6;"><? echo $form->input('alcool',array('label'=>'','class'=>'formscurt'));?></td><td style="background:#ecf0f6;">g/100g</td></tr>



</table>
	
	
	<?/*
		echo $form->input('aux1');
		echo $form->input('aux2');
		echo $form->input('aux3');*/?>
	</fieldset>
<?php echo $form->end('Trimite Caracteristici');?>
</div>
			
