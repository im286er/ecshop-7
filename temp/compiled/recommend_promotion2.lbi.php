<?php if ($this->_var['promotion_goods']): ?>
<div class="NesProThree SlideTxtBox">
	<div class="hd">
    	<ul>
        	<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no']['iteration']++;
?>
            <?php if ($this->_foreach['no']['iteration'] < 4): ?>
        	<li><?php echo $this->_var['goods']['short_style_name']; ?></li>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
    <div class="bd">
    	<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no']['iteration']++;
?>
        <?php if ($this->_foreach['no']['iteration'] < 4): ?>
    	<div class="NesProThreeBox NesProImg<?php echo $this->_var['goods']['id']; ?>" >
        	<div class="NesProImg"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" width="333" height="333"></a></div>
            <div class="NesProInfo">
            	<h3 class="NesPro_tit"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a></h3>
                <div class="NesPro_price">
                	<div class="NesPro_price_on">
                    	<?php if ($this->_var['goods']['promote_price']): ?>
                        <?php echo $this->_var['goods']['promote_price']; ?>
                        <?php else: ?>
                        <?php echo $this->_var['goods']['shop_price']; ?>
                        <?php endif; ?>
                    </div>
                    <span class="icon_dscnt">
                    	<i class="icon_dscnt_l"></i>
                        <em class="icon_dscnt_m"><?php echo $this->_var['goods']['zhekou']; ?>折</em>
                        <i class="icon_dscnt_r"></i>
                    </span>
                    <p class="focus_con_off">
                    	<em class="focus_con_mprice"><?php echo $this->_var['lang']['market_prices']; ?>：<del><?php echo $this->_var['goods']['market_price']; ?></del></em>
                    	<em class="focus_con_mreduce">节省¥<?php echo $this->_var['goods']['jiesheng']; ?></em>
                    </p>
                </div>
                <div class="NesPro_buy">
                	<a href="javascript:addToCartShowDiv(<?php echo $this->_var['goods']['id']; ?>,1,'promotion2')" class="focus_con_addcart"></a>
                    <p class="pro_item_count_person"><em><?php echo $this->_var['goods']['sales_volume']; ?></em>人已购买</p>
                    <p class="s_time">
                    	<span class="s_time_icon2" showday="show" value="<?php echo $this->_var['goods']['end_date']; ?>"></span>
                    </p>
                </div>
            </div>
              <input type="hidden" value="<?php echo $this->_var['goods']['thumb']; ?>" name="goodsThumb" />
        </div>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <a class="NesProThree_btn next"></a>
    <a class="NesProThree_btn prev"></a>
    <script type="text/javascript">
    	jQuery(".SlideTxtBox").slide({effect:"left"});
		//
		$(".NesProThree_btn").stop(true,false).animate({"opacity":0.15});
		$(".NesProThree").hover(function(){
			$(".next").stop(true,false).animate({"right":0});
			$(".prev").stop(true,false).animate({"left":0});
		},function(){
			$(".next").stop(true,false).animate({"right":-55+"px","opacity":0.15});
			$(".prev").stop(true,false).animate({"left":-55+"px","opacity":0.15});
		});
		$(".NesProThree_btn").hover(function(){
			$(this).stop(true,false).animate({"opacity":1});
		},function(){
			$(this).stop(true,false).animate({"opacity":0.15});
		});
    </script>
</div>
<?php endif; ?>
