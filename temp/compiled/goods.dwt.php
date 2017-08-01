<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" >
<link rel="icon" href="animated_favicon.gif" type="image/gif" >
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/weipinhui/MagicZoom.css" rel="stylesheet" type="text/css"/>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,left_goodslist.js')); ?>
<script>
function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'cattsel') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "cattsel";
changePrice();
}
</script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body style="background:#fcfafe;">
<?php echo $this->fetch('library/page_header.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'easydialog.min.js,magiczoom.js,miqi_goods.js,magiczoomplus.js')); ?>
<div class="block"> 
  
  <div class="content_title search_title">
    <div class="block">
      <div id="ur_here"> <?php echo $this->fetch('library/ur_here.lbi'); ?> </div>
    </div>
  </div>
  
  <div class="content_detailed">
    <div class="contentBody">
      <div class="mainBody ProductDetail" style="overflow:visible;">
        <div id="goodsInfo" class="clearfix">

            
             <div class="imgInfo">
                      <?php if ($this->_var['pictures']['0']['img_url']): ?>
    <a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" id="Zoomer" class="MagicZoomPlus" rel="selectors-effect:false;zoom-fade:true;background-opacity:70;zoom-width:450;zoom-height:450;caption-source:img:title;thumb-change:mouseover" title="">
    <img id="img_url" name="goods_img" src="<?php echo $this->_var['pictures']['0']['img_url']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" class="thumb" />
    </a>
    <?php else: ?>
    <img id="img_url" name="goods_img" src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" class="thumb" />
    <?php endif; ?>
     <div class="blank5"></div>
                 
        	<?php echo $this->fetch('library/goods_gallery.lbi'); ?>
               
            </div>
            
              <div class="textInfo">
               <div class="pi_attr_box">
                <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >          
                <?php if ($this->_var['specification']): ?>
                <div id="specification_box">
                	<div class="specification_boxCon">
                        <ul class="detail_detail catt">
                            
                            <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
                            <li style="height:auto; overflow:hidden; margin-top:10px;">
                                <div class="detail_title"><?php echo $this->_var['spec']['name']; ?>：</div>
                                <div class="detail_choose">
                                
                                <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                                
                                    <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                                    
                                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                        <a style=" text-decoration:none" <?php if ($this->_var['key'] == 0): ?> class="cattsel"<?php endif; ?> onclick="changeAtt(this)" href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" title="<?php echo $this->_var['value']['label']; ?>" ><?php echo $this->_var['value']['label']; ?>
                                        <i class="a-active"></i>
                                        <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>"  <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> /></a>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                                    <?php else: ?>
                                        <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                        <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </select>
                                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                                    <?php endif; ?>
                                
                                <?php else: ?> 
                                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                    
                                    <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                                    <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                                    <?php echo $this->_var['value']['label']; ?></label>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                                <?php endif; ?>
                                </div>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            
                        </ul>
                        <div class="blank5"></div>
                        <center style="font-size:14px;" >[<a class="f6" href="javascript:addToCartShowDiv(<?php echo $this->_var['goods']['goods_id']; ?>,1,'goodsinfo');">购买</a>]&nbsp;&nbsp;[<a class="f6" id="close_spec_box" href="javascript:void(0);">取消</a>]</center>
                    </div>
                	<div class="specification_boxBj"></div>
                </div>
                <?php endif; ?>
                
                <div class="pi_title_box clearfix">
                        <div class="pib_title">
                        <p class="pib_title_detail"><?php echo $this->_var['goods']['goods_style_name']; ?></p>
                        </div>
                 </div>
                 <div class="pi_price_box">
                      <span class="pbox_price">
                      <i class="pbox_yen">¥</i>
                      <em id="ECS_GOODS_AMOUNT"><?php if ($this->_var['goods']['promote_price'] != "￥<span>0</span>"): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></em>
                      </span>
                      <span class="pbox_off"><?php echo $this->_var['goods']['zhekou']; ?>折</span>
                      <span class="pbox_market">
                      市场价:¥
                      <del><?php echo $this->_var['goods']['market_price']; ?></del>
                      </span>
                  </div>
                                  <div id="J_proData_box" >
                    <dl class="other clearfix">
                        <dt class="other_name">编码：</dt>
                        <dd class="other_box"> 
            <?php echo $this->_var['goods']['goods_sn']; ?>
            </dd>
                    </dl>
                </div>
				
				
				
              
              


 <script language="javascript">
  function changeAtt(t,src,key) {
    
	document.getElementById('spec_value_'+src).checked='checked';
    var itemObj = document.getElementById("catt_"+key);
	var elems = itemObj.getElementsByTagName("a");


    for (i = 0; i < elems.length; i ++ )
	{
		var prefix = elems[i].name.substr(0, 7);
		if (prefix == 'spec_a_')
		{
		   elems[i].className = '';
		}
	}

	t.className = "cattsel";
	changePrice();
}
</script>
  



           <?php if ($this->_var['specification']): ?>
            <div class="propertySelect clearfix" id="propertySelect">
            <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
              <strong><?php echo $this->_var['spec']['name']; ?>：</strong>
              <div class="catt" id="catt_<?php echo $this->_var['spec_key']; ?>">
              
              <?php if ($this->_var['spec']['attr_type'] == 1): ?>
              <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
               <a class='hover <?php if ($this->_var['key'] == 0): ?>cattsel<?php endif; ?><?php if ($this->_var['value']['thumb_url']): ?> colorImg<?php endif; ?>' <?php if ($this->_var['value']['thumb_url']): ?> rev=<?php echo $this->_var['value']['img_original']; ?> rel=goodsPic <?php else: ?>href="#"<?php endif; ?> title="<?php echo $this->_var['value']['label']; ?>" style="cursor:pointer" name="spec_a_<?php echo $this->_var['value']['id']; ?>" onclick="changeAtt(this,<?php echo $this->_var['value']['id']; ?>,<?php echo $this->_var['spec_key']; ?>)">
               <p <?php if ($this->_var['value']['thumb_url']): ?>class="padd"<?php elseif ($this->_var['value']['hex_color'] != ''): ?>style="background:#<?php echo $this->_var['value']['hex_color']; ?>; height:45px; width:45px"<?php endif; ?>>
              <?php if ($this->_var['value']['thumb_url']): ?>
              <img src="<?php echo $this->_var['value']['thumb_url']; ?>" width="50" height="50" alt="<?php echo $this->_var['value']['label']; ?>">
              <?php elseif ($this->_var['value']['hex_color']): ?>
              <?php else: ?>
               <em><?php echo $this->_var['value']['label']; ?></em>
              <?php endif; ?>
              <i></i>
              </p>
             <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
              </a>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php else: ?>
              <select name="spec_<?php echo $this->_var['spec_key']; ?>">
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php endif; ?>
              <?php else: ?>
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
              <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
              <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
              <br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php endif; ?>
            </div>
            <div class="blank"></div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </div>
         <?php endif; ?>








      
              
                  
                  
                 
                
                <div class="bt_infos_r_b">
                	<span class="bt_counts">数量：</span>
                    <a onclick="buyNumber.minus()" href="javascript:;" class="minus"></a><input name="number" type="text" value="1" defaultnumber="1" onkeyup="inputOnlyNum(this, 1,999);" id="product_num" class="inp_num"><a onclick="buyNumber.plus()" href="javascript:;" class="plus"></a>
                    <div id="detail_store"><div class="center_shop_btn"> <a <?php if ($this->_var['specification']): ?>href="javascript:;"<?php else: ?>href="javascript:addToCartShowDiv(<?php echo $this->_var['goods']['goods_id']; ?>,1,'goodsinfo');"<?php endif; ?>class="Sub"></a></div></div>
					<script type="text/javascript">
                    	// add by liuguichun 2011-7-19
                    	var buyNumber = {
                    		maxNumber : 100,
                    		minNumber : 1,
							defaultNumber : function(){
								var defaultnumber = $('#product_num').attr('defaultnumber');
								defaultnumber = parseInt(defaultnumber)
								if(defaultnumber < 1){
									defaultnumber = 1;
								}
								return defaultnumber;
							},
                                                                                                        
                    		goodNumber : function(num){
                    			if(typeof(num) == 'number'){
								
                    			$('#product_num').val(num);
									changePrice();
                    			}else{
                    				return parseInt($('#product_num').val());
                    			}                                                                                
                    		},
							
                    		plus : function(){
                    			var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
                    			if(num <= buyNumber.maxNumber){
                    				buyNumber.goodNumber(num);
                    			}
                    		},
                    		minus : function(){
                    			var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
                    			if(num >= buyNumber.minNumber){
                    				buyNumber.goodNumber(num);
                    			}
                    		}                                                                                
                    	}
                    </script>
                </div>

                </form>
              </div>
              <div class="blank"></div>
              <div id="J_detailShare_wrap" class="pi_share_box">
                    <div class="car_share_box">
                          <span class="share_sns_wrap ">            <div class="bdsharebuttonbox" style="float:right;"><a href="#" class="bds_more" data-cmd="more">分享到：</a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">人人网</a></div>
            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{"bdSize":16}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></span>
                    </div>
              </div>
              
               <div id="J_safeguard_icon" class="pi_promise_box clearfix">
                    <ul class="pi_promise_list new_guest">
                    <li class="pi_promise_item item_percent">
                    <a target="_blank" href="#">100%正品</a>
                    </li>
                    <li class="pi_promise_item item_7day">
                    <a target="_blank" href="#">七天无理由放心退</a>
                    </li>
                    <li class="pi_promise_item item_free">
                    <a target="_blank" href="#">退货返运费</a>
                    </li>
                    </ul>
                </div>
                
              </div>
              
                    <input type="hidden" value="<?php echo $this->_var['goods']['goods_img']; ?>" name="goodsThumb" />

        </div>
      </div>

    </div>
    <div class="detail_middle ">
      <div class="block goodsCon clearfix"> 
        
        <div class="AreaL">
        	<?php echo $this->fetch('library/goods_youshi.lbi'); ?>
            
            
          <div class="inDetail_boxOut ">
            <DIV class="inDetail_box">
              <div class="fixed_out">
                <div class="inLeft_btn fixed" id="inner">
                	<div style="width:1000px;">
                      <ul>
                        <li class="current">商品参数</li>
                        <li>商品详情</li>
                        <li>用户评价</li>
                        <li style="display:none;"></li>
                      </ul>
                      <div class="inLeft_btn_right">
                        <span class="bt_fixed_price" id="gdp"><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span>
                        <a href="javascript:addToCartShowDiv(<?php echo $this->_var['goods']['goods_id']; ?>,1,'promotion')" class="bt_fixed_buy Sub">加入购物车</a>
                      </div>
                    </div>
                </div>
                <div class="h40" style="height:43px; display:none;"></div>
              </div>
<script type="text/javascript">
	var obj11 = document.getElementById("inner");
	var top11 = getTop(obj11);
	var isIE6 = /msie 6/i.test(navigator.userAgent);
	window.onscroll = function(){
		var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
		if (bodyScrollTop > top11){
			obj11.style.position = (isIE6) ? "absolute" : "fixed";
			obj11.style.top = (isIE6) ? bodyScrollTop + "px" : "0px";
			//$("#inner").addClass("hover");
			$("#inner").css({"width":"100%","z-index":99,"left":0,});
			$(".h40").css({"display":"block"});
			$(".inLeft_btn").find(".inLeft_btn_right").css({"display":"block"});
			$(".inLeft_btn ul").css({"border-left":"1px solid #999"});
		} else {
			obj11.style.position = "absolute";
			//$("#inner").removeClass("hover");
			$(".h40").css({"display":"none"});
			$(".inLeft_btn").find(".inLeft_btn_right").css({"display":"none"});
			$(".inLeft_btn ul").css({"border":0});
		}
	}
	function getTop(e){
		var offset = e.offsetTop;
		if(e.offsetParent != null) offset += getTop(e.offsetParent);
		return offset;
	}
</script>
              <div id="no_try_record" class="ProBox js_nn_lc_con">
              	
              	<div class="BusinessInfo ProDetailBox Propar">
					<h2 class="bt_con_title bt_con_title0">
						商品参数
					</h2>

            <ul class="format">
            <?php if ($this->_var['properties']): ?> 
                  <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?> 
                  <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                  <li style="float:left; width:33%;"><span><?php echo htmlspecialchars($this->_var['property']['name']); ?>：</span><a class="track" href="javascript:void(0);"><?php echo $this->_var['property']['value']; ?></a></li>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                  
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                  <?php endif; ?>
          </ul>
		  	<div style="clear:both"></div>
                </div>
                
                
                <div class="BusinessInfo ProDetailBox">
				
					<h2 class="bt_con_title bt_con_title1">
						商品详情
					</h2>
				
                	<?php echo $this->_var['goods']['goods_desc']; ?>
                </div>
                

                
                
                <div class="BusinessInfo ProDetailBox">
                	<h2 class="bt_con_title bt_con_title2">用户评价</h2>
                        
                  <div id="i-comment">
                    <div class="rate"> <strong><?php echo $this->_var['comment_percent']['haoping_percent']; ?>%</strong> <br>
                      好评度 </div>
                    <div class="percent">
                      <dl>
                        <dt>好评</dt>
                        <dd class="d1">
                          <div style="width: <?php echo $this->_var['comment_percent']['haoping_percent']; ?>%;"></div>
                        </dd>
                        <dd class="d2"> <?php echo $this->_var['comment_percent']['haoping_percent']; ?>%</dd>
                      </dl>
                      <dl>
                        <dt>中评</dt>
                        <dd class="d1">
                          <div style="width: <?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%;"></div>
                        </dd>
                        <dd class="d2"> <?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%</dd>
                      </dl>
                      <dl>
                        <dt>差评</dt>
                        <dd class="d1">
                          <div style="width: <?php echo $this->_var['comment_percent']['chaping_percent']; ?>%;"></div>
                        </dd>
                        <dd class="d2"> <?php echo $this->_var['comment_percent']['chaping_percent']; ?>%</dd>
                      </dl>
                    </div>
                    <div class="btns">
                      <a href="javascript:void(0);" class="btn-comment" id="showcommentform">我要评价</a> </div>
                    <div class="clear"></div>
                  </div>
                  
                  <div class="comment_body " > <?php echo $this->fetch('library/comments.lbi'); ?> </div>
                </div>
                
              </div>
            </DIV>
          </div>
          <div class="blank"></div>
           
            
    </div>
         
        
        
        <div class="AreaR" style=" overflow:hidden">
        	
<?php echo $this->fetch('library/bought_goods.lbi'); ?>

		
        <?php echo $this->fetch('library/recommend_best_goods.lbi'); ?>
        
        
<?php echo $this->fetch('library/history.lbi'); ?>


        <script type="text/javascript">
        	$(".BoughtGoods").each(function(){
				$(this).find("li:last").css({"border":0});
				$(this).find("dl:last").css({"border":0});
			});
        </script>
        </div>
         
      </div>
    </div>
  </div>
  <div class="blank5"></div>
</div>
<div class="footer">
  <div class="footerBody"><?php echo $this->fetch('library/page_footer.lbi'); ?></div>
</div>
<div class="sucess_joinCart" id="addtocartdialog_retui_<?php echo $this->_var['goods']['goods_id']; ?>_promotion"></div>
</body>
<script type="text/javascript">

var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
	   document.getElementById('gdp').innerHTML = res.result;
  }
}

</script>


</html>
