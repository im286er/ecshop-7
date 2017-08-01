<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
<div style="height:3.7em;"></div>
	<header class="Header clearfix fixed">
    	<a href="javascript:history.go(-1)" class="Return"><span></span></a>
    </header>
    <div  style="text-align:center; margin:2em; font-size:1.3em;">
<p><?php echo $this->_var['message']['content']; ?></p>
<?php if ($this->_var['message']['url_info']): ?>
<div> 
  <?php $_from = $this->_var['message']['url_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('info', 'url');if (count($_from)):
    foreach ($_from AS $this->_var['info'] => $this->_var['url']):
?>
  <span class="p-link" style="margin-right:0.2em;"><a href="<?php echo $this->_var['url']; ?>"><?php echo $this->_var['info']; ?></a></span>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</div>
<?php endif; ?>
<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
</div>
</div>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>