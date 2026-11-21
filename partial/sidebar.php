<?php
$user = get_login();
?>
<aside class="sidebar">
    <div class="profile">
        <div class="avatar">
            <img src="<?php echo $user['img'];?>" alt="<?php echo $user['user'];?>">
        </div>
        <div class="profile-info">
            <span class="profile-name"><?php echo $user['user'];?></span>
            <span class="profile-phone"><?php echo $user['phone'];?></span>
        </div>
    </div>

    <nav class="side-nav">
        <a href="index.php" class="nav-item <?php echo $page_name == 'dashboard' ? 'active' : ''; ?>">پیشخوان</a>
        <a href="tasks.php" class="nav-item <?php echo $page_name == 'tasks' ? 'active' : ''; ?>">لیست وظایف</a>
        <a href="login.php?action=logout"
           onclick="return confirm('آیا مطمعنی که میخوای خارج بشی ؟');"
           class="nav-item nav-logout">
            خروج از حساب کاربری
        </a>

    </nav>
</aside>