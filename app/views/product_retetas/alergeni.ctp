<div class="productRetetas index">
<div style="padding-bottom:10px;">
<?php echo $html->link(__('Vizualizare produs',true), array('controller'=>'products','action'=>'view', 
		$prod),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<?
		echo $html->link(__('Vizualizare reteta produs',true), array('controller'=>'product_retetas','action'=>'add', 
		$prod),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<?
		
		echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_prod_alergen', $prod), array('escape' => false, 'style'=>'vertical-align:-4px;')); ?>
</div>

<h2>Agentii alergeni ai produsului&nbsp;-&nbsp;<? echo $product['Product']['name'];?></h2>


<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr><th colspan="16">Agentii alergeni ai ingredientilor</th></tr>
<tr><th>Ingredient</th>
<th width="60">Cod</th>
<th width="60">C.gluten</th>
<th width="60">Crustacee</th>
<th width="60">Oua</th>
<th width="60">Peste</th>
<th width="60">Alune</th>
<th width="60">Soia</th>
<th width="60">Lapte</th>
<th width="60">Nuci</th>
<th width="60">Telina</th>
<th width="60">Mustar</th>
<th width="60">Susan</th>
<th width="60">Lupin</th>
<th width="60">Moluste</th>
<th width="60">di.sulf</th>
</tr>
<? $gluten=0;$crustacee=0;$oua=0;$peste=0;$alune=0;$soia=0;$lapte=0;$nuci=0;$telina=0;$mustar=0;$susan=0;$sulf=0; $lupin=0; $moluste=0; 
$glutenZ=0;$crustaceeZ=0;$ouaZ=0;$pesteZ=0;$aluneZ=0;$soiaZ=0;$lapteZ=0;$nuciZ=0;$telinaZ=0;$mustarZ=0;$susanZ=0;$sulfZ=0; $lupinZ=0; $molusteZ=0; 
foreach($productRetetas as $productReteta):?>
<tr >
<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?php echo $html->link($productReteta['Ingredient']['cod'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<? if (isset($productReteta['Ingredient']['IngredientAlergen']['cerealeGluten'])){if  ($productReteta['Ingredient']['IngredientAlergen']['cerealeGluten']>0){$gluten++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['crustacee'])){if  ($productReteta['Ingredient']['IngredientAlergen']['crustacee']>0){$crustacee++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['oua'])){if  ($productReteta['Ingredient']['IngredientAlergen']['oua']>0){$oua++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['peste'])){if  ($productReteta['Ingredient']['IngredientAlergen']['peste']>0){$peste++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['alune'])){if  ($productReteta['Ingredient']['IngredientAlergen']['alune']>0){$alune++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['soia'])){if  ($productReteta['Ingredient']['IngredientAlergen']['soia']>0){$soia++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['lapte'])){if  ($productReteta['Ingredient']['IngredientAlergen']['lapte']>0){$lapte++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['nuci'])){if  ($productReteta['Ingredient']['IngredientAlergen']['nuci']>0){$nuci++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['telina'])){if  ($productReteta['Ingredient']['IngredientAlergen']['telina']>0){$telina++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['mustar'])){if  ($productReteta['Ingredient']['IngredientAlergen']['mustar']>0){$mustar++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['susan'])){if  ($productReteta['Ingredient']['IngredientAlergen']['susan']>0){$susan++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['lupin'])){if  ($productReteta['Ingredient']['IngredientAlergen']['lupin']>0){$lupin++; echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['moluste'])){if  ($productReteta['Ingredient']['IngredientAlergen']['moluste']>0){$moluste++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['dioxidSulf'])){if  ($productReteta['Ingredient']['IngredientAlergen']['dioxidSulf']>0){$sulf++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>


</tr>
<? endforeach;?>













<tr><th colspan="16">Agentii alergeni ai produsului final</th></tr>
<tr bgcolor="#eeeeee">
<td align="center" colspan="2"><b><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $prod));?></b></td>

	<?if($gluten>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	
	<?if($crustacee>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($oua>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($peste>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($alune>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($soia>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($lapte>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($nuci>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($telina>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($mustar>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($susan>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
    <?if($lupin>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
    <?if($moluste>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($sulf>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
</tr>
</table>
<br /><br />







<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr><th colspan="16">Alergenii cross contaminare proces Zeelandia - </th></tr>

<tr><th>Linia</th>
<th width="60">C.gluten</th>
<th width="60">Crustacee</th>
<th width="60">Oua</th>
<th width="60">Peste</th>
<th width="60">Alune</th>
<th width="60">Soia</th>
<th width="60">Lapte</th>
<th width="60">Nuci</th>
<th width="60">Telina</th>
<th width="60">Mustar</th>
<th width="60">Susan</th>
<th width="60">Lupin</th>
<th width="60">Moluste</th>
<th width="60">di.sulf</th>
</tr>
<tr >
<td align="center" width="160"><b> &nbsp;&nbsp;&nbsp;Linia de productie <?php echo $productReteta['Product']['line_id'];?>&nbsp;&nbsp;&nbsp; </b></td>
<? if (isset($productReteta['Product']['Line']['cerealeGlutenP'])){if  ($productReteta['Product']['Line']['cerealeGlutenP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['crustaceeP'])){if  ($productReteta['Product']['Line']['crustaceeP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['ouaP'])){if  ($productReteta['Product']['Line']['ouaP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['pesteP'])){if  ($productReteta['Product']['Line']['pesteP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['aluneP'])){if  ($productReteta['Product']['Line']['aluneP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['soiaP'])){if  ($productReteta['Product']['Line']['soiaP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['lapteP'])){if  ($productReteta['Product']['Line']['lapteP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['nuciP'])){if  ($productReteta['Product']['Line']['nuciP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['telinaP'])){if  ($productReteta['Product']['Line']['telinaP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['mustarP'])){if  ($productReteta['Product']['Line']['mustarP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['susanP'])){if  ($productReteta['Product']['Line']['susanP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['lupinP'])){if  ($productReteta['Product']['Line']['lupinP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['molusteP'])){if  ($productReteta['Product']['Line']['molusteP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Product']['Line']['dioxidSulfP'])){if  ($productReteta['Product']['Line']['dioxidSulfP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>
</tr></table>

<br /><br />
<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr><th colspan="16">Cross contaminare ingredienti</th></tr>
<tr><th>Ingredient</th>
<th width="60">Cod</th>
<th width="60">C.gluten</th>
<th width="60">Crustacee</th>
<th width="60">Oua</th>
<th width="60">Peste</th>
<th width="60">Alune</th>
<th width="60">Soia</th>
<th width="60">Lapte</th>
<th width="60">Nuci</th>
<th width="60">Telina</th>
<th width="60">Mustar</th>
<th width="60">Susan</th>
<th width="60">Lupin</th>
<th width="60">Moluste</th>
<th width="60">di.sulf</th>
</tr>
<? foreach($productRetetas as $productReteta):?>
<tr >
<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?php echo $html->link($productReteta['Ingredient']['cod'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<? if (isset($productReteta['Ingredient']['IngredientAlergen']['cerealeGlutenZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['cerealeGlutenZ']>0){$glutenZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['crustaceeZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['crustaceeZ']>0){$crustaceeZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['ouaZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['ouaZ']>0){$ouaZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['pesteZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['pesteZ']>0){$pesteZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['aluneZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['aluneZ']>0){$aluneZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['soiaZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['soiaZ']>0){$soiaZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['lapteZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['lapteZ']>0){$lapteZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['nuciZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['nuciZ']>0){$nuciZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['telinaZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['telinaZ']>0){$telinaZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['mustarZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['mustarZ']>0){$mustarZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['susanZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['susanZ']>0){$susanZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['lupinZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['lupinZ']>0){$lupinZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<? if (isset($productReteta['Ingredient']['IngredientAlergen']['molusteZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['molusteZ']>0){$molusteZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>


<? if (isset($productReteta['Ingredient']['IngredientAlergen']['dioxidSulfZ'])){if  ($productReteta['Ingredient']['IngredientAlergen']['dioxidSulfZ']>0){$sulfZ++;echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>
</tr>
<? endforeach;?>

<tr><th colspan="16">Cross contaminarea produsului final</th></tr>
<tr bgcolor="#eeeeee">
<td align="center" colspan="2"><b><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $prod));?></b></td>

	<?if($glutenZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	
	<?if($crustaceeZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($ouaZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($pesteZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($aluneZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($soiaZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($lapteZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($nuciZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($telinaZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($mustarZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($susanZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
    <?if($lupinZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
    <?if($molusteZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
	<?if($sulfZ>0){echo '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#54df71"><b >absent</b>';}?></td>
</tr>
</table>
	
</div>
