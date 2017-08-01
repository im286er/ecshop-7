
<div class="searchRight_title">
  <div class="rightTitle_left">
    <form method="GET" class="sort" name="listform">
    <div class="f_l ProFilter" style="display:block;">
    	<a href="javascript:;" style="display:none;" onClick="javascript:display_mode('list')"><img src="themes/weipinhui/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a>
        <a href="javascript:;" style="display:none;" onClick="javascript:display_mode('grid')"><img src="themes/weipinhui/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a>
        <a href="javascript:;" style="display:none;" onClick="javascript:display_mode('text')"><img src="themes/weipinhui/images/display_mode_text<?php if ($this->_var['pager']['display'] == 'text'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['text']; ?>"></a>
        
        <a style="display:block;" class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>Sort Active<?php else: ?>Sort<?php endif; ?>" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>">综合</span></a> 
		<a style="display:block;" class="<?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>Sort Active<?php else: ?>Sort<?php endif; ?>" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>">销量</a>
        <a style="display:block;" class="<?php if ($this->_var['pager']['sort'] == 'last_update'): ?>Sort Active<?php else: ?>Sort<?php endif; ?>" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>">最新</a>
        <a style="display:block;" class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>Sort Active<?php else: ?>Sort<?php endif; ?>" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>">价格</a> 
    </div>

    </form>
    <div class="Next-pre" style="display:none;">
    	<span><label><?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?><?php echo $this->_var['key']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> / <?php echo $this->_var['pager']['page_count']; ?></label></span>
        <?php if ($this->_var['pager']['page_prev']): ?><a href="<?php echo $this->_var['pager']['page_prev']; ?>#goods_list" id="" class="color_zc"><span>&lt;&lt;</span><?php echo $this->_var['lang']['page_prev']; ?></a><?php endif; ?>
        <?php if ($this->_var['pager']['page_next']): ?><a id="" class="color_zc" href="<?php echo $this->_var['pager']['page_next']; ?>#goods_list"><?php echo $this->_var['lang']['page_next']; ?><span>&gt;&gt;</span></a><?php endif; ?>
    </div>
  </div>
</div>
<div class="h39" style="height:39px; display:none;"></div>

<form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <div class="searchRight_body product_list pb30">
        <ul class="y_searchList clearfix" >
        	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?> 
            <?php if ($this->_var['goods']['goods_id']): ?>
            <li class="gItem_<?php echo $this->_var['goods']['goods_id']; ?>" <?php if (($this->_foreach['goods_list']['iteration'] - 1) % 3 == 2): ?> style="margin-right:0;"<?php endif; ?>>
            	<div class="pro_item_img">
                	<a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" width="320" height="320"></a>
                    <?php if ($this->_var['goods']['promote_price']): ?><p class="pro_item_count timeBox" showday="show" value="<?php echo $this->_var['goods']['end_date']; ?>"></p> <?php endif; ?>
                </div>
                <div class="pro_item_tit"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><span><?php echo $this->_var['goods']['zhekou']; ?>折</span>/ <?php echo htmlspecialchars($this->_var['goods']['name']); ?></a></div>
                <div class="pro_item_info">
                	<div class="pro_item_info_L">
                    	<?php if ($this->_var['goods']['promote_price']): ?>
                        <?php echo $this->_var['goods']['promote_price']; ?>
                        <?php else: ?>
                        <?php echo $this->_var['goods']['shop_price']; ?>
                        <?php endif; ?>
                    </div>
                    <div class="pro_item_info_C">
                    	<span class="icon_dscnt"><i class="icon_dscnt_l"></i><em class="icon_dscnt_m">立省：¥<?php echo $this->_var['goods']['jiesheng']; ?></em><i class="icon_dscnt_r"></i></span>
                        <del><?php echo $this->_var['goods']['market_price']; ?></del>
                    </div>
                    <div class="pro_item_info_R">
                    	<span class="pro_item_count_person"><em><?php echo $this->_var['goods']['sales_volume']; ?>人</em>已购买</span>
                        <a href="javascript:addToCartShowDiv(<?php echo $this->_var['goods']['goods_id']; ?>,1,'goodsList')" class="Addcart Sub"></a>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $this->_var['goods']['goods_thumb']; ?>" name="goodsThumb" />
            </li>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
</form>

<script type="text/javascript">
		$(".y_searchList li").hover(function(){
			$(this).find(".Addcart").css({"display":"block"});
			$(this).find(".pro_item_count").stop(true,false).animate({"bottom":0},300);
		},function(){
			$(this).find(".Addcart").css({"display":"none"});
			$(this).find(".pro_item_count").animate({"bottom":-22+"px"},200);
		});
</script>

<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>