<div class="ingredientGeneticModifications index">
<h2><?php __('IngredientGeneticModifications');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('ingredient_id');?></th>
	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('modificare');?></th>
	<th><?php echo $paginator->sort('nrProdus');?></th>
	<th><?php echo $paginator->sort('denumire');?></th>
	<th><?php echo $paginator->sort('ultimaModificare');?></th>
	<th><?php echo $paginator->sort('sursa');?></th>
	<th><?php echo $paginator->sort('ingredient');?></th>
	<th><?php echo $paginator->sort('origineMg');?></th>
	<th><?php echo $paginator->sort('faraOrigine');?></th>
	<th><?php echo $paginator->sort('sursaBotanica');?></th>
	<th><?php echo $paginator->sort('taraOrgine');?></th>
	<th><?php echo $paginator->sort('observatii');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ingredientGeneticModifications as $ingredientGeneticModification):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($ingredientGeneticModification['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredientGeneticModification['Ingredient']['id'])); ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['date']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['created']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['modified']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['modificare']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['nrProdus']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['denumire']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['ultimaModificare']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['sursa']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['ingredient']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['origineMg']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['faraOrigine']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['sursaBotanica']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['taraOrgine']; ?>
		</td>
		<td>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['observatii']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $ingredientGeneticModification['IngredientGeneticModification']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $ingredientGeneticModification['IngredientGeneticModification']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $ingredientGeneticModification['IngredientGeneticModification']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredientGeneticModification['IngredientGeneticModification']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('pag.anterioara', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('pag.urmatoare', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New IngredientGeneticModification', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>
</div>
