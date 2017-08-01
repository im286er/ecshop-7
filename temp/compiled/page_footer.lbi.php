<div class="footTopBox">
    <?php if ($this->_var['helps']): ?>
    <div class="footTop"> 
        <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
        <?php if ($this->_foreach['no']['iteration'] < 6): ?>
        <dl>
            <dt class="Help0<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></dt>
            <dd>
                <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_87388000_1501560556');$this->_foreach['no2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no2']['total'] > 0):
    foreach ($_from AS $this->_var['item_0_87388000_1501560556']):
        $this->_foreach['no2']['iteration']++;
?>
                <?php if ($this->_foreach['no2']['iteration'] < 7): ?>
                <p><a href="<?php echo $this->_var['item_0_87388000_1501560556']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item_0_87388000_1501560556']['title']); ?>"><?php echo $this->_var['item_0_87388000_1501560556']['short_title']; ?></a></p>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dd>
        </dl>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <dl class="f_client">
        	<dt class="Help06">手机端二维码</dt>
            <?php $_from = get_advlist_position_name_pc(手机端,0,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?><dd class="qr"><img src="<?php echo $this->_var['ad']['image']; ?>" alt=""></dd> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <dd style="padding-left:18px;">访问手机端</dd>
        </dl>
        <dl class="f_client">
        	<dt class="Help07">用微信扫一扫</dt>
            <?php $_from = get_advlist_position_name_pc(微信图片,0,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?><dd class="qr"><img src="<?php echo $this->_var['ad']['image']; ?>" alt=""></dd> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
           <dd style="padding-left:18px;">关注官方微信</dd>
        </dl>
    </div>
    <?php endif; ?>
    <script type="text/javascript">
    	$(".footTop dl:last").css({"border":"0"});
    </script>
</div>

<div class="BottomNav">
	<div class="BottomNavBox">
    	<?php if ($this->_var['navigator_list']['bottom']): ?>
        <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_87388000_1501560556');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_87388000_1501560556']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
    	<a href="<?php echo $this->_var['nav_0_87388000_1501560556']['url']; ?>" <?php if ($this->_var['nav_0_87388000_1501560556']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav_0_87388000_1501560556']['name']; ?></a><span>|</span>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
    </div>
    <script type="text/javascript">
    	$(".BottomNavBox span:last").css("display","none");
    </script>
</div>

<div class="footer_txt">
  <p class="lightGrey">
<?php echo $this->_var['copyright']; ?> <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
</p>
</div>

 
<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
  <div class="box_1">
    <div class="links clearfix"> 
      <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?> 
      <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php if ($this->_var['txt_links']): ?> 
      <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?> 
      [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>] 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?> 
    </div>
  </div>
</div>
<?php endif; ?> 





<div id="bottomNav" class="box" style="display:none">
  <div class="bNavList clearfix">
    <div class="f_l"> 
      <?php if ($this->_var['navigator_list']['bottom']): ?> 
      <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_87388000_1501560556');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_87388000_1501560556']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
      <a href="<?php echo $this->_var['nav_0_87388000_1501560556']['url']; ?>" <?php if ($this->_var['nav_0_87388000_1501560556']['opennew'] == 1): ?>target="_blank"<?php endif; ?> ><?php echo $this->_var['nav_0_87388000_1501560556']['name']; ?></a> 
      <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?> 
      - 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?> 
    </div>
  </div>
</div>




<div id="footer" style="height:0; width:1px; overflow:hidden; background:none; margin:0;">
  <div class="text"> <?php echo $this->_var['copyright']; ?><br />
    <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?> 
    <?php if ($this->_var['service_phone']): ?> 
    Tel: <?php echo $this->_var['service_phone']; ?> 
    <?php endif; ?> 
    <?php if ($this->_var['service_email']): ?> 
    E-mail: <?php echo $this->_var['service_email']; ?><br />
    <?php endif; ?> 
    <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/weipinhui/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="themes/weipinhui/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
    <?php if ($this->_var['icp_number']): ?> 
    <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><br />
    <?php endif; ?> 
    <?php 
$k =array (
  'name' => 'query_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?><br />
    <br />
    <?php if ($this->_var['stats_code']): ?>
    <div align="left"><?php echo $this->_var['stats_code']; ?></div>
    <?php endif; ?>
    <div align="left"  id="rss"><a href="<?php echo $this->_var['feed_url']; ?>"><img src="themes/weipinhui/images/xml_rss2.gif" alt="rss" /></a></div>
  </div>
</div>


<div class="RightFloatNav">
	<div class="RightFloatNavBox">
    	<ul class="sbar_oper">
        	<li><a href="user.php" target="_blank"><i class="i_sbar_my"></i></a><span>个人中心</span></li>
            <li><a href="user.php" target="_blank"><i class="i_sbar_asset"></i></a><span>我的资产</span></li>
            <li><a href="user.php?act=collection_list" target="_blank"><i class="i_sbar_fav"></i></a><span>收藏商品</span></li>
            <li class="sbar_cart"><a href="flow.php" target="_blank"><i class="i_sbar_cat"></i><p class="sbar_cart_text">购物车</p><i class="i_sbar_nub" id="ECS_CARTINFO3"><?php 
$k =array (
  'name' => 'cart_info2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></i></a></li>
        </ul>
        <div class="sbar_top" id="topcontrol">
            <div class="nreturn"><a id="sider_returntop" href="#" class="s1" title="返回顶部"></a></div>
        </div>
        
        <script type="text/javascript">
        	$(".sbar_oper li").hover(function(){
				$(this).addClass("on");
				$(this).children("span").stop(true,false).animate({"right":36,"z-index":1},200);
			},function(){
				$(this).removeClass("on");
				$(this).children("span").stop(true,false).animate({"right":-90,"z-index":-1},200);
			});
			//
			var h=$(".RightFloatNavBox").height();
			$(".RightFloatNavBox").css({"margin-top":-h/2});
        </script>
    </div>
</div>


<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}

	var offset = $("#topcontrol").offset();		
	var bottom = $("#topcontrol").css("bottom");		

	$("#topcontrol #sider_returntop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});

})
</script>