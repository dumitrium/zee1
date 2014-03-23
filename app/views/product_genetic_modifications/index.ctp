<div class="productGeneticModifications index">
<h2><?php __('ProductGeneticModifications');?></h2>
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
foreach ($productGeneticModifications as $productGeneticModification):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($productGeneticModification['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productGeneticModification['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['date']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['created']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['modified']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['modificare']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['nrProdus']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['denumire']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['ultimaModificare']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['sursa']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['ingredient']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['origineMg']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['faraOrigine']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['sursaBotanica']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['taraOrgine']; ?>
		</td>
		<td>
			<?php echo $productGeneticModification['ProductGeneticModification']['observatii']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $productGeneticModification['ProductGeneticModification']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $productGeneticModification['ProductGeneticModification']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $productGeneticModification['ProductGeneticModification']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productGeneticModification['ProductGeneticModification']['id'])); ?>
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
		<li><?php echo $html->link(__('New ProductGeneticModification', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
