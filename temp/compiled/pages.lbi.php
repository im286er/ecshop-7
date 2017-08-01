
<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
<?php if ($this->_var['pager']['styleid'] == 0): ?>
<div id="pager">
  <?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?><?php echo $this->_var['lang']['pager_3']; ?><?php echo $this->_var['pager']['page_count']; ?><?php echo $this->_var['lang']['pager_4']; ?> <span> <a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a> </span>
    <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_86888000_1501560556');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_86888000_1501560556']):
?>
    <?php if ($this->_var['key'] == 'keywords'): ?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item_0_86888000_1501560556']); ?>" />
    <?php else: ?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_86888000_1501560556']; ?>" />
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <select name="page" id="page" onchange="selectPage(this)">
    <?php echo $this->html_options(array('options'=>$this->_var['pager']['array'],'selected'=>$this->_var['pager']['page'])); ?>
    </select>
</div>
<?php else: ?>


<?php if ($this->_var['pager']['page_count'] != 1): ?>
<div class="searchRight_paging">
	<div id="pager" class="pagebar">
		<p style="display:none;">共发现 <?php echo $this->_var['pager']['record_count']; ?>件</p>
        <div class="activity_all">
            <?php if ($this->_var['pager']['page_first']): ?><a href="<?php echo $this->_var['pager']['page_first']; ?>#goods_list"><?php echo $this->_var['lang']['page_first']; ?> ...</a><?php endif; ?>
            <?php if ($this->_var['pager']['page_prev']): ?><a class="activity_prev " href="<?php echo $this->_var['pager']['page_prev']; ?>#goods_list">&lt;&lt;<?php echo $this->_var['lang']['page_prev']; ?></a><?php endif; ?>
            <?php if ($this->_var['pager']['page_count'] != 1): ?>
            <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_86888000_1501560556');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_86888000_1501560556']):
?>
                <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
                <span class="page_now"><?php echo $this->_var['key']; ?></span>
                <?php else: ?>
                <a href="<?php echo $this->_var['item_0_86888000_1501560556']; ?>#goods_list"><?php echo $this->_var['key']; ?></a>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
    
            <?php if ($this->_var['pager']['page_next']): ?><a class="activity_next" href="<?php echo $this->_var['pager']['page_next']; ?>#goods_list"><?php echo $this->_var['lang']['page_next']; ?>&gt;&gt;</a><?php endif; ?>
            <?php if ($this->_var['pager']['page_last']): ?><a class="last" href="<?php echo $this->_var['pager']['page_last']; ?>#goods_list"><?php echo $this->_var['lang']['page_last']; ?></a><?php endif; ?>
       
      
            <?php if ($this->_var['pager']['page_kbd']): ?>
            <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_86888000_1501560556');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_86888000_1501560556']):
?>
                <?php if ($this->_var['key'] == 'keywords'): ?>
                <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item_0_86888000_1501560556']); ?>" />
                <?php else: ?>
                <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_86888000_1501560556']; ?>" />
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <kbd style="float:left; margin-left:8px; position:relative; bottom:3px;"><input type="text" name="page" onkeydown="if(event.keyCode==13)selectPage(this)" size="3" class="B_blue" /></kbd>
            <?php endif; ?>
        </div>
	</div>
</div>


<?php endif; ?>
<?php endif; ?>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
