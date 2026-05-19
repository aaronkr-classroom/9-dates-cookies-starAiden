<?php
// 세션 시작 (모든 페이지에서 공통으로 사용됨)
session_start();

// 로그인 상태를 확인하는 변수 설정
$logged_in = $_SESSION['logged_in'] ?? false;

// 로그인이 안 되어 있으면 로그인 페이지로 리다이렉트하는 함수
function require_login($logged_in) {
    if ($logged_in === false) {
        header('Location: login.php');
        exit;
    }
}

// 로그아웃 함수
function logout() {
    // 세션 배열 비우기
    $_SESSION = [];
    
    // 세션 쿠키 강제 삭제
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
    
    // 세션 파기
    session_destroy();
}


?>