<?php
// カウント数取得関数
function get_count($file) {
	$filename = 'data/'.$file.'.dat';
	$fp = @fopen($filename, 'r');
	if ($fp) {
		$vote = fgets($fp, 9182);
	} else {
		$vote = 0;
	}
	return $vote;
}
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="20; URL="index.html">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>sai3 signage</title>
<link rel="stylesheet" href="css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>

$(function() {
	setTimeout(function(){
		$('.start p').fadeIn(1600);
	},200); //0.5秒後にロゴをフェードイン!
	setTimeout(function(){
		$('.start').fadeOut(500);
	},3000); //2.5秒後にロゴ含め真っ白背景をフェードアウト！
});

</script>

</head>
<body>

<div class="signage">
<h1>待ち時間</h1>

<p>11HR <?= get_count('11') ?>分</p>

<p>12HR <?= get_count('12') ?>分</p>

<p>13HR <?= get_count('13') ?>分</p>

<p>14HR <?= get_count('14') ?>分</p>

</div>

<div class="start">
    <p>情報更新中</p>
</div>



</body>
</html>
