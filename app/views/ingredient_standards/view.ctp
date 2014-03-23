<div><br/>
<?php 
if (!isset($id)) {

echo $html->link(__('Adauga standardele microbiologice ingredient', true), 
	array('action'=>'add', $ingred),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<?} else {
 echo $html->link(__('Editeaza standardele microbiologice ingredient', true), 
array('action'=>'edit',$ingred,$ingredientStandard['IngredientStandard']['id']),array('class'=>'btn'), null, false); ?> &nbsp;|&nbsp;
<?php echo $html->link(__('Sterge standarde microbiologice ingredient', true), 
array('action'=>'delete', $ingredientStandard['IngredientStandard']['id']), array('class'=>'btn'), 
sprintf(__('Esti sigur(a) ca vrei sa stergi) # %s?', true), $ingredientStandard['IngredientStandard']['id']));?>&nbsp;|&nbsp;<?}  ?> 
<?php echo $html->link(__('Vizualizare ingredient',true), array('controller'=>'ingredients','action'=>'view', 
		$ingred),array('class'=>'btn'), null, false); ?>
<? if (isset($id)) {?>
<div class="ingredientCaracteristics" align="left">
<h2>Standarde Microbiologice</h2>
<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Nume Ingredient</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ingredientStandard['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredientStandard['Ingredient']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Data crearii</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientStandard['IngredientStandard']['created']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Ultima modificare</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientStandard['IngredientStandard']['modified']; ?>
			&nbsp;
		</dd>
        </dl>	
<table align="left" >


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  style="background: #ecf0f6;"><b>STANDARDE MICROBIOLOGICE</b></td></tr>		
 	<tr><td width="140">NTG</td><td >
 		<?php if (isset($ingredientStandard['IngredientStandard']['nrGermeni'])){echo $ingredientStandard['IngredientStandard']['nrGermeni'];} else{echo '-';}?></td><td>ufc/g</td></tr>
	<!--	<tr><td>NTG</td><td><?php echo $ingredientStandard['IngredientStandard']['ntg']; ?></td><td>ufc/g</td></tr>-->

 		<tr><td>Enterobacteriaceae</td><td><?php if (isset($ingredientStandard['IngredientStandard']['entero'])){echo $ingredientStandard['IngredientStandard']['entero'];} else{echo '-';}?></td><td>ufc/g</td></tr>
	
 		<tr><td> Drojdii si mucegaiuri</td><td><?php if (isset($ingredientStandard['IngredientStandard']['drojdiiViz'])){ echo $ingredientStandard['IngredientStandard']['drojdiiViz'];}else{echo '-';} ?></td><td>ufc/g</td></tr>

<tr><td> Staphylococus aureus</td><td><?php if (isset($ingredientStandard['IngredientStandard']['staphylococusViz'])){ echo $ingredientStandard['IngredientStandard']['staphylococusViz'];} else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> Salmonella</td><td><?php if (isset($ingredientStandard['IngredientStandard']['salmonellaViz'])){ echo $ingredientStandard['IngredientStandard']['salmonellaViz'];}else{echo '-';} ?></td><td>ufc/g</td></tr>

<tr><td> Listeria monocytogenes</td><td><?php if (isset($ingredientStandard['IngredientStandard']['listeriaViz'])){ echo $ingredientStandard['IngredientStandard']['listeriaViz'];} else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> Bacillus cereus</td><td><?php if (isset($ingredientStandard['IngredientStandard']['bacillusViz'])){ echo $ingredientStandard['IngredientStandard']['bacillusViz'];} else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> Coliformi</td><td><?php if (isset($ingredientStandard['IngredientStandard']['coliformi'])){ echo $ingredientStandard['IngredientStandard']['coliformi']; }else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> E.coli</td><td><?php if (isset($ingredientStandard['IngredientStandard']['ecoli'])){ echo $ingredientStandard['IngredientStandard']['ecoli']; }else{echo '-';}?></td><td>ufc/g</td></tr>


</table>
</div></div>
<?}else {echo '<br/><br/>Nu au fost introduse date<br/><br/><br/><br/>';}?>
	
