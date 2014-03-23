<?php echo $form->create(null, array('type' => 'get', 'action' => 'index', 'style'=>'width:280px;height:18px;', 'align'=>'right', 'id'=>'', 'class'=>'')); ?>

 <?php 
 $q = isset($this->params['named']['q']) ? $this->params['named']['q'] : null;
?>
 <input name="q" type="text" value="" length="20" style="width:140px;height:13px;vertical-align:middle;" id="<?=$q?>" />&nbsp
 
<input type="submit" style="background-image: url('../img/1.gif');font-size:11px;vertical-align:middle;width:100px;" id="" class="btn" value="cauta ingredient"/>	</form>
 
