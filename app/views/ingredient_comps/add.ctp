<div>
<div class="ingredientcomps" id="">
<?php echo $form->create('IngredientComp',array('style'=>'width:100%'));?>
	
	<fieldset style="width:770px;">
 		<legend>Adauga subingredient la ingredientul compus <?php echo $html->link( $ingr['Ingredient']['name'], array('../../ingredients/view/'.$ingred)); ?></legend>
	
 		<?php
		echo $form->input('ingredient_id',array('type'=>'hidden','value'=>$ingred,'class'=>''));?>
 		<table cellspacing="5">
		<tr><td width="260" style="width:260px;padding-right:10px;"><br>
			
			<? echo $form->select('ingred_id',array('0'=>'Lista ingredienti','Ingredienti'=>$ingredients),'Lista ingredienti',array('style'=>'width:260px;font-size:11px;'),array('label'=>'Ingredient', ));?>
			<br/><br/>
		<? echo $form->input('faranume',array('type'=>'text','style'=>'width:250px;','label'=>'Daca ingredientul nu se afla in lista'));?>
		
		</td>
 		<td><?php echo $form->input('procent',array('style'=>'width:40px;'));?></td>
 		<td><?php echo $form->input('functia',array('label'=>'Functia','style'=>'width:150px;'));?></td>
        <td><?php echo $form->input('eticheta',array('label'=>'Text Eticheta','style'=>'width:150px;'));?></td>
	<td width="40" border="0" style="border:0px;"><input type="submit" style="font-size:12px;width:60px;margin:0px;padding:0px;background:#937ed3;color:#fff;" id="" class="" value="Adauga" />
		
		
		
	</td>	
</tr></table>

</fieldset></div>




<div>
	<table style="border:1px solid #ccc;width:820px;margin-top:30px;">
		<tr><th>Ingredient compus</th>
			<th>Subingredient</th>
			<th>Procent</th>
			<th>Functia</th>
            <th>Text Eticheta</th>
			<th>Editeaza</th>
			<th>Stergere</th>
			</tr>
		<?php $suma=0;$i=0;$k=0;
		foreach($ingredientComps as $ingredientComp):
		$class = null;
	if ($k++ % 2 == 0) {
		$class = ' class="result-list"';
	}
	else{
		$class = ' class="result-list2"';
	}?>
		
	
	
	<tr <?php echo $class;?>>
			<td align="center"><?php echo $html->link( $ingr['Ingredient']['name'], array('../../ingredients/view/'.$ingred)); ?></td>
			<td align="center"><?php 
				if ($ingredientComp['IngredientComp']['ingred_id']==0){echo $ingredientComp['IngredientComp']['faranume'];$i++;}else{
			echo $html->link($ingredientComp['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $ingredientComp['Ingredient']['id']));$i++; }
			
			
			?></td>
			<td align="center"><b><?php echo $ingredientComp['IngredientComp']['procent'];$suma=$suma+$ingredientComp['IngredientComp']['procent'];?></b></td>
			
			<td align="center"><?php echo $ingredientComp['IngredientComp']['functia'];?></td>
            <td align="center"><?php echo $ingredientComp['IngredientComp']['eticheta'];?></td>
			<td align="center"><?php echo $html->link(__('Editeaza', true), 
array('action'=>'edit',$ingred , $ingredientComp['IngredientComp']['id']),array('class'=>'btn')); ?> </td>
			<td align="center"><?php echo $html->link(__('Sterge', true), 
array('action'=>'delete', $ingred, $ingredientComp['IngredientComp']['id']), array('class'=>'btn'), 
sprintf(__('Esti sigur(a) ca vrei sa stergi) # %s?', true), $ingredientComp['IngredientComp']['id'])); ?></td>
			
		</tr>
		<? endforeach;?>
		<tr class="" id="" style="border:0px;" bgcolor="#dddddd" height="14"><td align="center"><?php echo $html->link( $ingr['Ingredient']['name'], array('../../ingredients/view/'.$ingred)); ?></td><td align="center">Nr.ingredienti :<b><?php echo $i;?></b></td><td align="center">Total procent:<b style="color:<?if ($suma>100) {echo '#ff3300';}else{echo '#3300cc';}?>;">
			
		<?php echo $suma;?>&nbsp;%</b></td><td></td><td colspan="3" align="center" valign="middle" class="" id="" style="margin:0px;padding:0 0 0 0px;vertical-align:middle;margin-top:9px;">Genereaza PDF&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf', $ingred), array('escape' => false,'style'=>'vertical-align:middle;margin-top:7px;'));?></td></tr>
	</table>
	</div>

</div>


