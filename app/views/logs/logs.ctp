<h2>Istoric Modificari</h2>
<?php  
    echo $form->create("Log",array('action' => 'logs')); ?>
    <table ><tr><td width="240" style="width:300px;padding-right:10px;"><?echo $form->select('ingredient_id',array('0'=>'Cauta istoric ingredient','Ingredienti'=>$ingredients),'Lista ingredienti',array('style'=>'width:300px;font-size:12px;'),array('label'=>'Ingredient', ));?></td>
    	<td width="100" style="width:100px;padding-right:10px;"><input type="submit" class="btn" value=" Cauta " /></td>
   <td width="240" style="width:300px;padding-right:10px;"> <?echo $form->select('product_id',array('0'=>'Cauta istoric produs','Produse'=>$products),'Lista produse',array('style'=>'width:300px;font-size:12px;'),array('label'=>'Produs', ));?></td>
    <td width="100" style="width:100px;padding-right:10px;"><input type="submit" class="btn" value=" Cauta " /></td></tr></table></form>
 

<table style="border:1px solid #ccc;width:100%;margin-top:30px;">
		<tr><th>Data</th>
			<th>Descriere</th>
			<th>Modificare</th>
		
		
			</tr>
		<?$suma=0;$i=0;$k=0;
	if($qry<>null){	foreach($qry as $qrys):?>
		<tr>
			<td><?echo $qrys['Log']['created'];?></td>
			<td><?echo $qrys['Log']['description'];?></td>
			<td><?echo $qrys['Log']['change'];?></td>
		
			
			
		</tr>
	
		<? endforeach;}?>
		</table>
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		