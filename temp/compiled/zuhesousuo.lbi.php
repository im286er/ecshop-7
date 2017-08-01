
<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
<div id="small-nav">
	<?php if ($this->_var['brands']['1']): ?>
	<div id="brand" class="f_l where">
    	<div class="first"><?php echo $this->_var['lang']['brand']; ?></div>
        <ul id="brand-text">
            <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?> 
            <?php if ($this->_var['brand']['selected']): ?>
            <li><span><?php echo $this->_var['brand']['brand_name']; ?></span></li>
            <?php else: ?>
            <li><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></li>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <div class="filter_more"><a href="javascript:;" class="where-more f_r brand_where"><span>更多</span><i></i></a></div>
    </div>
    <?php endif; ?>
    
    <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_85887900_1501560556');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_85887900_1501560556']):
?>
    <div class="f-l where">
    	<div class="first"><?php echo htmlspecialchars($this->_var['filter_attr_0_85887900_1501560556']['filter_attr_name']); ?></div>
        <ul class="where-ul">
            <?php $_from = $this->_var['filter_attr_0_85887900_1501560556']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?> 
            <?php if ($this->_var['attr']['selected']): ?>
            <li><span><?php echo $this->_var['attr']['attr_value']; ?></span></li>
            <?php else: ?>
            <li><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a> </li>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <div class="filter_more"><a href="javascript:;" class="where-more f_r brand_where"><span>更多</span><i></i></a></div>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
    <?php if ($this->_var['price_grade']['1']): ?>
    <div class="f-l where">
    	<div class="first"><?php echo $this->_var['lang']['price']; ?></div>
        <ul class="where-ul">
            <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?> 
            <?php if ($this->_var['grade']['selected']): ?>
            <li><span><?php echo $this->_var['grade']['price_range']; ?></span></li>
            <?php else: ?>
            <li><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></li>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <div class="filter_more"><a href="javascript:;" class="where-more f_r brand_where"><span>更多</span><i></i></a></div>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>



<!--<div id="more_options">
    <div id="mo_bg"></div>
    <a href="javascript:;" id="mo_bt">更多选项<i id="mo_op"></i></a>
</div>-->

<script type="text/javascript">
$(function(){
	
	$(".filter_more").each(function(){
		var parent=$(this).parent(".where");
		var h1=parent.css("height");
		parent.css({height:"auto"});
		var h2=parent.outerHeight();
		parent.css({height:h1});
		var done=false;
		var ul=$(this).parent(".where").find("ul").height();
		if(ul<=parseInt(h1)){
			$(this).hide();	
		}
		$(this).click(function(){
			var h3=parent.css("height");
			
			if(!done){
				done=!done;
				parent.stop().animate({height:h2-10});
				$(this).find("span").text("收缩");
				$(this).find("i").css("background-position","0 -71px");
			}else{
				done=!done;
				parent.stop().animate({height:h1});
				$(this).find("span").text("更多");
				$(this).find("i").css("background-position","0 -65px");
			}
		});
	});
	/*
	(function(){
		var fn=function(){
			var len=$(".where").length;
			if(len<=5){
				$("#mo_bt").hide();
			}
			for(var i=len-1;i>4;i--){
				$(".where").eq(i).hide();
			}
		}
		fn();
		var done=false;
		$("#mo_bt").click(function(){
			if(!done){
				$(".where").show();
				done=!done;
				$(this).html("精简选项"+"<i id='mo_up'></i>");
			}else{
				fn();
				done=!done;
				$(this).html("更多选项"+"<i id='mo_op'></i>");
			}
		});
	})();
	*/
	//
	$("#small-nav .where:last").css("border-bottom","0");
});

     </script>