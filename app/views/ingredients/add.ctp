<div class="ingredients form">
<?php echo $form->create('Ingredient');?>
	<fieldset style="background:#f6f6f6;width:500px;">
 		<legend><?php __('Adauga ingredient nou');?></legend><br/><br/>
	<table align="left" width="416"  class="tableform">
 		<!--<tr><td width="358">ID</td><td width="42"><? echo $form->input('id_ingred', array('label'=>'','style'=>'width:100px;'));?>
 			</td></tr>-->
 		<tr><td>Cod</td><td><? echo $form->input('cod', array('label'=>'','style'=>'width:100px;'));?>
 			</td></tr>
		
	
		<tr><td>Denumirea Comerciala</td><td><? echo $form->input('name',array('label'=>'',
			
		'style'=>'width:250px;'));?></td></tr>
		<tr><td>Denumirea chimica</td><td><?echo $form->input('name2',array('label'=>'',
			
		'style'=>'width:250px;'));?></td></tr>
		
		<tr><td>Denumirea E</td><td><?echo $form->input('namee',array('label'=>'',
			
		'style'=>'width:250px;'));?></td></tr>
        <tr><td>Text etichetare</td><td><?echo $form->input('eticheta',array('label'=>'',
			
		'style'=>'width:250px;'));?></td></tr>
        
        
<?//		echo $form->input('date');
//		echo $form->input('modificare');?>
		<tr><td>Furnizor</td><td><?echo $form->input('furnizor',array('label'=>'',
			
		'style'=>'width:250px;'));?></td></tr>
		<tr><td>Producator</td><td><?echo $form->input('producator',array('label'=>'',
			
		'style'=>'width:250px;'));?></td></tr>
		<tr><td>Tara de origine</td><td><?echo $form->input('taraOrigine',array('label'=>'',
			
		'style'=>'width:250px;'));?></td></tr>
		<tr><td>Grupa ingredientului</td><td><?echo $form->input('grupaProdusului',array('label'=>'',
			
	'style'=>'width:150px;'));?></td></tr>
		<tr><td>Subgrupa ingredientului</td><td><?echo $form->input('subgrupa',array('label'=>'',
			
		'style'=>'width:250px;'));?></td></tr>
		<tr><td>Descriere</td><td><?echo $form->input('descriere',array('label'=>'',
			
		'style'=>'width:250px;'));?></td></tr>
		<tr><td>Posibile aplicatii</td><td><?echo $form->input('posibileAplicatii',array('label'=>'',
			
		'style'=>'width:250px;'));?></td></tr>
		<?//echo $form->input('stadiulAutorizarii');?>
		<tr><td><b>Stadiul Autorizarii</b></td><td>
		<?php echo $form->select('stadiulAutorizarii', array('autorizat' => 'autorizat','neautorizat'=>'neautorizat',
		'faza de testare'=>'faza de testare'),'neautorizat',array('onchange'=>'jsfunction(this);','label'=>''), false);?></td></tr>
        
        <tr><td><b>Istoric activ/inactiv</b></td><td>
		<?php echo $form->select('istoric', array('activ' => 'ACTIV','inactiv'=>'INACTIV'),'activ',array('onchange'=>'jsfunction(this);','label'=>''), false);?></td></tr>
		
	
		<tr><td>Certificari</td><td><?echo $form->input('certificari',array('label'=>'','style'=>'width:250px;'));?></td></tr>
		<tr><td>Termen de valabilitate(nr. de luni)</td><td><?echo $form->input('garantie',array('label'=>'','style'=>'width:250px;'));?></td></tr>
		<?//echo $form->input('tip');?>
	
        <?//$options = array('url' => 'update_select','update' => 'compusi');
        //echo $ajax->observeField('categories',$options);
        ?>
		<tr><td>Conditii de depozitare</td><td><?echo $form->input('condDepo',array('label'=>'','style'=>'width:250px;'));?></td></tr>
        <tr><td>Conditii de transport</td><td><?echo $form->input('condTransp',array('label'=>'','style'=>'width:250px;'));?></td></tr>
        <tr><td>Observatii</td><td><?echo $form->input('observatii',array('label'=>'','style'=>'width:250px;'));?></td></tr>
<?//		echo $form->input('Product');
//		echo $form->input('User');
	?>
	
	
	<tr><td>Tipul ingredientului</td><td>
		<?php echo $form->select('tip', array('simplu' => 'simplu','compus'=>'compus'),'simplu',array('id' =>'tip','onchange'=>'jsfunction(this);'), false);?></td></tr>
		
		
		<?//echo $form->select('Category.id', array('options'=>$categories), null, array('id' => 'categories'));?>
       
	
	
	
	
</fieldset>
<tr><td colspan="2"><?php echo $form->end('Adauga Ingredient');?></td></tr></table>
</div>

