












<table align="left" width="900" border="1" style="border:1px solid #ccc;"><?

$tableCap='<tr bgcolor="#efedfc"><td  ><b>Sursa</b></td>
	<td><b>Ingredient</b></td>
	<td  ><b>Sub-ingredient(*)</b></td>
	<td  ><b>Origine-mg da/nu</b></td>
	<td  ><b>Daca nu,1,2,3,4(**)</b></td>
	<td  ><b>Daca 3,sursa botanica</b></td>
		<td  ><b>Daca 4,tara de origine</b></td></tr>';
$tableSoia='<table border="1">';$tablePrumb='<table>';$tableRapita='<table>';$tableBumbac='<table>';
	
	foreach($productRetetas as $productReteta){
if (isset($productReteta['Ingredient']['IngredientGeneticModification']['soiaIngredient']))
	{$tableSoia=$tableSoia.'<tr><td>'.$productReteta['Ingredient']['name'].'</td><td>'.
	$productReteta['IngredientGeneticModification']['soiaIngredient'].'</td><td>'.
	$productReteta['IngredientGeneticModification']['soiaSub'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['soiaOrigine'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['soiaNu'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['soiaSursa'].'</td><td>'.
			$productReteta['IngredientGeneticModification']['soiaTara'].'</td></tr>';}

if (isset($productReteta['Ingredient']['IngredientGeneticModification']['porumbIngredient']))
	{$tablePorumb=$tablePorumb.'<tr><td>'.$productReteta['Ingredient']['name'].'</td><td>'.
	$productReteta['IngredientGeneticModification']['porumbIngredient'].'</td><td>'.
	$productReteta['IngredientGeneticModification']['porumbSub'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['porumbOrigine'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['porumbNu'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['porumbSursa'].'</td><td>'.
			$productReteta['IngredientGeneticModification']['porumbTara'].'</td></tr>';}

if (isset($productReteta['Ingredient']['IngredientGeneticModification']['rapitaIngredient']))
	{$tableRapita=$tableRapita.'<tr><td>'.$productReteta['Ingredient']['name'].'</td><td>'.
	$productReteta['IngredientGeneticModification']['rapitaIngredient'].'</td><td>'.
	$productReteta['IngredientGeneticModification']['rapitaSub'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['rapitaOrigine'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['rapitaNu'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['rapitaSursa'].'</td><td>'.
			$productReteta['IngredientGeneticModification']['rapitaTara'].'</td></tr>';}

if (isset($productReteta['Ingredient']['IngredientGeneticModification']['bumbacIngredient']))
	{$tableBumbac=$tableBumbac.'<tr><td>'.$productReteta['Ingredient']['name'].'</td><td>'.
	$productReteta['IngredientGeneticModification']['bumbacIngredient'].'</td><td>'.
	$productReteta['IngredientGeneticModification']['bumbacSub'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['bumbacOrigine'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['bumbacNu'].'</td><td>'.
		$productReteta['IngredientGeneticModification']['bumbacSursa'].'</td><td>'.
			$productReteta['IngredientGeneticModification']['bumbacTara'].'</td></tr>';}

}

?>
<table border="2">
	<tr><? echo $tableSoia;?></tr>
	<tr><? echo $tablePorumb;?></tr>
	<tr><? echo $tableRapita;?></tr>
	<tr><? echo $tableBumbac; ?></tr>
	</table>
	























<div class="productGeneticModifications view">
<h2><?php  __('ProductGeneticModification');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($productGeneticModification['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productGeneticModification['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificare'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['modificare']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NrProdus'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['nrProdus']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Denumire'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['denumire']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('UltimaModificare'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['ultimaModificare']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sursa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['sursa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ingredient'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['ingredient']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('OrigineMg'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['origineMg']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('FaraOrigine'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['faraOrigine']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SursaBotanica'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['sursaBotanica']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('TaraOrgine'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['taraOrgine']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observatii'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productGeneticModification['ProductGeneticModification']['observatii']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit ProductGeneticModification', true), array('action'=>'edit', $productGeneticModification['ProductGeneticModification']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete ProductGeneticModification', true), array('action'=>'delete', $productGeneticModification['ProductGeneticModification']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productGeneticModification['ProductGeneticModification']['id'])); ?> </li>
		<li><?php echo $html->link(__('List ProductGeneticModifications', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New ProductGeneticModification', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
