<div class="productCaracteristics index">
<h2><?php __('ProductCaracteristics');?></h2>
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
	<th><?php echo $paginator->sort('aspect');?></th>
	<th><?php echo $paginator->sort('culoare');?></th>
	<th><?php echo $paginator->sort('miros');?></th>
	<th><?php echo $paginator->sort('gust');?></th>
	<th><?php echo $paginator->sort('brix');?></th>
	<th><?php echo $paginator->sort('vascozitate');?></th>
	<th><?php echo $paginator->sort('ph');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($productCaracteristics as $productCaracteristic):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($productCaracteristic['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productCaracteristic['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['date']; ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['created']; ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['modified']; ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['modificare']; ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['aspect']; ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['culoare']; ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['miros']; ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['gust']; ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['brix']; ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['vascozitate']; ?>
		</td>
		<td>
			<?php echo $productCaracteristic['ProductCaracteristic']['ph']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $productCaracteristic['ProductCaracteristic']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $productCaracteristic['ProductCaracteristic']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $productCaracteristic['ProductCaracteristic']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productCaracteristic['ProductCaracteristic']['id'])); ?>
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
		<li><?php echo $html->link(__('New ProductCaracteristic', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
