<div>
<div class="" id="" >
<?php echo $form->create('ProductReteta',array('style'=>'width:100%'));?>

	<fieldset style="width:650px;">
 		<legend>Adauga ingredient la reteta</legend>
		<?php
		echo $form->input('product_id',array('type'=>'hidden','value'=>$prod,'class'=>''));?>
 		<table>
		
 		<tr><td><?echo $form->input('ingredient_id',array('style'=>'width:260px;font-size:11px;'));?></td>
 		<td><?echo $form->input('procent',array('style'=>'width:40px;'));?></td>
 		<td><?echo $form->input('functia',array('label'=>'Functia','style'=>'width:180px;'));?></td>
	<td width="40" ><input type="submit" style="font-size:12px;width:60px;margin:0px;padding:0px;background:#937ed3;color:#fff;" id="" class="" value="Adauga" /></td>	
</tr></table>
<!--	
<span>&nbsp;&nbsp;<b>Daca ingredientul nu se afla in lista:</b>	
<div class="" id="">
<?php //echo $form->create('ProductReteta');?>
 	 		<?php
		//echo $form->input('product_id',array('type'=>'hidden','value'=>$prod,'class'=>''));
		//echo $form->input('ingredient_id',array('type'=>'hidden','value'=>0,'class'=>''));?>
 		<table>
		<tr><td><?//echo $form->input('faranume',array('type'=>'text','style'=>'width:115px;','label'=>'Ingredient'));?></td>
 		<td><?//echo $form->input('procent',array('style'=>'width:40px;'));?></td>
 		<td><?//echo $form->input('functia',array('label'=>'Functia','style'=>'width:200px;'));?></td>
	<td width="40" ><input type="submit" style="font-size:12px;width:60px;margin:0px;padding:0px;background:#937ed3;color:#fff;" id="" class="" value="Adauga" /></td>	
</tr></table>
	
</div>-->
</fieldset>
</div>


<div>
	<table style="border:1px solid #ccc;width:700px;margin-top:30px;">
		<tr><th>Produs</th>
			<th>Ingredient</th>
			<th>Procent</th>
			<th>Functia</th>
			<th>Editeaza</th>
			<th>Stergere</th>
			</tr>
		<?$suma=0;$i=0;$k=0;
		foreach($productRetetas as $productReteta):
		$class = null;
	if ($k++ % 2 == 0) {
		$class = ' class="result-list"';
	}
	else{
		$class = ' class="result-list2"';
	}?>
		
	
	
	<tr <?php echo $class;?>>
			<td align="center"><?php echo $html->link($productReteta['Product']['name'], array('../../products/view/'.$prod)); ?></td>
			<td align="center"><?php 
				
				if($productReteta['ProductReteta']['ingredient_id']==0){echo $productReteta['ProductReteta']['faranume'];$i++;}else{
			echo $html->link($productReteta['Ingredient']['name'], array('controller'=> 'ingredients', 'action'=>'view', $productReteta['Ingredient']['id']));$i++;} ?></td>
			<td align="center"><b><?echo $productReteta['ProductReteta']['procent'];$suma=$suma+$productReteta['ProductReteta']['procent'];?></b></td>
			
			<td align="center"><?echo $productReteta['ProductReteta']['functia'];?></td>
			<td align="center"><?php echo $html->link(__('Editeaza', true), 
array('action'=>'edit',$prod, $productReteta['ProductReteta']['id']),array('class'=>'btn')); ?> </td>
			<td align="center"><?php echo $html->link(__('Sterge', true), 
array('action'=>'delete', $prod, $productReteta['ProductReteta']['id']), array('class'=>'btn'), 
sprintf(__('Esti sigur(a) ca vrei sa stergi) # %s?', true), $productReteta['ProductReteta']['id'])); ?></td>
			
		</tr>
		<? endforeach;?>
		<tr class="" id="" style="border:0px;" bgcolor="#dddddd" height="14"><td align="center"><?php echo $html->link($pr['Product']['name'], array('../../products/view/'.$prod)); ?></td><td align="center">Nr.ingredienti :<b><?echo $i;?></b></td><td align="center">Total procent:<b style="color:<?if ($suma>100) {echo '#ff3300';}else{echo '#3300cc';}?>;">
			
		<?echo $suma;?>&nbsp;%</b></td><td></td><td align="center" colspan="2" valign="middle" class="" id="" style="margin:0px;padding:0px;">&nbsp;Genereaza .pdf&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf_prod_reteta', $prod), array('escape' => false, 'style'=>'vertical-align:middle;margin-top:7px;'));?></td></tr>
	</table>
</div>
</div>
