<div class="productGeneticModifications form">
<?php echo $form->create('ProductGeneticModification');?>
	<fieldset>
 		<legend><?php __('Edit ProductGeneticModification');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('product_id');
		echo $form->input('date');
		echo $form->input('modificare');
		echo $form->input('nrProdus');
		echo $form->input('denumire');
		echo $form->input('ultimaModificare');
		echo $form->input('sursa');
		echo $form->input('ingredient');
		echo $form->input('origineMg');
		echo $form->input('faraOrigine');
		echo $form->input('sursaBotanica');
		echo $form->input('taraOrgine');
		echo $form->input('observatii');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('ProductGeneticModification.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ProductGeneticModification.id'))); ?></li>
		<li><?php echo $html->link(__('List ProductGeneticModifications', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
