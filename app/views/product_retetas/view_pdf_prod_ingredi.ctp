<?php 
App::import('Vendor','xtcpdf');  



class MYPDF extends XTCPDF {
    //Page header
    public function Header() {
        // Logo
        $this->Image(K_PATH_IMAGES.'ZeelandiaLogo.jpg', 106, 5, 80);
        // Set font
        //$this->SetFont('helvetica', 'B', 20);
        // Move to the right
        $this->Cell(80);
        // Title
        //$this->Cell(30, 10, 'Title', 0, 0, 'C');
        // Line break
        $this->Ln(20);
    }
    
    // Page footer
    public function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, 0, 'C');
    }


 
}

$tcpdf = new MYPDF(); 
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 
$tcpdf->SetAuthor(""); 
$tcpdf->SetAutoPageBreak( true, 20 ); 
$tcpdf->SetMargins(25, 40, 10);
$tcpdf->SetDisplayMode('fullpage', 'OneColumn', 'UseNone');
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = ''; 
$tcpdf->xfootertext = 'Copyright'; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();

$tcpdf->SetFont('helvetica', '', 9);
$htmltable='<h3><u>INGREDIENTI PRODUS</u></h3><h4>Denumire produs: '.
htmlspecialchars($product['Product']['name']).'</h4>
<h4>Cod produs: '.htmlspecialchars($product['Product']['cod']).'</h4><h4>Data: '.htmlspecialchars($product['Product']['created']).'</h4><h4> </h4><p><table style="border:1px solid #ccc;">
<tr bgcolor="#cccccc" style="color:#000000;" ><td colspan="4" align="center" width="490" height="14"><b>LISTA INGREDIENTI PRODUS</b></td></tr>
<tr  bgcolor="#000000" style="color:#ffffff;">
<th width="135" height="14">&nbsp;Denumire ingredient</th>
<th width="120" align="center">Text eticheta</th>
<th width="100" align="center">Ingredient compus</th> 
<th width="65" align="center">&nbsp;Procent</th>
<th width="70" align="center">&nbsp;Functia&nbsp;</th></tr>';
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




		foreach($k as $productReteta):
		
		
		$htmltable=$htmltable.'<tr style="height:24px;vertical-align:middle;">
		<td align="left" width="135" height="18" border="1">&nbsp;'.$productReteta[1].'</td>
		<td align="center" width="120" border="1">'.$productReteta[2].'</td>
		<td align="center" width="100" border="1">';
		
	if ($productReteta[5]<>null){$htmltable=$htmltable.$productReteta[5];}else{$htmltable=$htmltable.' - ';}
	
	$htmltable=$htmltable.'</td>
	<td align="center" width="65" border="1">'.$productReteta[3].'g&nbsp;%</td>
	<td align="center" width="70" border="1">'.$productReteta[4].'</td> 

</tr>';
endforeach;
	
$htmltable=$htmltable.'<tr bgcolor="#cccccc" style="color:#000000;" >
<td style="background:#dddddd;margin: 1em 0;" width="135" height="20">&nbsp;<b>'.$nume.'</b></td>	
<td style="background:#dddddd" width="120"></td>
<td style="background:#dddddd" width="100"></td>
<td align="center" style="background:#dddddd" width="65"><b align="center" >'.$procent.'&nbsp;%</b></td>
<td width="70" style="background:#dddddd"></td>

</tr>
</table></p>	';	
	

$tcpdf->writeHTML($htmltable, true, 0, false, 0, '');

//$tcpdf->AddPath();
// Now you position and print your page content 
// example:  
$tcpdf->SetTextColor(0, 0, 0); 
$tcpdf->SetFont($textfont,'B',20); 
//$tcpdf->Cell(75,75, $property, 0,1,'L'); 
// ... 
// etc. 
// see the TCPDF examples  
//$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);

echo $tcpdf->Output('ingredienti produs '.$nume.'.pdf', 'D'); 




?>