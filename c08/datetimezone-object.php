<?php
// 1. 각 지역의 DateTimeZone 객체 생성
$tz_LDN = new DateTimeZone('Europe/London');
$tz_SEL = new DateTimeZone('Asia/Seoul');
$tz_SYD = new DateTimeZone('Australia/Sydney');

// 2. 현재 시간을 기준으로 각 시간대가 적용된 DateTime 객체 생성
$LDN = new DateTime('now', $tz_LDN);
$SEL = new DateTime('now', $tz_SEL);
$SYD = new DateTime('now', $tz_SYD);

// 3. 본사 위치 정보를 런던(LDN)에서 가져오기
$location = $tz_LDN->getLocation();
?>
<?php include 'includes/header.php'; ?> 

<p><b>LDN: <?= $LDN->format('g:i a') ?></b> 
   (<?= ($LDN->getOffset() / (60 * 60)) ?>)<br>
   <b>SEL: <?= $SEL->format('g:i a') ?></b>
   (<?= ($SEL->getOffset() / (60 * 60)) ?>)<br>
   <b>SYD: <?= $SYD->format('g:i a') ?></b>
   (<?= ($SYD->getOffset() / (60 * 60)) ?>)<br></p>

<h1>Head Office</h1>
<!-- ⚠️ 기존 $tz_SEL->getName()에서 $tz_LDN->getName()으로 수정했습니다. -->
<p><?= $tz_LDN->getName() ?><br>
  <b>Longitude:</b> <?= $location['longitude'] ?><br>
  <b>Latitude:</b>  <?= $location['latitude'] ?></p>  


<pre>
  <?php var_dump($_COOKIE);?>
</pre>

<?php include 'includes/footer.php'; ?>