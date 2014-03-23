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
$tcpdf->xfootertext = 'Green Apple Solutions, http://www.greens.ro.'; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();


$htmltable = '<h1> </h1><h1> </h1><h3><u>LISTA DE ALERGENI</u></h3><h4>Denumire ingredient: '.htmlspecialchars($ingredient['Ingredient']['name']).'</h4>
<h4>Cod Ingredient :'.htmlspecialchars($ingredient['Ingredient']['cod']).'</h4><h4>Data :'.htmlspecialchars($ingredient['Ingredient']['created']).'</h4><h4> </h4>


<table style="text-align: left;border:1px solid #ccc;"  align="left">
		<tr height="30" bgcolor="#000000" color="#ffffff"><td width=20>&nbsp;Nr.</td><td width=250 >&nbsp;Denumire alergen</td><td width=135 >Agenti alergeni&nbsp;&nbsp;&nbsp;&nbsp; 0-absent, 1-prezent</td><td width=135>Cross Contaminare 0-absent, 1-prezent</td></tr>
		<tr><td width=20>&nbsp;1&nbsp;</td><td width=250>&nbsp;Cereale care contin gluten(grau, secara  orz, &nbsp;ovaz sau hibrizi) si derivate</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['cerealeGluten'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['cerealeGlutenZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20 >&nbsp;2&nbsp;</td><td width=250>&nbsp;Crustacee si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['crustacee'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['crustaceeZ'].'&nbsp;</td></tr>
        
		<tr><td width=20>&nbsp;3&nbsp;</td><td width=250>&nbsp;Oua si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['oua'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['ouaZ'].'&nbsp;</td></tr>
       
		 <tr bgcolor="#d0d0d0"><td width=20>&nbsp;4&nbsp;</td><td width=250>&nbsp;Peste si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['peste'].'&nbsp;</td>
		 <td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['pesteZ'].'&nbsp;</td>
		</tr>
		
		 
		<tr><td width=20>&nbsp;5&nbsp;</td><td width=250>&nbsp;Alune si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['alune'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['aluneZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20>&nbsp;6&nbsp;</td><td width=250>&nbsp;Soia si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['soia'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['soiaZ'].'&nbsp;</td></tr>
		
		<tr><td width=20>&nbsp;7&nbsp;</td><td width=250>&nbsp;Lapte si derivate inclusiv lactoza</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['lapte'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['lapteZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20>&nbsp;8&nbsp;</td><td width=250>&nbsp;Nuci (ex. migdale, arahide, nuci, nuci &nbsp;braziliene,fistic) si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['nuci'].'&nbsp;</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['nuciZ'].'&nbsp;</td></tr>
		
		<tr><td width=20>&nbsp;9&nbsp;</td><td width=250>&nbsp;Telina si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['telina'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['telinaZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20>&nbsp;10</td><td width=250>&nbsp;Mustar si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['mustar'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['mustarZ'].'&nbsp;</td></tr>
		
		<tr><td width=20>&nbsp;11</td><td width=250>&nbsp;Seminte de susan si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['susan'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['susanZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20>&nbsp;10</td><td width=250>&nbsp;Lupin si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['lupin'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['lupinZ'].'&nbsp;</td></tr>
		
		<tr ><td width=20>&nbsp;10</td><td width=250>&nbsp;Moluste si derivate</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['moluste'].'&nbsp;</td>
		<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['molusteZ'].'&nbsp;</td></tr>
		
		<tr bgcolor="#d0d0d0"><td width=20>&nbsp;12</td><td width=250>&nbsp;Dioxid de sulf si sulfiti la concentratii mai mari &nbsp;de 10 mg/kg sau 10 mg/litru<br/>
												&nbsp;exprimate ca SO2
												
	</td><td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['dioxidSulf'].'&nbsp;</td>
	<td width=135>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ingredient['IngredientAlergen']['dioxidSulfZ'].'&nbsp;</td></tr>
		</table><h2> </h2><h4>Observatii:</h4>';





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

echo $tcpdf->Output(htmlspecialchars($ingredient['Ingredient']['name']).' agentii alergeni.pdf', 'D'); 

?>