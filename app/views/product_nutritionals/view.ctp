<?php echo $html->link(__('Adauga valorile nutritive pentru acest produs', true), 
	array('action'=>'add', $prod));?>&nbsp;|&nbsp;
	<?php echo $html->link(__('Editeaza valorile nutritive ale acestui produs', true), 
	array('action'=>'edit',$prod, $productNutritional['ProductNutritional']['id'])); ?>&nbsp;|&nbsp;
<?php //echo $html->link(__('Sterge caracteristici ingredient', true), array('action'=>'delete', $productNutritional['IngredientAlergen']['id']), null, sprintf(__('Esti sigur(a) ca vrei sa stergi) # %s?', true), $productNutritional['ProductNutrity']['id'])); ?> </li>
<?php   echo $html->link(__('Sterge valori nutritive produs', true), array('action'=>'delete', 
$form->value('ProductNutritional.id')), null, sprintf(__('Esti sigur(a) ca vrei sa stergi # %s?', true), 
$form->value('ProductNutritional.id'))); ?>&nbsp;|&nbsp;
<?php echo $html->link(__('Listeaza valorile nutritive ale tuturor produselor', true), 
array('action'=>'index')); ?> 
<div class="ingredientCaracteristics">
<h2>Valori nutritive produs</h2>
<dl style="width:600px;"><?php $i = 0; $class = ' class="altrowd"';?>
<dt<?php if ($i % 2 == 0) echo $class;?>>Produs</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($productNutritional['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productNutritional['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutritional']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creat la'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutritional']['created']; ?>
			&nbsp;
		</dd></dl>	

<table align="left" >
	<tr><td colspan="2"><b>ANALIZA/VALOARE NUTRITIVA</b></td></td><td></tr>	
	<tr><td><u>Valoare energetica</u></td><td width="50">	<?php echo $productNutritional['ProductNutritional']['valKj']; ?></td><td>kJ/100g</td></tr>
		<tr><td> </td><td><?php echo $productNutritional['ProductNutritional']['valKcal']; ?></td><td>kcal/100g</td></tr>
		
	<tr><td colspan="2"><u>Valoare nutritiva</u></td></tr>
	<tr><td><b>Proteine</b></td><td><? //echo $form->input('proteine');?></td></tr>
	<tr><td> - vegetale</td><td><?php echo $productNutritional['ProductNutritional']['proteineVegetale']; ?></td><td>g/100g</td></tr>
	<tr><td> - animale</td><td><?php echo $productNutritional['ProductNutritional']['proteineAnimale']; ?></td><td>g/100g</td></tr>
	
	<tr><td colspan="2"><B>Carbohidrati</b></td><td><? //echo $form->input('carbohidrati');?></td></tr>
	<tr><td> - zaharuri</td><td><? echo $productNutritional['ProductNutritional']['carboxidratiZahar']; ?></td><td>g/100g</td></tr>
	<tr><td> - polioli</td><td><? echo $productNutritional['ProductNutritional']['carbohidratiPolioli']; ?></td><td>g/100g</td></tr>
	<tr><td> - amidon</td><td><? echo $productNutritional['ProductNutritional']['carbohidratiAmidon']; ?></td><td>g/100g</td></tr>
	
	<tr><td colspan="2"><B>Grasimi</b></td><td><? //echo $form->input('grasimi');?></td></tr>
	<tr><td> - saturate</td><td><?php echo $productNutritional['ProductNutritional']['grasimiSaturate']; ?></td><td>g/100g</td></tr>
	<tr><td> - monosaturate</td><td><?php echo $productNutritional['ProductNutritional']['grasimiMonoNesaturate']; ?></td><td>g/100g</td></tr>
	<tr><td> - polisaturate</td><td><?php echo $productNutritional['ProductNutritional']['grasimiPoliNesaturate']; ?></td><td>g/100g</td></tr>
    <tr><td> - vegetale</td><td><?php echo $productNutritional['ProductNutritional']['grasimiPoliNesaturateVegetale']; ?>
    	
    </td><td>g/100g</td></tr>
	<tr><td> - animale</td><td><?php echo $productNutritional['ProductNutritional']['grasimiPoliNesaturateAnimale']; ?></td><td>g/100g</td></tr>

    <tr><td ><b>Fibre dietetice</b></td><td><?php echo $productNutritional['ProductNutritional']['fibredietetice']; ?></td><td>g/100g</td></tr>

 <tr><td colspan="2"><b>Minerale</b></td><td><? //echo $form->input('minerale',array('label'=>''));?></td></td><td></tr>
<tr><td> - sodiu</td><td><?php echo $productNutritional['ProductNutritional']['mineraleSodiu']; ?></td><td>mg/100g</td></tr>
<tr><td> - calciu</td><td><?php echo $productNutritional['ProductNutritional']['mineraleCalciu']; ?></td><td>mg/100g</td></tr>
<tr><td> - fosfor</td><td><?php echo $productNutritional['ProductNutritional']['mineraleFosfor']; ?></td><td>mg/100g</td></tr>
<tr><td> - fier</td><td><?php echo $productNutritional['ProductNutritional']['mineraleFier']; ?></td><td>mg/100g</td></tr>
<tr><td> - magneziu</td><td><?php echo $productNutritional['ProductNutritional']['mineraleMagneziu']; ?></td><td>mg/100g</td></tr>
<tr><td> - zinc</td><td><?php echo $productNutritional['ProductNutritional']['mineraleZinc']; ?></td><td>mg/100g</td></tr>
<tr><td> - iod</td><td><?php echo $productNutritional['ProductNutritional']['mineraleIod']; ?></td><td>mg/100g</td></tr>

<tr><td><b>Umiditate</b></td><td><?php echo $productNutritional['ProductNutritional']['umiditate']; ?></td><td>g/100g</td></tr>

<tr><td><b>Alcool</b></td><td><?php echo $productNutritional['ProductNutritional']['alcool']; ?></td><td>g/100g</td></tr>
 <tr><td colspan="2"><b>VITAMINE</b></td></td><td></tr>

<tr><td><b>Vitamine</b></td><td><?php echo $productNutritional['ProductNutritional']['vitamine']; ?></td><td>g/100g</td></tr>
<tr><td><b>Vitamina A</b></td><td><?php echo $productNutritional['ProductNutritional']['vitaminaA']; ?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina E</b></td><td><?php echo $productNutritional['ProductNutritional']['vitaminaE']; ?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina C</b></td><td><?php echo $productNutritional['ProductNutritional']['vitaminaC']; ?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B1(Tiamina)</b></td><td><?php echo $productNutritional['ProductNutritional']['vitaminaB1']; ?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B2(Riboflavina)</b></td><td><?php echo $productNutritional['ProductNutritional']['vitaminaB2']; ?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B6(Piridoxina)</b></td><td><?php echo $productNutritional['ProductNutritional']['vitaminaB6']; ?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina pp(Niacina)</b></td><td><?php echo $productNutritional['ProductNutritional']['vitaminaPp']; ?></td><td>mg/100g</td></tr>
<tr><td><b>Acid folic</b></td><td><?php echo $productNutritional['ProductNutritional']['acidFolic']; ?></td><td>ug/100g</td></tr>
<tr><td><b>Vitamina D</b></td><td><?php echo $productNutritional['ProductNutritional']['vitaminaD']; ?></td><td>ug/100g</td></tr>
<tr><td><b>Vitamina B12</b></td><td><?php echo $productNutritional['ProductNutritional']['vitaminaB12']; ?></td><td>ug/100g</td></tr>
<tr><td><b>Biotina</b></td><td><?php echo $productNutritional['ProductNutritional']['biotina']; ?></td><td>mg/100g</td></tr>
<tr><td><b>Acid pantotenic</b></td><td><?php echo $productNutritional['ProductNutritional']['acidPantotenic']; ?></td><td>mg/100g</td></tr>

</table></div>




















<!--


<div class="productNutrities view">
<h2><?php  __('ProductNutrity');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($productNutritional['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productNutritional['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificare'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['modificare']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ValKj'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['valKj']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ValKcal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['valKcal']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Proteine'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['proteine']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ProteineVegetale'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['proteineVegetale']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ProteineAnimale'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['proteineAnimale']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Carbohidrati'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['carbohidrati']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CarboxidratiZahar'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['carboxidratiZahar']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CarbohidratiPolioli'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['carbohidratiPolioli']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CarbohidratiAmidon'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['carbohidratiAmidon']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Grasimi'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['grasimi']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrasimiSaturate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['grasimiSaturate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrasimiMonoNesaturate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['grasimiMonoNesaturate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrasimiPoliNesaturate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['grasimiPoliNesaturate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrasimiPoliNesaturateVegetale'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['grasimiPoliNesaturateVegetale']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrasimiPoliNesaturateAnimale'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['grasimiPoliNesaturateAnimale']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fibredietetice'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['fibredietetice']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Minerale'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['minerale']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('MineraleSodiu'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['mineraleSodiu']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Umiditate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['umiditate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alcool'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['alcool']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aux1'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['aux1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aux2'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['aux2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aux3'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productNutritional['ProductNutrity']['aux3']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit ProductNutrity', true), array('action'=>'edit', $productNutritional['ProductNutrity']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete ProductNutrity', true), array('action'=>'delete', $productNutritional['ProductNutrity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productNutritional['ProductNutrity']['id'])); ?> </li>
		<li><?php echo $html->link(__('List ProductNutrities', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New ProductNutrity', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>-->
