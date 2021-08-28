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

function load_hr($hr) {
	$xml = simplexml_load_file('data\hr_description.xml');
	$class = "hr".$hr;
	return $xml-> $class -> description;
}

$c11 = get_count('11');
$c12 = get_count('12');
$c13 = get_count('13');
$c14 = get_count('14');
$c15 = get_count('15');
$c16 = get_count('16');
$c17 = get_count('17');
$c21 = get_count('21');
$c22 = get_count('22');
$c23 = get_count('23');
$c24 = get_count('24');
$c25 = get_count('25');
$c26 = get_count('26');
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sai3 signage</title>
	<link rel="stylesheet" href="css/contents2.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<img src="files/maps.png">
	<div class="signage">
		<h1>待ち時間</h1>
		<table style="width:50%">
			<tr>
				<td>11HR</td>
				<th id="cell11"><?= get_count('11') ?>分</th>
			</tr>
			<tr>
				<td>12HR</td>
				<th id="cell12"><?= get_count('12') ?>分</th>
			</tr>
			<tr>
				<td>13HR</td>
				<th id="cell13"><?= get_count('13') ?>分</th>
			</tr>
			<tr>
				<td>14HR</td>
				<th id="cell14"><?= get_count('14') ?>分</th>
			</tr>
			<tr>
				<td>15HR</td>
				<th id="cell15"><?= get_count('15') ?>分</th>
			</tr>
			<tr>
				<td>16HR</td>
				<th id="cell16"><?= get_count('16') ?>分</th>
			</tr>
			<tr>
				<td>17HR</td>
				<th id="cell17"><?= get_count('17') ?>分</th>
			</tr>
			<tr>
				<td></td>
				<th class="blank"></th>
			</tr>
			<tr>
				<td>21HR</td>
				<th id="cell21"><?= get_count('21') ?>分</th>
			</tr>
			<tr>
				<td>22HR</td>
				<th id="cell22"><?= get_count('22') ?>分</th>
			</tr>
			<tr>
				<td>23HR</td>
				<th id="cell23"><?= get_count('23') ?>分</th>
			</tr>
			<tr>
				<td>24HR</td>
				<th id="cell24"><?= get_count('24') ?>分</th>
			</tr>
			<tr>
				<td>25HR</td>
				<th id="cell25"><?= get_count('25') ?>分</th>
			</tr>
			<tr>
				<td>26HR</td>
				<th id="cell26"><?= get_count('26') ?>分</th>
			</tr>
		</table>
	</div>
	<script type="text/javascript">
	function classify(){
		var waiting11 = <?php echo $c11 ?> ; 
		changeColor(waiting11, 11);

		var waiting12 = <?php echo $c12 ?> ; 
		changeColor(waiting12, 12);

		var waiting13 = <?php echo $c13 ?> ; 
		changeColor(waiting13, 13);

		var waiting14 = <?php echo $c14 ?> ; 
		changeColor(waiting14, 14);

		var waiting15 = <?php echo $c15 ?> ; 
		changeColor(waiting15, 15);

		var waiting16 = <?php echo $c16 ?> ; 
		changeColor(waiting16, 16);

		var waiting17 = <?php echo $c17 ?> ; 
		changeColor(waiting17, 17);

		var waiting21 = <?php echo $c21 ?> ; 
		changeColor(waiting22, 22);

		var waiting22 = <?php echo $c22 ?> ; 
		changeColor(waiting22, 22);

		var waiting23 = <?php echo $c23 ?> ; 
		changeColor(waiting23, 23);

		var waiting24 = <?php echo $c24 ?> ; 
		changeColor(waiting24, 24);

		var waiting25 = <?php echo $c25 ?> ; 
		changeColor(waiting25, 25);

		var waiting26 = <?php echo $c26 ?> ; 
		changeColor(waiting26, 26);
	}

	function changeColor(waiting, hr){
		let hr_id = 'cell' + hr ;
		var obj = document.getElementById(hr_id); 
		if(waiting>50){
    		obj.style.backgroundColor = '#ff0000b4'; 
		}else if(waiting>20){
			obj.style.backgroundColor = '#ff8741'; 
		}else{
		}
	}

	window.onload = classify();
	</script>
</body>

</html>
