<?php
	$siteinfo = array(
		"title"		=>	"CPan",
		"keywords"	=>	"CPan",
		"description"	=>	"CPan"
	);

	//需要忽略的目录
	$ignore	= array(
		".",
		".git",
		"favicon.ico",
		"functions",
		"config.php",
		"index.php",
		"static",
		"LICENSE",
		"template",
		"cache.php",
		"indexes.php"
		);
	//设置IP与密码
	$config = array(
		"allowip"	=>	array(
			//"0.0.0.0",			//注意设置为0.0.0.0则不限制IP，更多说明请参考帮助文档：https://doc.xiaoz.me/#/zdir/
			"::1",
			"127.0.0.1",
			"192.168.1."
		),
		"password"	=>	"xiaoz.me",
		"auth"		=>	FALSE
	);	
?>