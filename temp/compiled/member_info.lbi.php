<?php if ($this->_var['user_info']): ?>

<li><?php echo $this->_var['lang']['welcome']; ?></li>
<li><a href="user.php"><?php echo $this->_var['user_info']['username']; ?></a></li>
<li><a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a></li>
<li><a href="mobile/">手机访问</a></li>

<?php else: ?>

<li><?php echo $this->_var['lang']['welcome']; ?></li>
<li><a href="user.php"><span class="f9">请登陆</span></a></li>
<li><a href="user.php?act=register"><span class="f9">免费注册</span></a></li>
<li><a href="mobile/">手机访问</a></li>

<?php endif; ?>

<li><a href="flow.php">购物车</a></li>
<li><a href="user.php?act=collection_list">收藏的商品</a></li>
<li><a href="user.php?act=order_list">我的订单</a></li>
<li class="Hover">
    <div class="MyXiwangTit"><a href="javascript:;">关注</a></div>
    <div class="HoverCon MyXiwangCon">
        <dl class="weibo_list_l">
        	<dd class="weixin_icon">用微信扫一扫</dd>
        	<dt <?php $_from = get_advlist_position_name_pc(微信图片,0,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_88388000_1501560556');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_88388000_1501560556']):
        $this->_foreach['index_image']['iteration']++;
?> style="background:url(<?php echo $this->_var['ad_0_88388000_1501560556']['image']; ?>) no-repeat left top #FFFFFF;" <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>></dt>
            <dd>关注官方微信</dd>
        </dl>
    </div>
</li>    