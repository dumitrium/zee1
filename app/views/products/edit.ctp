<div class="ingredients form">
<?php echo $form->create('Product');?>
	<fieldset style="background:#f7f7f7;width:500px;">
 		<legend><?php __('Editeaza Produs'); $form->value('Product.name'); ?></legend><br/><br/>
		<table align="left" width="500" style="text-align:left" border="0">
 		
 		
		<tr><td>Denumirea Produsului</td><td><? echo $form->input('name',array('label'=>'','style'=>'width:220px;'));?></td></tr>
        <tr style="background:#eeeeee;"><td width="260">Cod reteta</td><td><? echo $form->input('cod', array('label'=>'','style'=>'width:100px;'));?></td></tr>
       <tr><td width="260">Cod specificatie tehnica</td><td><? echo $form->input('codsus', array('label'=>'','style'=>'width:100px;'));?></td></tr>
        <tr><td width="260">Revizie</td><td><? echo $form->input('revizie', array('label'=>'','style'=>'width:100px;'));?></td></tr>
       <tr><td width="260">Data intrarii in vigoare</td><td><? echo $form->input('datai', array('label'=>''));?></td></tr>
       <tr><td width="260">Data reviziei urmatoare</td><td><? echo $form->input('datar', array('label'=>''));?></td></tr>
       
        <tr style="background:#eeeeee;"><td>Grupa produsului</td><td><? echo $form->input('grupaProdusului',array('label'=>'','style'=>'width:100px;'));?></td></tr>
		<tr><td>Subgrupa produsului</td><td><? echo $form->input('subgrupa',array('label'=>'','style'=>'width:100px;'));?></td></tr>
        <tr><td>Tara de origine</td><td><? echo $form->input('tara',array('label'=>'','style'=>'width:100px;'));?></td></tr>
        <tr style="background:#eeeeee;"><td>Descriere</td><td><? echo $form->input('descriere',array('label'=>'','style'=>'width:250px;height:60px;'));?></td></tr>
        <tr><td>Ingrediente</td><td><? echo $form->input('ingrediente',array('label'=>'','style'=>'width:250px;height:80px;'));?></td></tr>
        <tr style="background:#eeeeee;"><td>Caracteristici senzoriale<br />la 20 grade Celsius</td>
           <td><table cellpadding="0" cellspacing="0">    <tr ><td height="20">Aspect :</td><td><? echo $form->input('aspect', array('label'=>'','style'=>'width:150px;'));?></td></tr>
        			      <tr height="20" style="margin:0px;padding:0px;"><td height="20" style="margin:0px;padding:0px;">Culoare :</td><td height="20" style="margin:0px;padding:0px;"><? echo $form->input('culoare', array('label'=>'','style'=>'width:150px;'));?></td></tr>
                          <tr height="20" style="margin:0px;padding:0px;"><td height="20" style="margin:0px;padding:0px;">Miros :</td><td height="20" style="margin:0px;padding:0px;"><? echo $form->input('miros', array('label'=>'','style'=>'width:150px;'));?></td></tr>
                           <tr ><td height="20">Gust :</td><td><? echo $form->input('gust', array('label'=>'','style'=>'width:150px;'));?></td></tr>
                           <tr ><td height="20">Brix :</td><td><? echo $form->input('brix', array('label'=>'','style'=>'width:150px;'));?></td></tr>
                          <tr ><td height="20">Vascozitate :</td><td><? echo $form->input('vascozitate', array('label'=>'','style'=>'width:150px;'));?></td></tr>
                           <tr ><td height="20">Ph :</td><td><? echo $form->input('ph', array('label'=>'','style'=>'width:150px;'));?></td></tr>
                </table>
           </td>
         </tr>
         <tr><td>Parametri fizico-chimici</td><td><? echo $form->input('parametri',array('label'=>'','style'=>'width:250px;'));?></td></tr>
         <tr><td>Umiditate</td><td><? echo $form->input('umiditate',array('label'=>'','style'=>'width:250px;'));?></td></tr>
         <tr style="background:#eeeeee;"><td>Ambalare si etichetare</td> <td><table>
            <tr><td>Ambalare :</td><td><? echo $form->input('ambalare',array('label'=>'','style'=>'width:150px;'));?></td></tr>
           <tr><td>Etichetare :</td><td>Etichetarea se realizează în conformitate cu H.G 106/2002</td></tr>
           </table>
           </td>
           </tr>
           <tr style="background:#eeeeee;"><td>Conditii de depozitare</td><td><? echo $form->input('condDepo',array('label'=>'','style'=>'width:200px;'));?></td></tr>
           <tr><td>Conditii de transport</td><td> Produsul se transportă în mijloace de transport acoperite, curate, fără mirosuri străine, igienizate şi dezinfectate, ferite de orice posibilitate de poluare, degradare sau contaminare.<? echo $form->input('condTransp',array('label'=>'','style'=>'width:200px;;'));?></td></tr>
           <tr style="background:#eeeeee;"><td>Lotul</td><td>Este mentionat pe eticheta produsului. Numarul de lot este format din 5 cifre si o litera(pentru produsele fabricate in Romania)</td></tr>
		<? // echo $form->input('date');?>
        <tr><td>Utilizare intentionata</td><td>Produsul, in forma ca atare, nu este destinat direct consumatorului final, ci constituie un ingredient pentru alte produse fabricate.</td></tr>
		
		<tr style="background:#eeeeee;"><td>Termen de valabilitate(nr. de luni)</td><td><? echo $form->input('valabilitate',array('label'=>'','style'=>'width:100px;'));?></td></tr>
        
       <tr><td>Linia de productie</td><td>
		<?php echo $form->select('line_id', array('0' => 'nespecificata' ,'1' => 'linia_1','2' =>'linia_2' ,
		'3'=>'linia_3','4' => 'linia_4'),$form->value('Product.line_id'),array('onchange'=>'jsfunction(this);','label'=>''), false);?></td></tr>
		<tr><td>Observatii</td><td><? echo $form->input('observatii',array('label'=>'','style'=>'width:250px;'));?></td></tr>
	</fieldset>
<tr><td colspan="2"><?php echo $form->end('Editeaza Produs');?></td></tr></table>
</div>


 


