<div class="productRetetas index">
<h2>Reteta Produs</h2>
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
	<th><?php echo $paginator->sort('ingredient_id');?></th>
	<th><?php echo $paginator->sort('procent');?></th>
	<th><?php echo $paginator->sort('functia');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($productRetetas as $productReteta):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $productReteta['ProductReteta']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($productReteta['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id']));  ?>
		</td>
		<td>
			<?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id'])); if($productReteta['Ingredient']['tip']='compus'){echo 'C';}?>
		</td>
		<td>
			<?php echo $productReteta['ProductReteta']['procent']; ?>
		</td>
		<td>
			<?php echo $productReteta['ProductReteta']['functia']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $productReteta['ProductReteta']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $productReteta['ProductReteta']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $productReteta['ProductReteta']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productReteta['ProductReteta']['id'])); ?>
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
		<li><?php echo $html->link(__('New ProductReteta', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>
</div>
