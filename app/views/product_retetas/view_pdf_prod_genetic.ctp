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


$tcpdf->SetFont('helvetica', '', 9);
$htmltable = '<h1> </h1><h1> </h1><h3><u>MODIFICARI GENETICE</u></h3><h4>Denumire produs: '.
htmlspecialchars($product['Product']['name']).'</h4>
<h4>Cod produs: '.htmlspecialchars($product['Product']['cod']).'</h4><h4>Data: '.htmlspecialchars($product['Product']['created']).'</h4><h4> </h4>';
 
$tableCap='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom: 0px"><tr bgcolor="#efedfc">
<td width="80"  height="30"><b>Ingredient</b></td>
	<td width="280"><b>Ingredient</b></td>
	<td width="100" ><b>Sub- ingredient(*)</b></td>
	<td width="60"><b>Origine-mg da/nu</b></td>
	<td width="60" ><b>Daca nu,1,2,3,4(**)</b></td>
	<td width="60" ><b>Daca 3,sursa botanica</b></td>
		<td width="60" ><b>Daca 4,tara de origine</b></td></tr>';
  $tableSoia='<table class="" id="" style="margin-bottom: 0px" cellspacing="0" cellpadding="0" border="1" bordercolor="#dddddd">';
$tablePorumb='<table class="" id="" style="margin-bottom: 0px" cellspacing="0" cellpadding="0" border="1" bordercolor="#dddddd">';
$tableRapita='<table class="" id="" cellspacing="0"  style="margin-bottom: 0px" cellpadding="0" border="1" bordercolor="#dddddd">';
$tableBumbac='<table class="" id="" cellspacing="0" style="margin-bottom: 0px" cellpadding="0" border="1" bordercolor="#dddddd">';
$tableSfecla='<table class="" id="" cellspacing="0" style="margin-bottom: 0px" cellpadding="0" border="1" bordercolor="#dddddd">';
$tableCartofi='<table class="" id="" cellspacing="0" style="margin-bottom: 0px" cellpadding="0" border="1" bordercolor="#dddddd">';
	
	foreach($productRetetas as $productReteta):
if (isset($productReteta['Ingredient']['IngredientGeneticModification']['soiaIngredient']))
	{$tableSoia=$tableSoia.'<tr>
	<td width="80">'.htmlspecialchars($productReteta['Ingredient']['name']).'&nbsp;</td>
	<td width="280">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['soiaIngredient']).'&nbsp;</td>
	<td width="100" align="center">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['soiaSub']).'&nbsp;</td>
	<td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['soiaOrigine'].'&nbsp;</td>
	<td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['soiaNu'].'&nbsp;</td>
	<td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['soiaSursa'].'&nbsp;</td>
	<td width="60" align="center">'.
$productReteta['Ingredient']['IngredientGeneticModification']['soiaTara'].'&nbsp;</td></tr>';}/*else{$tableSoia=$tableSoia.'<tr><td colspan="7">Nu au fost introduse modifiarile genetice pentru acest ingredient</td></tr>'}*/

if (isset($productReteta['Ingredient']['IngredientGeneticModification']['porumbIngredient']))
	{$tablePorumb=$tablePorumb.'<tr>
	<td width="80">'.htmlspecialchars($productReteta['Ingredient']['name']).'&nbsp;</td>
	<td width="280">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['porumbIngredient']).'&nbsp;</td>
	<td width="100" align="center">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['porumbSub']).'&nbsp;</td>
	<td width="60">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['porumbOrigine'].'&nbsp;</td>
	<td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['porumbNu'].'&nbsp;</td>
	<td width="60">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['porumbSursa'].'&nbsp;</td>
	<td width="60" align="center">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['porumbTara'].'&nbsp;</td></tr>';}

if (isset($productReteta['Ingredient']['IngredientGeneticModification']['rapitaIngredient']))
	{$tableRapita=$tableRapita.'<tr><td width="80">'.htmlspecialchars($productReteta['Ingredient']['name']).'&nbsp;</td><td width="280">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['rapitaIngredient']).'&nbsp;</td><td width="100" align="center">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['rapitaSub']).'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['rapitaOrigine'].'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['rapitaNu'].'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['rapitaSursa'].'&nbsp;</td><td width="60" align="center">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['rapitaTara'].'&nbsp;</td></tr>';}

if (isset($productReteta['Ingredient']['IngredientGeneticModification']['bumbacIngredient']))
	{$tableBumbac=$tableBumbac.'<tr><td width="80">'.htmlspecialchars($productReteta['Ingredient']['name']).'&nbsp;</td><td width="280">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['bumbacIngredient']).'&nbsp;</td><td width="100" align="center">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['bumbacSub']).'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacOrigine'].'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacNu'].'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacSursa'].'&nbsp;</td><td width="60" align="center">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['bumbacTara'].'&nbsp;</td></tr>';}

if (isset($productReteta['Ingredient']['IngredientGeneticModification']['sfeclaIngredient']))
	{$tableSfecla=$tableSfecla.'<tr><td width="80">'.htmlspecialchars($productReteta['Ingredient']['name']).'&nbsp;</td><td width="280">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['sfeclaIngredient']).'&nbsp;</td><td width="100" align="center">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['sfeclaSub']).'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['sfeclaOrigine'].'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['sfeclaNu'].'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['sfeclaSursa'].'&nbsp;</td><td width="60" align="center">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['sfeclaTara'].'&nbsp;</td></tr>';}
			
if (isset($productReteta['Ingredient']['IngredientGeneticModification']['cartofiIngredient']))
	{$tableCartofi=$tableCartofi.'<tr><td width="80">'.htmlspecialchars($productReteta['Ingredient']['name']).'&nbsp;</td><td width="280">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['cartofiIngredient']).'&nbsp;</td><td width="100" align="center">'.
	htmlspecialchars($productReteta['Ingredient']['IngredientGeneticModification']['cartofiSub']).'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['cartofiOrigine'].'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['cartofiNu'].'&nbsp;</td><td width="60" align="center">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['cartofiSursa'].'&nbsp;</td><td width="60" align="center">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['cartofiTara'].'&nbsp;</td></tr>';}

endforeach;
$tableSoia=$tableSoia.'</table>';
$tablePorumb=$tablePorumb.'</table>';
$tableRapita=$tableRapita.'</table>';
$tableBumbac=$tableBumbac.'</table>';
$tableSfecla=$tableSfecla.'</table>';
$tableCartofi=$tableCartofi.'</table>';

$htmltable=$htmltable.'
<table  width="747" cellspacing="0" cellpadding="0" class="" id="" style="margin:0px;padding:0px;margin-bottom: 0px;border: 1px #cccccc solid;"><tr><td style="margin:0px;padding:0px;" width="45" >&nbsp;&nbsp;Sursa</td><td height="20" width="700">'. $tableCap.'</table></td></tr>
	<tr><td width="45" bgcolor="#dddddd">&nbsp;&nbsp;Soia</td><td width="700">'.$tableSoia.'</td></tr>
	<tr><td width="45" bgcolor="#dddddd">&nbsp;&nbsp;Porumb</td><td width="700">'.$tablePorumb.'</td></tr>
	<tr><td width="45" bgcolor="#dddddd">&nbsp;&nbsp;Rapita</td><td width="700">'.$tableRapita.'</td></tr>
	<tr><td width="45" bgcolor="#dddddd">&nbsp;&nbsp;Bumbac</td><td width="700">'.$tableBumbac.'</td></tr>
	<tr><td width="45" bgcolor="#dddddd">&nbsp;&nbsp;Sfecla</td><td width="700">'.$tableSfecla.'</td></tr>
	<tr><td width="45" bgcolor="#dddddd">&nbsp;&nbsp;Cartofi</td><td width="700">'.$tableCartofi.'</td></tr>
	</table>
	
<br/><br/>
<table><tr><td>(*) In general, sub-ingredientele nu apar in declaratia privind ingredientele.Majoritatea sunt agenti 
	microbieni si de procesare auxiliari ai ingredientelor din a doua coloana.<br/>
	(**) Legenda<br/>
	1.Sistemul de pastrare a identitatilor sau datelor de identificare(IP).Furnizorul a trimis o prezentare 
	a sistemului sau copie a certificatului.<br/>
	2.Declaratia scrisa a furnizorului(furnizorilor) prin care se specifica faptul ca ingredientele mentionate nu provin
	din materialele modificate genetic.<br/>
	3.Sursa botanica: la anumite plante, nu se cunosc specii modificate genetic. Se precizeaza specia/tipul de planta.<br/>
	4.Sursa geografica: in anumite parti, cresterea plantelor modificate genetic este interzisa prin lege.In acest caz se precizeaza
	tara de provenienta a plantelor.</td></tr></table>';


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

$tcpdf->Output('modificari genetice '.htmlspecialchars($product['Product']['name']).'.pdf', 'D'); 

?>