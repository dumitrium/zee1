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
$tcpdf->SetAutoPageBreak( true, 20 ); 
$tcpdf->SetMargins(25, 40, 10);
$tcpdf->SetDisplayMode('fullpage', 'OneColumn', 'UseNone');
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 
$tcpdf->SetAuthor("Green Apple Solutions - Iasi, Romania"); 
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = 'Green Apple Solutions, http://www.greens.ro'; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();

$tcpdf->SetFont('helvetica', '', 9);
$htmltable = '<h1>&nbsp;</h1><h1>&nbsp;</h1><h1>&nbsp;</h1><h3><u>CARACTERISTICI PRODUS</u></h3><h4>&nbsp;</h4><h4>Denumire produs: '.htmlspecialchars($product['Product']['name']).'</h4>
<h4>Cod produs :'.htmlspecialchars($product['Product']['cod']).'</h4><h4>Data :'.htmlspecialchars($product['Product']['created']).'</h4><h4>&nbsp;</h4>
<table align="left" width="330">
	<tr><td colspan="3"  ><b>STANDARDE FIZICO/CHIMICE</b></td></tr>';
	$tcpdf->SetFont('helvetica', '', 9);
		
 $htmltable=$htmltable.'<tr><td >Aspect</td><td colspan="2">'.$productCaracteristic['ProductCaracteristic']['aspect'].'</td></tr>
 <tr><td>Culoare</td><td colspan="2">'.$productCaracteristic['ProductCaracteristic']['culoare'].'</td></tr>
 <tr><td>Miros</td><td colspan="2">'.$productCaracteristic['ProductCaracteristic']['miros'].'</td></tr>
 <tr><td>gust</td><td colspan="2">'.$productCaracteristic['ProductCaracteristic']['gust'].'</td></tr>
 <tr><td>Brix</td><td colspan="2">'.$productCaracteristic['ProductCaracteristic']['brix'].'</td></tr>
 <tr><td>Vascozitate</td><td colspan="2">'.$productCaracteristic['ProductCaracteristic']['vascozitate'].'</td></tr>
 <tr><td> Ph</td><td colspan="2">'.$productCaracteristic['ProductCaracteristic']['ph'].'</td></tr>
</table>';






// set font
$tcpdf->SetFont('helvetica', '', 12);


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

echo $tcpdf->Output('caracteristici produs'.htmlspecialchars($product['Product']['name']).'.pdf', 'D'); 

?>