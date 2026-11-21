<?php
include ("includes/init.php");
include "includes/check-login.php";
if (isset($_GET['action']) && $_GET['action'] == "logout") {
    user_logout();
    redirect("index.php");
}
if (is_login()) {
    redirect("index.php");
}
?>
<?php include ("partial/header.php"); ?>
<body class="auth-body">

<div class="auth-box">
    <h2>ورود به سایت</h2>
    <!-- error in login -->
    <?php if ($error): ?>
        <p class="auth-error"><?php echo $error;?></p>
    <?php endif; ?>
    <!-- login form -->
    <form action="" method="post" class="auth-form">
        <input type="text" name="username" placeholder="نام کاربری" required>
        <input type="password" name="password" placeholder="رمز عبور" required>
        <button type="submit" name="login">ورود</button>
    </form>
</div>

</body>
</html>