<div class="ingredientAlergens index">
<h2><?php __('IngredientAlergens');?></h2>
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
<!--	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('modificare');?></th>
	<th><?php echo $paginator->sort('data');?></th>-->
	<th><?php echo $paginator->sort('cerealeGluten');?></th>
	<th><?php echo $paginator->sort('crustacee');?></th>
	<th><?php echo $paginator->sort('oua');?></th>
	<th><?php echo $paginator->sort('peste');?></th>
	<th><?php echo $paginator->sort('alune');?></th>
	<th><?php echo $paginator->sort('soia');?></th>
	<th><?php echo $paginator->sort('lapte');?></th>
	<th><?php echo $paginator->sort('nuci');?></th>
	<th><?php echo $paginator->sort('telina');?></th>
	<th><?php echo $paginator->sort('mustar');?></th>
	<th><?php echo $paginator->sort('susan');?></th>
	<th><?php echo $paginator->sort('dioxidSulf');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ingredientAlergens as $ingredientAlergen):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($ingredientAlergen['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredientAlergen['Ingredient']['id'])); ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['date']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['created']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['modified']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['modificare']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['data']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['cerealeGluten']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['crustacee']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['oua']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['peste']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['alune']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['soia']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['lapte']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['nuci']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['telina']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['mustar']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['susan']; ?>
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['dioxidSulf']; ?>
		</td>
		<td class="actions">
			
		
			<?php echo $html->link(__('Adauga Alergenii acestui produs', true), array('action'=>'add', $ingredientAlergen['Ingredient']['id']));?>
			<?php echo $html->link(__('View', true), array('action'=>'view', $ingredientAlergen['IngredientAlergen']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $ingredientAlergen['IngredientAlergen']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $ingredientAlergen['IngredientAlergen']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredientAlergen['IngredientAlergen']['id'])); ?>
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
		<li><?php echo $html->link(__('New IngredientAlergen', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>
</div>
