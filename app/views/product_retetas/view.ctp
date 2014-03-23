<?php echo $html->link(__('Adauga un alt ingredient la aceasta reteta', true), 
array('action'=>'add', $prod));?>&nbsp;|&nbsp;
<?php echo $html->link(__('Editeaza reteta', true), 
array('action'=>'edit',$productReteta['ProductReteta']['id'])); ?> &nbsp;|&nbsp;
<?php echo $html->link(__('Sterge reteta', true), 
array('action'=>'delete', $productReteta['ProductReteta']['id']), null, 
sprintf(__('Esti sigur(a) ca vrei sa stergi) # %s?', true), $productReteta['ProductReteta']['id'])); ?> &nbsp;|&nbsp;
<?php echo $html->link(__('Listare ingrediente dupa reteta', true), 
array('action'=>'index')); ?>



<div class="productRetetas view">
<h2><?php  __('ProductReteta');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
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
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Functia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productReteta['ProductReteta']['functia']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit ProductReteta', true), array('action'=>'edit', $productReteta['ProductReteta']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete ProductReteta', true), array('action'=>'delete', $productReteta['ProductReteta']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productReteta['ProductReteta']['id'])); ?> </li>
		<li><?php echo $html->link(__('List ProductRetetas', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New ProductReteta', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>
</div>
