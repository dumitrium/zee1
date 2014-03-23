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
foreach ($Lines as $Line):

?>
	<tr>
		<td>
		<?php echo ' '.$Line['Line']['name'].' '; ?>
		<td>
			<?php echo $Line['Line']['modified']; ?>
		</td>
	

<?if (isset($Line['Line']['cerealeGlutenP'])){if  ($Line['Line']['cerealeGlutenP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['crustaceeP'])){if  ($Line['Line']['crustaceeP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['ouaP'])){if  ($Line['Line']['ouaP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['pesteP'])){if  ($Line['Line']['pesteP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['aluneP'])){if  ($Line['Line']['aluneP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['soiaP'])){if  ($Line['Line']['soiaP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['lapteP'])){if  ($Line['Line']['lapteP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['nuciP'])){if  ($Line['Line']['nuciP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['telinaP'])){if  ($Line['Line']['telinaP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['mustarP'])){if  ($Line['Line']['mustarP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['susanP'])){if  ($Line['Line']['susanP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['lupinP'])){if  ($Line['Line']['lupinP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['molusteP'])){if  ($Line['Line']['molusteP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>

<?if (isset($Line['Line']['dioxidSulfP'])){if  ($Line['Line']['dioxidSulfP']>0){echo '<td border="1" bgcolor="#ffd4d4" align="center"><b>prezent</b>';}else{echo '<td border="1" align="center" bgcolor="#dffde6"><b >absent</b>';}}else{echo '<td border="1" align="center" bgcolor="#dddddd"><b >neintrodus</b>';}?></td>
<td class="actions">
			
		<?php 
 echo $html->link(__('Editeaza', true), 
	array('controller'=>'lines','action'=>'edit', $Line['Line']['id']),array('class'=>'btn'), null, false); ?>
			
		</td>
</tr>
 <tr><td colspan="17" style="height:10px; background:#dddddd;"></td></tr>   
<?php endforeach; ?>
</table>
</div>


