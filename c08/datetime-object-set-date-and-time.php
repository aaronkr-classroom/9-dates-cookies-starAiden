<?php
// 1. 시작(start) 객체 생성 및 날짜/시간 설정
$start = new DateTime();
$start->setDate(2027, 3, 1);
$start->setTime(17, 30);

// 2. 시작 객체를 복사(clone)한 뒤, 2시간 15분을 더함
$end = clone $start;
$end->modify('+2 hours +15 minutes'); // 오타 수정 및 메서드 체이닝
?>
<?php include 'includes/header.php'; ?> 

<p><b>Event starts:</b>
  <?= $start->format('Y년 m월 d일 A g시 i분') ?></p>

<p><b>Event ends:</b>
  <?= $end->format('Y년 m월 d일 A g시 i분') ?></p>

<?php include 'includes/footer.php'; ?>