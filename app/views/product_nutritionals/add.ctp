<?php echo $html->link(__('Listeaza valorile nutritive ale tuturor produselor', true), array('action'=>'index'));?></li>
<div class="ingredientCaracteristics" align="left">
<?php echo $form->create('ProductNutritional');?>
	<fieldset style="none">
 		<legend>Adauga valori nutritive produs</legend>
	<?php
echo $form->input('product_id',array('type'=>'hidden','value'=>$prod));
//		echo $form->input('ingredient_id');
//		echo $form->input('date');
//		echo $form->input('modificare');?>


<table align="left" width="297">
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
<tr><td><b>Vitamina A</b></td><td><? echo $form->input('vitaminaA',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina E</b></td><td><? echo $form->input('vitaminaE',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina C</b></td><td><? echo $form->input('vitaminaC',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B1(Tiamina)</b></td><td><? echo $form->input('vitaminaB1',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B2(Riboflavina)</b></td><td><? echo $form->input('vitaminaB2',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B6(Piridoxina)</b></td><td><? echo $form->input('vitaminaB6',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina pp(Niacina)</b></td><td><? echo $form->input('vitaminaPp',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td><b>Acid folic</b></td><td><? echo $form->input('acidFolic',array('label'=>'','class'=>'formscurt'));?></td><td>ug/100g</td></tr>
<tr><td><b>Vitamina D</b></td><td><? echo $form->input('vitaminaD',array('label'=>'','class'=>'formscurt'));?></td><td>ug/100g</td></tr>
<tr><td><b>Vitamina B12</b></td><td><? echo $form->input('vitaminaB12',array('label'=>'','class'=>'formscurt'));?></td><td>ug/100g</td></tr>
<tr><td><b>Biotina</b></td><td><? echo $form->input('biotina',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>
<tr><td><b>Acid pantotenic</b></td><td><? echo $form->input('acidPantotenic',array('label'=>'','class'=>'formscurt'));?></td><td>mg/100g</td></tr>

<tr><td style="background:#ecf0f6;"><b>Umiditate</b></td><td style="background:#ecf0f6;"><? echo $form->input('umiditate',array('label'=>'','class'=>'formscurt'));?></td><td style="background:#ecf0f6;">g/100g</td></tr>

<tr><td style="background:#ecf0f6;"><b>Alcool</b></td><td style="background:#ecf0f6;"><? echo $form->input('alcool',array('label'=>'','class'=>'formscurt'));?></td><td style="background:#ecf0f6;">g/100g</td></tr>



</table>

	</fieldset>
<?php echo $form->end('Trimite valori nutritive');?>
</div>
