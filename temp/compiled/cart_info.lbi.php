<div class="Cart shop_txt">
	<div class="CartTit"><a class="header_cart_title" href="flow.php">特卖会购物车</a><a class="header_cart_num" href="flow.php"><?php echo $this->_var['str']; ?></a></div>
	<?php if ($this->_var['goods']): ?>
	<div class="CartCon shopBody" id="shopBody">
		<div class="CartBox">
			<ul>
				<?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_88988100_1501560556');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_88988100_1501560556']):
        $this->_foreach['goods']['iteration']++;
?>
				<li class="shopWhite" onMouseOver="show_del(this)" onMouseOut="hide_del(this)">
					<div class="shopLi_img"><a href="<?php echo $this->_var['goods_0_88988100_1501560556']['url']; ?>" title="<?php echo $this->_var['goods_0_88988100_1501560556']['goods_name']; ?>"><img src="<?php echo $this->_var['goods_0_88988100_1501560556']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_88988100_1501560556']['goods_name']; ?>"></a></div>
					<div class="shopLi_txt"><p class="cs_list_name"><a href="<?php echo $this->_var['goods_0_88988100_1501560556']['url']; ?>" title="<?php echo $this->_var['goods_0_88988100_1501560556']['short_name']; ?>"><?php echo $this->_var['goods_0_88988100_1501560556']['short_name']; ?></a></p><p class="shopLi_pink"><?php echo $this->_var['goods_0_88988100_1501560556']['goods_attr']; ?></p></div>
                    <div class="shopLi_num"><span><?php echo $this->_var['goods_0_88988100_1501560556']['goods_price']; ?></span><span style="color:#999">×<?php echo $this->_var['goods_0_88988100_1501560556']['goods_number']; ?></span></div>
				</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			<div class="shopSet">
        		<div class="set_txt"><p>共<b><?php echo $this->_var['str']; ?></b>件商，总计¥<span class="set_gray"><?php echo $this->_var['amount']; ?></span></p></div>
            	<div class="set_btn"><a href="flow.php">去购物车结算</a></div>
        	</div>
		</div>
	</div>
	<?php else: ?>
	<div class="CartCon shopBody" id="shopBody">
		<div class="CartBox">
			<p class="shopNo">购物车内还没有商品，赶快选购吧！</p>
		</div>
	</div>
	<?php endif; ?>
</div>

<script type="text/javascript">
function deleteCartGoods(rec_id){
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res){
	if (res.error){
		alert(res.err_msg);
	}else{
		$("#ECS_CARTINFO").html(res.content);
	}
}

$(function(){
	$("#ECS_CARTINFO li.shopWhite").mouseenter(function(){
		$(this).removeClass("shopWhite");
		$(this).addClass("shopGray");
	});

	$("#ECS_CARTINFO li.shopWhite").mouseleave(function(){
		$(this).removeClass("shopGray");
		$(this).addClass("shopWhite");
	});	
})
</script>

