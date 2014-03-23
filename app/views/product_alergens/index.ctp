<div class="productAlergens index">
<h2><?php __('ProductAlergens');?></h2>
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
	<th><?php echo $paginator->sort('data');?></th>
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
foreach ($productAlergens as $productAlergen):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $productAlergen['ProductAlergen']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($productAlergen['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productAlergen['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['date']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['created']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['modified']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['modificare']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['data']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['cerealeGluten']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['crustacee']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['oua']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['peste']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['alune']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['soia']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['lapte']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['nuci']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['telina']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['mustar']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['susan']; ?>
		</td>
		<td>
			<?php echo $productAlergen['ProductAlergen']['dioxidSulf']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $productAlergen['ProductAlergen']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $productAlergen['ProductAlergen']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $productAlergen['ProductAlergen']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productAlergen['ProductAlergen']['id'])); ?>
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
		<li><?php echo $html->link(__('New ProductAlergen', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
