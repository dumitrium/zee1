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

$tcpdf->SetFont('helvetica', '', 9);
$htmltable = '<h3><u>CARACTERISTICI INGREDIENT</u></h3><h4>Denumire ingredient: '.htmlspecialchars($ingredient['Ingredient']['name']).'</h4>
<h4>Cod Ingredient :'.htmlspecialchars($ingredient['Ingredient']['cod']).'</h4><h4>Data :'.htmlspecialchars($ingredient['Ingredient']['created']).'</h4><h4> </h4>
<table align="left" width="330">
	<tr><td colspan="3"  ><b>STANDARDE FIZICE/CHIMICE</b></td></tr>';
	$tcpdf->SetFont('helvetica', '', 9);
		
 $htmltable=$htmltable.'<tr><td >Aspect</td><td colspan="2">' .$ingredient['IngredientCaracteristic']['aspect'].'</td></tr>
 <tr><td>Culoare</td><td colspan="2">'.$ingredient['IngredientCaracteristic']['culoare'].'</td></tr>
 <tr><td>Miros</td><td colspan="2">'.$ingredient['IngredientCaracteristic']['miros'].'</td></tr>
 <tr><td>gust</td><td colspan="2">'.$ingredient['IngredientCaracteristic']['gust'].'</td></tr>
 <tr><td>Brix</td><td colspan="2">'.$ingredient['IngredientCaracteristic']['brix'].'</td></tr>
 <tr><td>Vascozitate</td><td colspan="2">' . $ingredient['IngredientCaracteristic']['vascozitate'].'</td></tr>
 <tr><td> Ph</td><td colspan="2">'.$ingredient['IngredientCaracteristic']['ph'].'</td></tr>
	
 <tr><td colspan="2"><h4></h4><b><u>ANALIZA/VALOARE NUTRITIVA</u></b></td><td></td></tr>	
	<tr><td><u>Valoare energetica</u></td><td width="50">'. $ingredient['IngredientCaracteristic']['valKj'].'</td><td>kJ/100g</td></tr>
		<tr><td> </td><td>'. $ingredient['IngredientCaracteristic']['valKcal'].'</td><td>kcal/100g</td></tr>
		
	<tr><td colspan="2"><u>Valoare nutritiva</u></td></tr>
	<tr><td><b>Proteine</b></td><td></td></tr>
	<tr><td> - vegetale</td><td>'. $ingredient['IngredientCaracteristic']['proteineVegetale'].'</td><td>g/100g</td></tr>
	<tr><td> - animale</td><td>'. $ingredient['IngredientCaracteristic']['proteineAnimale'].'</td><td>g/100g</td></tr>
	
	<tr><td style="background:#ecf0f6;"><B>CARBOHIDRATI</b></td><td style="background:#ecf0f6;">'.$ingredient['IngredientCaracteristic']['carbohidrati'].'</td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - zaharuri</td><td>'.$ingredient['IngredientCaracteristic']['carboxidratiZahar'].'</td><td>g/100g</td></tr>
	<tr><td> - polioli</td><td>'.$ingredient['IngredientCaracteristic']['carbohidratiPolioli'].'</td><td>g/100g</td></tr>
	<tr><td> - amidon</td><td>'.$ingredient['IngredientCaracteristic']['carbohidratiAmidon'].'</td><td>g/100g</td></tr>
	
<tr><td style="background:#ecf0f6;"><B>GRASIMI</b></td><td style="background:#ecf0f6;">'. $ingredient['IngredientCaracteristic']['grasimi'].'</td><td style="background:#ecf0f6;">g/100g</td></tr>
	<tr><td> - saturate</td><td>'. $ingredient['IngredientCaracteristic']['grasimiSaturate'].'</td><td>g/100g</td></tr>
	<tr><td> - monosaturate</td><td>'. $ingredient['IngredientCaracteristic']['grasimiMonoNesaturate'].'</td><td>g/100g</td></tr>
	<tr><td> - polisaturate</td><td>'. $ingredient['IngredientCaracteristic']['grasimiPoliNesaturate'].'</td><td>g/100g</td></tr>
    <tr><td> - vegetale</td><td>'. $ingredient['IngredientCaracteristic']['grasimiPoliNesaturateVegetale'].'</td><td>g/100g</td></tr>
	<tr><td> - animale</td><td>'. $ingredient['IngredientCaracteristic']['grasimiPoliNesaturateAnimale'].'</td><td>g/100g</td></tr>

    <tr><td ><b>Fibre dietetice</b></td><td>'. $ingredient['IngredientCaracteristic']['fibredietetice'].'</td><td>g/100g</td></tr>

 <tr><td style="background:#ecf0f6;"><b>MINERALE</b></td><td style="background:#ecf0f6;">'. $ingredient['IngredientCaracteristic']['minerale'].'</td><td style="background:#ecf0f6;">g/100g</td></tr>
<tr><td> - sodiu</td><td>'. $ingredient['IngredientCaracteristic']['mineraleSodiu'].'</td><td>mg/100g</td></tr>
<tr><td> - sodiu</td><td>'. $ingredient['IngredientCaracteristic']['mineraleCalciu'].'</td><td>mg/100g</td></tr>
<tr><td> - fosfor</td><td>'. $ingredient['IngredientCaracteristic']['mineraleFosfor'].'</td><td>mg/100g</td></tr>
<tr><td> - fier</td><td>'. $ingredient['IngredientCaracteristic']['mineraleFier'].'</td><td>mg/100g</td></tr>
<tr><td> - magneziu</td><td>'. $ingredient['IngredientCaracteristic']['mineraleMagneziu'].'</td><td>mg/100g</td></tr>
<tr><td> - zinc</td><td>'. $ingredient['IngredientCaracteristic']['mineraleZinc'].'</td><td>mg/100g</td></tr>
<tr><td> - iod</td><td>'. $ingredient['IngredientCaracteristic']['mineraleIod'].'</td><td>mg/100g</td></tr>


<tr>
  <td style="background:#ecf0f6;"><b>VITAMINE</b></td><td style="background:#ecf0f6;">'. $ingredient['IngredientCaracteristic']['vitamine'].'</td><td style="background:#ecf0f6;">g/100g</td></tr>

<tr><td>Vitamina A</td><td>'. $ingredient['IngredientCaracteristic']['vitaminaA'].'</td><td>mg/100g</td></tr>
<tr><td>Vitamina E</td><td>'. $ingredient['IngredientCaracteristic']['vitaminaE'].'</td><td>mg/100g</td></tr>
<tr><td>Vitamina C</td><td>'. $ingredient['IngredientCaracteristic']['vitaminaC'].'</td><td>mg/100g</td></tr>
<tr><td>Vitamina B1(Tiamina)</td><td>'. $ingredient['IngredientCaracteristic']['vitaminaB1'].'</td><td>mg/100g</td></tr>
<tr><td>Vitamina B2(Riboflavina)</td><td>'. $ingredient['IngredientCaracteristic']['vitaminaB2'].'</td><td>mg/100g</td></tr>
<tr><td>Vitamina B6(Piridoxina)</td><td>'. $ingredient['IngredientCaracteristic']['vitaminaB6'].'</td><td>mg/100g</td></tr>
<tr><td>Vitamina pp(Niacina)</td><td>'. $ingredient['IngredientCaracteristic']['vitaminaPp'].'</td><td>mg/100g</td></tr>
<tr><td>Acid folic</td><td>'. $ingredient['IngredientCaracteristic']['acidFolic'].'</td><td>ug/100g</td></tr>
<tr><td>Vitamina D</td><td>'. $ingredient['IngredientCaracteristic']['vitaminaD'].'</td><td>ug/100g</td></tr>
<tr><td>Vitamina B12</td><td>'. $ingredient['IngredientCaracteristic']['vitaminaB12'].'</td><td>ug/100g</td></tr>
<tr><td>Biotina</td><td>'. $ingredient['IngredientCaracteristic']['vitaminaBiotina'].'</td><td>mg/100g</td></tr>
<tr><td>Acid pantotenic</td><td>'. $ingredient['IngredientCaracteristic']['acidPantotenic'].'</td><td>mg/100g</td></tr>

<tr><td colspan="2"  style="background: #ecf0f6;"><b>METALE GRELE</b></td><td></td></tr>	

<tr><td> Pb max. 0,50 mg/kg</td><td>'.$ingredient['IngredientCaracteristic']['pb'].'</td><td>mg/kg</td></tr>

<tr><td> Cd max. 0,10 mg/kg</td><td>'.$ingredient['IngredientCaracteristic']['cd'].'</td><td>mg/kg</td></tr>

<tr><td> Hg max. 0,02 mg/kg</td><td>'.$ingredient['IngredientCaracteristic']['hg'].'</td><td>mg/kg</td></tr>

<tr><td> As max. 0,30 mg/kg</td><td>'.$ingredient['IngredientCaracteristic']['as'].'</td><td>mg/kg</td></tr>

<tr><td> Zn max. 50,00 mg/kg</td><td>'.$ingredient['IngredientCaracteristic']['zn'].'</td><td>mg/kg</td></tr>

<tr><td> Cu max. 20,00 mg/kg</td><td>'. $ingredient['IngredientCaracteristic']['cu'].'</td><td>mg/kg</td></tr>


<tr><td style="background:#ecf0f6;"><b>Umiditate</b></td><td style="background:#ecf0f6;">'.$ingredient['IngredientCaracteristic']['umiditate'].'</td><td style="background:#ecf0f6;">g/100g</td></tr>

<tr><td style="background:#ecf0f6;"><b>Alcool</b></td><td style="background:#ecf0f6;">'.$ingredient['IngredientCaracteristic']['alcool'].'</td><td style="background:#ecf0f6;">g/100g</td></tr>
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

echo $tcpdf->Output('caracteristici_'.htmlspecialchars($ingredient['Ingredient']['name']).'.pdf', 'D'); 

?>