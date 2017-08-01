<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
	<div style="height:3.7em;"></div>
	<header class="Header clearfix fixed">
    	<a href="javascript:history.go(-1)" class="Return"><span></span></a>
        <span class="Title">活动列表</span>
    </header>
  <div class="bran_list" id="J_ItemList" style="opacity:1;">
      <ul class="single_item">
      </ul>
    <a href="javascript:;" class="get_more"></a> </div>
</div>
<?php echo $this->fetch('library/page_footer_flow.lbi'); ?> 
<script type="text/javascript">
get_asynclist("<?php echo url('activity/asynclist');?>&page=<?php echo $this->_var['page']; ?>&sort=<?php echo $this->_var['sort']; ?>&order=<?php echo $this->_var['order']; ?>" , '__TPL__/images/loader.gif');
</script> 
<script src="__TPL__/js/TouchSlide.1.1.js"></script>
</body></html>