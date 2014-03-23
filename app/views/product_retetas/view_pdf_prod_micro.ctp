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

//$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Zeelandia Romania');
//$pdf->SetTitle("$ingredient['Ingredient']['name']");

//$pdf->SetSubject('ingredient x');
//$pdf->SetKeywords('Zeelandia, PDF, software, Iasi, www.greens.ro');

//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 
$tcpdf->setPageOrientation('L');
$tcpdf->SetAuthor(""); 
$tcpdf->SetAutoPageBreak( true, 20 ); 
$tcpdf->SetMargins(25, 40, 10);
$tcpdf->SetDisplayMode('fullpage', 'OneColumn', 'UseNone');
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = ''; 
$tcpdf->xfootertext = ''; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();


$tcpdf->SetFont('helvetica', '', 10);
$htmltable ='<h3><u>PROPRIETATI MICROBIOLOGICE</u></h3><h4>Denumire produs: '.
htmlspecialchars($product['Product']['name']).'</h4>
<h4>Cod produs: '.htmlspecialchars($product['Product']['cod']).'</h4><h4>Data: '.htmlspecialchars($product['Product']['created']).'</h4><h4> </h4><table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;">
<tr bgcolor="#000000" color="#ffffff">
<td style="height:12px;background: #ecf0f6" colspan="11" align="center"><b>MICROBIOLOGIE</b></td></tr>
<tr bgcolor="#cccccc" color="#000000">
	<td align="center" style="background:#dddddd;"><b >Ingredient</B></td>
	<td align="center" style="background:#dddddd"><b >&nbsp;Procent&nbsp;</B></td>
	<td align="center" style="background:#dddddd"><b >&nbsp;&nbsp;&nbsp; NTG&nbsp;&nbsp;&nbsp;</B></td>
	<td align="center" style="background:#dddddd"><b >&nbsp;Enterobacteriacee&nbsp;</B></td>
	<td align="center" style="background:#dddddd"><b >&nbsp;Drojdii si mucegaiuri&nbsp;</B></td>
	<td align="center" style="background:#dddddd"><b >&nbsp;Staphylococus aureus&nbsp;</B></td>
	<td align="center" style="background:#dddddd"><b >&nbsp;Salmonella&nbsp;</B></td>
	<td align="center" style="background:#dddddd"><b >&nbsp;Listeria m.&nbsp;</B></td>
	<td align="center" style="background:#dddddd"><b >&nbsp;Bacillus cereus&nbsp;</B></td>
	<td align="center" style="background:#dddddd"><b >&nbsp;Coliformi&nbsp;</B></td>
	<td align="center" style="background:#dddddd"><b >&nbsp;&nbsp;E.coli&nbsp;&nbsp;</B></td></tr>';


 $procent=0;$ntg=0;$ente=0;$droj=0;$stap=0;$salm=0;$list=0;$baci=0;$coli=0;$ecol=0;
foreach($productRetetas as $productReteta):
$procent=$procent+$productReteta['ProductReteta']['procent'];
$x=$productReteta['Ingredient']['IngredientStandard']['nrGermeni']/100*$productReteta['ProductReteta']['procent'];
$ntg=$ntg+$productReteta['Ingredient']['IngredientStandard']['nrGermeni']/100*$productReteta['ProductReteta']['procent'];
$ente=$ente+$productReteta['Ingredient']['IngredientStandard']['entero']/100*$productReteta['ProductReteta']['procent'];
$droj=$droj+$productReteta['Ingredient']['IngredientStandard']['drojdiiViz']/100*$productReteta['ProductReteta']['procent'];
$list=$list+$productReteta['Ingredient']['IngredientStandard']['listeriaViz']/100*$productReteta['ProductReteta']['procent'];
$baci=$baci+$productReteta['Ingredient']['IngredientStandard']['bacillusViz']/100*$productReteta['ProductReteta']['procent'];
$coli=$coli+$productReteta['Ingredient']['IngredientStandard']['coliformi']/100*$productReteta['ProductReteta']['procent'];
$ecol=$ecol+$productReteta['Ingredient']['IngredientStandard']['ecoli']/100*$productReteta['ProductReteta']['procent'];
$stap=$stap+$productReteta['Ingredient']['IngredientStandard']['staphylococusViz']/100*$productReteta['ProductReteta']['procent'];

$en=$productReteta['Ingredient']['IngredientStandard']['entero']/100*$productReteta['ProductReteta']['procent'];
$ec=$productReteta['Ingredient']['IngredientStandard']['ecoli']/100*$productReteta['ProductReteta']['procent'];
$ba=$productReteta['Ingredient']['IngredientStandard']['bacillusViz']/100*$productReteta['ProductReteta']['procent'];
$co=$productReteta['Ingredient']['IngredientStandard']['coliformi']/100*$productReteta['ProductReteta']['procent'];
$li=$productReteta['Ingredient']['IngredientStandard']['listeriaViz']/100*$productReteta['ProductReteta']['procent'];
$sta=$productReteta['Ingredient']['IngredientStandard']['staphylococusViz']/100*$productReteta['ProductReteta']['procent'];
$dro=$productReteta['Ingredient']['IngredientStandard']['drojdiiViz']/100*$productReteta['ProductReteta']['procent'];
$htmltable =$htmltable.'<tr>
	<td align="center">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td>
	<td align="center">'.$productReteta['ProductReteta']['procent'].'&nbsp;%</td>
	<td align="center">'.$x.'</td>
	<td align="center">'.$en.'</td>
	<td align="center">'.$dro.'</td>
	<td align="center">'.$sta.'</td>
	<td align="center">'.'absent in 25g'.'</td>
	<td align="center">'.$li.'</td>
	<td align="center">'.$ba.'</td>
	<td align="center">'.$co.'</td>
	<td align="center">'.$ec.'</td></tr>';
endforeach;
$htmltable=$htmltable.'<tr bgcolor="#cccccc">
<td align="center" >'.$productReteta['Product']['name'].'</td>	
<td align="center" ><b align="center">'.$procent.'&nbsp;%</b></td>
<td align="center" ><b color="#000000">'.$ntg.'</b>&nbsp;ufc/g</td>
<td align="center" ><b color="#000000">'.$ente.'</b>&nbsp;ufc/g</td>	
<td align="center" ><b >'.$droj.'</b>&nbsp;ufc/g</td>	
<td align="center" ><b >'.$stap.'</b>&nbsp;ufc/g</td>
<td align="center" ><b >absent in 25g</b></td>	
<td align="center" ><b >'.$list.'</b>&nbsp;ufc/g</td>
<td align="center" ><b >'.$baci.'</b>&nbsp;ufc/g</td>
<td align="center" ><b >'.$coli.'</b>&nbsp;ufc/g</td>
<td align="center" ><b >'.$ecol.'</b>&nbsp;ufc/g</td>
</tr>
	</table>';


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

$tcpdf->Output('alergeni '.htmlspecialchars($product['Product']['name']).'.pdf', 'D'); 

?>