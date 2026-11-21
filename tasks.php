<?php
$page_name = 'tasks';
include "includes/init.php";
if (!is_login()) {
    redirect("login.php");
}
?>
<?php include "partial/header.php"; ?>
<?php if (isset($_GET['delete_task'])) {
    delete_tasks($_GET['delete_task']);
    redirect("tasks.php");
} ?>
<body>
<div class="dashboard">
    <?php include "partial/sidebar.php"; ?>
    <main class="content">

        <div class="content-header">
            <h1>لیست وظایف</h1>

            <a href="new.php" class="add-task-btn">
                + وظیفه جدید
            </a>
        </div>
        <div class="task-list">
        <?php foreach (get_user_tasks() as $task) : ?>
            <?php include "partial/task-card.php" ?>
        <?php endforeach; ?>
        </div>
    </main>
</div>
<?php include "partial/footer.php"; ?>
