<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

$sql = 'SELECT goods_id FROM '.$GLOBALS['ecs']->table('goods').' WHERE 1';

$goods_res = $GLOBALS['db']->getAll($sql);

foreach($goods_res as $idx=>$val)
{
	$sql = "SELECT COUNT(*) FROM ".$ecs->table('comment')." WHERE id_value = '$val[goods_id]' AND comment_type = 0 AND status = 1 AND parent_id = 0 ";	
	
	$count = $db->getOne($sql);
	
	$sql = "UPDATE ".$ecs->table('goods'). " SET comments_number = '$count' WHERE goods_id = '$goods_id'";

	if($db->query($sql))
	{
		 /* 清除缓存 */
		clear_cache_files();
		$link[0]['text'] = '返回后台首页';
		$link[0]['href'] = 'index.php';
		sys_msg('评论数初始化成功', 0, $link);	
	}
	else
	{
		 /* 清除缓存 */
		clear_cache_files();
		$link[0]['text'] = '返回后台首页';
		$link[0]['href'] = 'index.php';
		sys_msg('评论数初始化失败', 0, $link);	
	}
	
}
?>