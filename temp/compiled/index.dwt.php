<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
    <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
    
    <title><?php echo $this->_var['page_title']; ?></title>
    
    
    
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="animated_favicon.gif" type="image/gif" />
    <link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
    <link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
    <?php echo $this->_var['goods']['seckill_price']; ?>
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body>
    
    <?php echo $this->fetch('library/page_header_index.lbi'); ?>
    

    
    <div class="mainBody">
        <div class="IndexBanner">
            <?php echo $this->fetch('library/index_ad.lbi'); ?>
        </div>
    </div>
    

<div class='white pad-top'>
    <div class='block border-one'>
        <div class="xm-box">
            <h4 class="title">
                <span>精品推荐</span>
            </h4>
            <div class="clearfix">
            <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'best_goods_0_33433400_1501560547');if (count($_from)):
    foreach ($_from AS $this->_var['best_goods_0_33433400_1501560547']):
?>
                <div class="goodsItem">
                    <a href="<?php echo $this->_var['best_goods_0_33433400_1501560547']['url']; ?>">
                        <img src="<?php echo $this->_var['best_goods_0_33433400_1501560547']['thumb']; ?>" alt="<?php echo $this->_var['best_goods_0_33433400_1501560547']['short_style_name']; ?>" class="goodsimg">
                    </a>
                    <br>
                    <p class="f1">
                        <a href="<?php echo $this->_var['best_goods_0_33433400_1501560547']['url']; ?>" title="<?php echo $this->_var['best_goods_0_33433400_1501560547']['short_style_name']; ?>"><?php echo $this->_var['best_goods_0_33433400_1501560547']['short_style_name']; ?></a>
                    </p>
                    市场价：<font class="market">￥1199元</font> <br>
                    本店价：<font class="f1">￥999元</font>
                    <br>
                    <p style="display:none;">已有<span class="comment_num">0</span>条评论</p>
                    <i class="goods-icon" style="display:none"></i>
                    <i class="goods-icon" style="display:none">0</i>
                </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
    </div>

    <div class='block border-one margin-top'>
        <div class="xm-box">
            <h4 class="title">
                <span>新品上架</span>
            </h4>
            <div class="clearfix">
            <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'new_goods_0_33433400_1501560547');if (count($_from)):
    foreach ($_from AS $this->_var['new_goods_0_33433400_1501560547']):
?>
                <div class="goodsItem">
                    <a href="<?php echo $this->_var['new_goods_0_33433400_1501560547']['url']; ?>">
                        <img src="<?php echo $this->_var['new_goods_0_33433400_1501560547']['thumb']; ?>" alt="<?php echo $this->_var['new_goods_0_33433400_1501560547']['short_style_name']; ?>" class="goodsimg">
                    </a>
                    <br>
                    <p class="f1">
                        <a href="<?php echo $this->_var['best_goods']['url']; ?>" title="<?php echo $this->_var['new_goods_0_33433400_1501560547']['short_style_name']; ?>"><?php echo $this->_var['new_goods_0_33433400_1501560547']['short_style_name']; ?></a>
                    </p>
                    市场价：<font class="market">￥1199元</font> <br>
                    本店价：<font class="f1">￥999元</font>
                    <br>
                    <p style="display:none;">已有<span class="comment_num">0</span>条评论</p>
                    <i class="goods-icon" style="display:none"></i>
                    <i class="goods-icon" style="display:none">0</i>
                </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
    </div>

    <div class='block border-one margin-top'>
        <div class="xm-box">
            <h4 class="title">
                <span>热卖商品</span>
            </h4>
            <div class="clearfix">
            <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'hot_goods_0_33433400_1501560547');if (count($_from)):
    foreach ($_from AS $this->_var['hot_goods_0_33433400_1501560547']):
?>
                <div class="goodsItem">
                    <a href="<?php echo $this->_var['hot_goods_0_33433400_1501560547']['url']; ?>">
                        <img src="<?php echo $this->_var['hot_goods_0_33433400_1501560547']['thumb']; ?>" alt="<?php echo $this->_var['hot_goods_0_33433400_1501560547']['short_style_name']; ?>" class="goodsimg">
                    </a>
                    <br>
                    <p class="f1">
                        <a href="<?php echo $this->_var['hot_goods_0_33433400_1501560547']['url']; ?>" title="<?php echo $this->_var['hot_goods_0_33433400_1501560547']['short_style_name']; ?>"><?php echo $this->_var['hot_goods_0_33433400_1501560547']['short_style_name']; ?></a>
                    </p>
                    市场价：<font class="market">￥1199元</font> <br>
                    本店价：<font class="f1">￥999元</font>
                    <br>
                    <p style="display:none;">已有<span class="comment_num">0</span>条评论</p>
                    <i class="goods-icon" style="display:none"></i>
                    <i class="goods-icon" style="display:none">0</i>
                </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
    </div>

</div>



    
    <div class="footer">
        <div class="footerBody"><?php echo $this->fetch('library/page_footer.lbi'); ?></div>
    </div>

    <script type="text/javascript">
        <?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <?php if ($this->_var['key'] != 'button_compare'): ?>
                var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
            <?php else: ?>
                var button_compare = '';
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
        var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
        var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
        var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
    </script>
    

</body>
</html>

