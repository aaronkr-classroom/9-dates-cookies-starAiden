<?php
// @TODO

// 시간대(Timezone) 설정
date_default_timezone_set('Asia/Seoul');

// 1. 첫 번째 함수: 세일 시작일 (DateTime 객체)
$start = new DateTime('2026-04-19 00:00:00');

// 2. 두 번째 함수: 세일 종료일 (DateTime 객체 - 예: 2주 뒤)
$end = new DateTime('2026-05-03 23:59:59');

?>
<?php include 'includes/header.php'; ?> 

<p><b>Sale starts:</b>
<?= $start->format('l jS M Y H:i') ?></p>

<p><b>Sale ends:</b>
<?= $end->format('l jS M y') ?> <b>at</b>
<?= $end->format('H:i') ?></p>

<?php include 'includes/footer.php'; ?>