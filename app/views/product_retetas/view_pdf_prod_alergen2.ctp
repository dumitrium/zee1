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

$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 
//$tcpdf->setPageOrientation('L');
$tcpdf->SetAuthor(""); 
$tcpdf->SetAutoPageBreak( false ); 
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = ''; 
$tcpdf->xfootertext = ''; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();


$tcpdf->SetFont('helvetica', '', 9);
$htmltable = '<h1> </h1><h1> </h1><h3><u>LISTA DE ALERGENI A PRODUSULUI</u></h3><h4>Denumire produs: '.
htmlspecialchars($product['Product']['name']).'</h4>
<h4>Cod produs: '.htmlspecialchars($product['Product']['cod']).'</h4><h4>Data: '.htmlspecialchars($product['Product']['created']).'</h4><h4> </h4>
<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;vertical-align:middle;">
<tr bgcolor="#000000" color="#ffffff"><th>Ingredient</th>
<th align="center">Cod</th>
<th align="center">1</th>
<th >2</th>
<th align="center">3</th>
<th align="center">4</th>
<th align="center">5</th>
<th align="center">6</th>
<th align="center">7</th>
<th align="center">8</th>
<th align="center">9</th>
<th align="center">10</th>
<th align="center">11</th>
<th align="center">12</th>
	</tr>';

 $gluten=0;$crustacee=0;$oua=0;$peste=0;$alune=0;$soia=0;$lapte=0;$nuci=0;$telina=0;$mustar=0;$susan=0;$sulf=0; 
foreach($productRetetas as $productReteta):


$htmltable =$htmltable.'<tr >
<td align="center">'.$productReteta['Ingredient']['name'].'</td>
	<td align="center">'.$productReteta['Ingredient']['cod'].'</td>';
	
	if (isset($productReteta['Ingredient']['IngredientAlergen']['cerealeGluten'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['cerealeGluten']>0){$gluten++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}
			
			
			if (isset($productReteta['Ingredient']['IngredientAlergen']['crustacee'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['crustacee']>0){$crustacee++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}

if (isset($productReteta['Ingredient']['IngredientAlergen']['oua'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['oua']>0){$oua++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}

if (isset($productReteta['Ingredient']['IngredientAlergen']['peste'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['peste']>0){$peste++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}
			
			if (isset($productReteta['Ingredient']['IngredientAlergen']['alune'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['alune']>0){$alune++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['soia'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['soia']>0){$soia++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['lapte'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['lapte']>0){$lapte++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}
			

if (isset($productReteta['Ingredient']['IngredientAlergen']['nuci'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['nuci']>0){$nuci++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['telina'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['telina']>0){$telina++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['mustar'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['mustar']>0){$mustar++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['susan'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['susan']>0){$susan++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}
			

if (isset($productReteta['Ingredient']['IngredientAlergen']['dioxidSulf'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['dioxidSulf']>0){$sulf++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b></td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6"><b >absent</b></td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd"><b> - </b></td>';}
			
$htmltable=$htmltable.'</tr>';endforeach;

$htmltable=$htmltable.'<tr bgcolor="#eeeeee">
<td align="center" height="30"><b>'.$product['Product']['name'].'</b></td>
	<td align="center">Cod</td>';


if($gluten>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b >absent</b></td>';}
	
	if($crustacee>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b >absent</b></td>';}
	if($oua>0){$htmltable=$htmltable. '<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b >absent</b></td>';}
	if($peste>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b >absent</b></td>';}
	if($alune>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b>absent</b></td>';}
	if($soia>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b>absent</b></td>';}
	if($lapte>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b>absent</b></td>';}
	if($nuci>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b>absent</b></td>';}
	if($telina>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b>absent</b></td>';}
	if($mustar>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b>absent</b></td>';}
	if($susan>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b>absent</b></td>';}
	if($sulf>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center"><b>prezent</b></td></tr>
</table>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71"><b>absent</b></td></tr>
</table>';}





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

$htmltable=$htmltable. $tcpdf->Output('alergeni '.$product['Product']['name'].'.pdf', 'D'); 

?>