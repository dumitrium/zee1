<?//pr( $productRetetas);?>

<div class="productRetetas index">
	<div style="padding-bottom:10px;">
<?php echo $html->link(__('Vizualizare produs',true), array('controller'=>'products','action'=>'view', 
		$prod),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<?
		echo $html->link(__('Vizualizare reteta produs',true), array('controller'=>'product_retetas','action'=>'add', 
		$prod),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<?
		
		echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_prod_nutri', $prod), array('escape' => false, 'style'=>'vertical-align:-4px;')); ?>
</div>
	<h2>Valori nutritionale ale produsului </h2>
	<div style="font-size:14px;padding-bottom:10px;">Produs: <b><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $prod));?></b></div>

<table cellpadding="0" cellspacing="0" style="border: 0px #dddddd solid;">
<tr>
	<td style="border: 0px #dddddd solid;">

<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr style="height:12px;"><td style="height:12px" colspan="4" align="center"><b>VALOARE ENERGETICA</b></td></tr>
<tr><th>Denumire ingredient</th>
<th>Procent</th>
<th>kJ/100g</th>
<th>Kcal/100g</th><tr>
	<? $procent=0;$kcal=0;$kj=0;
foreach($productRetetas as $productReteta):?>
<tr>
	
	<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?echo $productReteta['ProductReteta']['procent'];$procent=$procent+$productReteta['ProductReteta']['procent'];?>&nbsp;%</td>
	<td align="center"><? if(!isset($productReteta['Ingredient']['IngredientCaracteristic']['valKj'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['valKj']/100*$productReteta['ProductReteta']['procent'];$kj=$kj+$productReteta['Ingredient']['IngredientCaracteristic']['valKj']/100*$productReteta['ProductReteta']['procent'];}?></td>
<td align="center"><? if(!isset($productReteta['Ingredient']['IngredientCaracteristic']['valKcal'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['valKcal']/100*$productReteta['ProductReteta']['procent'];$kcal=$kcal+$productReteta['Ingredient']['IngredientCaracteristic']['valKcal']/100*$productReteta['ProductReteta']['procent'];}?></td>

</tr>
<? endforeach;?>
<tr>
<td align="center" style="background:#dddddd"><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?></td>	
<td align="center" style="background:#dddddd"><b align="center" style="color:<?if ($procent>100) {echo '#ff3300';}else{ echo '#3300cc';}?>"><? echo $procent;?>&nbsp;%</b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $kj;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $kcal;?></b></td>	
</tr>
</table></td>
<td width="20" style="border: 0px #dddddd solid;">&nbsp;</td>
<td style="border: 0px #dddddd solid;">
<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr style="height:12px;"><td style="height:12px" colspan="10" align="center"><b>MINERALE</b></td></tr>
<tr><th>Denumire ingredient</th>
<th>&nbsp;Procent&nbsp;</th>
<th>&nbsp;Minerale&nbsp;</th>
<th>&nbsp;sodiu&nbsp;</th>
<th>&nbsp;calciu&nbsp;</th>
<th>&nbsp;fosfor&nbsp;</th>
<th>&nbsp;fier&nbsp;</th>
<th>&nbsp;magneziu&nbsp;</th>
<th>&nbsp;zinc&nbsp;</th>
<th>&nbsp;iod&nbsp;</th></tr>

	<? $procent=0;$minerale=0;$sodiu=0;$calciu=0;$fosfor=0;$fier=0;$magneziu=0;$zinc=0;$iod=0;
foreach($productRetetas as $productReteta):?>
<tr>
	
	<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?echo $productReteta['ProductReteta']['procent'];$procent=$procent+$productReteta['ProductReteta']['procent'];?>&nbsp;%</td>
	<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['minerale'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['minerale']/100*$productReteta['ProductReteta']['procent'];$minerale=$minerale+$productReteta['Ingredient']['IngredientCaracteristic']['minerale']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleSodiu'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['mineraleSodiu']/100*$productReteta['ProductReteta']['procent']; $sodiu=$sodiu+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleSodiu']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleCalciu'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['mineraleCalciu']/100*$productReteta['ProductReteta']['procent'];$calciu=$calciu+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleCalciu']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleFosfor'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['mineraleFosfor']/100*$productReteta['ProductReteta']['procent'];$fosfor=$fosfor+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleFosfor']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleFier'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['mineraleFier']/100*$productReteta['ProductReteta']['procent'];$fier=$fier+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleFier']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleMagneziu'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['mineraleMagneziu']/100*$productReteta['ProductReteta']['procent'];$magneziu=$magneziu+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleMagneziu']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleZinc'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['mineraleZinc']/100*$productReteta['ProductReteta']['procent'];$zinc=$zinc+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleZinc']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleIod'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['mineraleIod']/100*$productReteta['ProductReteta']['procent'];$iod=$iod+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleIod']/100*$productReteta['ProductReteta']['procent'];}?></td>

</tr>
<? endforeach;?>
<tr>
<td align="center" style="background:#dddddd"><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?></td>	
<td align="center" style="background:#dddddd"><b align="center" style="color:<?if ($procent>100) {echo '#ff3300';}else{ echo '#3300cc';}?>"><? echo $procent;?>&nbsp;%</b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $minerale;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $sodiu;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $calciu;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $fosfor;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $fier;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $magneziu;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $zinc;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $iod;?></b></td>
</tr>
</table>

</td>


</tr></table>



<table><tr><td style="border: 0px #dddddd solid;">
<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr style="height:12px;"><td style="height:12px" colspan="5" align="center"><b>PROTEINE</b></td></tr>
<tr><th>Denumire ingredient</th>
<th>Procent</th>
<th>Proteine</th>
<th>vegetale</th>
<th>animale</th></tr>
	<? $procent=0;$proteine=0;$vege=0;$ani=0;
foreach($productRetetas as $productReteta):?>
<tr>
	
	<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?echo $productReteta['ProductReteta']['procent'];$procent=$procent+$productReteta['ProductReteta']['procent'];?>&nbsp;%</td>
	<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['proteine'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['proteine']/100*$productReteta['ProductReteta']['procent'];$proteine=$proteine+$productReteta['Ingredient']['IngredientCaracteristic']['proteine']/100*$productReteta['ProductReteta']['procent'];}?></td>
<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['proteineVegetale'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['proteineVegetale']/100*$productReteta['ProductReteta']['procent']; $vege=$vege+$productReteta['Ingredient']['IngredientCaracteristic']['proteineVegetale']/100*$productReteta['ProductReteta']['procent'];}?></td>
<td>
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['proteineAnimale'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['proteineAnimale']/100*$productReteta['ProductReteta']['procent'];$ani=$ani+$productReteta['Ingredient']['IngredientCaracteristic']['proteineAnimale']/100*$productReteta['ProductReteta']['procent'];}?></td>

</tr>
<? endforeach;?>
<tr>
<td align="center" style="background:#dddddd"><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?></td>	
<td align="center" style="background:#dddddd"><b align="center" style="color:<?if ($procent>100) {echo '#ff3300';}else{ echo '#3300cc';}?>"><? echo $procent;?>&nbsp;%</b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $proteine;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $vege;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $ani;?></b></td>	
</tr>
</table>


</td>

<td width="15" style="border: 0px #dddddd solid;">&nbsp;</td>

<td style="border: 0px #dddddd solid;">
<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr style="height:12px;"><td style="height:12px" colspan="6" align="center"><b>CARBOHIDRATI</b></td></tr>
<tr><th>Denumire ingredient</th>
<th>Procent</th>
<th>Carbohidrati</th>
<th>zaharuri</th>
<th>polioli</th>
<th>amidon</th></tr>
	<? $procent=0;$carbo=0;$zaha=0;$poli=0;$ami=0;
foreach($productRetetas as $productReteta):?>
<tr>
	
	<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?echo $productReteta['ProductReteta']['procent'];$procent=$procent+$productReteta['ProductReteta']['procent'];?>&nbsp;%</td>
	<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['carbohidrati'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['carbohidrati']/100*$productReteta['ProductReteta']['procent'];$carbo=$carbo+$productReteta['Ingredient']['IngredientCaracteristic']['carbohidrati']/100*$productReteta['ProductReteta']['procent'];}?></td>
<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['carboxidratiZahar'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['carboxidratiZahar']/100*$productReteta['ProductReteta']['procent']; $zaha=$zaha+$productReteta['Ingredient']['IngredientCaracteristic']['carboxidratiZahar']/100*$productReteta['ProductReteta']['procent'];}?></td>
<td>
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiPolioli'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiPolioli']/100*$productReteta['ProductReteta']['procent'];$poli=$poli+$productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiPolioli']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td>
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiAmidon'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiAmidon']/100*$productReteta['ProductReteta']['procent'];$ami=$ami+$productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiAmidon']/100*$productReteta['ProductReteta']['procent'];}?></td>

</tr>
<? endforeach;?>
<tr>
<td align="center" style="background:#dddddd"><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?></td>	
<td align="center" style="background:#dddddd"><b align="center" style="color:<?if ($procent>100) {echo '#ff3300';}else{ echo '#3300cc';}?>"><? echo $procent;?>&nbsp;%</b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $carbo;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $zaha;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $poli;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $ami;?></b></td>	
</tr>
</table>
</td>




<td style="border: 0px #dddddd solid;">
	
</td>
	
	
	
	

</tr></table>
<table><tr>
<td style="border: 0px #dddddd solid;">
	<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr style="height:12px;"><td style="height:12px" colspan="8" align="center"><b>GRASIMI</b></td></tr>
<tr><th>Denumire ingredient</th>
<th>Procent</th>
<th>Grasimi</th>
<th>saturate</th>
<th>mono-nesaturate</th>
<th>poli-nesaturate</th>
<th>vegetale</th>
<th>animale</th></tr>

	<? $procent=0;$gras=0;$satu=0;$mono=0;$poli=0;$vege=0;$ani=0;
foreach($productRetetas as $productReteta):?>
<tr>
	
	<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?echo $productReteta['ProductReteta']['procent'];$procent=$procent+$productReteta['ProductReteta']['procent'];?>&nbsp;%</td>
	<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimi'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['grasimi']/100*$productReteta['ProductReteta']['procent'];$gras=$gras+$productReteta['Ingredient']['IngredientCaracteristic']['grasimi']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimiSaturate'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['grasimiSaturate']/100*$productReteta['ProductReteta']['procent']; $satu=$satu+$productReteta['Ingredient']['IngredientCaracteristic']['grasimiSaturate']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimiMonoNesaturate'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['grasimiMonoNesaturate']/100*$productReteta['ProductReteta']['procent'];$mono=$mono+$productReteta['Ingredient']['IngredientCaracteristic']['grasimiMonoNesaturate']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturate'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturate']/100*$productReteta['ProductReteta']['procent'];$poli=$poli+$productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturate']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateVegetale'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateVegetale']/100*$productReteta['ProductReteta']['procent'];$vege=$vege+$productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateVegetale']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateAnimale'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateAnimale']/100*$productReteta['ProductReteta']['procent'];$ani=$ani+$productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateAnimale']/100*$productReteta['ProductReteta']['procent'];}?></td>

</tr>
<? endforeach;?>
<tr>
<td align="center" style="background:#dddddd"><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?></td>	
<td align="center" style="background:#dddddd"><b align="center" style="color:<?if ($procent>100) {echo '#ff3300';}else{ echo '#3300cc';}?>"><? echo $procent;?>&nbsp;%</b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $gras;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $satu;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $mono;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $poli;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $vege;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $ani;?></b></td>
</tr>
</table>
</td>
<td width="15" style="border: 0px #dddddd solid;">&nbsp;</td>
<td style="border: 0px #dddddd solid;"><table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr style="height:12px;"><td style="height:12px" colspan="4" align="center"><b>ALTELE</b></td></tr>
<tr><th>Denumire ingredient</th>
<th>Procent</th>
<th>Fibre dietetice</th>
<th>Umiditate</th>
<th>Alcool</th></tr>
	<? $procent=0;$fibre=0;$ume=0;$alcool=0;
foreach($productRetetas as $productReteta):?>
<tr>
	
	<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?echo $productReteta['ProductReteta']['procent'];$procent=$procent+$productReteta['ProductReteta']['procent'];?>&nbsp;%</td>
	<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['fibredietetice'])){echo '-';}else{ echo $productReteta['Ingredient']['IngredientCaracteristic']['fibredietetice']/100*$productReteta['ProductReteta']['procent'];$fibre=$fibre+$productReteta['Ingredient']['IngredientCaracteristic']['fibredietetice']/100*$productReteta['ProductReteta']['procent'];}?></td>
<td align="center"><?if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['umiditate'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['umiditate']/100*$productReteta['ProductReteta']['procent'];$ume=$ume+$productReteta['Ingredient']['IngredientCaracteristic']['umiditate']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['alcool'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['alcool']/100*$productReteta['ProductReteta']['procent'];$alcool=$alcool+$productReteta['Ingredient']['IngredientCaracteristic']['alcool']/100*$productReteta['ProductReteta']['procent'];}?></td>

</tr>
<? endforeach;?>
<tr>
<td align="center" style="background:#dddddd"><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?></td>	
<td align="center" style="background:#dddddd"><b align="center" style="color:<?if ($procent>100) {echo '#ff3300';}else{ echo '#3300cc';}?>"><? echo $procent;?>&nbsp;%</b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $fibre;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $ume;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $alcool;?></b></td>	
</tr>
</table></td></tr></table>
	
	
	
	
	
	
	
	
	
	
	


<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr style="height:12px;"><td style="height:12px" colspan="15" align="center"><b>VITAMINE</b></td></tr>
<tr><th>Denumire ingredient</th>
<th>&nbsp;Procent&nbsp;</th>
<th>&nbsp;Vitamine&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;E&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;B1-Tiamina&nbsp;</th>
<th>&nbsp;B2-Riboflavina&nbsp;</th>
<th>&nbsp;B6-Piridoxina&nbsp;</th>
<th>&nbsp;pp-Niacina&nbsp;</th>
<th>&nbsp;Acid Folic&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;B12&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;Biotina&nbsp;</th>
<th>&nbsp;Acid Pantotenic&nbsp;</th></tr>

	<? $procent=0;$vitamine=0;$a=0;$e=0;$c=0;$b1=0;$b2=0;$b6=0;$pp=0;$acidfolic=0;$d=0;$b12=0;$biotina=0;$acidpantotenic=0;
foreach($productRetetas as $productReteta):?>
<tr>
	
	<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?echo $productReteta['ProductReteta']['procent'];$procent=$procent+$productReteta['ProductReteta']['procent'];?>&nbsp;%</td>
	<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitamine'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitamine']/100*$productReteta['ProductReteta']['procent'];$minerale=$minerale+$productReteta['Ingredient']['IngredientCaracteristic']['minerale']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaA'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitaminaA']/100*$productReteta['ProductReteta']['procent']; $a=$a+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaA']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaE'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitaminaE']/100*$productReteta['ProductReteta']['procent'];$e=$e+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaE']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaC'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitaminaC']/100*$productReteta['ProductReteta']['procent'];$c=$c+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaC']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB1'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB1']/100*$productReteta['ProductReteta']['procent'];$b1=$b1+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB1']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB2'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB2']/100*$productReteta['ProductReteta']['procent'];$b2=$b2+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB2']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB6'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB6']/100*$productReteta['ProductReteta']['procent'];$b6=$b6+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB6']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaPp'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitaminaPp']/100*$productReteta['ProductReteta']['procent'];$pp=$pp+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaPp']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['acidFolic'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['acidFolic']/100*$productReteta['ProductReteta']['procent'];$acidfolic=$acidfolic+$productReteta['Ingredient']['IngredientCaracteristic']['acidFolic']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaD'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitaminaD']/100*$productReteta['ProductReteta']['procent'];$d=$d+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaD']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB12'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB12']/100*$productReteta['ProductReteta']['procent'];$b12=$b12+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB12']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaBiotina'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['vitaminaBiotina']/100*$productReteta['ProductReteta']['procent'];$biotina=$biotina+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaBiotina']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['acidPantotenic'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['acidPantotenic']/100*$productReteta['ProductReteta']['procent'];$acidpantotenic=$acidpantotenic+$productReteta['Ingredient']['IngredientCaracteristic']['acidPantotenic']/100*$productReteta['ProductReteta']['procent'];}?></td>




</tr>
<? endforeach;?>
<tr>
<td align="center" style="background:#dddddd"><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?></td>	
<td align="center" style="background:#dddddd"><b align="center" style="color:<?if ($procent>100) {echo '#ff3300';}else{ echo '#3300cc';}?>"><? echo $procent;?>&nbsp;%</b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $vitamine;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $a;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $e;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $c;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $b1;?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $b2;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $b6;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $pp;?></b></td>

<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $acidfolic;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $d;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $b12;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $biotina;?></b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $acidpantotenic;?></b></td>
</tr>
</table>
<br/><br/>



<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr style="height:12px;background: #ecf0f6"><td style="height:12px" colspan="8" align="center"><b>METALE GRELE</b></td></tr>
<tr><th>Denumire ingredient</th>
<th>&nbsp;Procent&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plumb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadmiu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mercur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arsen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zinc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cupru&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>


<? $procent=0;$pb=0;$cd=0;$hg=0;$as=0;$zn=0;$cu=0;
foreach($productRetetas as $productReteta):?>
<tr>
	
	<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?echo $productReteta['ProductReteta']['procent'];$procent=$procent+$productReteta['ProductReteta']['procent'];?>&nbsp;%</td>
	<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['pb'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['pb']/100*$productReteta['ProductReteta']['procent'];$pb=$pb+$productReteta['Ingredient']['IngredientCaracteristic']['pb']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['cd'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['cd']/100*$productReteta['ProductReteta']['procent']; $cd=$cd+$productReteta['Ingredient']['IngredientCaracteristic']['cd']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['hg'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['hg']/100*$productReteta['ProductReteta']['procent'];$hg=$hg+$productReteta['Ingredient']['IngredientCaracteristic']['hg']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['as'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['as']/100*$productReteta['ProductReteta']['procent'];$as=$as+$productReteta['Ingredient']['IngredientCaracteristic']['as']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['zn'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['zn']/100*$productReteta['ProductReteta']['procent'];$zn=$zn+$productReteta['Ingredient']['IngredientCaracteristic']['zn']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['cu'])){echo '-';}else{echo $productReteta['Ingredient']['IngredientCaracteristic']['cu']/100*$productReteta['ProductReteta']['procent'];$cu=$cu+$productReteta['Ingredient']['IngredientCaracteristic']['cu']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	


</tr>
<? endforeach;?>
<tr>
<td align="center" style="background:#dddddd"><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?></td>	
<td align="center" style="background:#dddddd"><b align="center" style="color:<?if ($procent>100) {echo '#ff3300';}else{ echo '#3300cc';}?>"><? echo $procent;?>&nbsp;%</b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $pb;?></b>&nbsp;mg/kg</td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $cd?></b>&nbsp;mg/kg</td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $hg;?></b>&nbsp;mg/kg</td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $as;?></b>&nbsp;mg/kg</td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $zn;?></b>&nbsp;mg/kg</td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $cu;?></b>&nbsp;mg/kg</td>

</tr>
</table>

 	
</div>
