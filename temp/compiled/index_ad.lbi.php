 
<div id="slideBox" class="slideBox IndexAd">
    <div class="hd">
        <ul>
        	<li>•</li><li>•</li><li>•</li><li>•</li><li>•</li>
        </ul>
    </div>
    <div class="bd">
        <ul>
            <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_34333500_1501560547');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_34333500_1501560547']):
        $this->_foreach['myflash']['iteration']++;
?>
            <li style="background:url(<?php echo $this->_var['flash_0_34333500_1501560547']['src']; ?>) center 0 no-repeat;"><a href="<?php echo $this->_var['flash_0_34333500_1501560547']['url']; ?>" target="_blank"></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
    
    <a class="fbc_btn prev" href="javascript:void(0)"></a>
    <a class="fbc_btn next" href="javascript:void(0)"></a>
</div>

<script type="text/javascript">
	jQuery(".slideBox").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true,trigger:"click"});
	//
	$(".small-slider-pic").find(".Line:last").css("display", "none");
	//
	var aimg=$(".small-slider-pic").find("a");
	aimg.hover(function(){
		aimg.stop(true,false).animate({"opacity":0.7});
		$(this).stop(true,false).animate({"opacity":1});
	},function(){
		aimg.stop(true,false).animate({"opacity":1});
	});
	//
	var Xwid=$(window).width();
	var left=(Xwid-980)/2;
	$(".prev").css("left",left+5);
	$(".next").css("right",left+5);
	//
	$(".fbc_btn").hover(function(){
		$(this).stop(true,false).animate({"opacity":1});
	},function(){
		$(this).stop(true,false).animate({"opacity":0.15});
	});
	$(".IndexAd").hover(function(){
		$(this).children(".prev").stop(true,false).animate({"left":left-7,"opacity":0.15});
		$(this).children(".next").stop(true,false).animate({"right":left-7,"opacity":0.15});
	},function(){
		$(this).children(".prev").stop(true,false).animate({"left":left+7,"opacity":0});
		$(this).children(".next").stop(true,false).animate({"right":left+7,"opacity":0});
	});
</script>