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
$tcpdf->SetAuthor("Green Apple Solutions, http://www.greens.ro"); 
$tcpdf->SetAutoPageBreak( false ); 
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = 'Green Apple Solutions, http://www.greens.ro'; 
$tcpdf->xfootertext = 'Green Apple Solutions, http://www.greens.ro'; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();


$htmltable = '<h1> </h1><h1> </h1><h3><u>LISTA DE ALERGENI CROSS CONTAMINARE</u></h3><h4>Denumire ingredient: '.htmlspecialchars($ingredient['Ingredient']['name']).'</h4>
<h4>Cod Ingredient :'.htmlspecialchars($ingredient['Ingredient']['cod']).'</h4><h4>Data :'.htmlspecialchars($ingredient['Ingredient']['created']).'</h4><h4> </h4>


<table style="text-align: left;border:1px solid #ccc;"  align="left">
		<tr height="30" bgcolor="#000000" color="#ffffff"><td width=20>&nbsp;Nr.</td><td width=400 >&nbsp;Denumire alergen</td><td width=60 >&nbsp;0 sau 1</td></tr>
		<tr><td width=20>&nbsp;1&nbsp;</td><td width=400>&nbsp;Cereale care contin gluten(grau, secara  orz, ovaz sau hibrizi) si derivate</td>
		<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['cerealeGluten'].'&nbsp;</td>
		<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['cerealeGlutenZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20 >&nbsp;2&nbsp;</td><td width=400>&nbsp;Crustacee si derivate</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['crustacee'].'&nbsp;</td>
		<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['crustaceeZ'].'&nbsp;</td></tr>
        
		<tr><td width=20>&nbsp;3&nbsp;</td><td width=400>&nbsp;Oua si derivate</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['oua'].'&nbsp;</td>
		<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['ouaZ'].'&nbsp;</td></tr>
       
		 <tr bgcolor="#d0d0d0"><td width=20>&nbsp;4&nbsp;</td><td width=400>&nbsp;Peste si derivate</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['peste'].'&nbsp;</td>
		 <td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['pesteZ'].'&nbsp;</td>
		</tr>
		
		 
		<tr><td width=20>&nbsp;5&nbsp;</td><td width=400>&nbsp;Alune si derivate</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['alune'].'&nbsp;</td>
		<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['aluneZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20>&nbsp;6&nbsp;</td><td width=400>&nbsp;Soia si derivate</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['soia'].'&nbsp;</td>
		<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['soiaZ'].'&nbsp;</td></tr>
		
		<tr><td width=20>&nbsp;7&nbsp;</td><td width=400>&nbsp;Lapte si derivate inclusiv lactoza</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['lapte'].'&nbsp;</td>
		<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['lapteZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20>&nbsp;8&nbsp;</td><td width=400>&nbsp;Nuci (ex. migdale, arahide, nuci, nuci braziliene,fistic) si derivate</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['nuci'].'&nbsp;</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['nuciZ'].'&nbsp;</td></tr>
		
		<tr><td width=20>&nbsp;9&nbsp;</td><td width=400>&nbsp;Telina si derivate</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['telina'].'&nbsp;</td>
		<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['telinaZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20>&nbsp;10</td><td width=400>&nbsp;Mustar si derivate</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['mustar'].'&nbsp;</td>
		<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['mustarZ'].'&nbsp;</td></tr>
		
		<tr><td width=20>&nbsp;11</td><td width=400>&nbsp;Seminte de susan si derivate</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['susan'].'&nbsp;</td>
		<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['susanZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20>&nbsp;12</td><td width=400>&nbsp;Dioxid de sulf si sulfiti la concentratii mai mari de 10 mg/kg sau 10 mg/litru<br/>
												&nbsp;exprimate ca SO2
												
	</td><td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['dioxidSulf'].'&nbsp;</td
	<td width=60>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientCrossAlergen']['dioxidSulfZ'].'&nbsp;</td>></tr>
		</table><h2> </h2><h4>Observatii:</h4>';











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

echo $tcpdf->Output(htmlspecialchars($ingredient['Ingredient']['name']).'alergeni cross contaminare.pdf', 'D'); 

?>