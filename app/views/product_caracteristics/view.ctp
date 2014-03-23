<? if (!isset($id)) {
echo $html->link(__('Adauga caracteristicile pentru acest produs', true), 
	array('action'=>'add', $prod),array('class'=>'btn'));?>&nbsp;|&nbsp;
	<?php 
	}else{
	echo $html->link(__('Editeaza caracteristicile acestui produs', true), 
	array('action'=>'edit',$productCaracteristic['ProductCaracteristic']['id']),array('class'=>'btn')); ?>&nbsp;|&nbsp;
<?php //echo $html->link(__('Sterge caracteristici ingredient', true), array('action'=>'delete', $ingredientCaracteristic['IngredientAlergen']['id']), null, sprintf(__('Esti sigur(a) ca vrei sa stergi) # %s?', true), $ingredientCaracteristic['IngredientCaracteristic']['id'])); ?> </li>
<?php   echo $html->link(__('Sterge caracteristici produs', true), array('action'=>'delete', 
$form->value('ProductCaracteristic.id')), array('class'=>'btn'), sprintf(__('Esti sigur(a) ca vrei sa stergi # %s?', true), 
$form->value('ProductCaracteristic.id'))); ?>&nbsp;|&nbsp;<?}?>
<?php echo $html->link(__('Vizualizare produs',true), array('controller'=>'products','action'=>'view', 
		$prod),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<?
		echo $html->link(__('Vizualizare reteta produs',true), array('controller'=>'product_retetas','action'=>'add', 
			$prod),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<? if (isset($id)) {
		
		echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_car', $prod, $id), array('escape' => false, 'style'=>'vertical-align:-4px;'));} ?>

<?php /*echo $html->link(__('Listeaza caracteristicile tuturor produselor', true), 
array('action'=>'index')); */?> 
<? if (isset($id)) {?>
<div class="ingredientCaracteristics">
<h2>Caracteristici produs</h2>
<dl style="width:600px;"><?php $i = 0; $class = ' class="altrowd"';?>
<dt<?php if ($i % 2 == 0) echo $class;?>>Produs</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($productCaracteristic['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productCaracteristic['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creat la'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['created']; ?>
			&nbsp;
		</dd></dl>	

<table align="left" >


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  ><b>STANDARDE FIZICE/CHIMICE</b></td></tr>
		
 <tr><td width="120">Aspect</td><td colspan="2">     <?php echo $productCaracteristic['ProductCaracteristic']['aspect']; ?></td></tr>
 <tr><td>Culoare</td><td colspan="2">   <?php echo $productCaracteristic['ProductCaracteristic']['culoare']; ?></td></tr>
 <tr><td>Miros</td><td colspan="2">   	<?php echo $productCaracteristic['ProductCaracteristic']['miros']; ?></td></tr>
 <tr><td>gust</td><td colspan="2">   	  <?php echo $productCaracteristic['ProductCaracteristic']['gust']; ?></td></tr>
 <tr><td>Brix</td><td colspan="2">   	 <?php echo $productCaracteristic['ProductCaracteristic']['brix']; ?></td></tr>
 <tr><td>Vascozitate</td><td colspan="2"> <?php echo $productCaracteristic['ProductCaracteristic']['vascozitate']; ?></td></tr>
 <tr><td> Ph</td><td colspan="2">        <?php echo $productCaracteristic['ProductCaracteristic']['ph']; ?></td></tr>
 </table></div>
<?}?>




























<!--
<div class="productCaracteristics view">
<h2><?php  __('ProductCaracteristic');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($productCaracteristic['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productCaracteristic['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificare'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['modificare']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aspect'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['aspect']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Culoare'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['culoare']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Miros'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['miros']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gust'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['gust']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brix'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['brix']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vascozitate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['vascozitate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ph'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCaracteristic['ProductCaracteristic']['ph']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit ProductCaracteristic', true), array('action'=>'edit', $productCaracteristic['ProductCaracteristic']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete ProductCaracteristic', true), array('action'=>'delete', $productCaracteristic['ProductCaracteristic']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productCaracteristic['ProductCaracteristic']['id'])); ?> </li>
		<li><?php echo $html->link(__('List ProductCaracteristics', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New ProductCaracteristic', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>-->
