<?php
$page_name = 'dashboard';
include "includes/init.php";
if (!is_login()) {
    redirect("login.php");
}
?>
<?php include 'partial/header.php'; ?>
<body class="dash-body">
<div class="dashboard">
    <?php include 'partial/sidebar.php';?>
    <main class="content">

        <div class="content-header">
            <h1>لیست وظایف</h1>
        </div>
        <div class="task-list">
        <?php foreach (get_user_tasks() as $task) : ?>
            <?php include "partial/task-card.php"; ?>
        <?php endforeach; ?>
        </div>
    </main>
</div>
<?php include "partial/footer.php"; ?>