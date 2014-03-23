<div class="products view">
<h2><?php  __('Product');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($product['User']['name'], array('controller'=> 'users', 'action'=>'view', $product['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificare'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['modificare']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Furnizor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['furnizor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Producator'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['producator']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('TaraOrigine'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['taraOrigine']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrupaProdusului'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['grupaProdusului']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descriere'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['descriere']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('PosibileAplicatii'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['posibileAplicatii']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StadiulAutorizarii'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['stadiulAutorizarii']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observatii'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['observatii']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Product', true), array('action'=>'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Product', true), array('action'=>'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Products', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('action'=>'add')); ?> </li>
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
	<div class="related">
		<h3><?php  __('Related Product Alergens');?></h3>
	<?php if (!empty($product['ProductAlergen'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['product_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['date'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificare');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['modificare'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['data'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('cerealeGluten');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['cerealeGluten'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Crustacee');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['crustacee'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Oua');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['oua'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Peste');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['peste'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alune');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['alune'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Soia');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['soia'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lapte');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['lapte'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nuci');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['nuci'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telina');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['telina'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mustar');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['mustar'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Susan');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['susan'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('DioxidSulf');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductAlergen']['dioxidSulf'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Product Alergen', true), array('controller'=> 'product_alergens', 'action'=>'edit', $product['ProductAlergen']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php  __('Related Product Caracteristics');?></h3>
	<?php if (!empty($product['ProductCaracteristic'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['product_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['date'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificare');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['modificare'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aspect');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['aspect'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Culoare');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['culoare'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Miros');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['miros'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gust');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['gust'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brix');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['brix'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vascozitate');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['vascozitate'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ph');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['ph'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ValKj');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['valKj'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ValKcal');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['valKcal'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Proteine');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['proteine'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ProteineVegetale');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['proteineVegetale'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ProteineAnimale');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['proteineAnimale'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Carbohidrati');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['carbohidrati'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CarboxidratiZahar');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['carboxidratiZahar'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CarbohidratiPolioli');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['carbohidratiPolioli'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CarbohidratiAmidon');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['carbohidratiAmidon'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Grasimi');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['grasimi'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrasimiSaturate');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['grasimiSaturate'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrasimiMonoNesaturate');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['grasimiMonoNesaturate'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrasimiPoliNesaturate');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['grasimiPoliNesaturate'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrasimiPoliNesaturateVegetale');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['grasimiPoliNesaturateVegetale'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrasimiPoliNesaturateAnimale');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['grasimiPoliNesaturateAnimale'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fibredietetice');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['fibredietetice'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Minerale');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['minerale'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('MineraleSodiu');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['mineraleSodiu'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Umiditate');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['umiditate'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alcool');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['alcool'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aux1');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['aux1'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aux2');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['aux2'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aux3');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductCaracteristic']['aux3'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Product Caracteristic', true), array('controller'=> 'product_caracteristics', 'action'=>'edit', $product['ProductCaracteristic']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php  __('Related Product Genetic Modifications');?></h3>
	<?php if (!empty($product['ProductGeneticModification'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['product_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['date'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificare');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['modificare'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NrProdus');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['nrProdus'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Denumire');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['denumire'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('UltimaModificare');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['ultimaModificare'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sursa');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['sursa'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ingredient');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['ingredient'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('OrigineMg');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['origineMg'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('FaraOrigine');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['faraOrigine'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SursaBotanica');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['sursaBotanica'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('TaraOrgine');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['taraOrgine'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observatii');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductGeneticModification']['observatii'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Product Genetic Modification', true), array('controller'=> 'product_genetic_modifications', 'action'=>'edit', $product['ProductGeneticModification']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php  __('Related Product Standards');?></h3>
	<?php if (!empty($product['ProductStandard'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['Id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['product_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['date'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificare');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['modificare'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NrGermeni');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['nrGermeni'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NrGermeniViz');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['nrGermeniViz'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NrGermeniResp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['nrGermeniResp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('DrojdiiViz');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['drojdiiViz'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('DrojdiiResp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['drojdiiResp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('MucegaiViz');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['mucegaiViz'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('MucegaiResp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['mucegaiResp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StaphylococusViz');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['staphylococusViz'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('StaphylococusResp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['staphylococusResp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SalmonellaViz');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['salmonellaViz'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SalmonellaResp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['salmonellaResp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ListeriaViz');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['listeriaViz'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ListeriaResp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['listeriaResp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('BacillusViz');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['bacillusViz'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('BacillusResp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['bacillusResp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NustiuViz');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['nustiuViz'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NustiuResp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['nustiuResp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aux1Viz');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['aux1Viz'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aux1Resp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['aux1Resp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pb');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['pb'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hg');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['hg'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('As');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['as'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zn');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['zn'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cu');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['cu'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ValabilitateViz');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['valabilitateViz'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ValabilitateResp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['valabilitateResp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('DataVerificare');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['dataVerificare'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aux1');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['aux1'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aux2');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $product['ProductStandard']['aux2'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Product Standard', true), array('controller'=> 'product_standards', 'action'=>'edit', $product['ProductStandard']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Ingredients');?></h3>
	<?php if (!empty($product['Ingredient'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modificare'); ?></th>
		<th><?php __('Furnizor'); ?></th>
		<th><?php __('Producator'); ?></th>
		<th><?php __('TaraOrigine'); ?></th>
		<th><?php __('GrupaProdusului'); ?></th>
		<th><?php __('Descriere'); ?></th>
		<th><?php __('PosibileAplicatii'); ?></th>
		<th><?php __('StadiulAutorizarii'); ?></th>
		<th><?php __('Tip'); ?></th>
		<th><?php __('Observatii'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Ingredient'] as $ingredient):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ingredient['id'];?></td>
			<td><?php echo $ingredient['user_id'];?></td>
			<td><?php echo $ingredient['name'];?></td>
			<td><?php echo $ingredient['date'];?></td>
			<td><?php echo $ingredient['created'];?></td>
			<td><?php echo $ingredient['modified'];?></td>
			<td><?php echo $ingredient['modificare'];?></td>
			<td><?php echo $ingredient['furnizor'];?></td>
			<td><?php echo $ingredient['producator'];?></td>
			<td><?php echo $ingredient['taraOrigine'];?></td>
			<td><?php echo $ingredient['grupaProdusului'];?></td>
			<td><?php echo $ingredient['descriere'];?></td>
			<td><?php echo $ingredient['posibileAplicatii'];?></td>
			<td><?php echo $ingredient['stadiulAutorizarii'];?></td>
			<td><?php echo $ingredient['tip'];?></td>
			<td><?php echo $ingredient['observatii'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'ingredients', 'action'=>'view', $ingredient['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'ingredients', 'action'=>'edit', $ingredient['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'ingredients', 'action'=>'delete', $ingredient['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($product['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Login'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Level'); ?></th>
		<th><?php __('Active'); ?></th>
		<th><?php __('LastLogin'); ?></th>
		<th><?php __('RegistrationDate'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['login'];?></td>
			<td><?php echo $user['name'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['level'];?></td>
			<td><?php echo $user['active'];?></td>
			<td><?php echo $user['lastLogin'];?></td>
			<td><?php echo $user['registrationDate'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'users', 'action'=>'view', $user['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'users', 'action'=>'edit', $user['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'users', 'action'=>'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
