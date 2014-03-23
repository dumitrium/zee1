<div class="ingredientAlergens index">
<h2>Linii de productie - contaminare agenti alergeni</h2>
<br /><br /><Br />
<table cellpadding="0" cellspacing="0" border="1">
<tr>
	<th>  Nume  </th>
	<th>Modificat</th>
	<th>Cereale Gluten</th>
	<th>Crustacee</th>
	<th>Oua</th>
	<th>Peste</th>
	<th>Alune</th>
	<th>Soia</th>
	<th>Lapte</th>
	<th>Nuci</th>
	<th>Telina</th>
	<th>Mustar</th>
    <th>Susan</th>
    <th>Lupin</th>
	<th>Moluste</th>
	<th>dioxid Sulf</th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($productCrossAlergens as $productCrossAlergen):

?>
	<tr>
		<td>
		<?php echo ' '.$productCrossAlergen['ProductCrossAlergen']['name'].' '; ?>
		<td>
			<?php echo $productCrossAlergen['ProductCrossAlergen']['modified']; ?>
		</td>
	

<?if (isset($productCrossAlergen['ProductCrossAlergen']['cerealeGlutenP'])){if  ($productCrossAlergen['ProductCrossAlergen']['cerealeGlutenP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['crustaceeP'])){if  ($productCrossAlergen['ProductCrossAlergen']['crustaceeP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['ouaP'])){if  ($productCrossAlergen['ProductCrossAlergen']['ouaP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['pesteP'])){if  ($productCrossAlergen['ProductCrossAlergen']['pesteP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['aluneP'])){if  ($productCrossAlergen['ProductCrossAlergen']['aluneP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['soiaP'])){if  ($productCrossAlergen['ProductCrossAlergen']['soiaP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['lapteP'])){if  ($productCrossAlergen['ProductCrossAlergen']['lapteP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['nuciP'])){if  ($productCrossAlergen['ProductCrossAlergen']['nuciP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['telinaP'])){if  ($productCrossAlergen['ProductCrossAlergen']['telinaP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['mustarP'])){if  ($productCrossAlergen['ProductCrossAlergen']['mustarP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['susanP'])){if  ($productCrossAlergen['ProductCrossAlergen']['susanP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['lupinP'])){if  ($productCrossAlergen['ProductCrossAlergen']['lupinP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['molusteP'])){if  ($productCrossAlergen['ProductCrossAlergen']['molusteP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($productCrossAlergen['ProductCrossAlergen']['dioxidSulfP'])){if  ($productCrossAlergen['ProductCrossAlergen']['dioxidSulfP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>
<td class="actions">
			
		<?php 
 echo $html->link(__('Editeaza', true), 
	array('controller'=>'product_cross_alergens','action'=>'edit', $productCrossAlergen['ProductCrossAlergen']['id']),array('class'=>'btn'), null, false); ?>
			
		</td>
</tr>
 <tr><td colspan="17" style="height:10px; background:#dddddd;"></td></tr>   
<?php endforeach; ?>
</table>
</div>


