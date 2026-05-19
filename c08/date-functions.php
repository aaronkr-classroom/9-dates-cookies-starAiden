<?php
// @TODO

// 1. 'tommoro' 오타를 'tomorrow'로 수정 (내일 날짜)
$start = strtotime('tomorrow'); 

$end = mktime (0,0,0,2,1,2021);

// 2. 대문자 'J'를 소문자 'j'로 수정, sat 주석은 유지
$start_date = date("D, j M ' y", $start); // Sat, 01 Jan ' 21

// 3. F 포맷(전체 월 이름)을 유지하고 주석을 그에 맞춰 변경
$end_date = date('l  F d,Y', $end); // Sunday  February 01,2021

?>
<?php include 'includes/header.php'; ?>

  <p><b>Sale starts:</b> <?= $start_date ?></p>
  <p><b>Sale ends:</b> <?= $end_date ?></p>

<?php include 'includes/footer.php'; ?>