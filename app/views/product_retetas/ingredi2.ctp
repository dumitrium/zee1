<?
$ingredi=array();
$procent=0;$i=1;

foreach($productRetetas as $productReteta):
if ($productReteta['Ingredient']['tip']=='compus'){
	$sql=mysql_query("SELECT IngredientComp.id, IngredientComp.ingred_id, IngredientComp.ingredient_id, IngredientComp.procent, IngredientComp.functia, IngredientComp.eticheta, IngredientComp.faranume, Ingredient.id, Ingredient.name2, Ingredient.namee, Ingredient.tip  FROM ingredient_comps AS IngredientComp LEFT JOIN ingredients AS Ingredient  ON (IngredientComp.ingred_id = Ingredient.id) WHERE IngredientComp.ingredient_id = ".$productReteta['Ingredient']['id']." ORDER BY procent DESC") or die(mysql_error());
	
	while ($row3 = mysql_fetch_array($sql, MYSQL_ASSOC)){
			if ($row3['ingred_id']==0)  { 
				$pr=$row3['procent']/100*$productReteta['ProductReteta']['procent'];$procent=$procent+$pr;
				$ingredi[$i++]=array($i, $row3['faranume'], $row3['eticheta'], $pr,$row3['functia'],$productReteta['Ingredient']['name2']);}
					else {$pr=$row3['procent']/100*$productReteta['ProductReteta']['procent'];$procent=$procent+$pr;
						$ingredi[$i++]=array($i,$row3['name2'].'('.$row3['namee'].')',$row3['eticheta'],$pr,$row3['functia'],$productReteta['Ingredient']['name2']);}
				
				}
		
}
else	{ $ingredi[$i++]=array($i,$productReteta['Ingredient']['name2'].'('.$productReteta['Ingredient']['namee'].')', $productReteta['Ingredient']['eticheta'], $productReteta['ProductReteta']['procent'],$productReteta['ProductReteta']['functia'],'');
						$procent=$procent+$productReteta['ProductReteta']['procent'];
					
						
					}
			
endforeach;

$nume=htmlspecialchars($product['Product']['name']);
$j=$productReteta['Product']['id'];

function sort2d ($array, $index, $order='desc', $natsort=FALSE, $case_sensitive=FALSE)  
    { 
        if(is_array($array) && count($array)>0)  
        { 
           foreach(array_keys($array) as $key)  
               $temp[$key]=$array[$key][$index]; 
               if(!$natsort)  
                   ($order=='asc')? asort($temp) : arsort($temp); 
              else  
              { 
                 ($case_sensitive)? natsort($temp) : natcasesort($temp); 
                 if($order!='asc')  
                     $temp=array_reverse($temp,TRUE); 
           } 
           foreach(array_keys($temp) as $key)  
               (is_numeric($key))? $sorted[]=$array[$key] : $sorted[$key]=$array[$key]; 
           return $sorted; 
      } 
      return $array; 
    }  
 $k=sort2d($ingredi, 3);
 
   
?>
<div class="productRetetas index">
	<h2>Ingredientii produsului </h2>
	<div style="font-size:14px;padding-bottom:10px;">Produs: <b><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $prod));?></b><?php echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_prod_ingredi', $prod), array('escape' => false, 'style'=>'vertical-align:-4px;margin-left:400px;'));?></div>
	
<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr style="height:12px;"><td style="height:12px;background: #ecf0f6" colspan="11" align="center"><b>LISTA INGREDIENTI</b></td></tr>
<tr><th>Denumire ingredient</th>
<th>Text eticheta</th>
<th>Ingredient compus</th>
<th>&nbsp;Procent&nbsp;</th>
<th>&nbsp;Functia&nbsp;</th></tr>


<?
foreach($k as $productReteta):
//echo $productReteta['ProductReteta']['ingredient_id'];

?>
<tr>
	
	<td align="left"><b><? echo $productReteta[1];?></b></td>
    <td align="left"><? echo $productReteta[2];?></td>
	<td align="center"><? if ($productReteta[5]<>null){echo $productReteta[5];}else{echo ' - ';} ?></td>
	<td align="center"><? echo $productReteta[3] ?></td>
	<td align="center"><? echo $productReteta[4] ?></td> 

</tr>
		
		
		
		
<? endforeach;?>
<tr>
<td align="center" style="background:#dddddd"><?php echo $html->link($nume, array('controller'=> 'products', 'action'=>'view', $j)); ?></td>	
<td style="background:#dddddd"></td><td style="background:#dddddd"></td><td align="center" style="background:#dddddd"><b align="center" style="color:<?if ($procent>100) {echo '#ff3300';}else{ echo '#3300cc';}?>"><? echo $procent;?>&nbsp;%</b></td>
<td style="background:#dddddd"></td>

</tr>
</table>

<br/><br/>







</div>
