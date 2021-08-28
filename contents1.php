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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sai3 signage</title>
	<link rel="stylesheet" href="css/contents1.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<img src="files/maps.png">
	<div class="signage">
		<h1>待ち時間</h1>
		<div class="class_container">
			<div class="list_title">
				<p class="hr">11HR</p>
				<p class="waiting_time"><?= get_count('11') ?>分</p>
			</div>
			<p class="description"><?= load_hr('11') ?></p>
		</div>
		<div class="class_container">
			<div class="list_title">
				<p class="hr">12HR</p>
				<p class="waiting_time"><?= get_count('12') ?>分</p>
			</div>
			<p class="description"><?= load_hr('12') ?></p>
		</div>
		<div class="class_container">
			<div class="list_title">
				<p class="hr">13HR</p>
				<p class="waiting_time"><?= get_count('13') ?>分</p>
			</div>
			<p class="description"><?= load_hr('13') ?></p>
		</div>
		<div class="class_container">
			<div class="list_title">
				<p class="hr">14HR</p>
				<p class="waiting_time"><?= get_count('14') ?>分</p>
			</div>
			<p class="description"><?= load_hr('14') ?></p>
		</div>
		<div class="class_container">
			<div class="list_title">
				<p class="hr">15HR</p>
				<p class="waiting_time"><?= get_count('15') ?>分</p>
			</div>
			<p class="description"><?= load_hr('15') ?></p>
		</div>
		<div class="class_container">
			<div class="list_title">
				<p class="hr">16HR</p>
				<p class="waiting_time"><?= get_count('16') ?>分</p>
			</div>
			<p class="description"><?= load_hr('16') ?></p>
		</div>
		<div class="class_container">
			<div class="list_title">
				<p class="hr">17HR</p>
				<p class="waiting_time"><?= get_count('17') ?>分</p>
			</div>
			<p class="description"><?= load_hr('17') ?></p>
		</div>

	</div>
</body>

</html>