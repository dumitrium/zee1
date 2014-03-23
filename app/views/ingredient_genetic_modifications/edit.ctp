<div class="ingredientGeneticModifications form">
	&nbsp;|&nbsp; <?php echo $html->link(__('Vizualizare ingredient',true), array('controller'=>'ingredients','action'=>'view', 
		$ingred),array('class'=>'btn'), null, false);echo'&nbsp;|&nbsp'; echo $html->link(__('Sterge caracteristicile ingredientului', true), array('action'=>'delete', $form->value('IngredientGeneticModification.id')), array('class'=>'btn'), sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IngredientGeneticModification.id'))); ?>&nbsp;|&nbsp;
	
	
	
	
	
<?php echo $form->create('IngredientGeneticModification');?>
	<fieldset style="width:900px;vertical-align:middle;background:#f6f6f6;">
 		<legend >&nbsp;&nbsp;<strong style="color:#666666;"><?php
	echo $ingredients[$ingred];?></strong>&nbsp;- editeaza modificari genetice</legend><br/><br/>
    
	<?php
	echo 'Text etichetare ingredient:  '.$ingr['Ingredient']['eticheta'];
	echo $form->input('ingredient_id',array('type'=>'hidden'));
		echo $form->input('id',array('type'=>'hidden'));
	//	echo $form->input('ingredient_id',array('type'=>'hidden','value'=>$ingred));?>
<table align="left" width="920" border="1" style="border:1px solid #ccc;background:#f6f6f6;" >
<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr bgcolor="#efedfc"><td  width="130"><b>&nbsp;&nbsp;Sursa</b></td>
	<td colspan="2"><b>Ingredient</b></td>
	<td  ><b>Sub-ingredient(*)</b></td>
	<td  ><b>Origine-mg da/nu</b></td>
	<td  ><b>Daca nu,1,2,3,4(**)</b></td>
	<td  ><b>Daca 3,sursa botanica</b></td>
	<td  ><b>Daca 4,tara de origine</b></td></tr>
<tr><td style="color:#000000;"><b>&nbsp;&nbsp;Soia&nbsp; &nbsp; </b>	</td><td><?php echo $form->select('soiaPrezent', array('prezent' => 'prezent','absent'=>'absent'),$form->value('ingredientGeneticModification.soiaPrezent'),array('onchange'=>'jsfunction(this);','label'=>''), false);?></td>
	<td><?php echo $form->textarea('soiaIngredient',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->textarea('soiaSub',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('soiaOrigine',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('soiaNu',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('soiaSursa',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('soiaTara',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td></tr>
	
<tr bgcolor="#dddddd"style="color:#000000;" ><td><b>&nbsp;&nbsp;Porumb</b>	</td><td><?php echo $form->select('porumbPrezent', array('prezent' => 'prezent','absent'=>'absent'),$form->value('ingredientGeneticModification.porumbPrezent'),array('onchange'=>'jsfunction(this);','label'=>''), false);?></td>
	<td><?echo $form->textarea('porumbIngredient',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->textarea('porumbSub',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('porumbOrigine',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('porumbNu',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('porumbSursa',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('porumbTara',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td></tr>
	
<tr><td style="color:#000000;"><b>&nbsp;&nbsp;Rapita</b>	</td><td><?php echo $form->select('rapitaPrezent', array('prezent' => 'prezent','absent'=>'absent'),$form->value('ingredientGeneticModification.rapitaPrezent'),array('onchange'=>'jsfunction(this);','label'=>''), false);?></td>
	<td><?echo $form->textarea('rapitaIngredient',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->textarea('rapitaSub',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('rapitaOrigine',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('rapitaNu',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('rapitaSursa',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('rapitaTara',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td></tr>
	
<tr bgcolor="#dddddd"style="color:#000000;"><td><b>&nbsp;&nbsp;Bumbac</b>	</td><td><?php echo $form->select('bumbacPrezent', array('prezent' => 'prezent','absent'=>'absent'),$form->value('ingredientGeneticModification.bumbacPrezent'),array('onchange'=>'jsfunction(this);','label'=>''), false);?></td>
	<td><?echo $form->textarea('bumbacIngredient',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->textarea('bumbacSub',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('bumbacOrigine',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('bumbacNu',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('bumbacSursa',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('bumbacTara',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td></tr>
   
<tr ><td style="color:#000000;" ><strong>&nbsp;&nbsp;Sfecla <br />&nbsp;&nbsp;de &nbsp;&nbsp;zahar</strong>	</td><td><?php echo $form->select('sfeclaPrezent', array('prezent' => 'prezent','absent'=>'absent'),$form->value('ingredientGeneticModification.sfeclaPrezent'),array('onchange'=>'jsfunction(this);','label'=>''), false);?></td>
	<td><?echo $form->textarea('sfeclaIngredient',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->textarea('sfeclaSub',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('sfeclaOrigine',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('sfeclaNu',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('sfeclaSursa',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('sfeclaTara',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td></tr>
    
<tr bgcolor="#dddddd" style="color:#000000;"><td><b>&nbsp;&nbsp;Cartofi</b>	</td><td><?php echo $form->select('cartofiPrezent', array('prezent' => 'prezent','absent'=>'absent'),$form->value('ingredientGeneticModification.cartofiPrezent'),array('onchange'=>'jsfunction(this);','label'=>''), false);?></td>
	<td><?echo $form->textarea('cartofiIngredient',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->textarea('cartofiSub',array('label'=>'','class'=>'formscurt', 'style'=>'width:200px;height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('cartofiOrigine',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('cartofiNu',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('cartofiSursa',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td>
	<td><?echo $form->input('cartofiTara',array('label'=>'','class'=>'formscurt', 'style'=>'height:30px;font-size:11px;margin:5px;','rows'=>'5'));?></td></tr>
</table>
	
	
	
<?/*	echo $form->input('ingredient_id');
		<?echo $form->input('date',array('label'=>'');?>
		echo $form->input('modificare');
		echo $form->input('nrProdus');
		echo $form->input('denumire');
		echo $form->input('ultimaModificare');
		echo $form->input('sursa');
		echo $form->input('ingredient');
		echo $form->input('origineMg');
		echo $form->input('faraOrigine');
		echo $form->input('sursaBotanica');
		echo $form->input('taraOrgine');
		echo $form->input('observatii');
	*/?>
	</fieldset>
<?php echo $form->end('Modifica Modificari genetice');?>
<br/><br/>
<span>(*) In general, sub-ingredientele nu apar in declaratia privind ingredientele.Majoritatea sunt agenti 
	microbieni si de procesare auxiliari ai ingredientelor din a doua coloana.<br/>
	(**) Legenda<br/>
	1.Sistemul de pastrare a identitatilor sau datelor de identificare(IP).Furnizorul a trimis o prezentare 
	a sistemului sau copie a certificatului.<br/>
	2.Declaratia scrisa a furnizorului(furnizorilor) prin care se specifica faptul ca ingredientele mentionate nu provin
	din materialele modificate genetic.<br/>
	3.Sursa botanica: la anumite plante, nu se cunosc specii modificate genetic. Se precizeaza specia/tipul de planta.<br/>
	4.Sursa geografica: in anumite parti, cresterea plantelor modificate genetic este interzisa prin lege.In acest caz se precizeaza
	tara de provenienta a plantelor.</span>

<br/><br/><!--
	<ul>
		<li><?php echo $html->link(__('Sterge modificarile genetice ale ingredientului', true), array('action'=>'delete', $form->value('IngredientGeneticModification.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IngredientGeneticModification.id'))); ?></li>
		<li><?php echo $html->link(__('Listeaza modificarile genetice pentru toate ingredientele', true), array('action'=>'index'));?></li>
	</ul>-->
</div>
