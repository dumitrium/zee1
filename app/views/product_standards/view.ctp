<div>
<?php 
if (!isset($id)) {

echo $html->link(__('Adauga standardele microbiologice produs', true), 
	array('action'=>'add', $prod));?>&nbsp;|&nbsp;<?} else {
 echo $html->link(__('Editeaza standardele microbiologice ingredient', true), 
array('action'=>'edit',$prod,$productStandard['ProductStandard']['id'])); ?> &nbsp;|&nbsp;
<?php echo $html->link(__('Sterge standarde microbiologice ingredient', true), 
array('action'=>'delete', $productStandard['ProductStandard']['id']), null, 
sprintf(__('Esti sigur(a) ca vrei sa stergi) # %s?', true), $productStandard['ProductStandard']['id']));?>&nbsp;|&nbsp;<?}  ?> 

<? if (isset($id)) {?>
<div class="ingredientCaracteristics" align="left">
<h2>Standarde Microbiologice</h2>
<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Nume Produs</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($productStandard['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productStandard['Product']['id'])); ?>
			&nbsp;
		</dd>
	<dt<?php if ($i % 2 == 0) echo $class;?>>ID Produs</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productStandard['ProductStandard']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Data crearii</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productStandard['ProductStandard']['created']; ?>
			&nbsp;
		</dd></dl>	
<table align="left" >


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  style="background: #ecf0f6;"><b>STANDARDE MICROBIOLOGICE</b></td></tr>		
 	<tr><td width="140">NTG</td><td >
 		<?php if (isset($productStandard['ProductStandard']['nrGermeni'])){echo $productStandard['ProductStandard']['nrGermeni'];} else{echo '-';}?></td><td>ufc/g</td></tr>
	<!--	<tr><td>NTG</td><td><?php echo $productStandard['ProductStandard']['ntg']; ?></td><td>ufc/g</td></tr>-->

 		<tr><td>Enterobacteriaceae</td><td><?php if (isset($productStandard['ProductStandard']['entero'])){echo $productStandard['ProductStandard']['entero'];} else{echo '-';}?></td><td>ufc/g</td></tr>
	
 		<tr><td> Drojdii si mucegaiuri</td><td><?php if (isset($productStandard['ProductStandard']['drojdiiViz'])){ echo $productStandard['ProductStandard']['drojdiiViz'];}else{echo '-';} ?></td><td>ufc/g</td></tr>

<tr><td> Staphylococus aureus</td><td><?php if (isset($productStandard['ProductStandard']['staphylococusViz'])){ echo $productStandard['ProductStandard']['staphylococusViz'];} else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> Salmonella</td><td><?php if (isset($productStandard['ProductStandard']['salmonellaViz'])){ echo $productStandard['ProductStandard']['salmonellaViz'];}else{echo '-';} ?></td><td>ufc/g</td></tr>

<tr><td> Listeria monocytogenes</td><td><?php if (isset($productStandard['ProductStandard']['listeriaViz'])){ echo $productStandard['ProductStandard']['listeriaViz'];} else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> Bacillus cereus</td><td><?php if (isset($productStandard['ProductStandard']['bacillusViz'])){ echo $productStandard['ProductStandard']['bacillusViz'];} else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> Coliformi</td><td><?php if (isset($productStandard['ProductStandard']['coliformi'])){ echo $productStandard['ProductStandard']['coliformi']; }else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> E.coli</td><td><?php if (isset($productStandard['ProductStandard']['ecoli'])){ echo $productStandard['ProductStandard']['ecoli']; }else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td colspan="3"  style="background: #ecf0f6;"><b>METALE GRELE</b></td></tr>	

<tr><td> Pb < 0,50 mg/kg</td><td><?php if (isset($productStandard['ProductStandard']['pb'])){ echo $productStandard['ProductStandard']['pb']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Cd < 0,10 mg/kg</td><td><?php if (isset($productStandard['ProductStandard']['cd'])){ echo $productStandard['ProductStandard']['cd']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Hg < 0,02 mg/kg</td><td><?php if (isset($productStandard['ProductStandard']['hg'])){ echo $productStandard['ProductStandard']['hg']; }else{echo isset($productStandard['ProductStandard']['hg']);}?></td><td>mg/kg</td></tr>

<tr><td> As < 0,30 mg/kg</td><td><?php if (isset($productStandard['ProductStandard']['as'])){ echo $productStandard['ProductStandard']['as']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Zn < 50,00 mg/kg</td><td><?php if (isset($productStandard['ProductStandard']['zn'])){ echo $productStandard['ProductStandard']['zn']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Cu < 20,00 mg/kg</td><td><?php if (isset($productStandard['ProductStandard']['cu'])){ echo $productStandard['ProductStandard']['cu'];}else{echo '-';}?></td><td>mg/kg</td></tr>
</table>
</div><?}?>

</div>

	
