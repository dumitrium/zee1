<?php if($loggedIn):?>
<div id="ingredientsindex">
<table style="border:0px;margin:0px;padding:0px;" width="100%" class="" id=""><tr><td style="border:0px;margin:0px;padding:0px;vertical-align:middle;" ><h2>Lista Ingrediente</h2></td><td width="320"style="background:#eeeeee;vertical-align:middle;margin:5px;" align="right" ><? echo $this->element('form_search');?></td></tr></table>	
<p class="" id="" style="margin:0px;margin-bottom:4px;padding:0px;"><?php
echo $paginator->counter(array(
'format' => __('Pagina <b>%page%</b> din <b>%pages%</b>, afiseaza ingredientele <b>%start%</b> - <b>%end%</b> dintr-un total de <b>%count%</b> ingrediente.', true)
));
?></p>
<table cellpadding="0" cellspacing="0" style="text-align:center;border:1px solid #ccc;" width="100%" id="result-list">
<tr>
	<th><?php echo $paginator->sort('ID','id');?></th>
	<th><?php echo $paginator->sort(' Nume ','name');?></th>
    <th><?php echo $paginator->sort('Cod','cod');?></th>
	<th><?php echo $paginator->sort('furnizor');?></th>
	<th><?php echo $paginator->sort('producator');?></th>
	<th> <?php echo $paginator->sort(' Tara ','taraOrigine');?> </th>
	<th>Caracteristici</th>
	
	
	<th><?php echo $paginator->sort('tip');?></th>
	<th><?php echo $paginator->sort(' Grupa ','grupaProdusului');?></th>
	<th><?php echo $paginator->sort(' Istoric ','istoric');?></th>
	<th>Alergeni</th>
	
	<th>Mod.Genetice</th>
	
	<th>Microbiologie</th>


	<th> <?php echo $paginator->sort('Autorizare ','stadiulAutorizarii');?> </th>
	<th><?php echo $paginator->sort(' Valabilitate ','garantie');?></th>
	



</tr>
<?php
$i = 0;
foreach ($ingredients as $ingredient):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="result-list"';
	}
	else{
		$class = ' class="result-list2"';
	}
	
?>
	<tr <?php echo $class;?>>
		<td>
			<?php echo $ingredient['Ingredient']['id']; ?>
		</td>

		<td>
		
		<b><?php echo $html->link($ingredient['Ingredient']['name'], array('action'=>'view', 
		$ingredient['Ingredient']['id'])); ?>
			</b>
		</td>
<td>
			<?php echo $ingredient['Ingredient']['cod']; ?>
		</td>

		<td>
			<?php echo $ingredient['Ingredient']['furnizor']; ?>
		</td>
		<td>
			<?php echo $ingredient['Ingredient']['producator']; ?>
		</td>
		<td>
			<?php echo $ingredient['Ingredient']['taraOrigine']; ?>
		</td>

<td>
			<?php if (isset($ingredient['IngredientCaracteristic']['id'])){$btn='btn';}
			else {$btn='btn1';}
			
echo $html->link('caracteristici',array('controller'=> 'ingredient_caracteristics', 'action'=>'view',$ingredient['Ingredient']['id'],$ingredient['IngredientCaracteristic']['id']),
					array('class'=>$btn), null, false
				);
			?>
			</td>
<td>
			<? if ($ingredient['Ingredient']['tip']=='compus'){echo $html->link(
					'compus',
					array('controller'=> 'ingredient_comps', 'action'=>'add',$ingredient['Ingredient']['id']),
					array('class'=>'btn'), null, false
				);
			}
			else {echo $ingredient['Ingredient']['tip']; }?>
		</td>
<td>
			<?php echo $ingredient['Ingredient']['grupaProdusului']; ?>
		</td>
	<td <?php if ($ingredient['Ingredient']['istoric']=='inactiv'){?> style="background:#f8c4c2;"  <? }?> >
			<?php echo $ingredient['Ingredient']['istoric']; ?>
		</td>
		<td>
			
			<?php if (isset($ingredient['IngredientAlergen']['id'])){$btn='btn';}
			else {$btn='btn1';}
			
			
echo $html->link(
					'alergeni',
					array('controller'=> 'ingredient_alergens', 'action'=>'view',$ingredient['Ingredient']['id'],$ingredient['IngredientAlergen']['id']),
					array('class'=>$btn), null, false
				);
			?>
			
			
		</td>
		
		
		
			<td>
			<?php if (isset($ingredient['IngredientGeneticModification']['id'])){$btn='btn';}
			else {$btn='btn1';}
			
			
echo $html->link(
					'm.genetice',
					array('controller'=> 'ingredient_genetic_modifications', 'action'=>'view',$ingredient['Ingredient']['id'],$ingredient['IngredientGeneticModification']['id']),
					array('class'=>$btn), null, false
				);
			?>
			
			
		</td>


		<td>
		
		<?php if (isset($ingredient['IngredientStandard']['id'])){$btn='btn';}
			else {$btn='btn1';}
		
		echo $html->link(
					'microbiologie',
					array('controller'=> 'ingredient_standards', 'action'=>'view',$ingredient['Ingredient']['id'],$ingredient['IngredientStandard']['id']),
					array('class'=>$btn), null, false
				);
			?>
		
		</td>






		<td>
			<?php echo $ingredient['Ingredient']['stadiulAutorizarii']; ?>
		</td>
		<td>
			<?php echo $ingredient['Ingredient']['garantie'].' luni'; ?>
		</td>
		
		
	
		
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('pagina anterioara', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('pagina urmatoare', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<!--<div class="actions">
	<?php echo $this->element('meniu_linkuri');?> 
	
</div>-->
	
		
	
	
</div>
<?php else:?>please login
<?php endif;?>
