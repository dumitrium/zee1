<div class="ingredientComps index">
<h2><?php __('IngredientComps');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('ingred_id');?></th>
	<th><?php echo $paginator->sort('ingredient_id');?></th>
	<th><?php echo $paginator->sort('procent');?></th>
	<th><?php echo $paginator->sort('functia');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ingredientComps as $ingredientComp):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ingredientComp['IngredientComp']['id']; ?>
		</td>
		<td>
			<?php echo $ingredientComp['IngredientComp']['ingred_id']; ?>
		</td>
		<td>
			<?php echo $html->link($ingredientComp['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredientComp['Ingredient']['id'])); ?>
		</td>
		<td>
			<?php echo $ingredientComp['IngredientComp']['procent']; ?>
		</td>
		<td>
			<?php echo $ingredientComp['IngredientComp']['functia']; ?>
		</td>
		<td>
			<?php echo $ingredientComp['IngredientComp']['created']; ?>
		</td>
		<td>
			<?php echo $ingredientComp['IngredientComp']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $ingredientComp['IngredientComp']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $ingredientComp['IngredientComp']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $ingredientComp['IngredientComp']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredientComp['IngredientComp']['id'])); ?>
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
		<li><?php echo $html->link(__('New IngredientComp', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>
</div>
