<div class="box BoughtGoods">
	<div class="box_1">
		<h3><span>精选单品</span></h3>
		<div class="BoughtGoodsCon">
        	<ul>
                <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_42651100_1501560550');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_42651100_1501560550']):
        $this->_foreach['no1']['iteration']++;
?>
                <li>
                    <a href="<?php echo $this->_var['goods_0_42651100_1501560550']['url']; ?>"><img src="<?php echo $this->_var['goods_0_42651100_1501560550']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_42651100_1501560550']['name']); ?>" width="210" height="210" /></a>
                    <p><a href="<?php echo $this->_var['goods_0_42651100_1501560550']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_42651100_1501560550']['name']); ?>"><?php echo $this->_var['goods_0_42651100_1501560550']['short_style_name']; ?></a></p> 
                    <span class="price-vipshop">
                        <?php if ($this->_var['goods_0_42651100_1501560550']['promote_price']): ?>
                        <?php echo $this->_var['goods_0_42651100_1501560550']['promote_price']; ?>
                        <?php else: ?>
                        <?php echo $this->_var['goods_0_42651100_1501560550']['shop_price_formated']; ?>
                        <?php endif; ?>
                    </span>
                    <span class="price-market"><?php echo $this->_var['goods_0_42651100_1501560550']['market_price']; ?></span>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
		</div>
	</div>
</div>


