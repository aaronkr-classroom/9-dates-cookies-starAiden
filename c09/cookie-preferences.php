<?php
$option = ['dark', 'light'];

// POST 값이 있고 옵션 배열에 존재하면 그 값을, 없으면 쿠키 값(기본값 'dark')을 할당
$color = (isset($_POST['color']) && in_array($_POST['color'], $option)) 
    ? $_POST['color'] 
    : ($_COOKIE['theme_color'] ?? 'dark');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie('theme_color', $color, time() + (86400 * 30), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<body class="<?php echo $color; ?>">

<?php include 'includes/header-style-switcher.php'; ?> 

  <div class="page" style="font-family: 'Quicksand', sans-serif; padding: 30px;">
    <form method="POST" action="" style="text-align: center; width: 100%;"> 
      <label style="font-size: 1.1em; font-weight: bold; margin-right: 10px;">SELECT COLOR SCHEME</label>
      
      <select name="color" style="font-family: 'Quicksand', sans-serif; font-size: 1em; padding: 6px 12px; border: 1px solid #dab655; background: transparent; color: inherit; cursor: pointer;">
        <option value="dark" <?php if($color == $option[0]) echo 'selected'; ?> style="background: #141d1f; color: #fff;">Dark</option>
        <option value="light" <?php if($color == $option[1]) echo 'selected'; ?> style="background: #fff; color: #000;">Light</option>
      </select>
      
      <br><br>
      <input type="submit" value="Save" style="padding: 6px 20px; letter-spacing: 1px;">
    </form>
  </div>

<?php include 'includes/footer.php'; ?>

</body>