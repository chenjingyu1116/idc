<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>生成静态首页</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>
<body>


<?php


$baseCmsUrl = 'http://'.$_SERVER['HTTP_HOST'];
$dmPageName = "/default.asp";
$stPageName = "index.html";
$tureStFile = dirname(__FILE__) . '/' . $stPageName;
$body = file_get_contents($baseCmsUrl .  $dmPageName);

$fp = fopen($tureStFile, 'w');
fwrite($fp, $body);
fclose($fp);
echo "<br><br><br>生成首页index.html静态成功。（静态首页会加快网站打开速度，如果修改了网站设置，请重新生成一次首页）"


?>