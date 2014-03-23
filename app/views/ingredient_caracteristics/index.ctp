<div class="ingredientCaracteristics index">
<h2><?php __('IngredientCaracteristics');?></h2>
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
	<th><?php echo $paginator->sort('aspect');?></th>
	<th><?php echo $paginator->sort('culoare');?></th>
	<th><?php echo $paginator->sort('miros');?></th>
	<th><?php echo $paginator->sort('gust');?></th>
	<th><?php echo $paginator->sort('brix');?></th>
	<th><?php echo $paginator->sort('vascozitate');?></th>
	<th><?php echo $paginator->sort('ph');?></th>
	<th><?php echo $paginator->sort('valKj');?></th>
	<th><?php echo $paginator->sort('valKcal');?></th>
	<th><?php echo $paginator->sort('proteine');?></th>
	<th><?php echo $paginator->sort('proteineVegetale');?></th>
	<th><?php echo $paginator->sort('proteineAnimale');?></th>
	<th><?php echo $paginator->sort('carbohidrati');?></th>
	<th><?php echo $paginator->sort('carboxidratiZahar');?></th>
	<th><?php echo $paginator->sort('carbohidratiPolioli');?></th>
	<th><?php echo $paginator->sort('carbohidratiAmidon');?></th>
	<th><?php echo $paginator->sort('grasimi');?></th>
	<th><?php echo $paginator->sort('grasimiSaturate');?></th>
	<th><?php echo $paginator->sort('grasimiMonoNesaturate');?></th>
	<th><?php echo $paginator->sort('grasimiPoliNesaturate');?></th>
	<th><?php echo $paginator->sort('grasimiPoliNesaturateVegetale');?></th>
	<th><?php echo $paginator->sort('grasimiPoliNesaturateAnimale');?></th>
	<th><?php echo $paginator->sort('fibredietetice');?></th>
	<th><?php echo $paginator->sort('minerale');?></th>
	<th><?php echo $paginator->sort('mineraleSodiu');?></th>
	<th><?php echo $paginator->sort('umiditate');?></th>
	<th><?php echo $paginator->sort('alcool');?></th>
	<th><?php echo $paginator->sort('aux1');?></th>
	<th><?php echo $paginator->sort('aux2');?></th>
	<th><?php echo $paginator->sort('aux3');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ingredientCaracteristics as $ingredientCaracteristic):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($ingredientCaracteristic['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredientCaracteristic['Ingredient']['id'])); ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['date']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['created']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['modified']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['modificare']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['aspect']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['culoare']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['miros']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['gust']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['brix']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['vascozitate']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['ph']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['valKj']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['valKcal']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['proteine']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['proteineVegetale']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['proteineAnimale']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['carbohidrati']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['carboxidratiZahar']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['carbohidratiPolioli']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['carbohidratiAmidon']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['grasimi']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['grasimiSaturate']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['grasimiMonoNesaturate']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['grasimiPoliNesaturate']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['grasimiPoliNesaturateVegetale']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['grasimiPoliNesaturateAnimale']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['fibredietetice']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['minerale']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['mineraleSodiu']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['umiditate']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['alcool']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['aux1']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['aux2']; ?>
		</td>
		<td>
			<?php echo $ingredientCaracteristic['IngredientCaracteristic']['aux3']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $ingredientCaracteristic['IngredientCaracteristic']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $ingredientCaracteristic['IngredientCaracteristic']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $ingredientCaracteristic['IngredientCaracteristic']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredientCaracteristic['IngredientCaracteristic']['id'])); ?>
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
		<li><?php echo $html->link(__('New IngredientCaracteristic', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>
</div>
