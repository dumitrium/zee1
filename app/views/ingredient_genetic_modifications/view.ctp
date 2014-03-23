<div class="ingredientGeneticModifications form"><br/>	<?php 
	
	if (!isset($id)) {
echo $html->link(__('Adauga modificarile genetice pentru acest ingredient', true), array('action'=>'add', $ingred),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<?}else{
	 echo $html->link(__('Editeaza modificarile genetice pentru acest ingredient', true), array('action'=>'edit', $ingred,$ingredientGeneticModification['IngredientGeneticModification']['id']),array('class'=>'btn'), null, false); ?>&nbsp;|&nbsp;
	<?php echo $html->link(__('Sterge Modificarile genetice ale acestui ingredient', true), array('action'=>'delete', $ingredientGeneticModification['IngredientGeneticModification']['id']), array('class'=>'btn'), sprintf(__('Esti sigur(a) ca vrei sa stergi # %s?', true), $ingredientGeneticModification['IngredientGeneticModification']['id']));?>&nbsp;|&nbsp;<?}  ?>
	<?php echo $html->link(__('Vizualizare ingredient',true), array('controller'=>'ingredients','action'=>'view', 
		$ingred),array('class'=>'btn'), null, false); ?>
</div>	
	<? if (isset($id)) {?>
<div class="ingredientGeneticModifications view">
<h2> <?php echo $html->link($ingredientGeneticModification['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredientGeneticModification['Ingredient']['id'])); ?>&nbsp;- Modificari genetice</h2>
<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Data crearii</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Ultima modificare</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientGeneticModification['IngredientGeneticModification']['modified']; ?>
			&nbsp;
		</dd></dl>
<table align="left" width="900" border="1" style="border:1px solid #ccc;">
<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr bgcolor="#efedfc"><td  ><b>Sursa</b></td>
	<td><b>Ingredient</b></td>
	<td  ><b>Sub-ingredient(*)</b></td>
	<td  ><b>Origine-mg da/nu</b></td>
	<td  ><b>Daca nu,1,2,3,4(**)</b></td>
	<td  ><b>Daca 3,sursa botanica</b></td>
	<td  ><b>Daca 4,tara de origine</b></td></tr>
<tr><td><b>Soia</b>	</td>
<?php //if ($ingredientGeneticModification['IngredientGeneticModification']['soiaIngredient']=='prezent'){echo '<td bgcolor="#00FF66">Prezent';}else{ echo'<td bgcolor="#FF9999">Absent';} ?>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['soiaIngredient']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['soiaSub']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['soiaOrigine']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['soiaNu']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['soiaSursa']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['soiaTara']; ?></td></tr>
	
<tr><td><b>Porumb</b>	</td>

	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['porumbIngredient']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['porumbSub']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['porumbOrigine']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['porumbNu']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['porumbSursa']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['porumbTara']; ?></td></tr>
	
<tr><td><b>Rapita</b>	</td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['rapitaIngredient']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['rapitaSub']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['rapitaOrigine']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['rapitaNu']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['rapitaSursa']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['rapitaTara']; ?></td></tr>
	
<tr><td><b>Bumbac</b>	</td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['bumbacIngredient']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['bumbacSub']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['bumbacOrigine']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['bumbacNu']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['bumbacSursa']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['bumbacTara']; ?></td></tr>

<tr><td><b>Sfecla <br />de zahar</b>	</td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['sfeclaIngredient']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['sfeclaSub']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['sfeclaOrigine']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['sfeclaNu']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['sfeclaSursa']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['sfeclaTara']; ?></td></tr>
    
<tr><td><b>Cartofi</b>	</td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['cartofiIngredient']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['cartofiSub']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['cartofiOrigine']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['cartofiNu']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['cartofiSursa']; ?></td>
	<td><?php echo $ingredientGeneticModification['IngredientGeneticModification']['cartofiTara']; ?></td></tr>



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


<br></div><?}else {echo '<br/><br/>Nu au fost introduse date<br/><br/><br/><br/>';}?>
