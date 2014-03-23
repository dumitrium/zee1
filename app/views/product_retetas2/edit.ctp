<div class="productRetetas form">
<?php echo $form->create('ProductReteta');?>
	<fieldset>
 		<legend>Editeaza reteta produs</legend>

	<?php
	//	echo $form->input('product_id',array('type'=>'hidden','value'=>$prod));?>
	
		<table><!--<tr><td>Nr.</td>
			<td><? echo $form->input('ingredient_id',array('label'=>'','class'=>'formscurt'));?></td>
		<td><? echo $form->input('procent',array('label'=>'','class'=>'formscurt'));?></td>
		<td>%</td>
		<td><? echo $form->input('text');?></td>
	</tr>-->
	
	

<? for($i=0;$i<20;$i++){?>
	<tr><td><? echo $i.'.';?></td>
		<td>Ingredient:
		<td><?echo $form->select('ingredient_id'.$i, array('ingrediente'=>$ingredients), $form->value('ProductReteta.ingredient_id'.$i), array('style'=>'width:150px;background-color:#ffc;border: 1px solid #999;vertical-align:middle;','label'=>''));?>
		
		</td>
		<td>Procent
		<td><? echo $form->input('procent'.$i,array('label'=>'','style'=>'width:50px;height:14px;border: 1px solid #999;vertical-align:middle;','id'=>''));?></td><td>%</td>
		<td>Descriere</td>
		<td><? echo $form->input('text'.$i,array('label'=>'','style'=>'width:250px;height:14px;border: 1px solid #999;vertical-align:middle;'));?></td></tr>
	
	</fieldset><?}?>
</table>
<?php echo $form->end('Editeaza reteta');?>
</div>











<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('ProductReteta.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ProductReteta.id'))); ?></li>
		<li><?php echo $html->link(__('List ProductRetetas', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
	</ul>
</div>
