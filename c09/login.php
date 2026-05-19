<?php
include 'includes/sessions.php';

// 1. 이미 로그인된 상태라면 마이페이지(account.php)로 바로 이동
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: account.php");
    exit;
}

// 2. 폼이 제출(POST)되었을 때 데이터 처리
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // 예시용 회원 정보 (실제로는 DB 비교)
    $valid_email = "user@example.com";
    $valid_password = "password123";

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_email'] = $email;
        
        // 로그인 성공 시 회원 전용 페이지로 이동
        header("Location: account.php");
        exit;
    } else {
        $error = "Invalid email or password.";
    }
}
?>
<?php include 'includes/header-member.php'; ?>

<h1>Login</h1>

<?php if (isset($error)): ?>
    <p style="color: #fc7b0a;"><?= $error ?></p>
<?php endif; ?>

<form method="POST" action="login.php">
  Email: <input type="email" name="email" required><br><br>
  Password: <input type="password" name="password" required><br><br>
  <input type="submit" value="Log In">
</form>

<?php include 'includes/footer.php'; ?>