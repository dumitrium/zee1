<?php 
App::import('Vendor','xtcpdf');  



class MYPDF extends XTCPDF {
    //Page header
    public function Header() {
        // Logo
        //$this->Image(K_PATH_IMAGES.'ZeelandiaLogo.jpg', 25, 25, 50);
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
$tcpdf->SetMargins(20, 10, 10);
$tcpdf->SetAuthor("Zeelandia Romania"); 
$tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = 'Green Apple Solutions, http://www.greens.ro'; 
$tcpdf->xfootertext = 'Green Apple Solutions, http://www.greens.ro.'; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();
// Image($file, $x='', $y='', $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false)
$tcpdf->Image(K_PATH_IMAGES.'ZeelandiaLogo.jpg', 27, 12, 62, '', 'JPG', '', '', true, 150, '', false, false, false, false, false, false);

$tcpdf->SetFont('helvetica', '', 8);

$ts5=0;$tc5=0;$tb5=0;$tp5=0;$tr5=0;$tsf5=0;
$gluten=0;$crustacee=0;$oua=0;$peste=0;$alune=0;$soia=0;$lapte=0;$nuci=0;$telina=0;$mustar=0;$susan=0;$sulf=0; $lupin=0; $moluste=0; 
$glutenZ=0;$crustaceeZ=0;$ouaZ=0;$pesteZ=0;$aluneZ=0;$soiaZ=0;$lapteZ=0;$nuciZ=0;$telinaZ=0;$mustarZ=0;$susanZ=0;$sulfZ=0; $lupinZ=0; $molusteZ=0;
$kcal=0;$kj=0;$proteine=0;$carbo=0;$gras=0;$ume=0;
$tableCap='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom: 0px" width="480"><tr bgcolor="#eeeeee;"><td width="25%"  height="30"><b>Ingredient</b></td>
	
	<td width="20%" style="padding-left:10px;"><b>Sub-ingredient(*)</b></td>
	<td width="10%"><b>Origine- mg da/nu</b></td>
	<td width="15%" ><b>Daca nu,1, 2,3,4(**)</b></td>
	<td width="15%" ><b>Daca 3,sursa botanica</b></td>
		<td width="15%" ><b>Daca 4,tara de origine</b></td></tr>';
$tableSoia='<table class="" id="" style="margin-bottom: 0px" cellspacing="0" cellpadding="0"  bordercolor="#dddddd" width="480">';
$tablePorumb='<table cellspacing="0" style="margin-bottom: 0px" cellpadding="0"  bordercolor="#dddddd" width="480">';
$tableRapita='<table cellspacing="0"  style="margin-bottom: 0px" cellpadding="0"  bordercolor="#dddddd" width="480">';
$tableBumbac='<table cellspacing="0" style="margin-bottom: 0px" cellpadding="0"  bordercolor="#dddddd" width="480">';
$tableSfecla='<table cellspacing="0"  style="margin-bottom: 0px" cellpadding="0"  bordercolor="#dddddd" width="480">';
$tableCartofi='<table cellspacing="0" style="margin-bottom: 0px" cellpadding="0"  bordercolor="#dddddd" width="480">';
 
 foreach($productRetetas as $productReteta):
 
 if(isset($productReteta['Ingredient']['IngredientCaracteristic']['valKj'])){$kj=$kj+$productReteta['Ingredient']['IngredientCaracteristic']['valKj']/100*$productReteta['ProductReteta']['procent'];}
if(isset($productReteta['Ingredient']['IngredientCaracteristic']['valKcal'])){$kcal=$kcal+$productReteta['Ingredient']['IngredientCaracteristic']['valKcal']/100*$productReteta['ProductReteta']['procent'];}
if (isset($productReteta['Ingredient']['IngredientCaracteristic']['umiditate'])){$ume=$ume+$productReteta['Ingredient']['IngredientCaracteristic']['umiditate']/100*$productReteta['ProductReteta']['procent'];}
 if (isset($productReteta['Ingredient']['IngredientCaracteristic']['carbohidrati'])){$carbo=$carbo+$productReteta['Ingredient']['IngredientCaracteristic']['carbohidrati']/100*$productReteta['ProductReteta']['procent'];}
if (isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimi'])){$gras=$gras+$productReteta['Ingredient']['IngredientCaracteristic']['grasimi']/100*$productReteta['ProductReteta']['procent'];}
if (isset($productReteta['Ingredient']['IngredientCaracteristic']['proteine'])){$proteine=$proteine+$productReteta['Ingredient']['IngredientCaracteristic']['proteine']/100*$productReteta['ProductReteta']['procent'];}



if (isset($productReteta['Product']['Line']['cerealeGlutenP'])){if ($productReteta['Product']['Line']['cerealeGlutenP']>0){$glutenZ++;}}
if (isset($productReteta['Product']['Line']['crustaceeP'])){if ($productReteta['Product']['Line']['crustaceeP']>0){$crustaceeZ++;}}
if (isset($productReteta['Product']['Line']['ouaP'])){if ($productReteta['Product']['Line']['ouaP']>0){$ouaZ++;}}
if (isset($productReteta['Product']['Line']['pesteP'])){if ($productReteta['Product']['Line']['pesteP']>0){$pesteZ++;}}
if (isset($productReteta['Product']['Line']['aluneP'])){if ($productReteta['Product']['Line']['aluneP']>0){$aluneZ++;}}
if (isset($productReteta['Product']['Line']['soiaP'])){if ($productReteta['Product']['Line']['soiaP']>0){$soiaZ++;}}
if (isset($productReteta['Product']['Line']['lapteP'])){if ($productReteta['Product']['Line']['lapteP']>0){$lapteZ++;}}
if (isset($productReteta['Product']['Line']['nuciP'])){if ($productReteta['Product']['Line']['nuciP']>0){$nuciZ++;}}
if (isset($productReteta['Product']['Line']['telinaP'])){if ($productReteta['Product']['Line']['telinaP']>0){$telinaZ++;}}
if (isset($productReteta['Product']['Line']['mustarP'])){if ($productReteta['Product']['Line']['mustarP']>0){$mustarZ++;}}
if (isset($productReteta['Product']['Line']['susanP'])){if ($productReteta['Product']['Line']['susanP']>0){$susanZ++;}}
if (isset($productReteta['Product']['Line']['lupinP'])){if ($productReteta['Product']['Line']['lupinP']>0){$lupinZ++;}}
if (isset($productReteta['Product']['Line']['molusteP'])){if ($productReteta['Product']['Line']['molusteP']>0){$molusteZ++;}}
 if (isset($productReteta['Product']['Line']['dioxidSulfP'])){if  ($productReteta['Product']['Line']['dioxidSulfP']>0){$sulfZ++;}}
 
  if (isset($productReteta['Ingredient']['IngredientAlergen']['cerealeGluten'])){if  ($productReteta['Ingredient']['IngredientAlergen']['cerealeGluten']>0){$gluten++;}}
if (isset($productReteta['Ingredient']['IngredientAlergen']['crustacee'])){if  ($productReteta['Ingredient']['IngredientAlergen']['crustacee']>0){$crustacee++;}} if (isset($productReteta['Ingredient']['IngredientAlergen']['oua'])){if  ($productReteta['Ingredient']['IngredientAlergen']['oua']>0){$oua++;}} 
if (isset($productReteta['Ingredient']['IngredientAlergen']['peste'])){if  ($productReteta['Ingredient']['IngredientAlergen']['peste']>0){$peste++;}}
 if (isset($productReteta['Ingredient']['IngredientAlergen']['alune'])){if  ($productReteta['Ingredient']['IngredientAlergen']['alune']>0){$alune++;}}
 if (isset($productReteta['Ingredient']['IngredientAlergen']['soia'])){if  ($productReteta['Ingredient']['IngredientAlergen']['soia']>0){$soia++;}}
if (isset($productReteta['Ingredient']['IngredientAlergen']['lapte'])){if  ($productReteta['Ingredient']['IngredientAlergen']['lapte']>0){$lapte++;}}
if (isset($productReteta['Ingredient']['IngredientAlergen']['nuci'])){if  ($productReteta['Ingredient']['IngredientAlergen']['nuci']>0){$nuci++;}}
 if (isset($productReteta['Ingredient']['IngredientAlergen']['telina'])){if  ($productReteta['Ingredient']['IngredientAlergen']['telina']>0){$telina++;}}
 if (isset($productReteta['Ingredient']['IngredientAlergen']['mustar'])){if  ($productReteta['Ingredient']['IngredientAlergen']['mustar']>0){$mustar++;}}
 if (isset($productReteta['Ingredient']['IngredientAlergen']['susan'])){if  ($productReteta['Ingredient']['IngredientAlergen']['susan']>0){$susan++;}}
 if (isset($productReteta['Ingredient']['IngredientAlergen']['lupin'])){if  ($productReteta['Ingredient']['IngredientAlergen']['lupin']>0){$lupin++; }}
 if (isset($productReteta['Ingredient']['IngredientAlergen']['moluste'])){if  ($productReteta['Ingredient']['IngredientAlergen']['moluste']>0){$moluste++;}}
 if (isset($productReteta['Ingredient']['IngredientAlergen']['dioxidSulf'])){if  ($productReteta['Ingredient']['IngredientAlergen']['dioxidSulf']>0){$sulf++;}}
 
 if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['soiaIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['soiaPrezent']=='prezent'))
	{$ts5++;$tableSoia=$tableSoia.'<tr><td width="25%" style="border:1px solid #000;padding-left:7px;">'.$productReteta['Ingredient']['IngredientGeneticModification']['soiaIngredient'].'&nbsp;</td><td width="20%" style="border:1px solid #000;padding-left:7px;">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['soiaSub'].'&nbsp;</td><td width="10%"style="border:1px solid #000;" >'.
		$productReteta['Ingredient']['IngredientGeneticModification']['soiaOrigine'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['soiaNu'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['soiaSursa'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
$productReteta['Ingredient']['IngredientGeneticModification']['soiaTara'].' &nbsp;</td></tr>';}/*else{$tableSoia=$tableSoia.'<tr><td colspan="7">Nu au fost introduse modifiarile genetice pentru acest ingredient</td></tr>'}*/

if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['porumbIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['porumbPrezent']=='prezent'))
	{$tp5++;$tablePorumb=$tablePorumb.'<tr><td width="25%" style="border:1px solid #000;padding-left:7px;">'.$tp.$productReteta['Ingredient']['IngredientGeneticModification']['porumbIngredient'].'&nbsp;</td><td width="20%" style="border:1px solid #000;padding-left:7px;">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['porumbSub'].'&nbsp;</td><td width="10%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['porumbOrigine'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['porumbNu'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['porumbSursa'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['porumbTara'].'&nbsp;</td></tr>';}else{;}

if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['rapitaIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['rapitaPrezent']=='prezent'))
	{$tr5++;$tableRapita=$tableRapita.'<tr><td width="25%" style="border:1px solid #000;padding-left:7px;">'.$productReteta['Ingredient']['IngredientGeneticModification']['rapitaIngredient'].'&nbsp;</td><td width="20%" style="border:1px solid #000;padding-left:7px;">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['rapitaSub'].'&nbsp;</td><td width="10%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['rapitaOrigine'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['rapitaNu'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['rapitaSursa'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['rapitaTara'].'&nbsp;</td></tr>';}

if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['bumbacIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['bumbacPrezent']=='prezent'))
	{$tb5++;$tableBumbac=$tableBumbac.'<tr><td width="25%" style="border:1px solid #000;padding-left:7px;">'.$productReteta['Ingredient']['IngredientGeneticModification']['bumbacIngredient'].'&nbsp;</td><td width="20%" style="border:1px solid #000;padding-left:7px;">'.
	    $productReteta['Ingredient']['IngredientGeneticModification']['bumbacSub'].'&nbsp;</td><td width="10%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacOrigine'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacNu'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacSursa'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacTara'].'&nbsp;</td></tr>';}

if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['sfeclaIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['sfeclaPrezent']=='prezent'))
	{$tsf5++;$tableSfecla=$tableSfecla.'<tr><td width="25%" style="border:1px solid #000;padding-left:7px;">'.$productReteta['Ingredient']['IngredientGeneticModification']['sfeclaIngredient'].'&nbsp;</td><td width="20%" style="border:1px solid #000;padding-left:7px;">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaSub'].'&nbsp;</td><td width="10%" style="border:1px solid #000;">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaOrigine'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaNu'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaSursa'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaTara'].'&nbsp;</td></tr>';}
			
if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['cartofiIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['cartofiPrezent']=='prezent'))
	{$tc5++;$tableCartofi=$tableCartofi.'<tr><td width="25%" style="border:1px solid #000;padding-left:7px;">'.$productReteta['Ingredient']['IngredientGeneticModification']['cartofiIngredient'].'&nbsp;</td><td width="20%" style="border:1px solid #000;padding-left:7px;">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['cartofiSub'].'&nbsp;</td><td width="10%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['cartofiOrigine'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['cartofiNu'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['cartofiSursa'].'&nbsp;</td><td width="15%" style="border:1px solid #000;">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['cartofiTara'].'&nbsp;</td></tr>';}
 

endforeach;
$kj=($proteine+$carbo)*17+$gras*37;
$kcal=($proteine+$carbo)*4+$gras*9;

if($ts5<1){$tableSoia=$tableSoia.'<tr><td width="25%" style="border:1px solid #000;">&nbsp;Nu exista ingrediente &nbsp;din soia in '.htmlspecialchars($product['Product']['name']).'&nbsp;</td>
<td width="20%" style="border:1px solid #000;">&nbsp;</td>
<td width="10%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td></tr>';}
if($tp5<1){$tablePorumb=$tablePorumb.'<tr><td width="25%" style="border:1px solid #000;">&nbsp;Nu exista ingrediente &nbsp;din porumb in '.htmlspecialchars($product['Product']['name']).'&nbsp;</td>
<td width="20%" style="border:1px solid #000;">&nbsp;</td>
<td width="10%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td></tr>'; }
if($tr5<1){$tableRapita=$tableRapita.'<tr><td width="25%" style="border:1px solid #000;">&nbsp;Nu exista ingrediente &nbsp;din rapita in '.htmlspecialchars($product['Product']['name']).'&nbsp;</td>
<td width="20%" style="border:1px solid #000;">&nbsp;</td>
<td width="10%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td></tr>'; }
if($tb5<1){$tableBumbac=$tableBumbac.'<tr><td width="25%" style="border:1px solid #000;">&nbsp;Nu exista ingrediente &nbsp;din bumbac in '.htmlspecialchars($product['Product']['name']).'&nbsp;</td>
<td width="20%" style="border:1px solid #000;">&nbsp;</td>
<td width="10%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td></tr>';}
if($tsf5<1){$tableSfecla=$tableSfecla.'<tr><td width="25%" style="border:1px solid #000;">&nbsp;Nu exista ingrediente &nbsp;din sfecla in '.htmlspecialchars($product['Product']['name']).'&nbsp;</td>
<td width="20%" style="border:1px solid #000;">&nbsp;</td>
<td width="10%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td></tr>';}
if($tc5<1){$tableCartofi=$tableCartofi.'<tr><td width="25%">&nbsp;Nu exista ingrediente &nbsp;din cartofi in '.htmlspecialchars($product['Product']['name']).'&nbsp;</td>
<td width="20%" style="border:1px solid #000;">&nbsp;</td>
<td width="10%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td>
<td width="15%" style="border:1px solid #000;">&nbsp;</td></tr>';}

 if($gluten>0){$gluten='prezent';}else{$gluten='absent';}if($glutenZ>0){$glutenZ='prezent';}else{$glutenZ='absent';}
 if($crustacee>0){$crustacee='prezent';}else{$crustacee='absent';}if($crustaceeZ>0){$crustaceeZ='prezent';}else{$crustaceeZ='absent';}
 if($oua>0){$oua='prezent';}else{$oua='absent';}if($ouaZ>0){$ouaZ='prezent';}else{$ouaZ='absent';}
 if($peste>0){$peste='prezent';}else{$peste='absent';}if($pesteZ>0){$pesteZ='prezent';}else{$pesteZ='absent';}
 if($alune>0){$alune='prezent';}else{$alune='absent';}if($aluneZ>0){$aluneZ='prezent';}else{$aluneZ='absent';}
 if($soia>0){$soia='prezent';}else{$soia='absent';}if($soiaZ>0){$soiaZ='prezent';}else{$soiaZ='absent';}
 if($lapte>0){$lapte='prezent';}else{$lapte='absent';}if($lapteZ>0){$lapteZ='prezent';}else{$lapteZ='absent';}
 if($nuci>0){$nuci='prezent';}else{$nuci='absent';}if($nuciZ>0){$nuciZ='prezent';}else{$nuciZ='absent';}
 if($telina>0){$telina='prezent';}else{$telina='absent';}if($telinaZ>0){$telinaZ='prezent';}else{$telinaZ='absent';}
 if($mustar>0){$mustar='prezent';}else{$mustar='absent';}if($mustarZ>0){$mustarZ='prezent';}else{$mustarZ='absent';}
 if($susan>0){$susan='prezent';}else{$susan='absent';}if($susanZ>0){$susanZ='prezent';}else{$susanZ='absent';}
 if($sulf>0){$sulf='prezent';}else{$sulf='absent';}if($sulfZ>0){$sulfZ='prezent';}else{$sulfZ='absent';}
 if($lupin>0){$lupin='prezent';}else{$lupin='absent';}if($lupinZ>0){$lupinZ='prezent';}else{$lupinZ='absent';}
  if($moluste>0){$moluste='prezent';}else{$moluste='absent';}if($molusteZ>0){$molusteZ='prezent';}else{$molusteZ='absent';}



$htmltable = '
<table width="95%" border="1">
<tr><td rowspan="5"></td><td><b> Titlu: SPECIFICATIE TEHNICA</b></td></tr>
<tr><td><b> Cod: F_17</b></td></tr>
<tr><td><b> Revizie:'.$product['Product']['revizie'].'</b></td></tr>
<tr><td><b> Data intrarii in vigoare: '.$time->format($format = 'd-m-Y', $product['Product']['datai']).'</b></td></tr>
<tr><td><b> Data reviziei urmatoare: '.$time->format($format = 'd-m-Y', $product['Product']['datar']).'</b></td></tr></table>
<h3>1.Informatii generale</h3><br/><br/>
<table style="border:1px solid #000;" width="95%" border="1">
<tr><td width="180"><b>Denumire</b></td><td width="300"><b>'.htmlspecialchars($product['Product']['name']).'</b></td></tr>
<tr><td><b>Cod reteta</b></td><td><b>'.$product['Product']['cod'].'</b></td></tr>
<tr><td><b>Tara de origine</b></td><td><b>'.$product['Product']['tara'].'</b></td></tr>
<tr><td><b>Descriere</b></td><td>'.htmlspecialchars($product['Product']['descriere']).'</td></tr>
<tr><td><b>Ingrediente</b></td><td >'.htmlspecialchars($product['Product']['ingrediente']).'</td></tr>
<tr><td><b>Caracteristici senzoriale (la 20&deg;Celsius)</b></td><td>
Aspect: '. $product['Product']['aspect'].'<br />Culoare: '.$product['Product']['culoare'].'<br />Miros: '.$product['Product']['miros'].'<br />
Gust: '. $product['Product']['gust'].'</td></tr>
<tr><td><b>Valoare nutritionala</b></td><td >Umiditate: '.round($ume,1).' % max<br/>Proteine: '.round($proteine,1).' %<br>Glucide: '.round($carbo,1).' %<br>Lipide: '.round($gras,1).' %<br/>Valoare energetica: '.round($kcal,1).' kcal/100g; '.round($kj,1).' kj/100g</td></tr>
<tr><td><b>Parametri fizico-chimici</b></td><td >'.htmlspecialchars($product['Product']['parametri']).'</td></tr>




<tr><td><b>Parametri microbiologici</b></td><td >Numar total de germeni aerobi mezofili: '.$product['ProductStandard']['nrGermeni'].' ufc/g<br>
Salmonella: absenta in 25g<br/>
Listeria monocytogenes: absenta in 25g<br/>
E.coli: '.$product['ProductStandard']['ecoli'].' ufc/g<br/>
Enterobacteriaceae: '.$product['ProductStandard']['entero'].' ufc/g<br/>
Bacilus cereus: '.$product['ProductStandard']['bacillusViz'].' ufc/g<br/>
Coliformi: '.$product['ProductStandard']['coliformi']. ' ufc/g<br>
Staphylococus aureus: absent in 1 g<br>
Drojdii si mucegaiuri: '.$product['ProductStandard']['drojdiiViz'].' ufc/g

</td></tr>
				 
<tr><td><b>Infestare corpuri straine</b></td><td>Nu se admite prezenta insectelor si acarienilor in nici un stadiu de dezvoltare</td></tr>				 
						 
<tr><td rowspan="2"><b>Ambalare si<br/>etichetare</b></td><td style="border:1px solid #000;">Ambalare : '.$product['Product']['ambalare'].'</td></tr>
<tr><td>Etichetare: Etichetarea se realizeaza in conformitate cu H.G 106/2002</td></tr>
<tr><td><b>Conditii de depozitare</b></td><td >'.htmlspecialchars($product['Product']['condDepo']).'</td></tr>
<tr><td><b>Conditii de transport</b></td><td >Produsul se transporta in mijloace de transport acoperite, curate, fara mirosuri straine, igienizate si dezinfectate, ferite de orice posibilitate de poluare, degradare sau contaminare, '.htmlspecialchars($product['Product']['condTransp']).'</td></tr>
<tr><td><b>Lotul</b></td><td >Este mentionat pe eticheta produsului. Numarul de lot este format din 5 cifre si 1 litera(pentru produsele fabricate in Romania).</td></tr>
<tr><td><b>Utilizare intentionata</b></td><td>Produsul, in forma ca atare, nu este destinat direct consumatorului final, ci constituie un ingredient pentru alte produse fabricate.</td></tr>
<tr><td><b>Termen de valabilitate</b></td><td >'.htmlspecialchars($product['Product']['valabilitate']).' luni de la data ambalarii in conditiile de depozitare recomandate, in ambalajul sigilat</td></tr>

</table>
<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>';


$htmltable =$htmltable.'<h1>&nbsp;</h1>
<h3>LISTA DE ALERGENI (conform Directivelor 2003/89/EC, 2006/142/EC, 2007/68/EC)</h3><br>
Denumire produs: <b>'.$product['Product']['name'].'</b><br />
Cod reteta: <b>'.$product['Product']['cod'].'</b><br /><br />
<table style="border:1px solid #000;" width="95%" border="1" >
<tr><td width="30">Nr </td><td width="300"> Nume</td><td width="15%">Agenti alergeni<br/>ingredienti</td><td width="15%">Contaminare incrucisata</td></tr>
<tr><td >1.</td><td>Cereale care contin gluten (grau, secara, orz, ovaz, grau spelt, grau mare sau hibrizi ai acestora) si produse derivate</td><td>'.$gluten.'</td><td>'.$glutenZ.'</td></tr>
<tr><td height="20">2.</td><td>Crustacee si produse derivate</td><td>'.$crustacee.'</td><td>'.$crustaceeZ.'</td></tr>
<tr><td height="20">3.</td><td>Oua si produse derivate</td><td>'.$oua.'</td><td>'.$ouaZ.'</td></tr>
<tr><td height="20">4.</td><td>Peste si produse derivate</td><td>'.$peste.'</td><td>'.$pesteZ.'</td></tr>
<tr><td height="20">5.</td><td>Arahide si produse derivate</td><td>'.$alune.'</td><td>'.$aluneZ.'</td></tr>
<tr><td height="20">6.</td><td>Soia si produse derivate</td><td>'.$soia.'</td><td>'.$soiaZ.'</td></tr>
<tr><td height="20">7.</td><td>Lapte si produse derivate(inclusiv lactoza)</td><td>'.$lapte.'</td><td>'.$lapteZ.'</td></tr>
<tr><td >8.</td><td>Fructe cu coaja, de exemplu migdale (Amygdalus communis L), alune de padure (Corylus avellana), nuci (Juglans regia), anacarde (Anacardium occidentale), nuci Pecan [Carya illinoiesis (Wangenh.) K. Koch], nuci de Brazilia (Bertholletia excelsa), fistic (Pistacia vera), nuci de macadamia si nuci de Queensiand (Macadamia ternifolia) si produse derivate</td><td>'.$nuci.'</td><td>'.$nuciZ.'</td></tr>
<tr><td height="20">9.</td><td>Telina si produse derivate</td><td>'.$telina.'</td><td>'.$telinaZ.'</td></tr>
<tr><td height="20">10.</td><td>Mustar si produse derivate</td><td>'.$mustar.'</td><td>'.$mustarZ.'</td></tr>

<tr><td height="20">11.</td><td>Seminte de susan si produse derivate</td><td>'.$susan.'</td><td>'.$susanZ.'</td></tr>
<tr><td height="20">12.</td><td>Dioxid de sulf si sulfiti la concentratii
mai mari de 10 mg/kg sau 10 mg/litru exprimate ca SO2</td><td>'.$sulf.'</td><td>'.$sulfZ.'</td></tr>
<tr><td height="20">13.</td><td>Lupin si produse derivate</td><td>'.$lupin.'</td><td>'.$lupinZ.'</td></tr>
<tr><td height="20">14.</td><td>Moluste si produse derivate</td><td>'.$moluste.'</td><td>'.$molusteZ.'</td></tr>


</table>';

$htmltable2 ='<h3>Informatii produs - modificari genetice(mg)</h3><br>Informatii produs pentru implementarea cerintelor produselor alimentare si furajelor modificate genetic conform Regulamentului 1829/2003/CE privind produsele alimentare si furajele modificate genetic si a Regulamentului 1830/2003/CE privind trasabilitatea si etichetarea organismelor modificate genetic si trasabilitatea produselor destinate alimentatiei umane sau animale, produse din organisme modificate genetic.<br><br>
Denumire produs: <b>'.$product['Product']['name'].'</b><br />
Cod reteta: <b>'.$product['Product']['cod'].'</b><br /><br />
<table  width="530" cellspacing="0" cellpadding="0" bordercolor="#000000" >
	<tr><td style="margin:0px;padding:0px;" width="50" border="1">&nbsp;&nbsp;Sursa</td><td height="30">'. $tableCap.'</table></td></tr>
	<tr><td width="50" bgcolor="#eeeeee" border="1">&nbsp;&nbsp;Soia</td>                           <td width="480" border="1">'.$tableSoia.'</table></td></tr>
	<tr><td width="50" bgcolor="#eeeeee" border="1">&nbsp;&nbsp;Porumb</td>                          <td border="1">'.$tablePorumb.'</table></td></tr>
	<tr><td width="50" bgcolor="#eeeeee" border="1">&nbsp;&nbsp;Rapita</td>                         <td border="1">'.$tableRapita.'</table></td></tr>
	<tr><td width="50" bgcolor="#eeeeee" border="1">&nbsp;&nbsp;Bumbac</td><td border="1">'.$tableBumbac.'</table></td></tr>
    <tr><td width="50" bgcolor="#eeeeee" border="1">&nbsp;&nbsp;Sfecla<br />&nbsp;&nbsp;de zahar</td><td border="1">'.$tableSfecla.'</table></td></tr>
    <tr><td width="50" bgcolor="#eeeeee" border="1">&nbsp;&nbsp;Cartofi</td><td border="1">'.$tableCartofi.'</table></td></tr>
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
	tara de provenienta a plantelor.</td></tr></table>

<br/><br/>';



// set font
$tcpdf->SetFont('helvetica', '', 10);


$tcpdf->writeHTML($htmltable, true, 0, false, 0, '');
$tcpdf->AddPage();
$tcpdf->writeHTML($htmltable2, true, 0, false, 0, '');
$tcpdf->Image(K_PATH_IMAGES.'semnaturi.jpg', 14, 230, 190, '', 'JPG', '', '', true, 150, '', false, false, false, false, false, false);

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