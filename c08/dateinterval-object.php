<?php
// 1. 오늘(today)과 이벤트(event) 날짜 생성
$today = new DateTime(); // 현재 시간
$event = new DateTime('2027-03-01 17:30:00'); // 이벤트 시작일

// 2. 남은 시간 계산 (countdown) -> 두 날짜의 차이 구하기
$countdown = $today->diff($event);

// 3. 얼리버드(earlybird) 날짜 계산: 오늘로부터 딱 '1달 동안' 판매
$earlybird = clone $today; 

// 1개월짜리 기간(interval) 객체 생성 (P1M = Period 1 Month)
$interval = new DateInterval('P1M'); 

// 얼리버드 기한에 1달을 더함 (add)
$earlybird->add($interval);
?>
<?php include 'includes/header.php'; ?>

<p><b>Countdown to event:</b><br>
<?= $countdown->format('%y years %m months %d days') ?>
</p>
<p><b>50% off tickets bought by:</b><br>
<?= $earlybird->format('D d M Y, g:i a') ?>
</p>

<?php include 'includes/footer.php'; ?>