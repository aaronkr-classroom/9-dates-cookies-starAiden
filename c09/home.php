<?php 
include 'includes/sessions.php';
include 'includes/header-member.php'; 
?>

<h1>Home</h1>

<?php if ($logged_in === true): ?>
    <p><b>Logged in:</b> navigation bar shows a link to log out.</p>
    <p>회원님, 환영합니다! 현재 로그인된 상태입니다.</p>
<?php else: ?>
    <p><b>Not logged in:</b> navigation bar shows a link to log in.</p>
    <p> 서비스를 이용하시려면 로그인이 필요합니다.</p>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>