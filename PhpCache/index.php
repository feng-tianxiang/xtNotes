<?php
//定义IN_cnly
define('IN_cnly', true);
if (!defined('IN_cnly'))
{
	die('Hacking attempt');
}
//包含配置文件
include_once("init.php");
//包含缓存文件
include( "./cache.php" );

$cache = new cache(30);
$cache->cacheCheck();

$sql = "select Id,name from htmlwu_wxpayuser order by addtime desc";
$data = $db->Read($sql);
// echo "<pre>";
// print_r($data);

?>

<html>
<head>
	<title></title>
</head>
<body>
<table>
<?php foreach ($data as $key => $v) { ?>
	<tr><td><?php echo $v['Id'] ?></td><td><?php echo $v['name'] ?></td></tr>
<?php } ?>

</table>
</body>
</html>
<?php $cache->caching(); ?>