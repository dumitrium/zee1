<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Login'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['login']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['level']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['active']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('LastLogin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['lastLogin']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('RegistrationDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['registrationDate']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit User', true), array('action'=>'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete User', true), array('action'=>'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Ingredients', true), array('controller'=> 'ingredients', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Logs', true), array('controller'=> 'logs', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Log', true), array('controller'=> 'logs', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Ingredients');?></h3>
	<?php if (!empty($user['Ingredient'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modificare'); ?></th>
		<th><?php __('Furnizor'); ?></th>
		<th><?php __('Producator'); ?></th>
		<th><?php __('TaraOrigine'); ?></th>
		<th><?php __('GrupaProdusului'); ?></th>
		<th><?php __('Descriere'); ?></th>
		<th><?php __('PosibileAplicatii'); ?></th>
		<th><?php __('StadiulAutorizarii'); ?></th>
		<th><?php __('Tip'); ?></th>
		<th><?php __('Observatii'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Ingredient'] as $ingredient):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ingredient['id'];?></td>
			<td><?php echo $ingredient['user_id'];?></td>
			<td><?php echo $ingredient['name'];?></td>
			<td><?php echo $ingredient['date'];?></td>
			<td><?php echo $ingredient['created'];?></td>
			<td><?php echo $ingredient['modified'];?></td>
			<td><?php echo $ingredient['modificare'];?></td>
			<td><?php echo $ingredient['furnizor'];?></td>
			<td><?php echo $ingredient['producator'];?></td>
			<td><?php echo $ingredient['taraOrigine'];?></td>
			<td><?php echo $ingredient['grupaProdusului'];?></td>
			<td><?php echo $ingredient['descriere'];?></td>
			<td><?php echo $ingredient['posibileAplicatii'];?></td>
			<td><?php echo $ingredient['stadiulAutorizarii'];?></td>
			<td><?php echo $ingredient['tip'];?></td>
			<td><?php echo $ingredient['observatii'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'ingredients', 'action'=>'view', $ingredient['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'ingredients', 'action'=>'edit', $ingredient['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'ingredients', 'action'=>'delete', $ingredient['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Ingredient', true), array('controller'=> 'ingredients', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Logs');?></h3>
	<?php if (!empty($user['Log'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('LogAction'); ?></th>
		<th><?php __('LogIp'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Log'] as $log):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $log['id'];?></td>
			<td><?php echo $log['created'];?></td>
			<td><?php echo $log['user_id'];?></td>
			<td><?php echo $log['logAction'];?></td>
			<td><?php echo $log['logIp'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'logs', 'action'=>'view', $log['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'logs', 'action'=>'edit', $log['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'logs', 'action'=>'delete', $log['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $log['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Log', true), array('controller'=> 'logs', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Products');?></h3>
	<?php if (!empty($user['Product'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modificare'); ?></th>
		<th><?php __('Furnizor'); ?></th>
		<th><?php __('Producator'); ?></th>
		<th><?php __('TaraOrigine'); ?></th>
		<th><?php __('GrupaProdusului'); ?></th>
		<th><?php __('Descriere'); ?></th>
		<th><?php __('PosibileAplicatii'); ?></th>
		<th><?php __('StadiulAutorizarii'); ?></th>
		<th><?php __('Observatii'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Product'] as $product):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $product['id'];?></td>
			<td><?php echo $product['user_id'];?></td>
			<td><?php echo $product['name'];?></td>
			<td><?php echo $product['date'];?></td>
			<td><?php echo $product['created'];?></td>
			<td><?php echo $product['modified'];?></td>
			<td><?php echo $product['modificare'];?></td>
			<td><?php echo $product['furnizor'];?></td>
			<td><?php echo $product['producator'];?></td>
			<td><?php echo $product['taraOrigine'];?></td>
			<td><?php echo $product['grupaProdusului'];?></td>
			<td><?php echo $product['descriere'];?></td>
			<td><?php echo $product['posibileAplicatii'];?></td>
			<td><?php echo $product['stadiulAutorizarii'];?></td>
			<td><?php echo $product['observatii'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'products', 'action'=>'view', $product['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'products', 'action'=>'edit', $product['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'products', 'action'=>'delete', $product['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
