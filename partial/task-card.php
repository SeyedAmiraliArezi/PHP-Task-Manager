<div class="task-card <?php echo htmlspecialchars($task['status']); ?>">
    <div class="task-top">
        <h3 class="task-title"><?php echo htmlspecialchars($task['title']); ?></h3>
        <span class="badge <?php echo htmlspecialchars($task['status']); ?>">
            <?php
            $labels = [
                    'todo'  => 'انجام نشده',
                    'doing' => 'در حال انجام',
                    'done'  => 'انجام شده',
            ];
            echo htmlspecialchars($labels[$task['status']] ?? $task['status']);
            ?>
        </span>
        <a href="?delete_task=<?php echo urlencode($task['id']); ?>"
           class="task-delete"
           onclick="return confirm('از حذف مطمئنی؟')">حذف</a>
    </div>
    <div class="task-meta">
        <span><?php echo jdate('d F Y', strtotime($task['date'])); ?></span>
    </div>
    <div class="progress-row">
        <div class="progress-bar">
            <div class="progress-fill" style="width:<?php echo (int) $task['progress']; ?>%"></div>
        </div>
        <span class="progress-text"><?php echo (int) $task['progress']; ?>٪</span>
    </div>
</div>