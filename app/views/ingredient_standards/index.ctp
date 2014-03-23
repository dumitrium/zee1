<div class="ingredientStandards index">
<h2><?php __('IngredientStandards');?></h2>
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
	<th><?php echo $paginator->sort('nrGermeni');?></th>
	<th><?php echo $paginator->sort('nrGermeniViz');?></th>
	<th><?php echo $paginator->sort('nrGermeniResp');?></th>
	<th><?php echo $paginator->sort('drojdiiViz');?></th>
	<th><?php echo $paginator->sort('drojdiiResp');?></th>
	<th><?php echo $paginator->sort('mucegaiViz');?></th>
	<th><?php echo $paginator->sort('mucegaiResp');?></th>
	<th><?php echo $paginator->sort('staphylococusViz');?></th>
	<th><?php echo $paginator->sort('staphylococusResp');?></th>
	<th><?php echo $paginator->sort('salmonellaViz');?></th>
	<th><?php echo $paginator->sort('salmonellaResp');?></th>
	<th><?php echo $paginator->sort('listeriaViz');?></th>
	<th><?php echo $paginator->sort('listeriaResp');?></th>
	<th><?php echo $paginator->sort('bacillusViz');?></th>
	<th><?php echo $paginator->sort('bacillusResp');?></th>
	<th><?php echo $paginator->sort('nustiuViz');?></th>
	<th><?php echo $paginator->sort('nustiuResp');?></th>
	<th><?php echo $paginator->sort('aux1Viz');?></th>
	<th><?php echo $paginator->sort('aux1Resp');?></th>
	<th><?php echo $paginator->sort('pb');?></th>
	<th><?php echo $paginator->sort('hg');?></th>
	<th><?php echo $paginator->sort('as');?></th>
	<th><?php echo $paginator->sort('zn');?></th>
	<th><?php echo $paginator->sort('cu');?></th>
	<th><?php echo $paginator->sort('valabilitateViz');?></th>
	<th><?php echo $paginator->sort('valabilitateResp');?></th>
	<th><?php echo $paginator->sort('dataVerificare');?></th>
	<th><?php echo $paginator->sort('aux1');?></th>
	<th><?php echo $paginator->sort('aux2');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ingredientStandards as $ingredientStandard):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($ingredientStandard['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredientStandard['Ingredient']['id'])); ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['date']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['created']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['modified']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['modificare']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['nrGermeni']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['nrGermeniViz']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['nrGermeniResp']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['drojdiiViz']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['drojdiiResp']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['mucegaiViz']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['mucegaiResp']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['staphylococusViz']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['staphylococusResp']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['salmonellaViz']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['salmonellaResp']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['listeriaViz']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['listeriaResp']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['bacillusViz']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['bacillusResp']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['nustiuViz']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['nustiuResp']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['aux1Viz']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['aux1Resp']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['pb']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['hg']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['as']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['zn']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['cu']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['valabilitateViz']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['valabilitateResp']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['dataVerificare']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['aux1']; ?>
		</td>
		<td>
			<?php echo $ingredientStandard['IngredientStandard']['aux2']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $ingredientStandard['IngredientStandard']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $ingredientStandard['IngredientStandard']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $ingredientStandard['IngredientStandard']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredientStandard['IngredientStandard']['id'])); ?>
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
		<li><?php echo $html->link(__('New IngredientStandard', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>
</div>
