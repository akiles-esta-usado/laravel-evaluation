<?php

use App\Models\Task;
use App\Models\User;

it('can create tasks', function () {
    $user = User::factory()->create();
    $task = Task::factory()->recycle($user)->create();

    expect($user->created_tasks[0]->is($task))->toBeTrue();
});

