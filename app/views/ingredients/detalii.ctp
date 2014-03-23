<div>
&nbsp;Ingredient&nbsp;<strong><? echo $ingredient['Ingredient']['name']; ?></strong>
<dl><?php $i = 0; $class = ' class="altrowdl"';?>
<dt<?php if ($i % 2 == 0) echo $class;?>>Descriere: </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['descriere']; ?>
			&nbsp;
		</dd>
<dt<?php if ($i % 2 == 0) echo $class;?>>Posibile Aplicatii: </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['posibileAplicatii']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>>Certificari: </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['certificari']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Termen de garantie: </dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['garantie']; ?>
			&nbsp;
		</dd>
		
	<dt<?php if ($i % 2 == 0) echo $class;?>>Observatii:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['observatii']; ?>
			&nbsp;
		</dd>
		</dl>
</div>