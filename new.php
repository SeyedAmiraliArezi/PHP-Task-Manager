<?php
$page_name = 'tasks';
include "includes/init.php";
if (!is_login()) {
    redirect("login.php");
}
?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addtask'])) {
    $task_title = $_POST['title'];
    $task_date = $_POST['date'];
    $task_progress = $_POST['progress'];
    $status = $_POST['status'];

    data_tasks($task_title , $task_date , $task_progress , $status);
    header("Location: tasks.php");
    exit;
}
?>
<?php include 'partial/header.php'; ?>
<body class="dash-body">
<div class="dashboard">
    <?php include 'partial/sidebar.php'; ?>

    <main class="content">
        <div class="content-header">
            <h1>وظیفه جدید</h1>
            <a href="tasks.php" class="back-link">بازگشت</a>
        </div>

        <div class="new-box">
            <form method="post" action="" class="new-form">

                <div class="new-field">
                    <label for="title">نام کار</label>
                    <input type="text" id="title" name="title" placeholder="مثلاً خرید نان" required>
                </div>

                <div class="new-row">
                    <div class="new-field">
                        <label for="deadline">مهلت انجام</label>
                        <input type="datetime-local" id="deadline" name="date" required>
                    </div>
                    <div class="new-field">
                        <label for="progress">درصد پیشرفت</label>
                        <input type="number" id="progress" name="progress" min="0" max="100" step="5" value="0">                </div>

                <div class="new-field">
                    <label for="status">وضعیت</label>
                    <select id="status" name="status" required>
                        <option value="todo">انجام نشده</option>
                        <option value="doing">در حال انجام</option>
                        <option value="done">انجام شده</option>
                    </select>
                </div>

                <button type="submit" name="addtask" class="new-submit">ثبت وظیفه</button>

            </form>
        </div>
    </main>
</div>
</body>
</html>