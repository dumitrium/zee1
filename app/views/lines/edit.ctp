<div class="ingredientAlergens form">
&nbsp;|&nbsp; <?php 
echo $form->create('Line');?>
	<fieldset style="background:#f6f6f6;width:600px;">
 		<legend>Editeaza alergenii cross contaminare ai liniei de productie></legend><br/>
	<?php
		//echo $form->input('product_id',array('type'=>'hidden'));
		echo $form->input('id',array('type'=>'hidden'));
//		echo $form->input('date');
//		echo $form->input('modificare');
//		echo $form->input('data');
		echo $form->input('cerealeGlutenP',array('label'=>'Cereale care contin gluten(grau, secara <br/>orz, ovaz sau hibrizi) si derivate'));
		echo $form->input('crustaceeP',array('label'=>'Crustacee si derivate'));
		echo $form->input('ouaP',array('label'=>'Oua si derivate'));
		echo $form->input('pesteP',array('label'=>'Peste si derivate'));
		echo $form->input('aluneP',array('label'=>'Alune si derivate'));
		echo $form->input('soiaP',array('label'=>'Soia si derivate'));
		echo $form->input('lapteP',array('label'=>'Lapte si derivate inclusiv lactoza'));
		echo $form->input('nuciP',array('label'=>'Nuci (ex. migdale, arahide, nuci<br/>nuci braziliene,fistic) si derivate'));
		echo $form->input('telinaP',array('label'=>'Telina si derivate'));
		echo $form->input('mustarP',array('label'=>'Mustar si derivate'));
		echo $form->input('susanP',array('label'=>'Seminte de susan si derivate'));
		echo $form->input('lupinP',array('label'=>'Lupin si derivate'));
		echo $form->input('molusteP',array('label'=>'Moluste si derivate'));
		echo $form->input('dioxidSulfP',array('label'=>'Dioxid de sulf si sulfiti la concentratii<br/>
												mai mari de 10 mg/kg sau 10 mg/litru<br/>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exprimate ca SO2
												'));
	?>
	</fieldset>
<?php echo $form->end('Trimite modificarile');?>
<br/><br/>
<!--
	<ul>
		<li><?php echo $html->link(__('Sterge alergenii cross contaminare ai produsului', true), array('action'=>'delete', $form->value('IngredientAlergen.id')), null, sprintf(__('Esti sigur ca vrei sa stergi # %s?', true), $form->value('Line.id'))); ?></li>
		<li><?php //echo $html->link(__('Lista agenti alergeni pentru toate ingredientele', true), array('action'=>'index'));?></li>
		
	</ul>-->
</div>
