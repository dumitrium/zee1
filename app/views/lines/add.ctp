<div class="ingredientAlergens form">
<?php echo $form->create('ProductCrossAlergen');?>
	<fieldset style="background:#f6f6f6;width:600px;">
 		<legend>Adauga alergenii cross contaminare ai produsului</legend>
 		<br/>
	<?php

    	echo $form->input('product_id',array('type'=>'hidden','value'=>$prod));
    	
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
<?php echo $form->end('Trimite');?>
</div>
<div class="actions">
	<ul>
		<li><?php //echo $html->link(__('List IngredientAlergens', true), array('action'=>'index'));?></li>
		
	</ul>
</div>
