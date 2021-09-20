<?php
// カウントアップ処理
$file	= $_POST['file'];
$count	= $_POST['count'];

if ($file && $count) {
	$filename = 'data/'.$file.'.dat';
	$fp = @fopen($filename, 'w');
	flock($fp, LOCK_EX);
	fputs($fp, $count);
	flock($fp, LOCK_UN);
	fclose($fp);
	echo '
	<!DOCTYPE html>
	<html lang="ja">
	  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
		<title>送信完了</title>
		<style type="text/css">
			body{
				text-align: center;
				font-family: 'M PLUS 1p', sans-serif;
			}
			h1{
				text-align: center;
				font-size: 10vw;
			}
			a{
				text-align: center;
				text-decoration: none;
				font-size: 10vw;
			}
			.button{
				border-radius: 5vw;
				background-color: #ef2f2fce;
				border: none;
				color: white;
				padding: 5px 15px;
				text-decoration: none;
				-webkit-appearance: none;
				text-align: center;
				width: 24vw;
				font-size: 5vw;
				height: 8vw;
			}
			}
		</style>
	  </head>
	  <body>
		<h1 class="title">送信成功</h1>
		<a href="submit.html"><input value="再送信" class="button"></a>
	  </body>
	</html>';
}
