<div class="productRetetas index">
	<h2>Standarde Microbiologice </h2>
	<div style="font-size:14px;padding-bottom:10px;">Produs: <b><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $prod));?></b><?php echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_prod_micro', $prod), array('escape' => false, 'style'=>'vertical-align:-4px;margin-left:740px;'));?></div>
	<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr style="height:12px;"><td style="height:12px;background: #ecf0f6" colspan="11" align="center"><b>MICROBIOLOGIE</b></td></tr>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">Ingredient</B></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">&nbsp;Procent&nbsp;</B></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">&nbsp;&nbsp;&nbsp;NTG&nbsp;&nbsp;&nbsp;</td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">&nbsp;Enterobacteriacee&nbsp;</B></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">&nbsp;Drojdii si mucegaiuri&nbsp;</B></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">&nbsp;Staphylococus aureus&nbsp;</B></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">&nbsp;Salmonella&nbsp;</B></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">&nbsp;Listeria m.&nbsp;</B></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">&nbsp;Bacillus cereus&nbsp;</B></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">&nbsp;Coliformi&nbsp;</B></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc">&nbsp;&nbsp;E.coli&nbsp;&nbsp;</B></td>

<? $procent=0;$ntg=0;$ente=0;$droj=0;$stap=0;$salm=0;$list=0;$baci=0;$coli=0;$ecol=0;
foreach($productRetetas as $productReteta):?>
<tr>
	
	<td align="center"><?php echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));?></td>
<td align="center"><?echo $productReteta['ProductReteta']['procent'];$procent=$procent+$productReteta['ProductReteta']['procent'];?>&nbsp;%</td>
	<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientStandard']['nrGermeni'])){echo ' - ';}else{echo $productReteta['Ingredient']['IngredientStandard']['nrGermeni']/100*$productReteta['ProductReteta']['procent'];$ntg=$ntg+$productReteta['Ingredient']['IngredientStandard']['nrGermeni']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center"><? if (!isset($productReteta['Ingredient']['IngredientStandard']['entero'])){echo ' - ';}else{echo $productReteta['Ingredient']['IngredientStandard']['entero']/100*$productReteta['ProductReteta']['procent']; $ente=$ente+$productReteta['Ingredient']['IngredientStandard']['entero']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientStandard']['drojdiiViz'])){echo ' - ';}else{echo $productReteta['Ingredient']['IngredientStandard']['drojdiiViz']/100*$productReteta['ProductReteta']['procent'];$droj=$droj+$productReteta['Ingredient']['IngredientStandard']['drojdiiViz']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientStandard']['staphylococusViz'])){echo ' - ';}else{echo $productReteta['Ingredient']['IngredientStandard']['staphylococusViz']/100*$productReteta['ProductReteta']['procent'];$stap=$stap+$productReteta['Ingredient']['IngredientStandard']['staphylococusViz']/100*$productReteta['ProductReteta']['procent'];}?></td>
	<td align="center">
	<? echo "absent in 25g"; /*$productReteta['Ingredient']['IngredientStandard']['salmonellaViz']/100*$productReteta['ProductReteta']['procent'];$salm=$salm+$productReteta['Ingredient']['IngredientStandard']['salmonellaViz']/100*$productReteta['ProductReteta']['procent'];*/?></td>
	
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientStandard']['listeriaViz'])){echo ' - ';}else{echo $productReteta['Ingredient']['IngredientStandard']['listeriaViz']/100*$productReteta['ProductReteta']['procent'];$list=$list+$productReteta['Ingredient']['IngredientStandard']['listeriaViz']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientStandard']['bacillusViz'])){echo ' - ';}else{echo $productReteta['Ingredient']['IngredientStandard']['bacillusViz']/100*$productReteta['ProductReteta']['procent'];$baci=$baci+$productReteta['Ingredient']['IngredientStandard']['bacillusViz']/100*$productReteta['ProductReteta']['procent'];}?></td>
	
	<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientStandard']['coliformi'])){echo ' - ';}else{echo $productReteta['Ingredient']['IngredientStandard']['coliformi']/100*$productReteta['ProductReteta']['procent'];$coli=$coli+$productReteta['Ingredient']['IngredientStandard']['coliformi']/100*$productReteta['ProductReteta']['procent'];}?></td>

<td align="center">
	<? if (!isset($productReteta['Ingredient']['IngredientStandard']['ecoli'])){echo ' - ';}else{echo $productReteta['Ingredient']['IngredientStandard']['ecoli']/100*$productReteta['ProductReteta']['procent'];$ecol=$ecol+$productReteta['Ingredient']['IngredientStandard']['ecoli']/100*$productReteta['ProductReteta']['procent'];}?></td>



</tr>
<? endforeach;?>
<tr>
<td align="center" style="background:#dddddd"><?php echo $html->link($productReteta['Product']['name'], array('controller'=> 'products', 'action'=>'view', $productReteta['Product']['id'])); ?></td>	
<td align="center" style="background:#dddddd"><b align="center" style="color:<?if ($procent>100) {echo '#ff3300';}else{ echo '#3300cc';}?>"><? echo $procent;?>&nbsp;%</b></td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $ntg;?></b>&nbsp;ufc/g</td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $ente?></b>&nbsp;ufc/g</td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $droj;?></b>&nbsp;ufc/g</td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $stap;?></b>&nbsp;ufc/g</td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo "absent in 25g";?></b></td>	
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $list;?></b>&nbsp;ufc/g</td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $baci;?></b>&nbsp;ufc/g</td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $coli;?></b>&nbsp;ufc/g</td>
<td align="center" style="background:#dddddd"><b style="color:#3300cc"><?echo $ecol;?></b>&nbsp;ufc/g</td>
</tr>
</table>

<br/><br/>


</div>
