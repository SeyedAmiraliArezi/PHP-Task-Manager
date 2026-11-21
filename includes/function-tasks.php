<?php

function data_tasks($title , $date ,$progress , $status){
    $tasks = get_user_tasks();

    $uid = random_string(8);
    $tasks[] = [
        'id'        => $uid,
        'title'     => $title,
        'date'      => $date,
        'progress'  => $progress,
        'status'    => $status
    ];

    save_tasks($tasks);

    return $uid;

}

function file_tasks(){
    $user = get_login();
    return 'tasks/task' . $user['user'] .'.txt';
}

function get_user_tasks (){
    $tasks = [];
    if (file_exists(file_tasks())) {
        $data = file_get_contents(file_tasks());
        $tasks = unserialize($data);
    }
    return $tasks;
}

function save_tasks($tasks){
    file_tasks();
    file_put_contents(file_tasks(), serialize($tasks));
}

function delete_tasks($uid){
    $tasks = get_user_tasks();
    $tasks = array_filter($tasks, function($task) use ($uid){
        return $task['id'] != $uid;
    });
    save_tasks($tasks);
}