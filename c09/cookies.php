<?php
// 1. 쿠키 이름 설정
$cookie_name = "user_visitor";

// 2. 만약 쿠키가 이미 존재한다면 (재방문자)
if (isset($_COOKIE[$cookie_name])) {
    $counter = (int)$_COOKIE[$cookie_name] + 1;
    $greeting = "Welcome back!";
} 
// 3. 쿠키가 없다면 (처음 방문자)
else {
    $counter = 1;
    $greeting = "Hello, friend!";
}

// 4. 쿠키 저장
setcookie($cookie_name, $counter, time() + 3600, "/");

// 5. 메시지 설정
$message = number_format($counter) . " views";
?>
<?php include 'includes/header.php'; ?> 

<h1><?= $greeting ?></h1>

<p><b><?= $message ?></b></p>

<?php include 'includes/footer.php'; ?>