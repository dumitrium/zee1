<div class="products index">
<h2><?php __('Products');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('modificare');?></th>
	<th><?php echo $paginator->sort('furnizor');?></th>
	<th><?php echo $paginator->sort('producator');?></th>
	<th><?php echo $paginator->sort('taraOrigine');?></th>
	<th><?php echo $paginator->sort('grupaProdusului');?></th>
	<th><?php echo $paginator->sort('descriere');?></th>
	<th><?php echo $paginator->sort('posibileAplicatii');?></th>
	<th><?php echo $paginator->sort('stadiulAutorizarii');?></th>
	<th><?php echo $paginator->sort('observatii');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($products as $product):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $product['Product']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($product['User']['name'], array('controller'=> 'users', 'action'=>'view', $product['User']['id'])); ?>
		</td>
		<td>
			<?php echo $product['Product']['name']; ?>
		</td>
		<td>
			<?php echo $product['Product']['date']; ?>
		</td>
		<td>
			<?php echo $product['Product']['created']; ?>
		</td>
		<td>
			<?php echo $product['Product']['modified']; ?>
		</td>
		<td>
			<?php echo $product['Product']['modificare']; ?>
		</td>
		<td>
			<?php echo $product['Product']['furnizor']; ?>
		</td>
		<td>
			<?php echo $product['Product']['producator']; ?>
		</td>
		<td>
			<?php echo $product['Product']['taraOrigine']; ?>
		</td>
		<td>
			<?php echo $product['Product']['grupaProdusului']; ?>
		</td>
		<td>
			<?php echo $product['Product']['descriere']; ?>
		</td>
		<td>
			<?php echo $product['Product']['posibileAplicatii']; ?>
		</td>
		<td>
			<?php echo $product['Product']['stadiulAutorizarii']; ?>
		</td>
		<td>
			<?php echo $product['Product']['observatii']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $product['Product']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $product['Product']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Product', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Alergens', true), array('controller'=> 'product_alergens', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Alergen', true), array('controller'=> 'product_alergens', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Caracteristics', true), array('controller'=> 'product_caracteristics', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Caracteristic', true), array('controller'=> 'product_caracteristics', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Genetic Modifications', true), array('controller'=> 'product_genetic_modifications', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Genetic Modification', true), array('controller'=> 'product_genetic_modifications', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Standards', true), array('controller'=> 'product_standards', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Standard', true), array('controller'=> 'product_standards', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>
</div>
