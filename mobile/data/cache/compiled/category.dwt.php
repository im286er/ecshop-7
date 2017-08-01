<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con" style="background:#fff;">
	<div style="height:7.6em;"></div>
	<header class="Header clearfix fixed">
    	<a href="javascript:history.go(-1)" class="Return"><span></span></a>
        <span class="Title">商品列表</span>
        <a href="./" class="Home"><span></span></a>
    </header>
    <?php echo $this->fetch('library/goods_list.lbi'); ?>
    <div class="blank10"></div>
</div>
<footer>
    	<nav class="ect-nav"><?php echo $this->fetch('library/page_menu.lbi'); ?></nav>
    </footer>
<div style="padding-bottom:4.2em;"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript">
	get_asynclist('<?php echo url('category/asynclist');?>&id=<?php echo $this->_var['id']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['page']; ?>&sort=<?php echo $this->_var['sort']; ?>&order=<?php echo $this->_var['order']; ?>&keywords=<?php echo $this->_var['keywords']; ?>' , '__TPL__/images/loader.gif');

$(function(){
	var a=$(".ect-wrapper")
	a.find(".Click").click(function(){
		if( $(this).next().css("display")=="none" ){
			a.find("div").hide();
			a.find(".Click").removeClass("on");
			$(this).addClass("on").next().show();
		}else{
			a.find("div").hide();
			a.find(".Click").removeClass("on");
		};
	});
});
</script>
</body>
</html>