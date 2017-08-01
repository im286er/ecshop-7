<?php if ($this->_var['bought_goods']): ?>
<div class="box BoughtGoods">
	<div class="box_1">
		<h3><span><?php echo $this->_var['lang']['shopping_and_other']; ?></span></h3>
		<div class="BoughtGoodsCon">
        	<ul>
                <?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['bought_goods_data']):
?>
                <li>
                    <a href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><img src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" width="210" height="210" /></a>
                    <p><a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a></p> 
                    <span class="price-vipshop">
                        <?php if ($this->_var['goods']['promote_price']): ?>
                        ￥<?php echo $this->_var['goods']['shop_price']; ?>
                        <?php else: ?>
                        ￥<?php echo $this->_var['goods']['seckill_price']; ?>
                        <?php endif; ?>
                    </span>
                    <span class="price-market"><?php echo $this->_var['goods']['market_price']; ?></span>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
		</div>
	</div>
</div>
<?php endif; ?>