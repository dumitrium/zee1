
<?php echo $form->create(null, array('type' => 'get', 'action' => 'index', 'style'=>'width:280px;height:18px;')); ?>

 <?php 
 $q = isset($this->params['named']['q']) ? $this->params['named']['q'] : null;
 //echo $form->input('q', array('label' => '', 'value' => $q, 'length' => 20, 'style'=>'width:140px;'));?>
	
 
 <input name="q" type="text" value="" length="20" style="width:140px;height:13px;vertical-align:bottom;" id="<?=$q?>" />&nbsp
 
<input type="submit" style="background-image: url('../img/1.gif');font-size:11px;vertical-align:top;width:90px;" id="" class="btn" value="cauta produs" />	</form>
 
<!--<?php echo $form->end('Cauta', array('style'=>'font-size:10px;border:0px;color:#ffffff;')); ?>-->