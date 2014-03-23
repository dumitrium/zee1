<span class="actions">
	<?php echo $html->link(__('Editeaza Produs', true), array('action'=>'edit', $product['Product']['id']),array('class'=>'btn')); ?>&nbsp;|&nbsp;
		<?php echo $html->link(__('Sterge Produs', true), array('action'=>'delete', $product['Product']['id']), array('class'=>'btn'), sprintf(__('Esti sigur(a) ca vrei sa stergi produsul # %s?', true), $product['Product']['id'])); ?> &nbsp;|&nbsp;
		<?php echo $html->link(__('Lista Produse', true), array('action'=>'index'),array('class'=>'btn')); ?> &nbsp;|&nbsp;
        <?php echo $html->link(__('Ingredienti produs',true),array('controller'=>'product_retetas','action'=>'ingredi',$product['Product']['id']),array('class'=>'btn'), null, false);?>
		&nbsp;|&nbsp;<?
		echo $html->link(__('Vizualizare reteta produs',true), array('controller'=>'product_retetas','action'=>'add', 
		$product['Product']['id']),array('class'=>'btn'), null, false);?>&nbsp;|&nbsp;<?
		
		echo $html->link($html->image('pdf7.jpg'), array('action'=>'view_pdf', $product['Product']['id']), array('escape' => false, 'style'=>'vertical-align:-4px;')); ?>
</span>
	
<div id="ingredientsview" style="width:550px;border:1px solid #ccc;">
<h2>Produs&nbsp;<?php echo $product['Product']['name']; ?></h2>
	
    
    <dl><?php $i = 0; $class = '';?>
        
		<dt<?php if ($i % 2 == 0) echo $class;?>>Denumire</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['name']; ?>
			&nbsp;
		</dd>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>>ID</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['id_prod']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>>Cod reteta</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['cod']; ?>
			&nbsp;
		</dd>
         <dt<?php if ($i % 2 == 0) echo $class;?>>Revizie</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['revizie']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Data intrarii in vigoare</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['datai']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Data reviziei urmatoare</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['datar']; ?>
			&nbsp;
		</dd>
       <dt<?php if ($i % 2 == 0) echo $class;?>>Cod Specificatie tehnica</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['codsus']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Creat</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Modificat</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['modified']; ?>
			&nbsp;
		</dd>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificare'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['modificare']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('GrupaProdusului'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['grupaProdusului']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Subgrupa</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['subgrupa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Tara de origine</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['tara']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Descriere</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['descriere']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Ingrediente</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['ingrediente']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?> >Caracteristici senzoriale<br />(la 20 grade Celsius)</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?> style="margin-top:-35px;">
			Aspect : <?php echo $product['Product']['aspect']; ?><br />
        			      Culoare : <?php echo $product['Product']['culoare']; ?><br />
                          Miros : <?php echo $product['Product']['miros']; ?><br />
                           Gust : <?php echo $product['Product']['gust']; ?><br />
                           Brix : <?php echo $product['Product']['brix']; ?><br />
                          Vascozitate : <?php echo $product['Product']['vascozitate']; ?><br />
                        
                
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Parametri fizico-chimici</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['parametri']; ?>
			&nbsp;luni
		</dd>
		 
        
        
         <dt<?php if ($i % 2 == 0) echo $class;?>>Metale grele</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			As  &lt; 0.30 mg/kg<br />
            Cd &lt; 0.10 mg/kg<br />
            Pb &lt; 0.50 mg/kg<br />
            Zn &lt; 50 mg/kg<br />
            Cu &lt; 20 mg/kg<br />
            Hg &lt; 0.02 mg/kg<br />
		</dd>
        
        <dt<?php if ($i % 2 == 0) echo $class;?>>Infestare corpuri straine</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			Nu se admite prezenta insectelor si acarienilor in nici un stadiu de dezvoltare
		</dd>
         <dt<?php if ($i % 2 == 0) echo $class;?>>Ambalare si etichetare</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			Ambalare : <?php echo $product['Product']['ambalare']; ?><br />
            Etichetare : <?php echo $product['Product']['etichetare']; ?><br />
		</dd>
        
        <dt<?php if ($i % 2 == 0) echo $class;?>>Conditii de depozitare</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['condDepo']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Conditii de transport</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			 Produsul se transportă în mijloace de transport acoperite, curate, fără mirosuri străine, igienizate şi dezinfectate, ferite de orice posibilitate de poluare, degradare sau contaminare.
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Lotul</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			Este mentionat pe eticheta produsului. Numarul de lot este format din 5 cifre si 1 litera(pentru produsele fabricate in Romania).
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Utilizare intentionata</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			Produsul, in forma ca atare, nu este destinat direct consumatorului final, ci constituie un ingredient pentru alte produse fabricate.
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Termen de valabilitate </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['valabilitate']; ?>
			&nbsp;luni de la data ambalarii in conditiile de depozitare recomandate, in ambalajul sigilat
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>>Linia de productie</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['line_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observatii'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['observatii']; ?>
			&nbsp;
		</dd>
	</dl>
<br/><br/>
<h3 style="font-size:13px;">LISTA DE ALERGENI ( conform Directivelor 2003/89/EC, 2006/142/EC 2007/68/EC)</h3>
<?php echo $html->link(__('Vizualizare agenti alergeni', true), array('controller'=> 'product_retetas', 'action'=>'alergeni', $product['Product']['id']),array('class'=>'btn'), null, false); ?>


<h3 style="font-size:13px;">INFORMATII PRODUS - MODIFICARI GENETICE (mg)</h3>
<br />
Informatii produs pentru implementarea cerintelor produselor alimentare si furajelor modificate genetic conform Regulamentului 1829/2003/CE privind produsele alimentare si furajele modificate genetic si a Regulamentului 1830/2003/CE privind trasabilitatea si etichetarea organismelor modificate genetic si trasabilitatea produselor destinate alimentatiei umane sau animale, produse din organisme modificate genetic.
<br /><br />
<?php echo $html->link(__('Vizualizare modificari genetice', true), array('controller'=> 'product_retetas', 'action'=>'genetic', $product['Product']['id']),array('class'=>'btn'), null, false); ?>
<br /><br />


</div>

	
		
