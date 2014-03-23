<div class="ingredientCaracteristics"><br/>
<?php 
if (!isset($id)) {
echo $html->link(__('Adauga caracteristicile pentru acest ingredient', true), 
	array('action'=>'add', $ingred),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<? } else {
	
	
	
	echo $html->link(__('Editeaza caracteristicile acestui ingredient', true), 
	array('action'=>'edit',$ingred,$ingredientCaracteristic['IngredientCaracteristic']['id']),array('class'=>'btn'), null, false); ?>&nbsp;|&nbsp;
<?php   echo $html->link(__('Sterge caracteristici ingredient', true), array('action'=>'delete', $ingredientCaracteristic['IngredientCaracteristic']['id'])
, array('class'=>'btn'), sprintf(__('Esti sigur(a) ca vrei sa stergi # %s?', true), 
$ingredientCaracteristic['IngredientCaracteristic']['id'])); ?>&nbsp;|&nbsp;<?}?>
<?php //echo $html->link(__('Sterge caracteristici ingredient', true), array('action'=>'delete', $ingredientCaracteristic['IngredientAlergen']['id']), null, sprintf(__('Esti sigur(a) ca vrei sa stergi) # %s?', true), $ingredientCaracteristic['IngredientCaracteristic']['id'])); ?> 

<?php echo $html->link(__('Vizualizare ingredient',true), array('controller'=>'ingredients','action'=>'view', 
		$ingred),array('class'=>'btn'), null, false); ?>


<?php /*echo $html->link(__('Listeaza caracteristicile tuturor ingredientilor', true), 
array('action'=>'index')); */?> 
<? if (isset($id)) {?>
<div class="ingredientCaracteristics">
<h2>Caracteristici ingredient</h2>
<dl style="width:600px;"><?php $i = 0; $class = ' class="altrowd"';?>
<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ingredient'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ingredientCaracteristic['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredientCaracteristic['Ingredient']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Creat</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['created']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Modificat</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['modified']; ?>
			&nbsp;
		</dd></dl>	

<table align="left" style="background:#f7f7f7;border:1ps #ccc solid;paddind:10px;">


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  ><b><u>STANDARDE FIZICE/CHIMICE</u></b></td></tr>
		
 <tr><td width="150">Aspect</td><td colspan="2">     <?php echo $ingredientCaracteristic['IngredientCaracteristic']['aspect']; ?></td></tr>
 <tr><td>Culoare</td><td colspan="2">   <?php echo $ingredientCaracteristic['IngredientCaracteristic']['culoare']; ?></td></tr>
 <tr><td>Miros</td><td colspan="2">   	<?php echo $ingredientCaracteristic['IngredientCaracteristic']['miros']; ?></td></tr>
 <tr><td>gust</td><td colspan="2">   	  <?php echo $ingredientCaracteristic['IngredientCaracteristic']['gust']; ?></td></tr>
 <tr><td>Brix</td><td colspan="2">   	 <?php echo $ingredientCaracteristic['IngredientCaracteristic']['brix']; ?></td></tr>
 <tr><td>Vascozitate</td><td colspan="2"> <?php echo $ingredientCaracteristic['IngredientCaracteristic']['vascozitate']; ?></td></tr>
 <tr><td> Ph</td><td colspan="2">        <?php echo $ingredientCaracteristic['IngredientCaracteristic']['ph']; ?></td></tr>
	
 <tr><td colspan="2"><b><u>ANALIZA/VALOARE NUTRITIVA</u></b></td></td><td></tr>	
	<tr><td><u>Valoare energetica</u></td><td width="50">	<?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['valKj'])){ echo $ingredientCaracteristic['IngredientCaracteristic']['valKj']; }else echo'-';?></td><td>kJ/100g</td></tr>
		<tr><td> </td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['valKcal'])){ echo $ingredientCaracteristic['IngredientCaracteristic']['valKcal']; }else echo'-';?></td><td>kcal/100g</td></tr>
		
	<tr><td colspan="2"><u>Valoare nutritiva</u></td></tr>
	<tr><td style="background:#ecf0f6;"><b>PROTEINE</b></td><td style="background:#ecf0f6;"><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['proteine'])){ echo $ingredientCaracteristic['IngredientCaracteristic']['proteine']; }else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - vegetale</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['proteineVegetale'])){ echo $ingredientCaracteristic['IngredientCaracteristic']['proteineVegetale']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - animale</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['proteineAnimale'])){echo $ingredientCaracteristic['IngredientCaracteristic']['proteineAnimale']; }else echo'-';?></td><td>g/100g</td></tr>
	
	<tr><td style="background:#ecf0f6;"><B>CARBOHIDRATI</b></td><td style="background:#ecf0f6;"><? if (isset($ingredientCaracteristic['IngredientCaracteristic']['carbohidrati'])){echo $ingredientCaracteristic['IngredientCaracteristic']['carbohidrati'];}else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - zaharuri</td><td><? if (isset($ingredientCaracteristic['IngredientCaracteristic']['carboxidratiZahar'])){echo $ingredientCaracteristic['IngredientCaracteristic']['carboxidratiZahar']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - polioli</td><td><? if (isset($ingredientCaracteristic['IngredientCaracteristic']['carbohidratiPolioli'])){echo $ingredientCaracteristic['IngredientCaracteristic']['carbohidratiPolioli']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - amidon</td><td><? if (isset($ingredientCaracteristic['IngredientCaracteristic']['carbohidratiAmidon'])){echo $ingredientCaracteristic['IngredientCaracteristic']['carbohidratiAmidon']; }else echo'-';?></td><td>g/100g</td></tr>
	
<tr><td style="background:#ecf0f6;"><B>GRASIMI</b></td><td style="background:#ecf0f6;"><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['grasimi'])){echo $ingredientCaracteristic['IngredientCaracteristic']['grasimi']; }else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - saturate</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['grasimiSaturate'])){echo $ingredientCaracteristic['IngredientCaracteristic']['grasimiSaturate']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - mononesaturate</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['grasimiMonoNesaturate'])){echo $ingredientCaracteristic['IngredientCaracteristic']['grasimiMonoNesaturate']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - polinesaturate</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['grasimiPoliNesaturate'])){echo $ingredientCaracteristic['IngredientCaracteristic']['grasimiPoliNesaturate']; }else echo'-';?></td><td>g/100g</td></tr>
    <tr><td> - vegetale</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['grasimiPoliNesaturateVegetale'])){echo $ingredientCaracteristic['IngredientCaracteristic']['grasimiPoliNesaturateVegetale']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - animale</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['grasimiPoliNesaturateAnimale'])){echo $ingredientCaracteristic['IngredientCaracteristic']['grasimiPoliNesaturateAnimale']; }else echo'-';?></td><td>g/100g</td></tr>

    <tr><td ><b>Fibre dietetice</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['fibredietetice'])){echo $ingredientCaracteristic['IngredientCaracteristic']['fibredietetice']; }else echo'-';?></td><td>g/100g</td></tr>

 <tr><td style="background:#ecf0f6;"><b>MINERALE</b></td><td style="background:#ecf0f6;"><? if (isset($ingredientCaracteristic['IngredientCaracteristic']['minerale'])){echo $ingredientCaracteristic['IngredientCaracteristic']['minerale'];}else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>
<tr><td> - sodiu</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['mineraleSodiu'])){echo $ingredientCaracteristic['IngredientCaracteristic']['mineraleSodiu'];}else echo'-'; ?></td><td>mg/100g</td></tr>
<tr><td> - calciu</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['mineraleCalciu'])){echo $ingredientCaracteristic['IngredientCaracteristic']['mineraleCalciu']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td> - fosfor</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['mineraleFosfor'])){echo $ingredientCaracteristic['IngredientCaracteristic']['mineraleFosfor']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td> - fier</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['mineraleFier'])){echo $ingredientCaracteristic['IngredientCaracteristic']['mineraleFier']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td> - magneziu</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['mineraleMagneziu'])){echo $ingredientCaracteristic['IngredientCaracteristic']['mineraleMagneziu']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td> - zinc</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['mineraleZinc'])){echo $ingredientCaracteristic['IngredientCaracteristic']['mineraleZinc']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td> - iod</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['mineraleIod'])){echo $ingredientCaracteristic['IngredientCaracteristic']['mineraleIod']; }else echo'-';?></td><td>mg/100g</td></tr>


<tr>
  <td style="background:#ecf0f6;"><b>VITAMINE</b></td><td style="background:#ecf0f6;"><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitamine'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitamine']; }else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>

<tr><td><b>Vitamina A</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitaminaA'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitaminaA']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina E</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitaminaE'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitaminaE']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina C</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitaminaC'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitaminaC']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B1(Tiamina)</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitaminaB1'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitaminaB1']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B2(Riboflavina)</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitaminaB2'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitaminaB2']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B6(Piridoxina)</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitaminaB6'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitaminaB6']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina pp(Niacina)</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitaminaPp'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitaminaPp']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Acid folic</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['acidFolic'])){echo $ingredientCaracteristic['IngredientCaracteristic']['acidFolic']; }else echo'-';?></td><td>ug/100g</td></tr>
<tr><td><b>Vitamina D</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitaminaD'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitaminaD']; }else echo'-';?></td><td>ug/100g</td></tr>
<tr><td><b>Vitamina B12</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitaminaB12'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitaminaB12']; }else echo'-';?></td><td>ug/100g</td></tr>
<tr><td><b>Biotina</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['vitaminaBiotina'])){echo $ingredientCaracteristic['IngredientCaracteristic']['vitaminaBiotina']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Acid pantotenic</b></td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['acidPantotenic'])){echo $ingredientCaracteristic['IngredientCaracteristic']['acidPantotenic']; }else echo'-';?></td><td>mg/100g</td></tr>

<tr><td colspan="3"  style="background: #ecf0f6;"><b>METALE GRELE</b></td></tr>	

<tr><td> Pb < 0,50 mg/kg</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['pb'])){ echo $ingredientCaracteristic['IngredientCaracteristic']['pb']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Cd < 0,10 mg/kg</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['cd'])){ echo $ingredientCaracteristic['IngredientCaracteristic']['cd']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Hg < 0,02 mg/kg</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['hg'])){ echo $ingredientCaracteristic['IngredientCaracteristic']['hg']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> As < 0,30 mg/kg</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['as'])){ echo $ingredientCaracteristic['IngredientCaracteristic']['as']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Zn < 50,00 mg/kg</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['zn'])){ echo $ingredientCaracteristic['IngredientCaracteristic']['zn']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Cu < 20,00 mg/kg</td><td><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['cu'])){ echo $ingredientCaracteristic['IngredientCaracteristic']['cu'];}else{echo '-';}?></td><td>mg/kg</td></tr>



<tr><td style="background:#ecf0f6;"><b>Umiditate</b></td><td style="background:#ecf0f6;"><?php if (isset($ingredientCaracteristic['IngredientCaracteristic']['umiditate'])){echo $ingredientCaracteristic['IngredientCaracteristic']['umiditate']; }else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>

<tr><td style="background:#ecf0f6;"><b>Alcool</b></td><td style="background:#ecf0f6;"><? if (isset($ingredientCaracteristic['IngredientCaracteristic']['alcool'])){echo $ingredientCaracteristic['IngredientCaracteristic']['alcool'];}else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>
</table></div>


</div>

<?}else {echo '<br/><br/>Nu au fost introduse date<br/><br/><br/><br/>';}?>