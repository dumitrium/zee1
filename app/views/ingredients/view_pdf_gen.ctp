<?php 
App::import('Vendor','xtcpdf');  



class MYPDF extends XTCPDF {
    //Page header
    public function Header() {
        // Logo
        $this->Image(K_PATH_IMAGES.'ZeelandiaLogo.jpg', 206, 5, 80);
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
$tcpdf->setPageOrientation('L');
$tcpdf->SetMargins(10, 25, 10);
$tcpdf->SetAuthor("Green Apple Solutions, http://www.greens.ro"); 
$tcpdf->SetAutoPageBreak( false ); 
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = 'Green Apple Solutions, http://www.greens.ro'; 
$tcpdf->xfootertext = 'Green Apple Solutions, http://www.greens.ro.'; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();

$tcpdf->SetFont('helvetica', '', 10);
$htmltable = '<h1> </h1><h1> </h1><h3><u>MODIFICARI GENETICE</u></h3><h4>Denumire ingredient: '.htmlspecialchars($ingredient['Ingredient']['name']).'</h4>
<h4>Cod Ingredient :'.htmlspecialchars($ingredient['Ingredient']['cod']).'</h4><h4>Data :'.htmlspecialchars($ingredient['Ingredient']['created']).'</h4><h4> </h4>

<table align="left" width="900" border="1" cellpadding="4">

<tr><td  width="55"><b>&nbsp;Sursa</b></td>
	<td width="160"><b>Ingredient</b></td>
	<td width="115" ><b>Sub-ingredient(*)</b></td>
	<td width="115" ><b>Origine-mg da/nu</b></td>
	<td width="115" ><b>Daca nu,1,2,3,4(**)</b></td>
	<td width="115" ><b>Daca 3,sursa botanica</b></td>
	<td width="115" ><b>Daca 4,tara de origine</b></td></tr>
<tr><td width="55"><b>&nbsp;Soia</b>	</td>
	<td width="160">'.$ingredient['IngredientGeneticModification']['soiaIngredient'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['soiaSub'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['soiaOrigine'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['soiaNu'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['soiaSursa'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['soiaTara'].'</td></tr>
	
<tr><td width="55"><b>&nbsp;Porumb</b>	</td>
	<td width="160">'.$ingredient['IngredientGeneticModification']['porumbIngredient'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['porumbSub'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['porumbOrigine'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['porumbNu'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['porumbSursa'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['porumbTara'].'</td></tr>
	
<tr><td width="55"><b>&nbsp;Rapita</b>	</td>
	<td width="160">'.$ingredient['IngredientGeneticModification']['rapitaIngredient'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['rapitaSub'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['rapitaOrigine'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['rapitaNu'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['rapitaSursa'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['rapitaTara'].'</td></tr>
	
<tr><td width="55"><b>&nbsp;Bumbac</b>	</td>
	<td width="160">'.$ingredient['IngredientGeneticModification']['bumbacIngredient'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['bumbacSub'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['bumbacOrigine'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['bumbacNu'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['bumbacSursa'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['bumbacTara'].'</td></tr>

<tr><td width="55"><b>&nbsp;Sfecla<br/> de zahar</b>	</td>
	<td width="160">'.$ingredient['IngredientGeneticModification']['sfeclaIngredient'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['sfeclaSub'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['sfeclaOrigine'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['sfeclaNu'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['sfeclaSursa'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['sfeclaTara'].'</td></tr>

<tr><td width="55"><b>&nbsp;Bumbac</b>	</td>
	<td width="160">'.$ingredient['IngredientGeneticModification']['cartofiIngredient'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['cartofiSub'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['cartofiOrigine'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['cartofiNu'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['cartofiSursa'].'</td>
	<td width="115">'.$ingredient['IngredientGeneticModification']['cartofiTara'].'</td></tr>
</table>
<h3> </h3>
<table><tr><td>(*) In general, sub-ingredientele nu apar in declaratia privind ingredientele.Majoritatea sunt agenti 
	microbieni si de procesare auxiliari ai ingredientelor din a doua coloana.<br/>
	(**) Legenda<br/>
	1.Sistemul de pastrare a identitatilor sau datelor de identificare(IP).Furnizorul a trimis o prezentare 
	a sistemului sau copie a certificatului.<br/>
	2.Declaratia scrisa a furnizorului(furnizorilor) prin care se specifica faptul ca ingredientele mentionate nu provin
	din materialele modificate genetic.<br/>
	3.Sursa botanica: la anumite plante, nu se cunosc specii modificate genetic. Se precizeaza specia/tipul de planta.<br/>
	4.Sursa geografica: in anumite parti, cresterea plantelor modificate genetic este interzisa prin lege.In acest caz se precizeaza
	tara de provenienta a plantelor.</td></tr></table>
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