<div>
<h2>Modificari genetice</h2>
<div style="font-size:14px;padding-bottom:10px;">Produs: <b><?php echo $html->link($product['Product']['name'], array('controller'=> 'products', 'action'=>'view', $prod));?></b><?php echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_prod_genetic', $prod), array('escape' => false, 'style'=>'vertical-align:-4px;margin-left:740px;'));?></div>

<?

$tableCap='<table cellspacing="0" cellpadding="0" border="1" style="margin-bottom: 0px"><tr bgcolor="#efedfc"><td width="120"  height="30"><b>Ingredient</b></td>
	<td width="317"><b>Ingredient</b></td>
	<td width="100" ><b>Sub-ingredient(*)</b></td>
	<td width="67"><b>Origine-mg da/nu</b></td>
	<td width="67" ><b>Daca nu,1,2,3,4(**)</b></td>
	<td width="67" ><b>Daca 3,sursa botanica</b></td>
		<td width="67" ><b>Daca 4,tara de origine</b></td></tr>';
$tableSoia='<table class="" id="" style="margin-bottom: 0px" cellspacing="0" cellpadding="0" border="1" bordercolor="#dddddd">';
$tablePorumb='<table cellspacing="0" style="margin-bottom: 0px" cellpadding="0" border="1" bordercolor="#dddddd">';
$tableRapita='<table cellspacing="0"  style="margin-bottom: 0px" cellpadding="0" border="1" bordercolor="#dddddd">';
$tableBumbac='<table cellspacing="0" style="margin-bottom: 0px" cellpadding="0" border="1" bordercolor="#dddddd">';
$tableSfecla='<table cellspacing="0"  style="margin-bottom: 0px" cellpadding="0" border="1" bordercolor="#dddddd">';
$tableCartofi='<table cellspacing="0" style="margin-bottom: 0px" cellpadding="0" border="1" bordercolor="#dddddd">';
	
	foreach($productRetetas as $productReteta):
if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['soiaIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['soiaPrezent']=='prezent'))
	{$tableSoia=$tableSoia.'<tr><td width="120">'.$productReteta['Ingredient']['name'].'&nbsp;</td><td width="317">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['soiaIngredient'].'&nbsp;</td><td width="100">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['soiaSub'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['soiaOrigine'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['soiaNu'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['soiaSursa'].'&nbsp;</td><td width="67">'.
$productReteta['Ingredient']['IngredientGeneticModification']['soiaTara'].' &nbsp</td></tr>';}/*else{$tableSoia=$tableSoia.'<tr><td colspan="7">Nu au fost introduse modifiarile genetice pentru acest ingredient</td></tr>'}*/

if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['porumbIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['porumbPrezent']=='prezent'))
	{$tablePorumb=$tablePorumb.'<tr><td width="120">'.$productReteta['Ingredient']['name'].'&nbsp;</td><td width="317">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['porumbIngredient'].'&nbsp;</td><td width="100">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['porumbSub'].'&nbsp</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['porumbOrigine'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['porumbNu'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['porumbSursa'].'&nbsp;</td><td width="67">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['porumbTara'].'&nbsp;</td></tr>';}

if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['rapitaIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['rapitaPrezent']=='prezent'))
	{$tableRapita=$tableRapita.'<tr><td width="120">'.$productReteta['Ingredient']['name'].'&nbsp;</td><td width="317">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['rapitaIngredient'].'&nbsp;</td><td width="100">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['rapitaSub'].'&nbsp</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['rapitaOrigine'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['rapitaNu'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['rapitaSursa'].'&nbsp;</td><td width="67">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['rapitaTara'].'&nbsp;</td></tr>';}

if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['bumbacIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['bumbacPrezent']=='prezent'))
	{$tableBumbac=$tableBumbac.'<tr><td width="120">'.$productReteta['Ingredient']['name'].'&nbsp;</td><td width="317">'.
	    $productReteta['Ingredient']['IngredientGeneticModification']['bumbacIngredient'].'&nbsp;</td><td width="100">'.
	    $productReteta['Ingredient']['IngredientGeneticModification']['bumbacSub'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacOrigine'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacNu'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacSursa'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['bumbacTara'].'&nbsp;</td></tr>';}

if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['sfeclaIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['sfeclaPrezent']=='prezent'))
	{$tableSfecla=$tableSfecla.'<tr><td width="120">'.$productReteta['Ingredient']['name'].'&nbsp;</td><td width="317">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaIngredient'].'&nbsp;</td><td width="100">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaSub'].'&nbsp;</td><td width="67">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaOrigine'].'&nbsp;</td><td width="67">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaNu'].'&nbsp;</td><td width="67">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaSursa'].'&nbsp;</td><td width="67">'.
	 $productReteta['Ingredient']['IngredientGeneticModification']['sfeclaTara'].'&nbsp;</td></tr>';}
			
if ((isset($productReteta['Ingredient']['IngredientGeneticModification']['cartofiIngredient']))&&($productReteta['Ingredient']['IngredientGeneticModification']['cartofiPrezent']=='prezent'))
	{$tableCartofi=$tableCartofi.'<tr><td width="120">'.$productReteta['Ingredient']['name'].'&nbsp;</td><td width="317">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['cartofiIngredient'].'&nbsp;</td><td width="100">'.
	$productReteta['Ingredient']['IngredientGeneticModification']['cartofiSub'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['cartofiOrigine'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['cartofiNu'].'&nbsp;</td><td width="67">'.
		$productReteta['Ingredient']['IngredientGeneticModification']['cartofiSursa'].'&nbsp;</td><td width="67">'.
			$productReteta['Ingredient']['IngredientGeneticModification']['cartofiTara'].'&nbsp;</td></tr>';}

endforeach;

?>
<table border="1" width="920" cellspacing="0" cellpadding="0" bordercolor="#000000" class="" id="" style="margin:0px;padding:0px;margin-bottom: 0px">
	<tr><td style="margin:0px;padding:0px;" width="60" >&nbsp;&nbsp;Sursa</td><td height="20"><? echo $tableCap;?></table></td></tr>
	<tr><td width="60" bgcolor="#eeeeee">&nbsp;&nbsp;Soia</td><td ><? echo $tableSoia;?></table></td></tr>
	<tr><td width="60" bgcolor="#eeeeee">&nbsp;&nbsp;Porumb</td><td><? echo $tablePorumb;?></table></td></tr>
	<tr><td width="60" bgcolor="#eeeeee">&nbsp;&nbsp;Rapita</td><td><? echo $tableRapita;?></table></td></tr>
	<tr><td width="60" bgcolor="#eeeeee">&nbsp;&nbsp;Bumbac</td><td><? echo $tableBumbac;?></table></td></tr>
    <tr><td width="60" bgcolor="#eeeeee">&nbsp;&nbsp;Sfecla<br />de zahar</td><td><? echo $tableSfecla;?></table></td></tr>
    <tr><td width="60" bgcolor="#eeeeee">&nbsp;&nbsp;Cartofi</td><td><? echo $tableCartofi;?></table></td></tr>
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

<br/><br/>























</div>
