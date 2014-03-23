<div ><br/>
		
	<?php if (!isset($id)) {
	
	
	echo $html->link(__('Adauga agentii alergeni pentru acest ingredient', true), 
array('action'=>'add', $ingred),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<?}else{
 echo $html->link(__('Editeaza agentii alergeni pentru acest ingredient', true), 
array('action'=>'edit',$ingred, $ingredientAlergen['IngredientAlergen']['id']),array('class'=>'btn'), null, false); ?>&nbsp;|&nbsp;<? echo $html->link(__('Sterge agentii alergeni', true), 
array('action'=>'delete', $ingredientAlergen['IngredientAlergen']['id']), array('class'=>'btn'), 
sprintf(__('Esti sigur ca vrei sa stergi # %s?', true), $ingredientAlergen['IngredientAlergen']['id']));?>&nbsp;|&nbsp;<?}?>

<?php echo $html->link(__('Vizualizare ingredient',true), array('controller'=>'ingredients','action'=>'view', 
		$ingred),array('class'=>'btn'), null, false); ?>

<?php //echo $html->link(__('Listeaza tori agentii alergeni', true), array('action'=>'index')); ?>
		
<? if (isset($id)) {?>
<h2><?php
	echo $ingredientAlergen['Ingredient']['name'];?> - Agentii alergeni ai ingredientului</h2>
	<table style="text-align: left;border:1px solid #ccc;" width="470" align="left"><?php $i = 0; $class = 'class="altrowdl"';?>
		<tr bgcolor="#efedfc" ><td ><b>Denumire</b></td>
		<td width="110"><b>
	agenti alergeni
		</td><td width="110"><b>alergeni – cross contaminare</b></td></tr>
				
		<tr><td ><b>Cereale care contin gluten(grau, secara <br/>orz, ovaz sau hibrizi) si derivate</b></td>
		<td ><?php echo $ingredientAlergen['IngredientAlergen']['cerealeGluten']; ?>&nbsp;
		</td><td ><?php echo $ingredientAlergen['IngredientAlergen']['cerealeGlutenZ']; ?>&nbsp;</td>
        </tr>
		<tr class="altrowdl"><td ><b>Crustacee si derivate</b></td>
		<td ><?php echo $ingredientAlergen['IngredientAlergen']['crustacee']; ?>&nbsp;
		</td><td ><?php echo $ingredientAlergen['IngredientAlergen']['crustaceeZ']; ?>&nbsp;
		</td></tr>
		<tr><td><b>Oua si derivate</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['oua']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['ouaZ']; ?>&nbsp;</td>
		</tr>
		<tr class="altrowdl">
		<td><b>Peste si derivate</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['peste']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['pesteZ']; ?>&nbsp;</td>
	    </tr>
		<tr>
		<td><b>Alune si derivate</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['alune']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['aluneZ']; ?>&nbsp;</td>
	    </tr>
		<tr class="altrowdl">
		<td><b>Soia si derivate</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['soia']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['soiaZ']; ?>&nbsp;</td>
	    </tr>
		<tr>
		<td><b>Lapte si derivate inclusiv lactoza</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['lapte']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['lapteZ']; ?>&nbsp;</td>
	    </tr>
		<tr class="altrowdl">
		<td><b>Nuci (ex. migdale, arahide, nuci<br/>nuci braziliene,fistic) si derivate</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['nuci']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['nuciZ']; ?>&nbsp;</td>
	    </tr>
		<tr>
		<td><b>Telina si derivate</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['telina']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['telinaZ']; ?>&nbsp;</td>
	    </tr>
		<tr class="altrowdl">
		<td><b>Mustar si derivate</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['mustar']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['mustarZ']; ?>&nbsp;</td>
	    </tr>
		<tr>
		<td><b>Seminte de susan si derivate</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['susan']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['susanZ']; ?>&nbsp;</td>
		</tr>
        <tr class="altrowdl">
        <td><b>Lupin si derivate</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['lupin']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['lupinZ']; ?>&nbsp;</td>
		</tr>
		<tr>
		<td><b>Moluste si derivate</b></td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['moluste']; ?>&nbsp;</td>
		<td><?php echo $ingredientAlergen['IngredientAlergen']['molusteZ']; ?>&nbsp;</td>
		</tr>
		
		
		<tr class="altrowdl">
		<td><b>Dioxid de sulf si sulfiti la concentratii<br/>
												mai mari de 10 mg/kg sau 10 mg/litru<br/>
												exprimate ca SO2</b>
												
	</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['dioxidSulf']; ?>
			&nbsp;
		</td>
		<td>
			<?php echo $ingredientAlergen['IngredientAlergen']['dioxidSulfZ']; ?>
			&nbsp;
		</td>
		
	</tr>
	</table>
<br/><br/><br/>
	
</div>
<? }else {echo '<br/><br/>Nu au fost introduse date<br/><br/><br/><br/>';}?>
