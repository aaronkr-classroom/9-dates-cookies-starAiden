<?php
session_start();

$_SESSION['counter'] = ($_SESSION['counter'] ?? 0) + 1;

$greeting = "view :" . $_SESSION['counter'] . " times.";
?>
<?php include 'includes/header.php'; ?> 

<h1><?= $greeting ?></h1>

<!-- 1. 세션 데이터 데이터 확인란 -->
<h2>sessions</h2>
<pre><?php var_dump($_SESSION); ?></pre>

<!-- 2. 쿠키 데이터 확인란 -->
<h2>cookies</h2>
<pre><?php var_dump($_COOKIE); ?></pre>

<?php include 'includes/footer.php'; ?>