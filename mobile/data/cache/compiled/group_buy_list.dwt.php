<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con" style="background:#fff;">
	<div style="height:7.6em;"></div>
	<header class="Header clearfix fixed">
    	<a href="javascript:history.go(-1)" class="Return"><span></span></a>
        <span class="Title">商品列表</span>
        <a href="./" class="Home"><span></span></a>
    </header>
    <div class="ect-wrapper text-center">
    	<div>
        	<a class="<?php if ($this->_var['sort'] == 'goods_id' && $this->_var['order'] == 'DESC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('groupbuy/index');?>&id=<?php echo $this->_var['id']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&page=<?php echo $this->_var['page']; ?>&sort=goods_id&order=DESC"><?php echo $this->_var['lang']['sort_default']; ?></a>
            <a class="<?php if ($this->_var['sort'] == 'sales_count' && $this->_var['order'] == 'DESC'): ?>select ect-colory<?php elseif ($this->_var['sort'] == 'sales_count' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('groupbuy/index');?>&id=<?php echo $this->_var['id']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&page=<?php echo $this->_var['page']; ?>&sort=sales_count&order=<?php if ($this->_var['sort'] == 'sales_count' && $this->_var['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>"><?php echo $this->_var['lang']['sort_sales']; ?> <i class="glyphicon glyphicon-arrow-up"></i></a>
            <a class="<?php if ($this->_var['sort'] == 'click_num' && $this->_var['order'] == 'DESC'): ?>select ect-colory<?php elseif ($this->_var['sort'] == 'click_num' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php else: ?><?php endif; ?>" href="<?php echo url('groupbuy/index');?>&id=<?php echo $this->_var['id']; ?>&display=<?php echo $this->_var['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=click_num&order=<?php if ($this->_var['sort'] == 'click_num' && $this->_var['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>"><?php echo $this->_var['lang']['sort_popularity']; ?> <i class="glyphicon glyphicon-arrow-up"></i></a>
            <a class="<?php if ($this->_var['sort'] == 'cur_price' && $this->_var['order'] == 'DESC'): ?>select ect-colory<?php elseif ($this->_var['sort'] == 'cur_price' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php else: ?><?php endif; ?>" href="<?php echo url('groupbuy/index');?>&id=<?php echo $this->_var['id']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&page=<?php echo $this->_var['page']; ?>&sort=cur_price&order=<?php if ($this->_var['sort'] == 'cur_price' && $this->_var['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>" class="xl"><?php echo $this->_var['lang']['sort_price']; ?> <i class="glyphicon glyphicon-arrow-up"></i></a>
        </div>
    </div>
    
    <div class="ect-margin-tb ect-pro-list ect-margin-bottom0 ect-border-bottom0 tuangouList">
    	<ul id="J_ItemList">
        	<li class="single_item"></li>
            <a href="javascript:;" class="get_more"></a> 
        </ul>
    </div>
</div>
<?php echo $this->fetch('library/page_footer_flow.lbi'); ?> 
<script type="text/javascript">
	get_asynclist("<?php echo url('groupbuy/asynclist');?>&page=<?php echo $this->_var['page']; ?>&sort=<?php echo $this->_var['sort']; ?>&order=<?php echo $this->_var['order']; ?>" , '__TPL__/images/loader.gif');
</script>
</body></html>