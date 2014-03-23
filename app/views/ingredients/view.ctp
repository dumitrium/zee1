<span class="actions" >
			<?php echo $html->link(__('Editeaza ingredient', true), array('action'=>'edit', $ingredient['Ingredient']['id']),array('class'=>'btn'), null, false); ?>
			&nbsp;|&nbsp;

			<? if ($ingredient['Ingredient']['tip']=='compus'){ echo $html->link(__('Editare/Vizualizare  subingredienti', true), array('controller'=>'ingredient_comps','action'=>'add', $ingredient['Ingredient']['id']),array('class'=>'btn'), null, false); ?>
			&nbsp;|&nbsp;<? } echo $html->link(__('Sterge ingredient', true), array('action'=>'delete', $ingredient['Ingredient']['id']),array('class'=>'btn'), sprintf(__('Esti sigur(a) ca vrei sa stergi # %s?', true), $ingredient['Ingredient']['id'])); ?>
		&nbsp;|&nbsp;<?php echo $html->link(__('Lista ingrediente', true), array('action'=>'index'),array('class'=>'btn'), null, false); ?>&nbsp;|&nbsp;
		<?php echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf', $ingredient['Ingredient']['id']), array('escape' => false, 'style'=>'vertical-align:-4px'));?>

		&nbsp;&nbsp;&nbsp;
		
		</span>
       
        <? if ($ingredient['Ingredient']['istoric']=='inactiv'){?>
       <div style="background:#e49794;color:#ffffff;width:564px;margin:10px 0px 15px 0px;font-size:12px;padding:5px 5px 5px 5px;" >Acest ingredient este inactiv. Poate fi reactivat din "Editeaza ingredient" campul "Istoric activ/inactiv"</div> 
        <? }?>
        
<div id="ingredientsview" style="width:550px;border:1px solid #ccc;">
<h2><u><? echo $ingredient['Ingredient']['name']; ?></u></h2>
	<dl><?php $i = 0; $class = ' class="altrowdl"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>>ID Ingredient</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['id']; ?>
			&nbsp;
		</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>>Cod</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['cod']; ?>
			&nbsp;
		</dd>
			
		<dt<?php if ($i % 2 == 0) echo $class;?>>Denumire comerciala</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['name']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>>Denumire chimica</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['name2']; ?>
			&nbsp;
		</dd>	
		<dt<?php if ($i % 2 == 0) echo $class;?>>Denumire E</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['namee']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Text etichetare</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['eticheta']; ?>
			&nbsp;
		</dd>
		
		
		<dt<?php if ($i % 2 == 0) echo $class;?>>Furnizor: </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['furnizor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Producator:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['producator']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Tara Origine: </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['taraOrigine']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Valabilitate: </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['garantie']; ?>&nbsp;luni
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Grupa Produsului: </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['grupaProdusului']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Subgrupa Produsului: </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['subgrupa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Descriere: </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['descriere']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Posibile Aplicatii: </dt><dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $ingredient['Ingredient']['posibileAplicatii']; ?>&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Stadiul Autorizarii: </dt><dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $ingredient['Ingredient']['stadiulAutorizarii']; ?>&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Istoric activ/inactiv: </dt><dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $ingredient['Ingredient']['istoric']; ?>&nbsp;</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Certificari: </dt><dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $ingredient['Ingredient']['certificari']; ?>&nbsp;</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Conditii de transport: </dt><dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $ingredient['Ingredient']['condTransp']; ?>&nbsp;</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Conditii de depozitare: </dt><dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $ingredient['Ingredient']['condDepo']; ?>&nbsp;</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Observatii:</dt><dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $ingredient['Ingredient']['observatii']; ?>&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Tip Ingredient:</dt><dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $ingredient['Ingredient']['tip']; ?>&nbsp;</dd>
		
		<? if ($ingredient['Ingredient']['tip']=='compus'){?>
		<dt<?php if ($i % 2 == 0) echo $class;?>>SUBINGREDIENTI</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<? echo $html->link(__('Editare/Vizualizare Subingredienti', true), array('controller'=>'ingredient_comps','action'=>'add', $ingredient['Ingredient']['id']),array('class'=>'btn'), null, false); ?>
		
			&nbsp;
		</dd><?}?>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Data creării</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Data ultimei modificari</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['modified']; ?>
			&nbsp;
		</dd>
		
	</dl>
</div>

	<div class="related">

	
<h2>Agentii alergeni ai ingredientului</h2>

	<?php if (isset($ingredient['IngredientAlergen']['id'])){?>
<?php echo $html->link(__('Editeaza alergenii ingredientului', true), array('controller'=> 'ingredient_alergens', 'action'=>'edit', $ingredient['Ingredient']['id'],$ingredient['IngredientAlergen']['id']),array('class'=>'btn'), null, false); ?>&nbsp;|&nbsp;<?php echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_a', $ingredient['Ingredient']['id']), array('escape' => false,'style'=>'vertical-align:-4px;'));?><br/><br/>
	<table style="text-align: left;border:1px solid #ccc;" width="470" align="left" cellpadding="5"><?php $i = 0; $class = 'class="altrowdl"';?>
		<tr bgcolor="#efedfc" ><td ><b>Denumire</b></td>
		<td width="110"><b>
	agenti alergeni
		</td><td width="110"><b>alergeni – cross contaminare</b></td></tr>
				
		<tr><td ><b>Cereale care contin gluten(grau, secara <br/>orz, ovaz sau hibrizi) si derivate</b></td>
		<td >
			<?php echo $ingredient['IngredientAlergen']['cerealeGluten']; ?>
			&nbsp;
		</td><td >
			<?php echo $ingredient['IngredientAlergen']['cerealeGlutenZ']; ?>
			&nbsp;
		</td></tr>
		
		
		<tr class="altrowdl"><td ><b>Crustacee si derivate</b></td>
		<td >
			<?php echo $ingredient['IngredientAlergen']['crustacee']; ?>
			&nbsp;
		</td><td >
			<?php echo $ingredient['IngredientAlergen']['crustaceeZ']; ?>
			&nbsp;
		</td></tr>
		
		
		
	
		<tr><td><b>Oua si derivate</b></td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['oua']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['ouaZ']; ?>
			&nbsp;
		</td>
		
	</tr>
		
		
		
		<tr class="altrowdl">
		<td><b>Peste si derivate</b></td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['peste']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['pesteZ']; ?>
			&nbsp;
		</td>
	</tr>
		
		
		<tr>
		<td><b>Alune si derivate</b></td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['alune']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['aluneZ']; ?>
			&nbsp;
		</td>
	</tr>
		
		
		
		
		<tr class="altrowdl">
		<td><b>Soia si derivate</b></td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['soia']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['soiaZ']; ?>
			&nbsp;
		</td>
	</tr>
		
		
		<tr>
		<td><b>Lapte si derivate inclusiv lactoza</b></td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['lapte']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['lapteZ']; ?>
			&nbsp;
		</td>
	</tr>
		
		
		
		
		<tr class="altrowdl">
		<td><b>Nuci (ex. migdale, arahide, nuci<br/>nuci braziliene,fistic) si derivate</b></td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['nuci']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['nuciZ']; ?>
			&nbsp;
		</td>
	</tr>
		
		
		
		<tr>
		<td><b>Telina si derivate</b></td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['telina']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['telinaZ']; ?>
			&nbsp;
		</td>
	</tr>
		
		
		
		<tr class="altrowdl">
		<td><b>Mustar si derivate</b></td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['mustar']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['mustarZ']; ?>
			&nbsp;
		</td>
	</tr>
		
		
		
		<tr>
		<td><b>Seminte de susan si derivate</b></td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['susan']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['susanZ']; ?>
			&nbsp;
		</td>
		
	</tr>
	<tr class="altrowdl">
        <td><b>Lupin si derivate</b></td>
		<td><?php echo $ingredient['IngredientAlergen']['lupin']; ?>&nbsp;</td>
		<td><?php echo $ingredient['IngredientAlergen']['lupinZ']; ?>&nbsp;</td>
		</tr>
		<tr>
		<td><b>Moluste si derivate</b></td>
		<td><?php echo $ingredient['IngredientAlergen']['moluste']; ?>&nbsp;</td>
		<td><?php echo $ingredient['IngredientAlergen']['molusteZ']; ?>&nbsp;</td>
		</tr>	
		
		
		<tr class="altrowdl">
		<td><b>Dioxid de sulf si sulfiti la concentratii<br/>
												mai mari de 10 mg/kg sau 10 mg/litru<br/>
												exprimate ca SO2</b>
												
	</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['dioxidSulf']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredient['IngredientAlergen']['dioxidSulfZ']; ?>
			&nbsp;
		</td>
		
	</tr>
	</table>
<br/><br/><br/>


	<?php }else{ echo '<br/>';
	echo $html->link(__('Adauga agentii alergeni pentru acest ingredient', true), 
array('controller'=>'ingredient_alergens','action'=>'add', $ingredient['Ingredient']['id']),array('class'=>'btn'), null, false); 
echo '<br/>';}
?>
	
	</div>
	
	
	
	
	
		<div class="related">
		<div class="ingredientCaracteristics">
		<h2>Caracteristicile ingredientului</h2>
		
<?php if (isset($ingredient['IngredientCaracteristic']['id'])){?>
			
			
<?php echo $html->link(__('Editeaza caracteristicile ingredientului', true), array('controller'=> 'ingredient_caracteristics', 'action'=>'edit', $ingredient['Ingredient']['id'],$ingredient['IngredientCaracteristic']['id']),array('class'=>'btn'), null, false); ?>&nbsp;|&nbsp;<?php echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_car', $ingredient['Ingredient']['id']), array('escape' => false, 'style'=>'vertical-align:-4px;'));?><br/><br/>

<dl style="width:600px;" style="background:#f7f7f7;border:1ps #ccc solid;"><?php $i = 0; $class = ' class="altrowd"';?>
<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ingredient'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ingredient['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredient['Ingredient']['id'])); ?>
			&nbsp;
		</dd>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['IngredientCaracteristic']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>>Creat</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['IngredientCaracteristic']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Modificat</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['IngredientCaracteristic']['modified']; ?>
			&nbsp;
		</dd>
		
	</dl>	

<table align="left" >


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  ><b>STANDARDE FIZICE/CHIMICE</b>
			</td></tr>
		
 <tr><td width="150">Aspect</td><td colspan="2">     <?php echo $ingredient['IngredientCaracteristic']['aspect']; ?></td></tr>
 <tr><td>Culoare</td><td colspan="2">   <?php echo $ingredient['IngredientCaracteristic']['culoare']; ?></td></tr>
 <tr><td>Miros</td><td colspan="2">   	<?php echo $ingredient['IngredientCaracteristic']['miros']; ?></td></tr>
 <tr><td>Gust</td><td colspan="2">   	  <?php echo $ingredient['IngredientCaracteristic']['gust']; ?></td></tr>
 <tr><td>Brix</td><td colspan="2">   	 <?php echo $ingredient['IngredientCaracteristic']['brix']; ?></td></tr>
 <tr><td>Vascozitate</td><td colspan="2"> <?php echo $ingredient['IngredientCaracteristic']['vascozitate']; ?></td></tr>
 <tr><td> Ph</td><td colspan="2">        <?php echo $ingredient['IngredientCaracteristic']['ph']; ?></td></tr>
<tr><td colspan="2"><b><u>ANALIZA/VALOARE NUTRITIVA</u></b></td></td><td></tr>	
	<tr><td><u>Valoare energetica</u></td><td width="50">	<?php if (isset($ingredient['IngredientCaracteristic']['valKj'])){ echo $ingredient['IngredientCaracteristic']['valKj']; }else echo'-';?></td><td>kJ/100g</td></tr>
		<tr><td> </td><td><?php if (isset($ingredient['IngredientCaracteristic']['valKcal'])){ echo $ingredient['IngredientCaracteristic']['valKcal']; }else echo'-';?></td><td>kcal/100g</td></tr>
		
	<tr><td colspan="2"><u>Valoare nutritiva</u></td></tr>
	<tr><td style="background:#ecf0f6;"><b>PROTEINE</b></td><td style="background:#ecf0f6;"><?php if (isset($ingredient['IngredientCaracteristic']['proteine'])){ echo $ingredient['IngredientCaracteristic']['proteine']; }else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - vegetale</td><td><?php if (isset($ingredient['IngredientCaracteristic']['proteineVegetale'])){ echo $ingredient['IngredientCaracteristic']['proteineVegetale']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - animale</td><td><?php if (isset($ingredient['IngredientCaracteristic']['proteineAnimale'])){echo $ingredient['IngredientCaracteristic']['proteineAnimale']; }else echo'-';?></td><td>g/100g</td></tr>
	
	<tr><td style="background:#ecf0f6;"><B>CARBOHIDRATI</b></td><td style="background:#ecf0f6;"><? if (isset($ingredient['IngredientCaracteristic']['carbohidrati'])){echo $ingredient['IngredientCaracteristic']['carbohidrati'];}else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - zaharuri</td><td><? if (isset($ingredient['IngredientCaracteristic']['carboxidratiZahar'])){echo $ingredient['IngredientCaracteristic']['carboxidratiZahar']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - polioli</td><td><? if (isset($ingredient['IngredientCaracteristic']['carbohidratiPolioli'])){echo $ingredient['IngredientCaracteristic']['carbohidratiPolioli']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - amidon</td><td><? if (isset($ingredient['IngredientCaracteristic']['carbohidratiAmidon'])){echo $ingredient['IngredientCaracteristic']['carbohidratiAmidon']; }else echo'-';?></td><td>g/100g</td></tr>
	
<tr><td style="background:#ecf0f6;"><B>GRASIMI</b></td><td style="background:#ecf0f6;"><?php if (isset($ingredient['IngredientCaracteristic']['grasimi'])){echo $ingredient['IngredientCaracteristic']['grasimi']; }else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - saturate</td><td><?php if (isset($ingredient['IngredientCaracteristic']['grasimiSaturate'])){echo $ingredient['IngredientCaracteristic']['grasimiSaturate']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - mononesaturate</td><td><?php if (isset($ingredient['IngredientCaracteristic']['grasimiMonoNesaturate'])){echo $ingredient['IngredientCaracteristic']['grasimiMonoNesaturate']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - polinesaturate</td><td><?php if (isset($ingredient['IngredientCaracteristic']['grasimiPoliNesaturate'])){echo $ingredient['IngredientCaracteristic']['grasimiPoliNesaturate']; }else echo'-';?></td><td>g/100g</td></tr>
    <tr><td> - vegetale</td><td><?php if (isset($ingredient['IngredientCaracteristic']['grasimiPoliNesaturateVegetale'])){echo $ingredient['IngredientCaracteristic']['grasimiPoliNesaturateVegetale']; }else echo'-';?></td><td>g/100g</td></tr>
	<tr><td> - animale</td><td><?php if (isset($ingredient['IngredientCaracteristic']['grasimiPoliNesaturateAnimale'])){echo $ingredient['IngredientCaracteristic']['grasimiPoliNesaturateAnimale']; }else echo'-';?></td><td>g/100g</td></tr>

    <tr><td ><b>Fibre dietetice</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['fibredietetice'])){echo $ingredient['IngredientCaracteristic']['fibredietetice']; }else echo'-';?></td><td>g/100g</td></tr>

 <tr><td style="background:#ecf0f6;"><b>MINERALE</b></td><td style="background:#ecf0f6;"><? if (isset($ingredient['IngredientCaracteristic']['minerale'])){echo $ingredient['IngredientCaracteristic']['minerale'];}else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>
<tr><td> - sodiu</td><td><?php if (isset($ingredient['IngredientCaracteristic']['mineraleSodiu'])){echo $ingredient['IngredientCaracteristic']['mineraleSodiu'];}else echo'-'; ?></td><td>mg/100g</td></tr>
<tr><td> - calciu</td><td><?php if (isset($ingredient['IngredientCaracteristic']['mineraleCalciu'])){echo $ingredient['IngredientCaracteristic']['mineraleCalciu']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td> - fosfor</td><td><?php if (isset($ingredient['IngredientCaracteristic']['mineraleFosfor'])){echo $ingredient['IngredientCaracteristic']['mineraleFosfor']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td> - fier</td><td><?php if (isset($ingredient['IngredientCaracteristic']['mineraleFier'])){echo $ingredient['IngredientCaracteristic']['mineraleFier']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td> - magneziu</td><td><?php if (isset($ingredient['IngredientCaracteristic']['mineraleMagneziu'])){echo $ingredient['IngredientCaracteristic']['mineraleMagneziu']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td> - zinc</td><td><?php if (isset($ingredient['IngredientCaracteristic']['mineraleZinc'])){echo $ingredient['IngredientCaracteristic']['mineraleZinc']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td> - iod</td><td><?php if (isset($ingredient['IngredientCaracteristic']['mineraleIod'])){echo $ingredient['IngredientCaracteristic']['mineraleIod']; }else echo'-';?></td><td>mg/100g</td></tr>


<tr>
  <td style="background:#ecf0f6;"><b>VITAMINE</b></td><td style="background:#ecf0f6;"><?php if (isset($ingredient['IngredientCaracteristic']['vitamine'])){echo $ingredient['IngredientCaracteristic']['vitamine']; }else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>

<tr><td><b>Vitamina A</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['vitaminaA'])){echo $ingredient['IngredientCaracteristic']['vitaminaA']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina E</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['vitaminaE'])){echo $ingredient['IngredientCaracteristic']['vitaminaE']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina C</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['vitaminaC'])){echo $ingredient['IngredientCaracteristic']['vitaminaC']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B1(Tiamina)</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['vitaminaB1'])){echo $ingredient['IngredientCaracteristic']['vitaminaB1']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B2(Riboflavina)</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['vitaminaB2'])){echo $ingredient['IngredientCaracteristic']['vitaminaB2']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina B6(Piridoxina)</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['vitaminaB6'])){echo $ingredient['IngredientCaracteristic']['vitaminaB6']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Vitamina pp(Niacina)</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['vitaminaPp'])){echo $ingredient['IngredientCaracteristic']['vitaminaPp']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Acid folic</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['acidFolic'])){echo $ingredient['IngredientCaracteristic']['acidFolic']; }else echo'-';?></td><td>ug/100g</td></tr>
<tr><td><b>Vitamina D</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['vitaminaD'])){echo $ingredient['IngredientCaracteristic']['vitaminaD']; }else echo'-';?></td><td>ug/100g</td></tr>
<tr><td><b>Vitamina B12</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['vitaminaB12'])){echo $ingredient['IngredientCaracteristic']['vitaminaB12']; }else echo'-';?></td><td>ug/100g</td></tr>
<tr><td><b>Biotina</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['vitaminaBiotina'])){echo $ingredient['IngredientCaracteristic']['vitaminaBiotina']; }else echo'-';?></td><td>mg/100g</td></tr>
<tr><td><b>Acid pantotenic</b></td><td><?php if (isset($ingredient['IngredientCaracteristic']['acidPantotenic'])){echo $ingredient['IngredientCaracteristic']['acidPantotenic']; }else echo'-';?></td><td>mg/100g</td></tr>

<tr><td colspan="3"  style="background: #ecf0f6;"><b>METALE GRELE</b></td></tr>	

<tr><td> Pb < 0,50 mg/kg</td><td><?php if (isset($ingredient['IngredientCaracteristic']['pb'])){ echo $ingredient['IngredientCaracteristic']['pb']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Cd < 0,10 mg/kg</td><td><?php if (isset($ingredient['IngredientCaracteristic']['cd'])){ echo $ingredient['IngredientCaracteristic']['cd']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Hg < 0,02 mg/kg</td><td><?php if (isset($ingredient['IngredientCaracteristic']['hg'])){ echo $ingredient['IngredientCaracteristic']['hg']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> As < 0,30 mg/kg</td><td><?php if (isset($ingredient['IngredientCaracteristic']['as'])){ echo $ingredient['IngredientCaracteristic']['as']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Zn < 50,00 mg/kg</td><td><?php if (isset($ingredient['IngredientCaracteristic']['zn'])){ echo $ingredient['IngredientCaracteristic']['zn']; }else{echo '-';}?></td><td>mg/kg</td></tr>

<tr><td> Cu < 20,00 mg/kg</td><td><?php if (isset($ingredient['IngredientCaracteristic']['cu'])){ echo $ingredient['IngredientCaracteristic']['cu'];}else{echo '-';}?></td><td>mg/kg</td></tr>



<tr><td style="background:#ecf0f6;"><b>Umiditate</b></td><td style="background:#ecf0f6;"><?php if (isset($ingredient['IngredientCaracteristic']['umiditate'])){echo $ingredient['IngredientCaracteristic']['umiditate']; }else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>

<tr><td style="background:#ecf0f6;"><b>Alcool</b></td><td style="background:#ecf0f6;"><? if (isset($ingredient['IngredientCaracteristic']['alcool'])){echo $ingredient['IngredientCaracteristic']['alcool'];}else echo'-';?></td><td style="background:#ecf0f6;">g/100g</td></tr>
</table>
			<?php }else{ echo '<br/>';
			echo $html->link(__('Adauga caracteristicile pentru acest ingredient', true), 
array('controller'=>'ingredient_caracteristics','action'=>'add', $ingredient['Ingredient']['id']),array('class'=>'btn'), null, false); 
echo '<br/>';}
			
; ?>
		
	</div></div>
	
		<div class="related">
			<div class="ingredientCaracteristics">
				<h2>Modificarile genetice ale ingredientului</h2>
				
		<?php if (isset($ingredient['IngredientGeneticModification']['id'])){?>
		

<?php echo $html->link(__('Editeaza Modificarile Genetice', true), 
array('controller'=> 'ingredient_genetic_modifications', 'action'=>'edit', $ingredient['Ingredient']['id'],
$ingredient['IngredientGeneticModification']['id']),array('class'=>'btn'), null, false); ?>&nbsp;|&nbsp;<?php echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_gen', $ingredient['Ingredient']['id']), array('escape' => false, 'style'=>'vertical-align:-4px;'));?><br/><br/>
		
<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Data crearii</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['IngredientGeneticModification']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Ultima modificare</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['IngredientGeneticModification']['modified']; ?>
			&nbsp;
		</dd></dl>
<table align="left" width="900" border="1">
<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td  ><b>Sursa</b></td>
	<td><b>Ingredient</b></td>
	<td  ><b>Sub-ingredient(*)</b></td>
	<td  ><b>Origine-mg da/nu</b></td>
	<td  ><b>Daca nu,1,2,3,4(**)</b></td>
	<td  ><b>Daca 3,sursa botanica</b></td>
	<td  ><b>Daca 4,tara de origine</b></td></tr>
<tr><td><b>Soia</b>	</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['soiaIngredient']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['soiaSub']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['soiaOrigine']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['soiaNu']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['soiaSursa']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['soiaTara']; ?>&nbsp;</td></tr>
	
<tr><td><b>Porumb</b>	</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['porumbIngredient']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['porumbSub']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['porumbOrigine']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['porumbNu']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['porumbSursa']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['porumbTara']; ?>&nbsp;</td></tr>
	
<tr><td><b>Rapita</b>	</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['rapitaIngredient']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['rapitaSub']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['rapitaOrigine']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['rapitaNu']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['rapitaSursa']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['rapitaTara']; ?>&nbsp;</td></tr>
	
<tr><td><b>Bumbac</b>	</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['bumbacIngredient']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['bumbacSub']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['bumbacOrigine']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['bumbacNu']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['bumbacSursa']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['bumbacTara']; ?>&nbsp;</td></tr>

<tr><td><b>Sfecla<br />de zahar</b>	</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['sfeclaIngredient']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['sfeclaSub']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['sfeclaOrigine']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['sfeclaNu']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['sfeclaSursa']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['sfeclaTara']; ?>&nbsp;</td></tr>

<tr><td><b>Cartofi</b>	</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['cartofiIngredient']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['cartofiSub']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['cartofiOrigine']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['cartofiNu']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['cartofiSursa']; ?>&nbsp;</td>
	<td><?php echo $ingredient['IngredientGeneticModification']['cartofiTara']; ?>&nbsp;</td></tr>
</table>	

<br/><br/>
<table><tr><td>(*) In general, sub-ingredientele nu apar in declaratia privind ingredientele.Majoritatea sunt agenti 
	microbieni si de procesare auxiliari ai ingredientelor din a doua coloana.<br/>
	(**) Legenda<br/>
	1.Sistemul de pastrare a identitatilor sau datelor de identificare(IP).Furnizorul a trimis o prezentare 
	a sistemului sau copie a certificatului.<br/>
	2.Declaratia scrisa a furnizorului(furnizorilor) prin care se specifica faptul ca ingredientele mentionate nu provin
	din materialele modificate genetic.<br/>
	3.Sursa botanica: la anumite plante, nu se cunosc specii modificate genetic. Se precizeaza specia/tipul de planta.<br/>
	4.Sursa geografica: in anumite parti, cresterea plantelor modificate genetic este interzisa prin lege.In acest caz se precizeaza
	tara de provenienta a plantelor.</td></tr></table>

<br/>
			
	<?php }else{
		echo '<br/>';
		echo $html->link(__('Adauga modificarile genetice pentru acest ingredient', true), 
array('controller'=>'ingredient_genetic_modifications','action'=>'add', $ingredient['Ingredient']['id']),array('class'=>'btn'), null, false); 
echo '<br/>';} ?></div></div>
			
		
<div class="related">
<div class="ingredientCaracteristics" align="left">	
		<h2>Standarde Microbiologice</h2>
	
		<?php if (isset($ingredient['IngredientStandard']['id'])){?>
		
<?php echo $html->link(__('Editeaza Standardele Microbiologice', true), array('controller'=> 'ingredient_standards', 'action'=>'edit', $ingredient['Ingredient']['id'], $ingredient['IngredientStandard']['id']),array('class'=>'btn'), null, false); ?>&nbsp|&nbsp<?php echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_mic', $ingredient['Ingredient']['id']), array('escape' => false, 'style'=>'vertical-align:-4px;'));?><br/><br/>
		
<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Nume Ingredient</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ingredient['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredient['IngredientStandard']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Data crearii</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['IngredientStandard']['created']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Ultima modificare</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['IngredientStandard']['modified']; ?>
			&nbsp;
		</dd></dl>	
<table align="left" >


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  style="background: #ecf0f6;"><b>STANDARDE MICROBIOLOGICE</b></td></tr>		
 	<tr><td width="140">NTG</td><td >
 		<?php if (isset($ingredient['IngredientStandard']['nrGermeni'])){echo $ingredient['IngredientStandard']['nrGermeni'];} else{echo '-';}?></td><td>ufc/g</td></tr>
	<!--	<tr><td>NTG</td><td><?php echo $ingredient['IngredientStandard']['ntg']; ?></td><td>ufc/g</td></tr>-->

 		<tr><td>Enterobacteriaceae</td><td><?php if (isset($ingredient['IngredientStandard']['entero'])){echo $ingredient['IngredientStandard']['entero'];} else{echo '-';}?></td><td>ufc/g</td></tr>
	
 		<tr><td> Drojdii si mucegaiuri</td><td><?php if (isset($ingredient['IngredientStandard']['drojdiiViz'])){ echo $ingredient['IngredientStandard']['drojdiiViz'];}else{echo '-';} ?></td><td>ufc/g</td></tr>

<tr><td> Staphylococus aureus</td><td><?php if (isset($ingredient['IngredientStandard']['staphylococusViz'])){ echo $ingredient['IngredientStandard']['staphylococusViz'];} else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> Salmonella</td><td><?php if (isset($ingredient['IngredientStandard']['salmonellaViz'])){ echo $ingredient['IngredientStandard']['salmonellaViz'];}else{echo '-';} ?></td><td>ufc/g</td></tr>

<tr><td> Listeria monocytogenes</td><td><?php if (isset($ingredient['IngredientStandard']['listeriaViz'])){ echo $ingredient['IngredientStandard']['listeriaViz'];} else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> Bacillus cereus</td><td><?php if (isset($ingredient['IngredientStandard']['bacillusViz'])){ echo $ingredient['IngredientStandard']['bacillusViz'];} else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> Coliformi</td><td><?php if (isset($ingredient['IngredientStandard']['coliformi'])){ echo $ingredient['IngredientStandard']['coliformi']; }else{echo '-';}?></td><td>ufc/g</td></tr>

<tr><td> E.coli</td><td><?php if (isset($ingredient['IngredientStandard']['ecoli'])){ echo $ingredient['IngredientStandard']['ecoli']; }else{echo '-';}?></td><td>ufc/g</td></tr>


</table>
		<?php }else {echo '<br/>';
		echo $html->link(__('Adauga standardele microbiologice pentru ale ingredientului', true), 
array('controller'=>'ingredient_standards','action'=>'add', $ingredient['Ingredient']['id']),array('class'=>'btn'), null, false); 
echo '<br/><br/><br/>';} ?>
	
	</div>
	<div class="related">
	

</div>


	

