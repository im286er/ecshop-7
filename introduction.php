<?php

/* 品牌介绍 */
define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');
if ((DEBUG_MODE & 2) != 2){
    $smarty->caching = true;
}
/* 清除缓存
*/
clear_cache_files();
//引用模板
if (!$smarty->is_cached('introduction.dwt', $cache_id)){
    assign_template();
    //红色区是单页面需要调用到的数据，需要哪一部分就将其引用进来。
    $position = assign_ur_here();
    $smarty->assign('page_title',       $position['title']);    // 页面标题
    $smarty->assign('ur_here',          $position['ur_here']);  // 当前位置
    /* meta information */
    $smarty->assign('keywords',         htmlspecialchars($_CFG['shop_keywords']));
    $smarty->assign('description',      htmlspecialchars($_CFG['shop_desc']));
    $smarty->assign('helps',            get_shop_help());       //网店帮助
}
$smarty->display('introduction.dwt',$cache_id);

