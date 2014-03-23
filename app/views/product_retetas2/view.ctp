<div>	<?php echo $html->link(__('Adauga reteta acestui produs', true), array('action'=>'add', $prod));?>&nbsp;|&nbsp;
	<?php echo $html->link(__('Editeaza reteta acestui produs', true), array('action'=>'edit', $productReteta['ProductReteta']['id'])); ?>&nbsp;|&nbsp;
	<?php echo $html->link(__('Sterge reteta acestui produs', true), array('action'=>'delete', $productReteta['ProductReteta']['id']), null, sprintf(__('Esti sigur(a) ca vrei sa stergi # %s?', true), $productReteta['ProductReteta']['id'])); ?>&nbsp;|&nbsp;
</div>	


<div class="productRetetas view">
<h2>Reteta Produs <?php echo $html->link($productReteta['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?></h2>
	<?php $i = 0; $class = ' class="altrow"';?>
		
		
<table>
	<th>Nr.</th>
	<th>Ingredient</th>
    <th>Procent<?php //echo $paginator->sort('Procent','procent'.$i);?></th>	
    <th>Text</th>	
<? for($i=1;$i<21;$i++)
{ if (isset($productReteta['ProductReteta']['ingredient_id'.$i])){?>

	<tr<?php if ($i % 2 == 0) echo $class;?>>
	<td width="40" align="center"><? echo $i;?></td>
		<td> <? echo $html->value('ProductReteta.ingredient_id'.$i).'g';?>
			<?php echo $html->link($productReteta['ProductReteta']['ingredient_id'.$i], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['ProductReteta']['ingredient_id'.$i])); ?>
				
		<td width="40" align="center"><?php echo $productReteta['ProductReteta']['procent'.$i]; ?></td>
		<td width="150" align="center"><?php echo $productReteta['ProductReteta']['text'.$i]; ?></td>
	</tr>
	
	<?}}?>
</table>		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<!--		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productReteta['ProductReteta']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($productReteta['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ingredient'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Procent'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productReteta['ProductReteta']['procent']; ?>
			&nbsp;
		</dd>-->
	
</div>


























