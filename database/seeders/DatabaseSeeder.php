<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(5)->create();
        $tasks = Task::factory(15)->recycle($users)->create(new Sequence([
            'status' => "pending"
        ], [
            'status' => "in progress"
        ], [
            'status' => "completed"
        ]));
    }
}
