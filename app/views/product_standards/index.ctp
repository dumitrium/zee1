<div class="productStandards index">
<h2><?php __('ProductStandards');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Id');?></th>
	<th><?php echo $paginator->sort('product_id');?></th>
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
foreach ($productStandards as $productStandard):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $productStandard['ProductStandard']['Id']; ?>
		</td>
		<td>
			<?php echo $html->link($productStandard['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productStandard['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['date']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['created']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['modified']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['modificare']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['nrGermeni']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['nrGermeniViz']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['nrGermeniResp']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['drojdiiViz']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['drojdiiResp']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['mucegaiViz']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['mucegaiResp']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['staphylococusViz']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['staphylococusResp']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['salmonellaViz']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['salmonellaResp']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['listeriaViz']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['listeriaResp']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['bacillusViz']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['bacillusResp']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['nustiuViz']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['nustiuResp']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['aux1Viz']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['aux1Resp']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['pb']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['hg']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['as']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['zn']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['cu']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['valabilitateViz']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['valabilitateResp']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['dataVerificare']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['aux1']; ?>
		</td>
		<td>
			<?php echo $productStandard['ProductStandard']['aux2']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $productStandard['ProductStandard']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $productStandard['ProductStandard']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $productStandard['ProductStandard']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productStandard['ProductStandard']['id'])); ?>
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
		<li><?php echo $html->link(__('New ProductStandard', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
