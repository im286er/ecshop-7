<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script type="text/javascript">
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>

<div id="TopTools">
	<div class="headBox">
    	<div class="TopToolsLeft f_l"></div>
        <div class="TopToolsRight f_r">
        	<ul>
            	<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jquery.SuperSlide.js')); ?>
        		<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,ecmoban_common.js')); ?>
        		<?php 
$k =array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            </ul>
        </div>
    </div>
<script type="text/javascript">            
    $(".Hover").hover(
        function () {                    
            $(this).children('.HoverCon').fadeIn(0);
			$(".Hover").addClass("On");
        },
		
        function () {
            $(this).children('.HoverCon').fadeOut(0);
			$(".Hover").removeClass("On");
        }
    );
</script>
</div>


<div class="header">
	<div class="headBody">
	<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jquery.SuperSlide.js')); ?>
	<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,ecmoban_common.js,default.js')); ?>
		<div class="headBox HeadBox">
			<div class="logo f_l"><a href="index.php" name="top"><img src="themes/weipinhui/images/logo.gif" /></a></div>




            <div class="hd_head_search">
                <div class="hd_search_form clearfix">
                    <div class="hd_search_wrap clearfix">
                    <script type="text/javascript">

                    <!--
                    function checkSearchForm()
                    {
                        if(document.getElementById('keyword').value)
                        {
                            return true;
                        }
                        else
                        {
                            alert("请输入搜索关键词！");
                            return false;
                        }
                    }
                    -->
                    </script>
                    <form name="searchForm" id="newKeywords" method="get" action="search.php" onsubmit="return checkSearchForm()">
                        <input type="text" value="" onblur="if(this.value == ''){this.value=''}" onfocus="if(this.value == ''){this.value = ''}" maxlength="100" style="color:#333333;" id="keyword" name="keywords" class="hd_input_test">
                        <button class="hd_search_btn" type="button" onclick="$('#newKeywords').submit()">搜 索</button>
                    </form>
                    </div>
                </div>
            </div>






			<div class="HeadRight f_r">
                <div class="CatBox f_r">
                	<div class="Cat f_l" id="ECS_CARTINFO"><?php 
$k =array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
                </div>
			</div>
		</div>
		<div class="HeadNavBox">
			<div class="headNav">
				<div class="LeftNav">
					<div class="subNav">
						<ul>
							<li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="current"<?php endif; ?>><a href="index.php">首页</a></li>
							<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
							<li <?php if ($this->_var['nav']['active'] == 1): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><span class="beauty_icon"><?php echo $this->_var['nav']['name']; ?></span></a></li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
        <div class="FloatNav" id="inner">
        	<div class="FloatNavBj"></div>
            <div class="FloatNavCon">
            	<a href="./" class="fsc_icon" <?php $_from = get_advlist_position_name_pc(头部悬浮logo透明图片,0,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?> style="background:url(<?php echo $this->_var['ad']['image']; ?>) no-repeat left top;" <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>></a>
                <ul class="fsc_nav">
                	<li class="on"><a href="./">首页</a></li>
                    <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
                    <li <?php if ($this->_var['nav']['active'] == 1): ?>class="on"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                
                <div class="fsc_cart">
                	<div class="fsc_cart_con">
                    	<a href="#" class="fsc_cart_title">购物车</a><a href="javascript:void(0);" class="fsc_cart_num" id="ECS_CARTINFO2"><?php 
$k =array (
  'name' => 'cart_info2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a>
                    </div>
                    <div class="fsc_cart_list"></div>
                </div>
                

            </div>
        </div>
	</div>

<script type="text/javascript">
	var obj11 = document.getElementById("inner");
	var top11 = getTop(obj11);
	var isIE6 = /msie 6/i.test(navigator.userAgent);
	$("#inner").css({"position":"fixed","top":-45+"px"});
	window.onscroll = function(){
		var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
		if (bodyScrollTop > top11){
			obj11.style.position = (isIE6) ? "absolute" : "fixed";
			obj11.style.top = (isIE6) ? bodyScrollTop + "px" : "0px";
			$("#inner").stop(true,false).animate({"top":0},300);
		} else {
			obj11.style.position = "fixed";
			$("#inner").stop(true,false).animate({"top":-45+"px"},300);
		}
	}
	function getTop(e){
		var offset = e.offsetTop;
		if(e.offsetParent != null) offset += getTop(e.offsetParent);
		return offset;
	}
</script>    

<script type="text/javascript">
	$(".All").hover(function(){
		$(this).addClass("on");
	},function(){
		$(this).removeClass("on");
	});
	//
	jQuery(".slideTxtBox").slide({delayTime:0});
</script>
</div>