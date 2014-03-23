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
$tcpdf->SetMargins(25, 40, 10);
$tcpdf->SetAuthor(""); 
$tcpdf->SetAutoPageBreak( false ); 
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = ''; 
$tcpdf->xfootertext = 'Copyright'; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();

$tcpdf->SetFont('helvetica', '', 9);
$htmltable='<h2>'.htmlspecialchars($ingr['Ingredient']['name']).'</h2>
<h4>(ingredient compus)</h4><h4>Cod Ingredient :'.htmlspecialchars($ingr['Ingredient']['cod']).'</h4><h4>Data :'.htmlspecialchars($ingr['Ingredient']['created']).'</h4><h4> </h4><table style="border:1px solid #000;" border="1">
		<tr bgcolor="#dddddd">
			<th align="center" >Subingredient</th>
			<th align="center" >Procent(%)</th>
			<th align="center" >Functia</th>
			<th align="center" >Text Eticheta</th>
			</tr>';
		$suma=0;$i=0;$k=0;
		foreach($ingredientComps as $ingredientComp):
		
$htmltable=$htmltable.'<tr border="1">
			
			<td align="center" height="18">';
				if ($ingredientComp['IngredientComp']['ingred_id']==0)
				{$htmltable=$htmltable.htmlspecialchars($ingredientComp['IngredientComp']['faranume']);
				$i++;}else{
			$htmltable=$htmltable.htmlspecialchars($ingredientComp['Ingredient']['name']);$i++; }
			
			
$htmltable=$htmltable.'</td>
			<td align="center" ><b>'.$ingredientComp['IngredientComp']['procent'].'</b></td>';
			$suma=$suma+$ingredientComp['IngredientComp']['procent'];
			$htmltable=$htmltable.'<td align="center" >'. $ingredientComp['IngredientComp']['functia'].'</td><td align="center" >'. $ingredientComp['IngredientComp']['eticheta'].'</td>
					</tr>';
		endforeach;
		
		$htmltable=$htmltable.'	<tr class="" id="" style="border:1px;" bgcolor="#dddddd" height="18" border="1"><td align="center">Nr.ingredienti :<b>'.$i.'</b></td><td align="center"><b>Total procent:'.$suma.'&nbsp;%</b></td><td></td><td></td></tr>
	</table>';









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

echo $tcpdf->Output('ingredient compus '.$ingr['Ingredient']['name'].'.pdf', 'D'); 

?>