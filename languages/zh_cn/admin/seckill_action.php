<?php
/**
 * ECSHOP 秒杀商品语言项
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: exchange_goods.php 17217 2011-01-19 06:29:08Z liubo $
*/



$_LANG['title'] ='关键字';
$_LANG['goods_id'] ='商品编号';
$_LANG['goods_name'] ='商品';
$_LANG['sk_price'] = '秒杀价格';
$_LANG['is_secKill'] ='是否正在进行秒杀';
$_LANG['sk_num'] ='秒杀商品数量';
$_LANG['sk_start_time'] ='秒杀开始时间';
$_LANG['sk_end_time'] ='秒杀结束时间';
$_LANG['button_remove'] ='批量删除';

$_LANG['keywords'] = '关键字';
$_LANG['goodsid'] ='商品';
$_LANG['make_option'] = '请先搜索商品生成选项列表';
$_LANG['start_time'] ='秒杀开始时间';
$_LANG['end_time'] ='秒杀结束时间';
$_LANG['price'] ='秒杀价格';
$_LANG['num'] ='秒杀数量';
$_LANG['ishot'] ='热销';
$_LANG['isnothot'] ='非热销';

$_LANG['notice_goodsid'] ='需要先搜索商品，生成商品列表，然后再选择';
$_LANG['notice_price'] ='秒杀活动中商品的价格';
$_LANG['notice_num'] ='秒杀活动中秒杀商品的数量';
$_LANG['notice_start_time'] ='秒杀活动中该商品开始秒杀的时间';
$_LANG['notice_end_time'] ='秒杀活动中该商品结束秒杀的时间';

/* 提示信息 */
$_LANG['goods_exist'] ='商品已经存在';
$_LANG['back_list'] ='返回商品列表';
$_LANG['continue_add'] ='继续添加新商品';
$_LANG['articleadd_succeed'] ='商品已经添加成功';
$_LANG['articleedit_succeed'] ='商品成功编辑';
$_LANG['drop_confirm'] = '您确认要删除这件商品吗？';
$_LANG['batch_remove_succeed'] = '您已经成功删除 %d 件商品';
$_LANG['exchange_integral_invalid'] = '积分值为空或不是数字';

/*JS 语言项*/
$_LANG['js_languages']['no_goods_id'] = '没有选择商品';
$_LANG['js_languages']['invalid_min_price'] = '价格下限为空或不是数字';
$_LANG['js_languages']['invalid_integral'] = '秒杀数量为空或不是整数';
$_LANG['js_languages']['invalid_starttime'] = '输入的起始时间格式不对，月份，时间应补足两位';
$_LANG['js_languages']['invalid_endtime'] = '输入的结束时间格式不对，月份，时间应补足两位';
$_LANG['js_languages']['invalid_gt'] = '输入的结束时间应大于起始日期';
?>