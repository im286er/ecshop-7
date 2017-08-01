<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con" style="background:#fff;">
	<div style="height:3.7em;"></div>
	<header class="Header clearfix fixed">
    	<a href="javascript:history.go(-1)" class="Return"><span></span></a>
        <span class="Title"><?php echo $this->_var['title']; ?></span>
    </header>

    
    <div id="focus" class="focus goods-focus ect-padding-lr ect-margin-tb">
        <div class="bd">
            <ul id="Gallery">
                <li><a href="<?php echo $this->_var['goods']['original_img']; ?>"><img src="<?php echo $this->_var['goods']['original_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></li>
                <?php if ($this->_var['pictures']): ?> 
                <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
                <?php if ($this->_foreach['no']['iteration'] > 1): ?>
                <li><a href="<?php echo $this->_var['picture']['img_url']; ?>"><img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo $this->_var['picture']['img_desc']; ?>" /></a></li>
                <?php endif; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                <?php endif; ?>
            </ul>
        </div>
        <div class="hd">
            <ul>
            </ul>
        </div>
    </div>
    
    
	<div class="goods-info ect-padding-tb">
    	<section class="ect-margin-tb ect-margin-lr goods-title">
        	<h4 class="title pull-left"><?php echo $this->_var['goods']['goods_style_name']; ?></h4>
            <span class="pull-right text-center <?php if ($this->_var['sc'] == 1): ?>ect-colory<?php endif; ?> ect-padding-lr" onClick="collect(<?php echo $this->_var['goods']['goods_id']; ?>)" id='ECS_COLLECT'> <i class="fa <?php if ($this->_var['sc'] == 1): ?>fa-heart<?php else: ?>fa-heart-o<?php endif; ?>"></i><br><?php echo $this->_var['lang']['btn_collect']; ?> </span>
        </section>
        <section class="ect-margin-tb ect-margin-lr ">
        	<p>
            	<span class="g_d_price"><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></span>
                <span class="fontstyle"><del><?php echo $this->_var['goods']['market_price']; ?></del></span>
				<?php if ($this->_var['goods']['zhekou']): ?>
                <span class="discount"><?php echo $this->_var['goods']['zhekou']; ?>折</span>
				<?php endif; ?>
				<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
                <span class="new_re_time">
                	<span class="i-icon-clock"></span>
                    <span id="leftTime"><i>00</i>00<i>00</i>时<i>00</i>分<i>00</i>秒</span>
                </span>
				<?php endif; ?>
            	<span class="blank"></span>
            </p>
            <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
            <?php if ($this->_var['item']['type'] == "snatch"): ?> 
            <!--<a title="<?php echo $this->_var['lang']['snatch']; ?>"><i class="label tbqb">夺</i> [<?php echo $this->_var['lang']['snatch']; ?>]<i class="pull-right fa fa-angle-right"></i></a>-->
            <?php elseif ($this->_var['item']['type'] == "group_buy"): ?> 
            <p class="price"><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['group_buy']; ?>"><i class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></i> [<?php echo $this->_var['lang']['group_buy']; ?>]<i class="pull-right fa fa-angle-right"></i></a></p>
            <?php elseif ($this->_var['item']['type'] == "auction"): ?> 
            <!--<a title="<?php echo $this->_var['lang']['auction']; ?>"><i class="label pm">拍卖</i> [<?php echo $this->_var['lang']['auction']; ?>]<i class="pull-right fa fa-angle-right"></i></a> -->
            <?php elseif ($this->_var['item']['type'] == "favourable"): ?> 
            
            <p class="price"><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>">
            <?php if ($this->_var['item']['act_type'] == 0): ?> 
            <i class="label mz"><?php echo $this->_var['lang']['favourable_mz']; ?></i> 
            <?php elseif ($this->_var['item']['act_type'] == 1): ?> 
            <i class="label mj"><?php echo $this->_var['lang']['favourable_mj']; ?></i> 
            <?php elseif ($this->_var['item']['act_type'] == 2): ?> 
            <i class="label zk"><?php echo $this->_var['lang']['favourable_zk']; ?></i> 
            <?php endif; ?><?php echo $this->_var['item']['act_name']; ?> <i class="pull-right fa fa-angle-right"></i></a> </p>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
            <p class="price">服务：由<?php echo C('shop_name');?>发货 支持货到付款</p>
            <p></p>
    	</section>
    
        <?php if ($this->_var['promotion']): ?>
        <section class="ect-margin-tb ect-margin-bottom0 ect-padding-tb goods-promotion ect-padding-lr " style="display:none" >
          <h5><b>本商品正在进行：</b></h5>
          <p class="ect-border-top ect-margin-tb"> 
            <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
            <?php if ($this->_var['item']['type'] == "snatch"): ?> 
            <!--<a title="<?php echo $this->_var['lang']['snatch']; ?>"><i class="label tbqb">夺</i> [<?php echo $this->_var['lang']['snatch']; ?>]<i class="pull-right fa fa-angle-right"></i></a>-->
            <?php elseif ($this->_var['item']['type'] == "group_buy"): ?> 
            <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['group_buy']; ?>"><i class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></i> [<?php echo $this->_var['lang']['group_buy']; ?>]<i class="pull-right fa fa-angle-right"></i></a> 
            <?php elseif ($this->_var['item']['type'] == "auction"): ?> 
            <!--<a title="<?php echo $this->_var['lang']['auction']; ?>"><i class="label pm">拍卖</i> [<?php echo $this->_var['lang']['auction']; ?>]<i class="pull-right fa fa-angle-right"></i></a> -->
            <?php elseif ($this->_var['item']['type'] == "favourable"): ?> 
            
            <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>"> 
            <?php if ($this->_var['item']['act_type'] == 0): ?> 
            <i class="label mz"><?php echo $this->_var['lang']['favourable_mz']; ?></i> 
            <?php elseif ($this->_var['item']['act_type'] == 1): ?> 
            <i class="label mj"><?php echo $this->_var['lang']['favourable_mj']; ?></i> 
            <?php elseif ($this->_var['item']['act_type'] == 2): ?> 
            <i class="label zk"><?php echo $this->_var['lang']['favourable_zk']; ?></i> 
            <?php endif; ?><?php echo $this->_var['item']['act_name']; ?> <i class="pull-right fa fa-angle-right"></i></a> 
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </p>
        </section>
        <?php endif; ?>
    
		<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
        	<section class="ect-padding-lr ect-padding-tb goods-option goods-promotion">
            	<div class="goods-optionc">
                	<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['spec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['spec']['iteration']++;
?>
                	<div class="goods-option-con">
                    	<span><?php echo $this->_var['spec']['name']; ?>：</span>
                    	<div class="goods-option-conr">
                        	
                            <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                            <ul>
                            	<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                            	<li><input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" /><label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?></label></li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                            </ul>
                            
                            <?php else: ?>
                            <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                            <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                            <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]</label>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                </div>
                <div class="goods-num">
                	<span class="pull-left"><?php echo $this->_var['lang']['number']; ?>：</span>
                    <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                    <div class="input-group pull-left wrap">
                    	<span class="input-group-addon sup" onClick="changePrice('1')">-</span>
                        <input type="text" class="form-contro form-num"  name="number" id="goods_number" autocomplete="off" value="1" onFocus="back_goods_number()"  onblur="changePrice('2')"/>
                        <span class="input-group-addon plus" onClick="changePrice('3')">+</span>
                    </div>
                    <?php else: ?>
                    <input type="text" class="form-contro form-num" readonly value="<?php echo $this->_var['goods']['goods_number']; ?> "/>
                    <?php endif; ?>
                </div>
                <div class="blank10"></div>
            </section>

			<div class="ect-padding-lr ect-padding-tb goods-submit navbar_fixed_bottom">
            	<div>
                	<span class="navbar_header"><a href="index.php?m=default&c=flow&a=cart"><i class="black_cart"></i><i class="num_cart" id="num_card"><?php 
$k =array (
  'name' => 'cart_info_number',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></i></a></span>
                	<a type="botton" class="btn btn-info ect-btn-info ect-colorf" href="javascript:addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>)">加入购物车</a><a href="javascript:void(0)" id="onclick_cart" style="display:none;"></a>
                </div>
            </div>
       		
            <div class="channelImg">
			<?php 
$k =array (
  'name' => 'ads',
  'id' => '4',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
               
            </div>
            
            <div class="p_detail_hd" style="display:none;">
            	<div class="Origin">
                	<div class="Oringin_wrapper"><span></span>100%正品保证，太平洋保险承保</div>
                </div>
            </div>
            
            <section class="user-tab ect-border-bottom0">
            	<div id="is-nav-tabs" style="height:3.15em; display:none;"></div>
                
                <ul class="nav nav-tabs text-center">
                	<li class="col-xs-4 active"><a href="#one" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['goods_attr']; ?></a></li>
                	<li class="col-xs-4"><a href="#two" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['goods_brief']; ?></a></li>
                    <li class="col-xs-4"><a href="#three" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['user_comment']; ?>(<?php echo $this->_var['comments']['count']; ?>)</a></li>
                </ul>
                
                <div class="tab-content">
                	<div class="tab-pane tab-att active" id="one">
                    	<p class="dc_tit">商品属性<i class="far" style='display:none;'>Property</i></p>
                        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
                            <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
                            <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                            <tr>
                                <td bgcolor="#FFFFFF" align="left" class="dc_table_tit"><?php echo htmlspecialchars($this->_var['property']['name']); ?>：</td>
                                <td bgcolor="#FFFFFF" align="left"><?php echo $this->_var['property']['value']; ?></td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </table>
                    </div>
                	<div class="tab-pane tab-info" id="two">
                    	<p class="dc_tit">商品描述<i class="far" style='display:none;'>Detail</i></p>
                    	<?php echo $this->_var['goods']['goods_desc']; ?>
                    </div>
                    <div class="tab-pane tab-msg" id="three">
                    	<p class="dc_tit">用户评论<i class="far" style='display:none;'>Comment</i></p>
                        <ul class="msg">
                            <?php echo $this->fetch('library/comments.lbi'); ?>
                        </ul>
                    </div>
                </div>
            </section>
        </form>
    </div>
    <div class="blank5"></div>
    <div class="blank10"></div>
    
    <div class="AddCartSuccess">
    	<div class="AddCartSuccess_box">
        	<div class="boxTit"><h2><i></i><?php echo C('shop_name');?>提醒您</h2><a href="javascript:;">×</a></div>
            <div class="boxCon">
            	<p>该商品已成功加入购物车了哦！</p>
                <a href="index.php?m=default&c=flow&a=cart">立即结算</a>
            </div>
        </div>
    	<div class="AddCartSuccess_back"></div>
    </div>
    
</div>
<?php echo $this->fetch('library/search.lbi'); ?>
<div class="Goods"><?php echo $this->fetch('library/page_footer.lbi'); ?></div>
<div style=" height:4.75em"></div>
<script type="text/javascript" src="__TPL__/js/lefttime.js"></script> 
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function(){Code.photoSwipe('a', '#Gallery');}, false);
GOODS_IMAGE = '<?php echo $this->_var['goods']['original_img']; ?>';
var use_how_oos = <?php echo C('use_how_oos');?>;
/*倒计时*/
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = 1;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;

function _load(){
  changePrice(2);
  fixpng();
  try {onload_leftTime(now_time);}
  catch (e) {}
}
function back_goods_number(){
 var goods_number = document.getElementById('goods_number').value;
  document.getElementById('back_number').value = goods_number;
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice(type)
{
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  if(type == 1){qty--;}
  if(type == 3){qty++;}
  if(qty <=0 ){qty=1;}
  if(!/^[0-9]*$/.test(qty)){qty = document.getElementById('back_number').value;}
  document.getElementById('goods_number').value = qty;
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  $.get('<?php echo url("goods/price");?>', {'id':goodsId,'attr':attr,'number':qty}, function(data){
    changePriceResponse(data);
  }, 'json');
}


/**
 * 接收返回的信息
 */
function changePriceResponse(res){
  if (res.err_msg.length > 0){
    alert(res.err_msg);
  } else {
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res){
  if (res.err_msg.length > 0){
    alert(res.err_msg);
  } else {
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

$(function(){
	var a=$("body").offset().left;
	$(".navbar_fixed_bottom").css({left:a});
	$(window).resize(function(){
		a=$("body").offset().left;
		$(".navbar_fixed_bottom").css({left:a});
	});
	//
	var b=$(".navbar_fixed_bottom").height();
	$(".Goods #scrollUp").css({bottom:b+10})
	//
	var AddCartSuccess_box=$(".AddCartSuccess_box");
	var boxH=$(".AddCartSuccess_box").height()/2;
	AddCartSuccess_box.css({marginTop:-boxH});
	$(".boxTit a").click(function(){
		$(this).parents(".AddCartSuccess").fadeOut(200);
	});
});

/*判断user-tab是否距顶，距顶悬浮*/
window.onload=function(){
	var nav_tabs_top = $(".user-tab").offset().top-$(".Header").height();//获取nav-tabs距离顶部的位
	var left=$("body").offset().left;
	function func_scroll(){//定义一个事件效果置
		var documentTop = $(document).scrollTop();//获取滚动条距离顶部距离
		if(nav_tabs_top <= documentTop){
			$(".user-tab").addClass("user-tab-fixed");
			$(".user-tab").find(".nav").css({left:left,top:$(".Header").height()})
			$("#is-nav-tabs").css("display","block");
		}else{
			$(".user-tab").removeClass("user-tab-fixed");
			$("#is-nav-tabs").css("display","none");		
		};
	};
	
	window.onscroll = function () {
		 func_scroll();
	}
	
	//
	var li=$(".nav-tabs li");
	var tab=$(".tab-pane");
	li.click(function(){
		var num=li.index(this);
		tab.hide();
		tab.eq(num).show();
		tab.eq(num).nextAll().show();
		var top=tab.eq(num).offset().top;
		var Top=$(".nav-tabs").height()+$(".Header").height();
		$(window).scrollTop(top-Top);
	});
	
	$(window).resize(function(){
		nav_tabs_top = $(".user-tab").offset().top-$(".Header").height();//获取nav-tabs距离顶部的位
		documentTop = $(document).scrollTop();//获取滚动条距离顶部距离
		left=$("body").offset().left;
		$(".user-tab").find(".nav").css({left:left,top:$(".Header").height()});
		if(nav_tabs_top <= documentTop){
			$(".user-tab").find(".nav").css({left:left,top:$(".Header").height()})
		};
		//
		b=$(".navbar_fixed_bottom").height();
		$(".Goods #scrollUp").css({bottom:b+10})
		//
		AddCartSuccess_box=$(".AddCartSuccess_box");
		boxH=AddCartSuccess_box.height()/2;
		AddCartSuccess_box.css({marginTop:-boxH});
		//
		top=tab.eq(num).offset().top;
		Top=$(".nav-tabs").height()+$(".Header").height();
	})
};
_load();
</script>
</body>
</html>