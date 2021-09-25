<?php
if(isset($_COOKIE["classsaved"])){
  $classsaved=$_COOKIE["classsaved"];
}else{
  $classsaved="";
}

if(isset($_COOKIE["statussaved"])){
  $statussaved=$_COOKIE["statussaved"];
}else{
  $statussaved="";
}
 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <title>彩西祭/サイネージ更新フォーム</title>
    <link rel="stylesheet" href="css/submit.css">
  </head>
  <body ontouchstart="">
    <div class="header">
      <h1 class="title">彩西祭/サイネージ更新フォーム</h1>
    </div>
    <div class="submittion" onclick="">
      <form action="vote.php" method="post" name="form1">
        <div class="hr">
          <p>HR</p>
          <select name="file" class="pulldown">
            <option <?php if ( $classsaved == '11' ) { echo ' selected'; } ?>>11</option>
            <option <?php if ( $classsaved == '12' ) { echo ' selected'; } ?>>12</option>
            <option <?php if ( $classsaved == '13' ) { echo ' selected'; } ?>>13</option>
            <option <?php if ( $classsaved == '14' ) { echo ' selected'; } ?>>14</option>
            <option <?php if ( $classsaved == '15' ) { echo ' selected'; } ?>>15</option>
            <option <?php if ( $classsaved == '16' ) { echo ' selected'; } ?>>16</option>
            <option <?php if ( $classsaved == '17' ) { echo ' selected'; } ?>>17</option>
            <option <?php if ( $classsaved == '21' ) { echo ' selected'; } ?>>21</option>
            <option <?php if ( $classsaved == '22' ) { echo ' selected'; } ?>>22</option>
            <option <?php if ( $classsaved == '23' ) { echo ' selected'; } ?>>23</option>
            <option <?php if ( $classsaved == '24' ) { echo ' selected'; } ?>>24</option>
            <option <?php if ( $classsaved == '25' ) { echo ' selected'; } ?>>25</option>
            <option <?php if ( $classsaved == '26' ) { echo ' selected'; } ?>>26</option>
            <option <?php if ( $classsaved == '31' ) { echo ' selected'; } ?>>31</option>
            <option <?php if ( $classsaved == '32' ) { echo ' selected'; } ?>>32</option>
            <option <?php if ( $classsaved == '33' ) { echo ' selected'; } ?>>33</option>
            <option <?php if ( $classsaved == '34' ) { echo ' selected'; } ?>>34</option>
            <option <?php if ( $classsaved == '35' ) { echo ' selected'; } ?>>35</option>
            <option <?php if ( $classsaved == '36' ) { echo ' selected'; } ?>>36</option>
          </select>
        </div>
        <div class="status">
          <p>状況</p>
          <select name="status" class="pulldown">
            <option <?php if ( $statussaved == '準備中' ) { echo ' selected'; } ?>>準備中</option>
            <option <?php if ( $statussaved == '平常' ) { echo ' selected'; } ?>>平常</option>
            <option <?php if ( $statussaved == '混雑' ) { echo ' selected'; } ?>>混雑</option>
            <option <?php if ( $statussaved == '閑散' ) { echo ' selected'; } ?>>閑散</option>
          </select>
        </div>
        <div class="min">
          <p>待ち時間</p>
          <input type="number" name="count" value="" class="mininput" required>
          <br>
          <button type="submit" value=" " class="button"><span>送信</span></button>
        </div>
      </form>
    </div>
  </body>
</html>
