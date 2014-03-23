<?php echo $html->link(__('Listeaza caracteristicile tuturor produselor', true), array('action'=>'index'));?>
<div class="ingredientCaracteristics" align="left">
<?php echo $form->create('ProductCaracteristic');?>
	<fieldset style="none">
 		<legend>Adauga caracteristici produs</legend>
	<?php
echo $form->input('product_id',array('type'=>'hidden','value'=>$prod));
//		echo $form->input('ingredient_id');
//		echo $form->input('date');
//		echo $form->input('modificare');?>


<table align="left" width="600">


<!-- style="background:url('/img/bg7.gif') repeat-x;"-->
<tr><td colspan="3"  ><b>STANDARDE FIZICE/CHIMICE</b></td></tr>
		
 <tr><td width="120">Aspect</td><td colspan="2">     <?echo $form->input('aspect',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td>Culoare</td><td colspan="2">   <? echo $form->input('culoare',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td>Miros</td><td colspan="2">   	<? echo $form->input('miros',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td>gust</td><td colspan="2">   	  <? echo $form->input('gust',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td>Brix</td><td colspan="2">   	  <? echo $form->input('brix',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td>Vascozitate</td><td colspan="2"> <? echo $form->input('vascozitate',array('label'=>'','style'=>'width:200px;'));?></td></tr>
 <tr><td> Ph</td><td colspan="2">         <? echo $form->input('ph',array('label'=>'','style'=>'width:200px;'));?></td></tr>
	</table>
		
</fieldset>
<?php echo $form->end('Trimite caracteristici produs');?>
</div>












