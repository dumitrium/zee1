<div class="productNutrities index">
<h2><?php __('ProductNutritionals');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('product_id');?></th>
	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('modificare');?></th>
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
foreach ($productNutritionals as $productNutritional):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $productNutritional['ProductNutritional']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($productNutritional['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productNutritional['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['date']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['created']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['modified']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['modificare']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['valKj']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['valKcal']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['proteine']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['proteineVegetale']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['proteineAnimale']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['carbohidrati']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['carboxidratiZahar']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['carbohidratiPolioli']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['carbohidratiAmidon']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['grasimi']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['grasimiSaturate']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['grasimiMonoNesaturate']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['grasimiPoliNesaturate']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['grasimiPoliNesaturateVegetale']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['grasimiPoliNesaturateAnimale']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['fibredietetice']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['minerale']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['mineraleSodiu']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['umiditate']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['alcool']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['aux1']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['aux2']; ?>
		</td>
		<td>
			<?php echo $productNutritional['ProductNutritional']['aux3']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $productNutritional['ProductNutritional']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $productNutritional['ProductNutritional']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $productNutritional['ProductNutritional']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productNutritional['ProductNutritional']['id'])); ?>
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
		<li><?php echo $html->link(__('New ProductNutrity', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
