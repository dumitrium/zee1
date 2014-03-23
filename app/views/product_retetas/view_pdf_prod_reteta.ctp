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
$tcpdf->SetAutoPageBreak( true, 20 ); 
$tcpdf->SetMargins(25, 40, 10);
$tcpdf->SetDisplayMode('fullpage', 'OneColumn', 'UseNone');
$tcpdf->SetAuthor(""); 
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = ''; 
$tcpdf->xfootertext = 'Copyright'; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();

$tcpdf->SetFont('helvetica', '', 9);
$htmltable='<h3><u>RETETA PRODUS</u></h3><h4>Denumire produs: '.
htmlspecialchars($product['Product']['name']).'</h4>
<h4>Cod produs: '.htmlspecialchars($product['Product']['cod']).'</h4><h4>Data: '.htmlspecialchars($product['Product']['created']).'</h4><h4> </h4><table style="border:1px solid #ccc;">
		<tr bgcolor="#dddddd"><th align="center">Ingredient</th>
			<th align="center">Procent(%)</th>
			<th align="center">Functia</th>
			</tr>';
		$suma=0;$i=0;$k=0;
		foreach($productRetetas as $productReteta):
		$htmltable=$htmltable.'<tr><td align="center">';
		if($productReteta['ProductReteta']['ingredient_id']==0)
			{$i++;	
			$htmltable=$htmltable.$productReteta['ProductReteta']['faranume'];}
			else{$i++;$htmltable=$htmltable.htmlspecialchars($productReteta['Ingredient']['name']);}	
$htmltable=$htmltable.'</td><td align="center"><b>'.$productReteta['ProductReteta']['procent'].'</b></td><td align="center">'.$productReteta['ProductReteta']['functia'].'</td></tr>';	
$suma=$suma+$productReteta['ProductReteta']['procent'];	
endforeach;
	
			
		
		$htmltable=$htmltable.'	<tr class="" id="" style="border:0px;" bgcolor="#dddddd" height="14"><td align="center">Nr.ingredienti :<b>'.$i.'</b></td><td align="center"><b>Total procent:'.$suma.'&nbsp;%</b></td><td></td></tr>
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

echo $tcpdf->Output('reteta produs '.$product['Product']['name'].'.pdf', 'D'); 




?>