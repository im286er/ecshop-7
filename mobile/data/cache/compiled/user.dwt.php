<?php echo $this->fetch('library/user_header.lbi'); ?>
<div class="user-info">
	<div class="user-img pull-left touxiang" ><img src="<?php echo $this->_var['info']['headimgurl']; ?>" style="width:5em;height:5em"></div>
    <dl class="pull-left">
    	<dt><h4><?php if ($this->_var['info']['nickname']): ?> <?php echo $this->_var['info']['nickname']; ?> <?php else: ?> <?php echo $this->_var['info']['username']; ?> <?php endif; ?></h4></dt>
        <dd>
        	<p class="valid_mark"><?php echo $this->_var['info']['integral']; ?></p>
            <p class="tointegration"><?php echo $this->_var['rank_name']; ?></p>
        </dd>
    </dl>
    <span class="pull-right" style="display:none;"><a href="<?php echo url('user/msg_list');?>" class="ect-colorf"><?php echo $this->_var['sys_notice']; ?>&nbsp;<i class="fa fa-envelope-o <?php if ($this->_var['new_msg']): ?>fa-envelope-o-sl<?php endif; ?>"></i></a></span>
</div>
<section class="container-fluid userNav">
	<ul>
    	<li><a href="<?php echo url('user/not_pay_order_list');?>"><em class="userIcon userIcon01"></em><?php echo $this->_var['lang']['not_pay_list']; ?><span></span></a></li>
        <li><a href="<?php echo url('user/order_list');?>"><em class="userIcon userIcon02"></em><?php echo $this->_var['lang']['order_list_lnk']; ?><span></span></a></li>
        <li><a href="<?php echo url('user/address_list');?>"><em class="userIcon userIcon03"></em><?php echo $this->_var['lang']['label_address']; ?><span></span></a></li>
        <li><a href="<?php echo url('user/account_detail');?>"><em class="userIcon userIcon04"></em><?php echo $this->_var['lang']['label_user_surplus']; ?><span></span></a></li>
        <li><a href="<?php echo url('user/profile');?>"><em class="userIcon userIcon05"></em><?php echo $this->_var['lang']['user_center']; ?><span></span></a></li>
        <li><a href="<?php echo url('user/edit_password');?>"><em class="userIcon userIcon06"></em><?php echo $this->_var['lang']['edit_password']; ?><span></span></a></li>
        <li><a href="<?php echo url('user/service');?>"><em class="userIcon userIcon07"></em><?php echo $this->_var['lang']['user_service']; ?><span></span></a></li>
        <li><a href="<?php echo url('user/share');?>"><em class="userIcon userIcon08"></em><?php echo $this->_var['lang']['label_share']; ?><span></span></a></li>
        <li><a href="<?php echo url('user/tag_list');?>"><em class="userIcon userIcon08"></em><?php echo $this->_var['lang']['label_tag']; ?><span></span></a></li>
        <li><a href="<?php echo url('user/bonus');?>"><em class="userIcon userIcon08"></em><?php echo $this->_var['lang']['label_bonus']; ?><span></span></a></li>
        <li><a href="<?php echo url('user/booking_list');?>"><em class="userIcon userIcon08"></em><?php echo $this->_var['lang']['label_booking']; ?><span></span></a></li>
    </ul>
</section>

<section class="user-tab ect-margin-tb ect-margin-bottom0">
	
    <ul class="nav nav-tabs text-center">
    	<li class="col-xs-4 active"><a href="#one" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['label_collection']; ?></a></li>
        <li class="col-xs-4"><a href="#two" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['label_comment']; ?></a></li>
        <li class="col-xs-4"><a href="#three" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['user_history']; ?></a></li>
    </ul>
    
    <div class="tab-content" id="gwc-tab-xq-bd">
    	<div class="tab-pane active ect-pro-list" id="one"> 
            <?php if ($this->_var['goods_list']): ?>
            <div class="blank10"></div>
            <ul>
            	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                <li>
                	<a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>"><img src="<?php echo $this->_var['val']['goods_thumb']; ?>"></a>
                    <dl>
                    	<dt><h4 class="title"><a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>"><?php echo $this->_var['val']['goods_name']; ?></a></h4></dt>
                        <dd class="dd-price"><span class="pull-left"><strong><b class="ect-colory"><?php echo $this->_var['val']['shop_price']; ?></b></strong><small class="ect-margin-lr"><del><?php echo $this->_var['val']['market_price']; ?></del></small></span></dd>
                    </dl>
                    <a href="<?php echo url('user/delete_collection', array('rec_id'=>$this->_var['val']['rec_id']));?>" class="pull-right del"><i class="glyphicon glyphicon-trash"></i></a>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <?php else: ?>
            <p class="text-center ect-margin-tb ect-padding-tb"><?php echo $this->_var['lang']['no_data']; ?></p>
            <?php endif; ?>
        </div>
        <div class="tab-pane ect-pro-list pinglun-list userContent" id="two">
        	<?php if ($this->_var['comment_list']): ?>
            <div class="blank10"></div> 
            <ul>
            	<?php $_from = $this->_var['comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                <li>
                	<dl>
                    	<dt><h4 class="title"><a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['id_value']));?>"><?php if ($this->_var['val']['comment_type'] == 0): ?><?php echo $this->_var['lang']['goods_comment']; ?><?php else: ?><?php echo $this->_var['lang']['article_comment']; ?><?php endif; ?>：<?php echo $this->_var['val']['cmt_name']; ?></a></h4></dt>
                        <dd><?php echo $this->_var['val']['content']; ?></dd>
                        <?php if ($this->_var['val']['reply_content']): ?>
                        <dd><?php echo $this->_var['lang']['reply_comment']; ?>：<?php echo $this->_var['val']['reply_content']; ?></dd>
                        <?php endif; ?>
                        <dd class="date ect-color999"><?php echo $this->_var['val']['formated_add_time']; ?></dd>
                        <dd><a href="<?php echo url('user/delete_comment',array('id'=>$this->_var[val][comment_id]));?>" class="pull-right del"><i class="glyphicon glyphicon-trash"></i></a></dd>
                    </dl>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <?php else: ?>
            <p class="text-center ect-margin-tb ect-padding-tb"><?php echo $this->_var['lang']['no_data']; ?></p>
            <?php endif; ?> 
        </div>
        <div class="tab-pane ect-pro-list userHistory" id="three"> 
            <?php if ($this->_var['history']): ?> 
            <div class="blank10"></div>
            <ul>
            	<?php $_from = $this->_var['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                <li>
                	<a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>"><img src="<?php echo $this->_var['val']['goods_thumb']; ?>"></a>
                	<dl>
                    	<dt><h4 class="title"><a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>"><?php echo $this->_var['val']['goods_name']; ?></a></h4></dt>
                        <dd class="dd-price"><span class="pull-left"><strong><b class="ect-colory"><?php echo $this->_var['val']['shop_price']; ?></b></strong><small class="ect-margin-lr"><del><?php echo $this->_var['val']['market_price']; ?></del></small></span></dd>
                    </dl>
                </li>
            	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <span class="pull-right ect-padding-lr ect-margin-tb ect-margin-bottom0"><a href="<?php echo url('user/clear_history');?>" class="history_clear del"><i class="glyphicon glyphicon-trash"></i> <?php echo $this->_var['lang']['clear_history']; ?></a></span>
            <div class="blank10"></div>
            <?php else: ?>
            <p class="text-center  ect-margin-tb ect-padding-tb"><?php echo $this->_var['lang']['not_history']; ?><a href="<?php echo url('category/index');?>" class="ect-color ect-margin-lr" style="font-size:1.3em;"><?php echo $this->_var['lang']['enter']; ?></a><?php echo $this->_var['lang']['scan_goods']; ?></p>
            <?php endif; ?> 
        </div>
    </div>
</section>
<div class="blank10"></div>
<div class="userdiv"><a href="<?php echo url('user/logout');?>" class="ect-colorf"><?php echo $this->_var['lang']['label_logout']; ?></a></div>

<?php echo $this->fetch('library/page_footer_flow.lbi'); ?>
<script type="text/javascript">
    $(function(){
        $(".del").click(function(){
            if(!confirm('您确定要删除吗？')){
                return false;
            }
            var obj = $(this);
            var url = obj.attr("href");
            $.get(url, '', function(data){
                if(1 == data.status){
                    if(obj.hasClass("history_clear")){
                        obj.closest(".ect-pro-list").html("<p class='text-center  ect-margin-tb ect-padding-tb'>暂无浏览记录，点击<a href=<?php echo url('category/index');?> class='ect-color ect-margin-lr' style='font-size:1.3em;'>进入</a>浏览商品</p>");
                        obj.parent().siblings("ul").remove();
                    } 
                    else{
                        if(obj.closest("li").siblings("li").length == 0){
                            obj.closest("ul").html("<p class='text-center  ect-margin-tb ect-padding-tb'><?php echo $this->_var['lang']['no_data']; ?></p>");
                        }
                        obj.closest("li").remove();
                    }
                }
                else{
                    alert("删除失败");
                }
            },'json');
            return false;
   		});
    })
</script> 
</body>
</html>
