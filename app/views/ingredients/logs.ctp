<h2>Istoric</h2>
<table style="border:1px solid #ccc;width:100%;margin-top:30px;">
		<tr><th>Data</th>
			<th>Descriere</th>
			<th>Modificare</th>
		
		
			</tr>
		<?$suma=0;$i=0;$k=0;
		foreach($qry as $qrys):?>
		<tr>
			<td><?echo $qrys['Log']['created'];?></td>
			<td><?echo $qrys['Log']['description'];?></td>
			<td><?echo $qrys['Log']['change'];?></td>
		
			
			
		</tr>
	
	
	
	
		<? endforeach;?>
		</table>
		