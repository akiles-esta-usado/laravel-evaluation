<?php

use App\Models\Task;
use App\Models\User;

it('is created by a user', function () {
    $user = User::factory()->create();
    $task = Task::factory()->recycle($user)->create();

    expect($task->author->is($user))->toBeTrue();
});


it("can be unassigned", function() {
    $task = Task::factory()->create();

    expect($task->assigned_to == null)->toBeTrue();
});


it("can be assigned", function() {
    $task = Task::factory()->create();
    $user = User::factory()->create();

    $task->assignTo($user);

    $updated_task = $task->fresh();
    $updated_user = $user->fresh();

    expect($updated_user->assigned_tasks[0]->is($updated_task))->toBeTrue();
    expect($updated_task->assigned_user->is($updated_user))->toBeTrue();

    // expect($updated_task->assignedUser->is($user))->toBeTrue();
});