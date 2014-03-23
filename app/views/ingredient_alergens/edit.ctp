<div style="width:570px; ">
&nbsp;|&nbsp; <?php echo $html->link(__('Vizualizare ingredient',true), array('controller'=>'ingredients','action'=>'view', 
		$ingred),array('class'=>'btn'), null, false);echo'&nbsp;|&nbsp';echo $html->link(__('Sterge agentii alergeni', true), 
array('action'=>'delete', $form->value('IngredientAlergen.id')), array('class'=>'btn'), 
sprintf(__('Esti sigur ca vrei sa stergi # %s?', true), $form->value('IngredientAlergen.id')));echo'&nbsp;|&nbsp';
echo $form->create('IngredientAlergen');?>
	<fieldset style="background:#f8f8f8;font-size:14px;">
 		<legend><?php
	echo $ingredients[$ingred];?> - Editeaza agentii alergeni</legend><br/>
	<?php
		echo $form->input('ingredient_id',array('type'=>'hidden'));
		echo $form->input('id',array('type'=>'hidden'));?>
<table border="1" style="border:1px solid #ccc;" class="ialergeni" width="570">
    		<tr bgcolor="#efedfc" ><td>Denumire</td><td >Agentii alergeni</td><td >Alergeni cross contaminare</td></tr>

		<tr><td>Cereale care contin gluten(grau, secara <br/>orz, ovaz sau hibrizi) si derivate</td><td align="center"><?echo $form->input('cerealeGluten',array('label'=>''));?></td><td align="center"><?echo $form->input('cerealeGlutenZ',array('label'=>''));?></td></tr>
		<tr><td>Crustacee si derivate</td><td><? echo $form->input('crustacee',array('label'=>''));?></td><td align="center"><?echo $form->input('crustaceeZ',array('label'=>''));?></td></tr>
		<tr><td>Oua si derivate</td><td><? echo $form->input('oua',array('label'=>''));?></td><td align="center"><?echo $form->input('ouaZ',array('label'=>''));?></td></tr>
		<tr><td>Peste si derivate</td><td><? echo $form->input('peste',array('label'=>''));?></td><td align="center"><?echo $form->input('pesteZ',array('label'=>''));?></td></tr>
		<tr><td>Alune si derivate</td><td><? echo $form->input('alune',array('label'=>''));?></td><td align="center"><?echo $form->input('aluneZ',array('label'=>''));?></td></tr>
		<tr><td>Soia si derivate</td><td><? echo $form->input('soia',array('label'=>''));?></td><td align="center"><?echo $form->input('soiaZ',array('label'=>''));?></td></tr>
		<tr><td>Lapte si derivate inclusiv lactoza</td><td><? echo $form->input('lapte',array('label'=>''));?></td><td align="center"><?echo $form->input('lapteZ',array('label'=>''));?></td></tr>
		<tr><td>Nuci (ex. migdale, arahide, nuci<br/>nuci braziliene,fistic) si derivate</td><td><? echo $form->input('nuci',array('label'=>''));?></td><td align="center"><?echo $form->input('nuciZ',array('label'=>''));?></td></tr>
		<tr><td>Telina si derivate</td><td><? echo $form->input('telina',array('label'=>''));?></td><td align="center"><?echo $form->input('telinaZ',array('label'=>''));?></td></tr>
		<tr><td>Mustar si derivate</td><td><? echo $form->input('mustar',array('label'=>''));?></td><td align="center"><?echo $form->input('mustarZ',array('label'=>''));?></td></tr>
		<tr><td>Seminte de susan si derivate</td><td><? echo $form->input('susan',array('label'=>''));?></td><td align="center"><?echo $form->input('susanZ',array('label'=>''));?></td></tr>
        <tr><td>Lupin si derivate</td><td><? echo $form->input('lupin',array('label'=>''));?></td><td align="center"><?echo $form->input('lupinZ',array('label'=>''));?></td></tr>
        <tr><td>Moluste si derivate</td><td><? echo $form->input('moluste',array('label'=>''));?></td><td align="center"><?echo $form->input('molusteZ',array('label'=>''));?></td></tr>
		<tr><td>Dioxid de sulf si sulfiti la concentratii<br/>
												mai mari de 10 mg/kg sau 10 mg/litru<br/>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exprimate ca SO2</td><td><? echo $form->input('dioxidSulf',array('label'=>''));
	?></td><td align="center"><?echo $form->input('dioxidSulfZ',array('label'=>''));?></td></tr></table>
	</fieldset>
<?php echo $form->end('Trimite modificarile');?>
<br/><br/>
<!--
	<ul>
		<li><?php echo $html->link(__('Sterge agentii alergeni ai ingredientului', true), array('action'=>'delete', $form->value('IngredientAlergen.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IngredientAlergen.id'))); ?></li>
		<li><?php //echo $html->link(__('Lista agenti alergeni pentru toate ingredientele', true), array('action'=>'index'));?></li>
		
	</ul>-->
</div>
