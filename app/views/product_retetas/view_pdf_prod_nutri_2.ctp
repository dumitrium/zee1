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
$pr=htmlspecialchars($product['Product']['name']);
$tableEgergie='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom:0px">
<tr bgcolor="#dddddd">
<td colspan="4" align="center" width="500"><b>Valoare energetica</b></td></tr>
<tr><th width="150" align="center" bgcolor="#dddddd"><b>Denumire ingredient</b></th>
<th bgcolor="#dddddd" width="50" align="center"><B>Procent</b></th>
<th align="center" width="150" bgcolor="#dddddd"><b>kJ/100g</b></th><th align="center" width="150" bgcolor="#dddddd"><b>Kcal/100g</b></th></tr>';




$tableMinerale='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom:0px"><tr bgcolor="#dddddd">
<td colspan="10" align="center" width="600"><b>Minerale</b></td></tr><tr>
<th width="150" align="center" bgcolor="#dddddd"><b>Denumire ingredient</b></th>
<th width="50" bgcolor="#dddddd" align="center">&nbsp;Procent&nbsp;</th>
<th bgcolor="#dddddd" align="center" width="50">&nbsp;Minerale&nbsp;</th>
<th bgcolor="#dddddd" align="center" width="50">&nbsp;sodiu&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="50">&nbsp;calciu&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="50">&nbsp;fosfor&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="50">&nbsp;fier&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="50">&nbsp;magneziu&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="50">&nbsp;zinc&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="50">&nbsp;iod&nbsp;</th></tr>';
$tableProteine='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom:0px"><tr bgcolor="#dddddd"><td colspan="5" align="center" width="500"><b>Proteine</b></td></tr><tr><th width="150" align="center"><b>Denumire ingredient</b></th>
<th width="50" align="center"><b>Procent</b></th>
<th align="center" bgcolor="#dddddd" width="100">Proteine</th>
<th align="center" bgcolor="#dddddd" width="100">vegetale</th>
<th align="center" bgcolor="#dddddd" width="100">animale</th></tr>';
$tableCarbohidrati='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom:0px"><tr bgcolor="#dddddd"><td colspan="6" align="center" width="600"><b>Carbohidrati</b></td></tr><tr><th width="150" align="center"><b>Denumire ingredient</b></th>
<th width="50" align="center"><b>Procent</b></th>
<th align="center" bgcolor="#dddddd" width="100">Carbohidrati</th>
<th align="center" bgcolor="#dddddd" width="100">zaharuri</th>
<th align="center" bgcolor="#dddddd" width="100">polioli</th>
<th align="center" bgcolor="#dddddd" width="100">amidon</th></tr>';
$tableGrasimi='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom:0px"><tr bgcolor="#dddddd"><td colspan="8" align="center" width="620"><b>Grasimi</b></td></tr><tr><th width="150" align="center"><b>Denumire ingredient</b></th>
<th width="50" align="center"><b>Procent</b></th>
<th align="center" bgcolor="#dddddd" width="70">Grasimi</th>
<th align="center" bgcolor="#dddddd" width="70">saturate</th>
<th align="center" bgcolor="#dddddd" width="70">mono-nesaturate</th>
<th align="center" bgcolor="#dddddd" width="70">poli-nesaturate</th>
<th align="center" bgcolor="#dddddd" width="70">vegetale</th>
<th align="center" bgcolor="#dddddd" width="70">animale</th></tr>';
$tableVitamine='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom:0px"><tr bgcolor="#dddddd"><td colspan="15" align="center" width="755"><b>Vitamine</b></td></tr><tr><th width="150" align="center"><b>Denumire ingredient</b></th>
<th width="40" align="center">&nbsp;Procent&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="45">&nbsp;Vitamine&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="40">&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="40">&nbsp;&nbsp;&nbsp;E&nbsp;&nbsp;&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="40">&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="45">B1 Tianina</th>
<th align="center" bgcolor="#dddddd" width="45">B2 Riboflavina</th>
<th align="center" bgcolor="#dddddd" width="45">B6 Piridoxina</th>
<th align="center" bgcolor="#dddddd" width="45">pp Niacina</th>
<th align="center" bgcolor="#dddddd" width="45">Acid Folic</th>
<th align="center" bgcolor="#dddddd" width="40">&nbsp;&nbsp;D&nbsp;&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="45">&nbsp;&nbsp;&nbsp;B12&nbsp;&nbsp;&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="45">&nbsp;Biotina&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="45">Acid Pantotenic</th></tr>';
$tableAltele='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom:0px"><tr bgcolor="#dddddd"><td colspan="5" align="center" width="500"><b>Altele</b></td></tr><tr><th width="150" align="center"><b>Denumire ingredient</b></th>
<th width="50" align="center"><b>Procent</b></th>
<th align="center" bgcolor="#dddddd" width="100">Fibre dietetice</th>
<th align="center" bgcolor="#dddddd" width="100">Umiditate</th>
<th align="center" bgcolor="#dddddd" width="100">Alcool</th></tr>';
$tableGrele='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom:0px"><tr bgcolor="#dddddd"><td colspan="8" align="center" width="560"><b>Metale Grele</b></td></tr><tr><th width="150" align="center"><b>Denumire ingredient</b></th>
<th width="50" align="center">&nbsp;Procent&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plumb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadmiu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mercur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arsen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zinc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th align="center" bgcolor="#dddddd" width="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cupru&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>';




$procent=0;$kcal=0;$kj=0;
$minerale=0;$sodiu=0;$calciu=0;$fosfor=0;$fier=0;$magneziu=0;$zinc=0;$iod=0;
$proteine=0;$vege=0;$ani=0;
$gras=0;$satu=0;$mono=0;$poli1=0;$vege1=0;$ani1=0;
$carbo=0;$zaha=0;$poli2=0;$ami2=0;
$fibre=0;$ume=0;$alcool=0;
$vitamine=0;$a=0;$e=0;$c=0;$b1=0;$b2=0;$b6=0;$pp=0;$acidfolic=0;$d=0;$b12=0;$biotina=0;$acidpantotenic=0;
$pb=0;$cd=0;$hg=0;$as=0;$zn=0;$cu=0;




foreach($productRetetas as $productReteta):
$pr=$productReteta['Product']['name'];
$procent=$procent+$productReteta['ProductReteta']['procent'];
$tableEgergie=$tableEgergie.'<tr>
	<td align="center" width="150">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td><td align="center" width="50">'.$productReteta['ProductReteta']['procent'].'&nbsp;%</td>';
if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['valKj'])){$tableEgergie=$tableEgergie.'<td width="150">&nbsp;-&nbsp;</td>';}else{$tableEgergie=$tableEgergie.'<td width="150" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['valKj']/100*$productReteta['ProductReteta']['procent'].'</td>';$kj=$kj+$productReteta['Ingredient']['IngredientCaracteristic']['valKj']/100*$productReteta['ProductReteta']['procent'];}
if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['valKcal'])){$tableEgergie=$tableEgergie.'<td width="150">&nbsp;-&nbsp;</td></tr>';}else{$tableEgergie=$tableEgergie.'<td width="150" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['valKcal']/100*$productReteta['ProductReteta']['procent'].'</td></tr>';$kcal=$kcal+$productReteta['Ingredient']['IngredientCaracteristic']['valKcal']/100*$productReteta['ProductReteta']['procent'];}

$tableMinerale=$tableMinerale.'<tr>
	<td align="center" width="150">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td><td align="center" width="50">'.$productReteta['ProductReteta']['procent'].'&nbsp;%</td>';
if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['minerale'])){$tableMinerale=$tableMinerale.'<td align="center" width="50">&nbsp;-&nbsp;</td>';}else{$tableMinerale=$tableMinerale.'<td align="center" width="50">'.$productReteta['Ingredient']['IngredientCaracteristic']['minerale']/100*$productReteta['ProductReteta']['procent'].'</td>';$minerale=$minerale+$productReteta['Ingredient']['IngredientCaracteristic']['minerale']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleSodiu'])){$tableMinerale=$tableMinerale.'<td align="center" width="50">&nbsp;-&nbsp;</td>';}else{$tableMinerale=$tableMinerale.'<td align="center" width="50">'.$productReteta['Ingredient']['IngredientCaracteristic']['mineraleSodiu']/100*$productReteta['ProductReteta']['procent'].'</td>';$sodiu=$sodiu+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleSodiu']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleCalciu'])){$tableMinerale=$tableMinerale.'<td align="center" width="50">&nbsp;-&nbsp;</td>';}else{$tableMinerale=$tableMinerale.'<td align="center" width="50">'.$productReteta['Ingredient']['IngredientCaracteristic']['mineraleCalciu']/100*$productReteta['ProductReteta']['procent'].'</td>';$calciu=$calciu+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleCalciu']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleFosfor'])){$tableMinerale=$tableMinerale.'<td align="center" width="50">&nbsp;-&nbsp;</td>';}else{$tableMinerale=$tableMinerale.'<td align="center" width="50">'.$productReteta['Ingredient']['IngredientCaracteristic']['mineraleFosfor']/100*$productReteta['ProductReteta']['procent'].'</td>';$fosfor=$fosfor+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleFosfor']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleFier'])){$tableMinerale=$tableMinerale.'<td align="center" width="50">&nbsp;-&nbsp;</td>';}else{$tableMinerale=$tableMinerale.'<td align="center" width="50">'.$productReteta['Ingredient']['IngredientCaracteristic']['mineraleFier']/100*$productReteta['ProductReteta']['procent'].'</td>';$fier=$fier+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleFier']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleMagneziu'])){$tableMinerale=$tableMinerale.'<td align="center" width="50">&nbsp;-&nbsp;</td>';}else{$tableMinerale=$tableMinerale.'<td align="center" width="50">'.$productReteta['Ingredient']['IngredientCaracteristic']['mineraleMagneziu']/100*$productReteta['ProductReteta']['procent'].'</td>';$magneziu=$magneziu+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleMagneziu']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleZinc'])){$tableMinerale=$tableMinerale.'<td align="center" width="50">&nbsp;-&nbsp;</td>';}else{$tableMinerale=$tableMinerale.'<td align="center" width="50">'.$productReteta['Ingredient']['IngredientCaracteristic']['mineraleZinc']/100*$productReteta['ProductReteta']['procent'].'</td>';$zinc=$zinc+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleZinc']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['mineraleIod'])){$tableMinerale=$tableMinerale.'<td align="center" width="50">&nbsp;-&nbsp;</td></tr>';}else{$tableMinerale=$tableMinerale.'<td align="center" width="50">'.$productReteta['Ingredient']['IngredientCaracteristic']['mineraleIod']/100*$productReteta['ProductReteta']['procent'].'</td></tr>';$iod=$iod+$productReteta['Ingredient']['IngredientCaracteristic']['mineraleIod']/100*$productReteta['ProductReteta']['procent'];}

$tableProteine=$tableProteine.'<tr>
	<td align="center" width="150">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td><td align="center" width="50">'.$productReteta['ProductReteta']['procent'].'&nbsp;%</td>';
if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['proteine'])){$tableProteine=$tableProteine.'<td align="center" width="100">&nbsp;-&nbsp;</td>';}else{$tableProteine=$tableProteine.'<td width="100" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['proteine']/100*$productReteta['ProductReteta']['procent'].'</td>';$proteine=$proteine+$productReteta['Ingredient']['IngredientCaracteristic']['proteine']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['proteineVegetale'])){$tableProteine=$tableProteine.'<td align="center" width="100">&nbsp;-&nbsp;</td>';}else{$tableProteine=$tableProteine.'<td align="center" width="100">'.$productReteta['Ingredient']['IngredientCaracteristic']['proteineVegetale']/100*$productReteta['ProductReteta']['procent'].'</td>';$vege=$vege+$productReteta['Ingredient']['IngredientCaracteristic']['proteineVegetale']/100*$productReteta['ProductReteta']['procent'];}


if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['proteineAnimale'])){$tableProteine=$tableProteine.'<td align="center" width="100">&nbsp;-&nbsp;</td></tr>';}else{$tableProteine=$tableProteine.'<td width="100" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['proteineAnimale']/100*$productReteta['ProductReteta']['procent'].'</td></tr>';$ani=$ani+$productReteta['Ingredient']['IngredientCaracteristic']['proteineAnimale']/100*$productReteta['ProductReteta']['procent'];}


$tableCarbohidrati=$tableCarbohidrati.'<tr>
	<td align="center" width="150">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td><td align="center" width="50">'.$productReteta['ProductReteta']['procent'].'&nbsp;%</td>';
if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['carbohidrati'])){$tableCarbohidrati=$tableCarbohidrati.'<td align="center" width="100">&nbsp;-&nbsp;</td>';}else{$tableCarbohidrati=$tableCarbohidrati.'<td  width="100" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['carbohidrati']/100*$productReteta['ProductReteta']['procent'].'</td>';$carbo=$carbo+$productReteta['Ingredient']['IngredientCaracteristic']['carbohidrati']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['carboxidratiZahar'])){$tableCarbohidrati=$tableCarbohidrati.'<td align="center" width="100">&nbsp;-&nbsp;</td>';}else{$tableCarbohidrati=$tableCarbohidrati.'<td width="100" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['carboxidratiZahar']/100*$productReteta['ProductReteta']['procent'].'</td>';$zaha=$zaha+$productReteta['Ingredient']['IngredientCaracteristic']['carboxidratiZahar']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiPolioli'])){$tableCarbohidrati=$tableCarbohidrati.'<td align="center" width="100">&nbsp;-&nbsp;</td>';}else{$tableCarbohidrati=$tableCarbohidrati.'<td  width="100" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiPolioli']/100*$productReteta['ProductReteta']['procent'].'</td>';$poli2=$poli2+$productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiPolioli']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiAmidon'])){$tableCarbohidrati=$tableCarbohidrati.'<td align="center" width="100">&nbsp;-&nbsp;</td></tr>';}else{$tableCarbohidrati=$tableCarbohidrati.'<td  width="100" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiAmidon']/100*$productReteta['ProductReteta']['procent'].'</td></tr>';$ami2=$ami2+$productReteta['Ingredient']['IngredientCaracteristic']['carbohidratiAmidon']/100*$productReteta['ProductReteta']['procent'];}


$tableGrasimi=$tableGrasimi.'<tr>
	<td align="center" width="150">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td><td align="center" width="50">'.$productReteta['ProductReteta']['procent'].'&nbsp;%</td>';
if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimi'])){$tableGrasimi=$tableGrasimi.'<td align="center" width="70">&nbsp;-&nbsp;</td>';}else{$tableGrasimi=$tableGrasimi.'<td  width="70"align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['grasimi']/100*$productReteta['ProductReteta']['procent'].'</td>';$gras=$gras+$productReteta['Ingredient']['IngredientCaracteristic']['grasimi']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimiSaturate'])){$tableGrasimi=$tableGrasimi.'<td align="center" width="70">&nbsp;-&nbsp;</td>';}else{$tableGrasimi=$tableGrasimi.'<td  width="70"align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['grasimiSaturate']/100*$productReteta['ProductReteta']['procent'].'</td>';$satu=$satu+$productReteta['Ingredient']['IngredientCaracteristic']['grasimiSaturate']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimiMonoNesaturate'])){$tableGrasimi=$tableGrasimi.'<td align="center" width="70">&nbsp;-&nbsp;</td>';}else{$tableGrasimi=$tableGrasimi.'<td width="70" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['grasimiMonoNesaturate']/100*$productReteta['ProductReteta']['procent'].'</td>';$mono=$mono+$productReteta['Ingredient']['IngredientCaracteristic']['grasimiMonoNesaturate']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturate'])){$tableGrasimi=$tableGrasimi.'<td align="center" width="70">&nbsp;-&nbsp;</td>';}else{$tableGrasimi=$tableGrasimi.'<td width="70" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturate']/100*$productReteta['ProductReteta']['procent'].'</td>';$poli1=$poli1+$productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturate']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateVegetale'])){$tableGrasimi=$tableGrasimi.'<td align="center" width="70">&nbsp;-&nbsp;</td>';}else{$tableGrasimi=$tableGrasimi.'<td width="70" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateVegetale']/100*$productReteta['ProductReteta']['procent'].'</td>';$vege1=$vege1+$productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateVegetale']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateAnimale'])){$tableGrasimi=$tableGrasimi.'<td align="center" width="70">&nbsp;-&nbsp;</td></tr>';}else{$tableGrasimi=$tableGrasimi.'<td width="70" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateAnimale']/100*$productReteta['ProductReteta']['procent'].'</td></tr>';$ani1=$ani1+$productReteta['Ingredient']['IngredientCaracteristic']['grasimiPoliNesaturateAnimale']/100*$productReteta['ProductReteta']['procent'];}


$tableAltele=$tableAltele.'<tr>
	<td align="center" width="150">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td><td align="center" width="50">'.$productReteta['ProductReteta']['procent'].'&nbsp;%</td>';
if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['fibredietetice'])){$tableAltele=$tableAltele.'<td align="center" width="100">&nbsp;-&nbsp;</td>';}else{$tableAltele=$tableAltele.'<td width="100" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['fibredietetice']/100*$productReteta['ProductReteta']['procent'].'</td>';$fibre=$fibre+$productReteta['Ingredient']['IngredientCaracteristic']['fibredietetice']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['umiditate'])){$tableAltele=$tableAltele.'<td align="center" width="100">&nbsp;-&nbsp;</td>';}else{$tableAltele=$tableAltele.'<td  width="100"align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['umiditate']/100*$productReteta['ProductReteta']['procent'].'</td>';$ume=$ume+$productReteta['Ingredient']['IngredientCaracteristic']['umiditate']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['alcool'])){$tableAltele=$tableAltele.'<td align="center" width="100">&nbsp;-&nbsp;</td></tr>';}else{$tableAltele=$tableAltele.'<td width="100"align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['alcool']/100*$productReteta['ProductReteta']['procent'].'</td></tr>';$alcool=$alcool+$productReteta['Ingredient']['IngredientCaracteristic']['alcool']/100*$productReteta['ProductReteta']['procent'];}




$tableVitamine=$tableVitamine.'<tr>
	<td align="center" width="150">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td><td align="center" width="40">'.$productReteta['ProductReteta']['procent'].'&nbsp;%</td>';
if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitamine'])){$tableVitamine=$tableVitamine.'<td align="center" width="45">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="45" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitamine']/100*$productReteta['ProductReteta']['procent'].'</td>';$vitamine=$vitamine+$productReteta['Ingredient']['IngredientCaracteristic']['minerale']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaA'])){$tableVitamine=$tableVitamine.'<td align="center" width="40">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="40"align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaA']/100*$productReteta['ProductReteta']['procent'].'</td>';$a=$a+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaA']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaE'])){$tableVitamine=$tableVitamine.'<td align="center" width="40">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="40" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaE']/100*$productReteta['ProductReteta']['procent'].'</td>';$e=$e+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaE']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaC'])){$tableVitamine=$tableVitamine.'<td align="center" width="40">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="40" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaC']/100*$productReteta['ProductReteta']['procent'].'</td>';$c=$c+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaC']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB1'])){$tableVitamine=$tableVitamine.'<td align="center" width="45">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="45" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB1']/100*$productReteta['ProductReteta']['procent'].'</td>';$b1=$b1+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB1']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB2'])){$tableVitamine=$tableVitamine.'<td align="center" width="45">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="45" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB2']/100*$productReteta['ProductReteta']['procent'].'</td>';$b2=$b2+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB2']/100*$productReteta['ProductReteta']['procent'];}


if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB6'])){$tableVitamine=$tableVitamine.'<td align="center" width="45">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="45" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB6']/100*$productReteta['ProductReteta']['procent'].'</td>';$b6=$b6+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB6']/100*$productReteta['ProductReteta']['procent'];}


if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaPp'])){$tableVitamine=$tableVitamine.'<td align="center" width="45">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td  width="45"align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaPp']/100*$productReteta['ProductReteta']['procent'].'</td>';$pp=$pp+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaPp']/100*$productReteta['ProductReteta']['procent'];}



if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['acidFolic'])){$tableVitamine=$tableVitamine.'<td align="center" width="45">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="45" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['acidFolic']/100*$productReteta['ProductReteta']['procent'].'</td>';$acidfolic=$acidfolic+$productReteta['Ingredient']['IngredientCaracteristic']['acidFolic']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaD'])){$tableVitamine=$tableVitamine.'<td align="center" width="40">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="40" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaD']/100*$productReteta['ProductReteta']['procent'].'</td>';$d=$d+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaD']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB12'])){$tableVitamine=$tableVitamine.'<td align="center" width="45">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="45" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB12']/100*$productReteta['ProductReteta']['procent'].'</td>';$b12=$b12+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaB12']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['vitaminaBiotina'])){$tableVitamine=$tableVitamine.'<td align="center" width="45">&nbsp;-&nbsp;</td>';}else{$tableVitamine=$tableVitamine.'<td width="45" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaBiotina']/100*$productReteta['ProductReteta']['procent'].'</td>';$biotina=$biotina+$productReteta['Ingredient']['IngredientCaracteristic']['vitaminaBiotina']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['acidPantotenic'])){$tableVitamine=$tableVitamine.'<td align="center" width="45">&nbsp;-&nbsp;</td></tr>';}else{$tableVitamine=$tableVitamine.'<td width="45" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['acidPantotenic']/100*$productReteta['ProductReteta']['procent'].'</td></tr>';$acidpantotenic=$acidpantotenic+$productReteta['Ingredient']['IngredientCaracteristic']['acidPantotenic']/100*$productReteta['ProductReteta']['procent'];}

$tableGrele=$tableGrele.'<tr>
	<td align="center" width="150">'.htmlspecialchars($productReteta['Ingredient']['name']).'</td><td align="center" width="50">'.$productReteta['ProductReteta']['procent'].'&nbsp;%</td>';
if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['pb'])){$tableGrele=$tableGrele.'<td width="60" align="center" width="60">&nbsp;-&nbsp;</td>';}else{$tableGrele=$tableGrele.'<td  width="60" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['pb']/100*$productReteta['ProductReteta']['procent'].'</td>';$pb=$pb+$productReteta['Ingredient']['IngredientCaracteristic']['pb']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['cd'])){$tableGrele=$tableGrele.'<td width="60" align="center" width="60">&nbsp;-&nbsp;</td>';}else{$tableGrele=$tableGrele.'<td  width="60" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['cd']/100*$productReteta['ProductReteta']['procent'].'</td>';$cd=$cd+$productReteta['Ingredient']['IngredientCaracteristic']['cd']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic'])){$tableGrele=$tableGrele.'<td width="60" align="center" width="60">&nbsp;-&nbsp;</td>';}else{$tableGrele=$tableGrele.'<td width="60" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['hg']/100*$productReteta['ProductReteta']['procent'].'</td>';$hg=$hg+$productReteta['Ingredient']['IngredientCaracteristic']['hg']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic'])){$tableGrele=$tableGrele.'<td width="60" align="center" width="60">&nbsp;-&nbsp;</td>';}else{$tableGrele=$tableGrele.'<td width="60" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['as']/100*$productReteta['ProductReteta']['procent'].'</td>';$as=$as+$productReteta['Ingredient']['IngredientCaracteristic']['as']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic'])){$tableGrele=$tableGrele.'<td width="60" align="center" width="60">&nbsp;-&nbsp;</td>';}else{$tableGrele=$tableGrele.'<td width="60" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['zn']/100*$productReteta['ProductReteta']['procent'].'</td>';$zn=$zn+$productReteta['Ingredient']['IngredientCaracteristic']['zn']/100*$productReteta['ProductReteta']['procent'];}

if (!isset($productReteta['Ingredient']['IngredientCaracteristic']['cu'])){$tableGrele=$tableGrele.'<td width="60" align="center" width="60">&nbsp;-&nbsp;</td></tr>';}else{$tableGrele=$tableGrele.'<td  width="60" align="center">'.$productReteta['Ingredient']['IngredientCaracteristic']['cu']/100*$productReteta['ProductReteta']['procent'].'</td></tr>';$cu=$cu+$productReteta['Ingredient']['IngredientCaracteristic']['cu']/100*$productReteta['ProductReteta']['procent'];}

endforeach;



$tableEgergie=$tableEgergie.'<tr bgcolor="#dddddd">
<td align="center" width="150"><b>'.$pr.'</b></td>	
<td align="center" width="50"><b align="center">'.$procent.'&nbsp;%</b></td>
<td align="center" width="150"><b>'.$kj.'</b></td>
<td align="center" width="150"><b>'.$kcal.'</b></td></tr></table>';


$tableMinerale=$tableMinerale.'<tr bgcolor="#dddddd">
<td align="center" width="150" style="background:#dddddd"><b>'.$pr.'</b></td>
<td align="center" width="50"><b align="center">'.$procent.'&nbsp;%</b></td>
<td align="center" width="50"><b style="color:#000000">'.$minerale.'</b></td>
<td align="center" width="50"><b style="color:#000000">'.$sodiu.'</b></td>
<td align="center" width="50"><b style="color:#000000">'.$calciu.'</b></td>
<td align="center" width="50"><b style="color:#000000">'.$fosfor.'</b></td>
<td align="center" width="50"><b style="color:#000000">'.$fier.'</b></td>
<td align="center" width="50"><b style="color:#000000">'.$magneziu.'</b></td>
<td align="center"  width="50"><b style="color:#000000">'.$zinc.'</b></td>
<td align="center" width="50"><b style="color:#000000">'.$iod.'</b></td></tr></table>';

$tableProteine=$tableProteine.'<tr bgcolor="#dddddd">
<td align="center" width="150"><b>'.$pr.'</b></td>
<td align="center" width="50"><b align="center">'.$procent.'&nbsp;%</b></td>
<td align="center" width="100"><b style="color:#000000">'.$proteine.'</b></td>
<td align="center" width="100"><b style="color:#000000">'.$vege.'</b></td>
<td align="center" width="100"><b style="color:#000000">'.$ani.'</b></td></tr></table>';

$tableCarbohidrati=$tableCarbohidrati.'<tr bgcolor="#dddddd">
<td align="center" width="150"><b>'.$pr.'</b></td>
<td align="center" width="50"><b align="center">'.$procent.'&nbsp;%</b></td>
<td align="center" width="100"><b style="color:#000000">'.$carbo.'</b></td>
<td align="center" width="100"><b style="color:#000000">'.$zaha.'</b></td>
<td align="center" width="100"><b style="color:#000000">'.$poli2.'</b></td>
<td align="center" width="100"><b style="color:#000000">'.$ami2.'</b></td></tr></table>';

$tableGrasimi=$tableGrasimi.'<tr bgcolor="#dddddd">
<td align="center"  width="150"><b>'.$pr.'</b></td>
<td align="center"  width="50"><b align="center">'.$procent.'&nbsp;%</b></td>
<td align="center" width="70"><b style="color:#000000">'.$gras.'</b></td>
<td align="center" width="70"><b style="color:#000000">'.$satu.'</b></td>
<td align="center" width="70"><b style="color:#000000">'.$mono.'</b></td>
<td align="center" width="70"><b style="color:#000000">'.$poli1.'</b></td>
<td align="center" width="70"><b style="color:#000000">'.$vege1.'</b></td>
<td align="center" width="70"><b style="color:#000000">'.$ani1.'</b></td></tr></table>';

$tableAltele=$tableAltele.'<tr bgcolor="#dddddd">
<td align="center" width="150"><b>'.$pr.'</b></td>
<td align="center" width="50"><b align="center">'.$procent.'&nbsp;%</b></td>
<td align="center" width="100"><b style="color:#000000">'.$fibre.'</b></td>
<td align="center" width="100"><b style="color:#000000">'.$ume.'</b></td>
<td align="center" width="100"><b style="color:#000000">'.$alcool.'</b></td></tr></table>';

$tableVitamine=$tableVitamine.'<tr bgcolor="#dddddd">
<td align="center" width="150"><b>'.$pr.'</b></td>
<td align="center" width="40"><b align="center">'.$procent.'&nbsp;%</b></td>
<td align="center" width="40"><b style="color:#000000">'.$vitamine.'</b></td>
<td align="center" width="40"><b style="color:#000000">'.$a.'</b></td>
<td align="center" width="40"><b style="color:#000000">'.$e.'</b></td>
<td align="center" width="45"><b style="color:#000000">'.$c.'</b></td>
<td align="center" width="45"><b style="color:#000000">'.$b1.'</b></td>
<td align="center" width="45"><b style="color:#000000">'.$b2.'</b></td>
<td align="center" width="45"><b style="color:#000000">'.$b6.'</b></td>
<td align="center" width="45"><b style="color:#000000">'.$pp.'</b></td>
<td align="center" width="45"><b style="color:#000000">'.$acidfolic.'</b></td>
<td align="center" width="40"><b style="color:#000000">'.$d.'</b></td>
<td align="center" width="45"><b style="color:#000000">'.$b12.'</b></td>
<td align="center" width="45"><b style="color:#000000">'.$biotina.'</b></td>
<td align="center" width="45"><b style="color:#000000">'.$acidpantotenic.'</b></td></tr></table>';

$tableGrele=$tableGrele.'<tr bgcolor="#dddddd">
<td align="center" width="150"><b>'.$pr.'</b></td>
<td align="center" width="50"><b align="center">'.$procent.'&nbsp;%</b></td>
<td align="center" width="60"><b style="color:#000000">'.$pb.'</b></td>
<td align="center" width="60"><b style="color:#000000">'.$cd.'</b></td>
<td align="center" width="60"><b style="color:#000000">'.$hg.'</b></td>
<td align="center" width="60"><b style="color:#000000">'.$as.'</b></td>
<td align="center" width="60"><b style="color:#000000">'.$zn.'</b></td>
<td align="center" width="60"><b style="color:#000000">'.$cu.'</b></td></tr></table>';






$htmltable='<h3><u>VALORI NUTRITIONALE</u></h3><h4>Denumire produs: '.$pr.'</h4>
<h4>Cod Produs:</h4><h4>Data:</h4><h4> </h4>'.$tableEgergie.'<h2>&nbsp;</h2>'.$tableMinerale.'<h2>&nbsp;</h2>'.$tableProteine.'<h2>&nbsp;</h2>'.$tableGrasimi.'<h2>&nbsp;</h2>'.$tableCarbohidrati.'<h2>&nbsp;</h2>'.$tableVitamine.'<h2>&nbsp;</h2>'.$tableAltele.'<h2>&nbsp;</h2>'.$tableGrele.'';



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

$tcpdf->Output('valori nutritionale '.$pr.'.pdf', 'D'); 

?>