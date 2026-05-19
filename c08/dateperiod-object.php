<?php
// 1. 시작일(start)과 종료일(end) 설정
$start = new DateTime('2026-03-03');
$end   = new DateTime('2026-06-09'); 

// 2. 반복 간격(interval) 설정 (P1W = Period 1 Week, 1주일 반복)
$interval = new DateInterval('P1W');

// 3. DatePeriod 객체 생성 (6월 9일을 결과에 '포함'하기 위해 옵션 추가)
$period = new DatePeriod($start, $interval, $end, DatePeriod::INCLUDE_END_DATE);
?>

<?php include 'includes/header.php'; ?> 
  <p>
    <?php foreach ($period as $event) { ?>
      <b><?= $event->format('l') ?></b>, <?= $event->format('M j Y') ?><br>
    <?php } ?>
  </p>
<?php include 'includes/footer.php'; ?>