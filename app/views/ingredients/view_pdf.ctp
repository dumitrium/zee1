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
//$pdf->SetTitle("htmlspecialchars($ingredient['Ingredient']['name'])");

//$pdf->SetSubject('ingredient x');
//$pdf->SetKeywords('Zeelandia, PDF, software, Iasi, www.greens.ro');

//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 
$tcpdf->SetMargins(25, 10, 10);
$tcpdf->SetAuthor(""); 
$tcpdf->SetAutoPageBreak( false ); 
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = ''; 
$tcpdf->xfootertext = 'Copyright'; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();

$tcpdf->SetFont('helvetica', '', 10);
$htmltable = '<h1> </h1><h1> </h1><h3><u>INFORMATII INGREDIENT</u></h3>
<h4>Denumire ingredient: '.htmlspecialchars($ingredient['Ingredient']['name']).'</h4>
<h4>Cod Articol :'.htmlspecialchars($ingredient['Ingredient']['cod']).'</h4><h4>Data :'.htmlspecialchars($ingredient['Ingredient']['created']).'</h4><h4> </h4>

<h2><u>'.htmlspecialchars($ingredient['Ingredient']['name']).'</u></h2>
<table style="text-align: left;border:1px solid #ccc;"  align="left" width="300">
		<tr bgcolor="#d0d0d0"><td>&nbsp;ID Ingredient</td><td>&nbsp;'.$ingredient['Ingredient']['id'].'&nbsp;</td></tr>
		<tr><td>&nbsp;Cod</td><td>&nbsp;'.$ingredient['Ingredient']['cod'].'&nbsp;</td></tr>
		<tr bgcolor="#d0d0d0"><td>&nbsp;Denumire comerciala</td><td>&nbsp;'.htmlspecialchars($ingredient['Ingredient']['name']).'&nbsp;</td></tr>
		<tr><td>&nbsp;Denumire chimica</td><td>&nbsp;'.$ingredient['Ingredient']['name2'].'&nbsp;</td></tr>
		<tr bgcolor="#d0d0d0"><td>&nbsp;Denumire E</td><td>&nbsp;'.$ingredient['Ingredient']['namee'].'&nbsp;</td></tr>
		<tr><td>&nbsp;Furnizor: </td><td>&nbsp;'.$ingredient['Ingredient']['furnizor'].'&nbsp;</td></tr>
		<tr bgcolor="#d0d0d0"><td>&nbsp;Producator:</td><td>&nbsp;'.$ingredient['Ingredient']['producator'].'&nbsp;</td></tr>
		<tr><td>&nbsp;Tara Origine: </td><td>&nbsp;'.$ingredient['Ingredient']['taraOrigine'].'&nbsp;</td></tr>
		<tr bgcolor="#d0d0d0"><td>&nbsp;Valabilitate: </td><td>&nbsp;'.$ingredient['Ingredient']['garantie'].'&nbsp;luni&nbsp;</td></tr>
		<tr><td>&nbsp;Grupa Produsului: </td><td>&nbsp;'.$ingredient['Ingredient']['grupaProdusului'].'&nbsp;</td></tr>
		<tr bgcolor="#d0d0d0"><td>&nbsp;Subgrupa Produsului: </td><td>&nbsp;'.$ingredient['Ingredient']['subgrupa'].'&nbsp;</td></tr>
		<tr><td>&nbsp;Descriere: </td><td>&nbsp;'.$ingredient['Ingredient']['descriere'].'&nbsp;</td></tr>
		<tr bgcolor="#d0d0d0"><td>&nbsp;Posibile Aplicatii: </td><td>&nbsp;'.$ingredient['Ingredient']['posibileAplicatii'].'</td></tr>
		<tr><td>&nbsp;Stadiul Autorizarii: </td><td>&nbsp;'.$ingredient['Ingredient']['stadiulAutorizarii'].'&nbsp; </td></tr>
		<tr bgcolor="#d0d0d0"><td>&nbsp;Certificari: </td><td>&nbsp;'.$ingredient['Ingredient']['certificari'].'&nbsp;</td></tr>
		<tr><td>&nbsp;Observatii:</td><td>&nbsp;'.$ingredient['Ingredient']['observatii'].'&nbsp;</td></tr>
		<tr bgcolor="#d0d0d0"><td>&nbsp;Tip Ingredient:</td><td>&nbsp;'.$ingredient['Ingredient']['tip'].'&nbsp;</td></tr>
		<tr><td>&nbsp;Data crearii:</td><td>&nbsp;'.$ingredient['Ingredient']['created'].'&nbsp;</td></tr>
		<tr bgcolor="#d0d0d0"><td>&nbsp;Data ultimei modificari</td><td>&nbsp;'.$ingredient['Ingredient']['modified'].'&nbsp;</td></tr>
		
		
	</table>	
';











/*
// set font
$tcpdf->SetFont('helvetica', '', 12);

// add a page
$tcpdf->AddPage();

//Column titles
$header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');

//Data loading
$data = $tcpdf->LoadData('http://www.google.ro');

// print colored table
$tcpdf->ColoredTable($header, $data);

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_011.pdf', 'I');

*/




/*
// set color for filler
$tcpdf->SetFillColor(255, 255, 0);

// Multicell test
$tcpdf->MultiCell(40, 5, 'A test multicell line 1 test multicell line 2 test multicell line 3', 1, 'L', 1, 1, '', '', true);
$tcpdf->MultiCell(40, 5, 'B test multicell line 1 test multicell line 2 test multicell line 3', 1, 'R', 0, 1, '', '', true);
$tcpdf->MultiCell(40, 5, 'C test multicell line 1 test multicell line 2 test multicell line 3', 1, 'C', 0, 0, '', '', true);
$tcpdf->MultiCell(40, 5, 'D test multicell line 1 test multicell line 2 test multicell line 3'."\n", 1, 'J', 1, 2, '' ,'', true);
$tcpdf->MultiCell(40, 5, 'E test multicell line 1 test multicell line 2 test multicell line 3', 1, 'L', 0, 1, '', '', true);

$tcpdf->SetFillColor(255, 200, 200);

$tcpdf->MultiCell(40, 5, 'F test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line'."\n", 1, 'J', 1, 1, '' ,'', true);

// reset pointer to the last page
$tcpdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$tcpdf->Output('example_005.pdf', 'I');


*/







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

echo $tcpdf->Output('modificari genetice '.htmlspecialchars($ingredient['Ingredient']['name']).'.pdf', 'D'); 

?>