<div ><br/>
		
	
	
	
	
 echo $html->link(__('Editeaza agentii alergeni pentru acest ingredient', true), 
array('action'=>'edit',$ingred, $ingredientAlergen['IngredientAlergen']['id']),array('class'=>'btn'), null, false); ?>&nbsp;|&nbsp;<? echo $html->link(__('Sterge agentii alergeni', true), 
array('action'=>'delete', $ingredientAlergen['IngredientAlergen']['id']), array('class'=>'btn'), 
sprintf(__('Esti sigur ca vrei sa stergi # %s?', true), $ingredientAlergen['IngredientAlergen']['id']));?>&nbsp;|&nbsp;

<?php echo $html->link(__('Vizualizare ingredient',true), array('controller'=>'ingredients','action'=>'view', 
		$ingred),array('class'=>'btn'), null, false); ?>

<?php //echo $html->link(__('Listeaza tori agentii alergeni', true), array('action'=>'index')); ?>
		
<? if (isset($id)) {?>
<h2>Agentii alergeni ai ingredientului</h2>
	<table style="text-align: left;border:1px solid #ccc;" width=50% align="left"><?php $i = 0; $class = ' class="altrowdl"';?>
		<tr><td<?php if ($i % 2 == 0) echo $class;?> ><?php __('Ingredient'); ?></td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ingredientAlergen['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredientAlergen['Ingredient']['id'])); ?>
			&nbsp;
		</td></tr>
		<!--<td<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['date']; ?>
			&nbsp;
		</td>-->
		<td<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['created']; ?>
			&nbsp;
		</td></tr>
		<!--
		<td<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['modified']; ?>
			&nbsp;
		</td>
		<td<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificare'); ?></td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['modificare']; ?>
			&nbsp;
		</td>
		<td<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['data']; ?>
			&nbsp;
		</td>-->
		<td<?php if ($i % 2 == 0) echo $class;?>>Cereale care contin gluten(grau, secara <br/>orz, ovaz sau hibrizi) si derivate</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['erealeGluten']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>><b>Crustacee si derivate</b></td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['crustacee']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Oua si derivate</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['oua']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Peste si derivate</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['peste']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Alune si derivate</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['alune']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Soia si derivate</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['soia']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Lapte si derivate inclusiv lactoza</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['lapte']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Nuci (ex. migdale, arahide, nuci<br/>nuci braziliene,fistic) si derivate</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['nuci']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Telina si derivate</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['telina']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Mustar si derivate</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['mustar']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Seminte de susan si derivate</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['susan']; ?>
			&nbsp;
		</td></tr>
		<td<?php if ($i % 2 == 0) echo $class;?>>Dioxid de sulf si sulfiti la concentratii<br/>
												mai mari de 10 mg/kg sau 10 mg/litru<br/>
												exprimate ca SO2
												
	</td>
		<td<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientAlergen['IngredientAlergen']['dioxidSulf']; ?>
			&nbsp;
		</td></tr>
	</table>
<br/><br/><br/>
	
</div>
<?}else {echo '<br/><br/>Nu au fost introduse date<br/><br/><br/><br/>';}?>
