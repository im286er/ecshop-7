<div class="con" style="background:#e8e8e8">
	<div style="height:3.7em;"></div>
	<header class="Header clearfix fixed">
    	<a href="javascript:history.go(-1)" class="Return"><span></span></a>
        <span class="Title"><?php echo $this->_var['title']; ?></span>
        <a href="./" class="Home"><span></span></a>
    </header>
    
    <?php if ($this->_var['goods_list']): ?>
    <div class="blank10"></div>
    <section class="ect-pro-list flow-pic ect-border-bottom0 flow_cart_list">
    	<ul>
        	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['goods']):
?>
            <li>
            	<div class="liBox">
                    <div class="pic"><a href="<?php echo url('goods/index',array('id'=>$this->_var['goods']['goods_id']));?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"></a></div>
                    <div class="infoBox">
                        <a href="<?php echo url('goods/index',array('id'=>$this->_var['goods']['goods_id']));?>">
                            <p class="tit"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['parent_id'] > 0): ?><span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span><?php endif; ?><?php if ($this->_var['goods']['is_gift'] > 0): ?><span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span><?php endif; ?></p>
                            <p class="info"><?php echo $this->_var['goods']['goods_attr']; ?></p>
                        </a>
                        <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                        <div class="input-group pull-left wrap">
                            <span class="input-group-addon" onClick="change_goods_number('1',<?php echo $this->_var['goods']['rec_id']; ?>)" >-</span>
                            <input type="hidden" id="back_number<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" />
                            <input type="text" class="form-num form-contro"  name="<?php echo $this->_var['goods']['rec_id']; ?>" id="goods_number<?php echo $this->_var['goods']['rec_id']; ?>" autocomplete="off" value="<?php echo $this->_var['goods']['goods_number']; ?>" onFocus="back_goods_number(<?php echo $this->_var['goods']['rec_id']; ?>)"  onblur="change_goods_number('2',<?php echo $this->_var['goods']['rec_id']; ?>)" />
                            <span class="input-group-addon" onClick="change_goods_number('3',<?php echo $this->_var['goods']['rec_id']; ?>)">+</span>
                        </div>
                        <?php else: ?>
                        <input type="text" class="txtnum" readonly value="<?php echo $this->_var['goods']['goods_number']; ?>"/>
                        <?php endif; ?>
                    </div>
                    <div class="priee"><p><?php echo $this->_var['goods']['goods_price']; ?></p><del><?php echo $this->_var['goods']['market_price']; ?></del><a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='<?php echo url('flow/drop_goods',array('id'=>$this->_var['goods']['rec_id']));?>';" class="delete">×</a></div>
                </div>
            </li>
        	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <?php if ($this->_var['favourable_list']): ?>
        <p class="bg-warning text-center ect-padding-tb" onClick="location.href='<?php echo url('flow/label_favourable');?>'"><?php echo $this->_var['lang']['show_favourable']; ?></p>
        <?php endif; ?>
    </section>
    <?php if ($this->_var['fittings_list']): ?>
    <div class="two-btn flow-jiesuan ect-padding-tb ect-padding-lr text-center">
    	<a class="btn btn-info" type="button" href="<?php echo url('flow/goods_fittings');?>"><?php echo $this->_var['lang']['goods_fittings']; ?></a>
        <a class="btn btn-info ect-bg-colory" type="button"  href="<?php echo url('flow/checkout');?>"><?php echo $this->_var['lang']['check_out']; ?></a>
    </div>
    <?php else: ?>
    <div class="navbarDefault">
    	<p class="plight"><i></i>100%正品保证</p>
        <div class="navCurrentBox">
        	<div class="navbarHeader">
            	<p class="totle"><?php echo $this->_var['lang']['goods_price']; ?>：<span class="price" id="goods_subtotal" ><?php echo $this->_var['total']['goods_price']; ?></span></p>
            </div>
            <div class="navbarBrand">
            	<a href="<?php echo url('flow/checkout');?>" type="button" class="Btn">抢先结算</a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if ($this->_var['linked_goods']): ?>
    <section class="ect-pro-list flow-rel-pro flow-pic">
    	<h4 class="ect-margin-lr ect-margin-tb"><strong><?php echo $this->_var['lang']['releate_goods']; ?>：</strong></h4>
        <ul>
        	<?php $_from = $this->_var['linked_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
            <li>
            	<div class="ect-clear-over">
                	<a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" /></a>
                    <dl>
                    	<dt><h4 class="title"><a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a></h4></dt>
                        <dd class="ect-color999">
                        	<p>
                            	<?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
                                <?php echo $this->_var['lang']['promote_price']; ?><strong class="ect-colory"><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?></strong>
                                <?php else: ?>
                                <?php echo $this->_var['lang']['shop_price']; ?><strong class="ect-colory"><?php echo $this->_var['releated_goods_data']['shop_price']; ?></strong>
                                <?php endif; ?>
                            </p>
                        </dd>
                    </dl>
                </div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php else: ?>
    <div class="flow-no-pro">
    	<img src="__TPL__/images/gwc.png">
        <p class="text-center"><?php echo $this->_var['lang']['empty_shopping']; ?></p>
        <a type="button" href="<?php echo url('category/all');?>" class="btn btn-info ect-btn-info"><?php echo $this->_var['lang']['go_shopping']; ?></a>
    </div>
    <?php endif; ?> 
</div>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.json.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/common.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.more.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/utils.js" ></script> 
<script src="__TPL__/js/TouchSlide.1.1.js"></script> 
<script src="__TPL__/js/ectouch.js"></script> 
<script src="__TPL__/js/simple-inheritance.min.js"></script> 
<script src="__TPL__/js/code-photoswipe-1.0.11.min.js"></script> 
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script> 
<script src="__TPL__/js/jquery.scrollUp.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/validform.js" ></script> 