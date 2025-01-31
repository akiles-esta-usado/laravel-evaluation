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


// it("can be assigned", function() {
//     $task = Task::factory()->create();

//     $user = User::factory()->create();

//     $task->assign_to($user);
    
//     expect($task->assigned_to == $user->id)->toBeTrue();
// });