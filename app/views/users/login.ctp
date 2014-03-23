<?php
if ($session->check('Message.auth')):
?><div align="center"><?
$session->flash('auth');
endif;
?></div>

<div align="center" style="width:450px;margin:0 auto;">

<?php e($form->create('User', array('action'=>'login','id'=>'')));?>

<fieldset >
	<table border="0" class="login" align="center">
<tr><td><span style="font-size:16px;"><b>Autentificare:</b></span></td><td> </td></tr>
<tr><td>Utilizator</td><td><?php e($form->text('username', array('style'=>'width:120px;','id'=>'')));?></td></tr>
<tr><td>Parola</td><td><?php e($form->password('password', array('style'=>'width:120px;','id'=>'')));?></td></tr>
<tr><td><span>Tine minte parola</span></td><td><?php e($form->checkbox('remember_me', array('class'=>'bigcheck')));?></td></tr>

<tr><td colspan="2" align="center"><p><?php e($form->submit('Autentificare', array('div'=>false, 'class'=>'submitbutton')));?></p></td></tr>
</fieldset>
</table>
</div>

<?php e($form->end());?>

