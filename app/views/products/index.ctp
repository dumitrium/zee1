
<div class="products index">
<table style="border:0px;margin:0px;padding:0px;" width="100%" class="" id=""><tr><td style="border:0px;margin:0px;padding:0px;vertical-align:bottom;"><h2>Lista Produse</h2></td> <td width="300"style="background:#eeeeee;vertical-align:middle;margin:5px;" align="right" ><? echo $this->element('form_searchP');?></td></tr></table>	
<p class="" id="" style="margin:0px;margin-bottom:4px;padding:0px;">
<?php
echo $paginator->counter(array(
'format' => __('Pagina <b>%page%</b> din <b>%pages%</b>, afiseaza produsele <b>%start%</b> - <b>%end%</b> dintr-un total de <b>%count%</b> produse.', true)
));

?></p>
<table cellpadding="0" cellspacing="0" style="text-align:center;border:1px solid #ccc;" width="100%" id="result-list">
<tr>
	<th><?php echo $paginator->sort('ID','id');?></th>
	<th><?php echo $paginator->sort('Denumire','name');?></th>
	<th><?php echo $paginator->sort('Cod','cod');?></th>
<!--	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('modificare');?></th>-->
<th><?php echo $paginator->sort(' Grupa ','grupaProdusului');?></th>
<th>Caracteristici</th>
<th>V.nutritionale</th>	
<th>Alergeni</th>
	<th>Mod.Genetice</th>
	<th>Microbiologie</th>
	<th>MicrobiologieII</th>
	<th>Reteta</th>	
	<th>Ingredienti</th>	
	<th><?php echo $paginator->sort('Valab.','valabilitate');?></th>
	<th>Alerte</th>
<!--	<th class="actions"><?php __('Actions');?></th>-->
</tr>
<?php
$i = 0;
foreach ($products as $product):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="result-list"';
	}
	else{
		$class = ' class="result-list2"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $product['Product']['id']; ?>
		</td>
		<td>
		
		<b><?php echo $html->link($product['Product']['name'], array('action'=>'view', 
		$product['Product']['id'])); ?>
			</b>
			
			
			
		</td>
		<td>
			<?php echo $product['Product']['cod']; ?>
		</td>
		
        
       
        
		<td>
			<?php echo $product['Product']['grupaProdusului']; ?>
		</td>
		
		<td>
			<?php if (isset($product['ProductCaracteristic']['id'])){$btn='btn';}
			else {$btn='btn1';}
			
			
		echo $html->link(
					'caracteristici',
					array('controller'=> 'product_caracteristics', 'action'=>'view',$product['Product']['id'],$product['ProductCaracteristic']['id']),
					array('class'=>$btn), null, false
				);
			?>
			</td>
		
			<td>
			<?php echo $html->link(
					'v.nutritionale',
					array('controller'=> 'product_retetas', 'action'=>'nutritional',$product['Product']['id']),
					array('class'=>'btn'), null, false
				);
			?>
			</td>
			<td>
			<?php echo $html->link(
					'alergeni',
					array('controller'=> 'product_retetas', 'action'=>'alergeni',$product['Product']['id']),
					array('class'=>'btn'), null, false
				);
			?>
			</td>
			<td>
			<?php echo $html->link(
					'm.genetice',
					array('controller'=> 'product_retetas', 'action'=>'genetic',$product['Product']['id']),
					array('class'=>'btn'), null, false
				);
			?>
			</td>
			<td>
			<?php echo $html->link(
					'microbiologie',
					array('controller'=> 'product_retetas', 'action'=>'microb',$product['Product']['id']),
					array('class'=>'btn'), null, false
				);
			?>
			</td>
			<td>
			<?php if (isset($product['ProductStandard']['id'])){$btn='btn';}
			else {$btn='btn1';}
			
			echo $html->link(
					'microbiologie 2',
					array('controller'=> 'product_standards', 'action'=>'view',$product['Product']['id'],$product['ProductStandard']['id']),
					array('class'=>$btn), null, false
				);
			?>
			</td>
			<td>
			<?php echo $html->link(
					'reteta',
					array('controller'=> 'product_retetas', 'action'=>'add',$product['Product']['id']),
					array('class'=>'btn'), null, false
				);
			?>
			</td>
			
						<td>
			<?php echo $html->link(
					'ingredienti',
					array('controller'=> 'product_retetas', 'action'=>'ingredi',$product['Product']['id']),
					array('class'=>'btn'), null, false
				);
			?>
		</td>
						<td>
			<?php echo $product['Product']['valabilitate'].' luni'; ?>
		</td>
		<td>
			<b style="color:red;">alerte</b>
		</td>
						
		<!--<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $product['Product']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $product['Product']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?>
		</td>-->
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>

