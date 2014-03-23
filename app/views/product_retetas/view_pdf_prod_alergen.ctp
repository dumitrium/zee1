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
$tcpdf->SetAutoPageBreak( true, 20 ); 
$tcpdf->SetDisplayMode('fullpage', 'OneColumn', 'UseNone');
$tcpdf->setHeaderFont(array($textfont,' ',40)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = ''; 
$tcpdf->xfootertext = ''; 

//$tcpdf->lastPath(); 
$tcpdf->AddPage();


$tcpdf->SetFont('helvetica', '', 8);
$htmltable = '<h1> </h1><h1> </h1><h3><u>LISTA DE ALERGENI A PRODUSULUI</u></h3><h4>Denumire produs: '.
htmlspecialchars($product['Product']['name']).'</h4>
<h4>Cod produs: '.htmlspecialchars($product['Product']['cod']).'</h4><h4>Data: '.htmlspecialchars($product['Product']['created']).'</h4><h4> </h4><h4>1 - Agentii alergeni ai ingredientilor</h4>
<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;vertical-align:middle;">
<tr bgcolor="#000000" color="#ffffff"><th width="150" align="center">Ingredient</th>
<th align="center" width="46">Cod</th>
<th align="center"width="28">1</th>
<th align="center" width="28">2</th>
<th align="center" width="28">3</th>
<th align="center" width="28">4</th>
<th align="center" width="28">5</th>
<th align="center" width="28">6</th>
<th align="center" width="28">7</th>
<th align="center" width="28">8</th>
<th align="center" width="28">9</th>
<th align="center" width="28">10</th>
<th align="center" width="28">11</th>
<th align="center" width="28">12</th>
	</tr>';
 $gluten=0;$crustacee=0;$oua=0;$peste=0;$alune=0;$soia=0;$lapte=0;$nuci=0;$telina=0;$mustar=0;$susan=0;$sulf=0; 
foreach($productRetetas as $productReteta):


$htmltable =$htmltable.'<tr >
<td align="center" width="150">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td>
	<td align="center" width="46">'.$productReteta['Ingredient']['cod'].'</td>';
	
	if (isset($productReteta['Ingredient']['IngredientAlergen']['cerealeGluten'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['cerealeGluten']>0){$gluten++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
			
			if (isset($productReteta['Ingredient']['IngredientAlergen']['crustacee'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['crustacee']>0){$crustacee++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}

if (isset($productReteta['Ingredient']['IngredientAlergen']['oua'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['oua']>0){$oua++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}

if (isset($productReteta['Ingredient']['IngredientAlergen']['peste'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['peste']>0){$peste++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
			if (isset($productReteta['Ingredient']['IngredientAlergen']['alune'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['alune']>0){$alune++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['soia'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['soia']>0){$soia++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['lapte'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['lapte']>0){$lapte++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			

if (isset($productReteta['Ingredient']['IngredientAlergen']['nuci'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['nuci']>0){$nuci++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['telina'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['telina']>0){$telina++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['mustar'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['mustar']>0){$mustar++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['susan'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['susan']>0){$susan++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			

if (isset($productReteta['Ingredient']['IngredientAlergen']['dioxidSulf'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['dioxidSulf']>0){$sulf++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
$htmltable=$htmltable.'</tr>';endforeach;
//-------------------------------------------------------------------------
$htmltable = $htmltable.'</table><h4></h4><h4>&nbsp;</h4><h4>2 - Cross contaminare ingredienti</h4>
<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;vertical-align:middle;">
<tr bgcolor="#000000" color="#ffffff"><th width="150" align="center">Ingredient</th>
<th align="center" width="46">Cod</th>
<th align="center"width="28">1</th>
<th align="center" width="28">2</th>
<th align="center" width="28">3</th>
<th align="center" width="28">4</th>
<th align="center" width="28">5</th>
<th align="center" width="28">6</th>
<th align="center" width="28">7</th>
<th align="center" width="28">8</th>
<th align="center" width="28">9</th>
<th align="center" width="28">10</th>
<th align="center" width="28">11</th>
<th align="center" width="28">12</th>
	</tr>';
foreach($productRetetas as $productReteta):


$htmltable =$htmltable.'<tr >
<td align="center" width="150">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td>
	<td align="center" width="46">'.$productReteta['Ingredient']['cod'].'</td>';
	
	if (isset($productReteta['Ingredient']['IngredientAlergen']['cerealeGlutenZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['cerealeGlutenZ']>0){$gluten++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
			
			if (isset($productReteta['Ingredient']['IngredientAlergen']['crustaceeZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['crustaceeZ']>0){$crustacee++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}

if (isset($productReteta['Ingredient']['IngredientAlergen']['ouaZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['ouaZ']>0){$oua++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}

if (isset($productReteta['Ingredient']['IngredientAlergen']['pesteZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['pesteZ']>0){$peste++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
			if (isset($productReteta['Ingredient']['IngredientAlergen']['aluneZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['aluneZ']>0){$alune++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['soiaZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['soiaZ']>0){$soia++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['lapteZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['lapteZ']>0){$lapte++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			

if (isset($productReteta['Ingredient']['IngredientAlergen']['nuciZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['nuciZ']>0){$nuci++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['telinaZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['telinaZ']>0){$telina++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['mustarZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['mustarZ']>0){$mustar++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Ingredient']['IngredientAlergen']['susanZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['susanZ']>0){$susan++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			

if (isset($productReteta['Ingredient']['IngredientAlergen']['dioxidSulfZ'])){
		if  ($productReteta['Ingredient']['IngredientAlergen']['dioxidSulfZ']>0){$sulf++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
$htmltable=$htmltable.'</tr>';endforeach;
//---------------------------------------------------------------------------------------------------

$htmltable = $htmltable.'</table><h4></h4><h4>&nbsp;</h4><h4>3 - Alergenii cross contaminare proces Zeelandia</h4>
<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;vertical-align:middle;">
<tr bgcolor="#000000" color="#ffffff"><th width="150" align="center">Produs</th>
<th align="center" width="46">Cod</th>
<th align="center"width="28">1</th>
<th align="center" width="28">2</th>
<th align="center" width="28">3</th>
<th align="center" width="28">4</th>
<th align="center" width="28">5</th>
<th align="center" width="28">6</th>
<th align="center" width="28">7</th>
<th align="center" width="28">8</th>
<th align="center" width="28">9</th>
<th align="center" width="28">10</th>
<th align="center" width="28">11</th>
<th align="center" width="28">12</th>
	</tr>';

$htmltable =$htmltable.'<tr >
<td align="center" width="150">'.htmlspecialchars($product['Product']['name']).'</td>
	<td align="center" width="46">'.$product['Product']['COD'].'</td>';
	
	if (isset($productReteta['Product']['ProductCrossAlergen']['cerealeGlutenP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['cerealeGlutenP']>0){$gluten++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
			
			if (isset($productReteta['Product']['ProductCrossAlergen']['crustaceeP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['crustaceeP']>0){$crustacee++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}

if (isset($productReteta['Product']['ProductCrossAlergen']['ouaP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['ouaP']>0){$oua++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}

if (isset($productReteta['Product']['ProductCrossAlergen']['pesteP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['pesteP']>0){$peste++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
			if (isset($productReteta['Product']['ProductCrossAlergen']['aluneP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['aluneP']>0){$alune++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Product']['ProductCrossAlergen']['soiaP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['soiaP']>0){$soia++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Product']['ProductCrossAlergen']['lapteP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['lapteP']>0){$lapte++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			

if (isset($productReteta['Product']['ProductCrossAlergen']['nuciP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['nuciP']>0){$nuci++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Product']['ProductCrossAlergen']['telinaP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['telinaP']>0){$telina++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Product']['ProductCrossAlergen']['mustarP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['mustarP']>0){$mustar++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
if (isset($productReteta['Product']['ProductCrossAlergen']['susanP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['susanP']>0){$susan++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			

if (isset($productReteta['Product']['ProductCrossAlergen']['dioxidSulfP'])){
		if  ($productReteta['Product']['ProductCrossAlergen']['dioxidSulfP']>0){$sulf++;
			$htmltable=$htmltable.'<td border="1" bgcolor="#ffd4d4" align="center" width="28">prezent</td>';}
			else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dffde6" width="28">absent</td>';}}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#dddddd" width="28"><b> - </b></td>';}
			
$htmltable=$htmltable.'</tr>';

//-------------------------------------------------------------------------------------------

$htmltable = $htmltable.'</table><h4></h4><h4>&nbsp;</h4><h4>4 - Agentii alergeni ai produsului final</h4>
<table cellpadding="0" cellspacing="0" style="border: 1px #dddddd solid;vertical-align:middle;">
<tr bgcolor="#000000" color="#ffffff"><th width="150" align="center">Produs</th>
<th align="center" width="46">Cod</th>
<th align="center"width="28">1</th>
<th align="center" width="28">2</th>
<th align="center" width="28">3</th>
<th align="center" width="28">4</th>
<th align="center" width="28">5</th>
<th align="center" width="28">6</th>
<th align="center" width="28">7</th>
<th align="center" width="28">8</th>
<th align="center" width="28">9</th>
<th align="center" width="28">10</th>
<th align="center" width="28">11</th>
<th align="center" width="28">12</th>
	</tr>';






$htmltable=$htmltable.'<tr bgcolor="#eeeeee">
<td align="center" height="20" width="150">'.htmlspecialchars($product['Product']['name']).'</td>
	<td align="center" width="46">Cod</td>';


if($gluten>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	
	if($crustacee>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	if($oua>0){$htmltable=$htmltable. '<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	if($peste>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	if($alune>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	if($soia>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	if($lapte>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	if($nuci>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	if($telina>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	if($mustar>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	if($susan>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td>';}
	if($sulf>0){$htmltable=$htmltable.'<td border="1" bgcolor="#ff8b8b" align="center" width="28">prezent</td></tr>
</table>';}else{$htmltable=$htmltable.'<td border="1" align="center" bgcolor="#54df71" width="28">absent</td></tr>
</table><h4>&nbsp;</h4><h4><u>Legenda</u>: 1-Cereale Gluten, 2-Crustacee, 3-Oua, 4-Peste, 5-Alune, 6-Soia, 7-Lapte, 8-Nuci, 9-Telina, 10-Mustar, 11-Susan, 12-Dioxid de sulf, ';}





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

$htmltable=$htmltable. $tcpdf->Output('alergeni '.htmlspecialchars($product['Product']['name']).'.pdf', 'D'); 

?>