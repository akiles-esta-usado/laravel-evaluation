<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tasks = Task::all()->groupBy("status");
        return view("tasks.index", [
            "tasks" => Task::all(),
            "pending_tasks" => $tasks["pending"] ?? null,
            "in_progress_tasks" => $tasks["in progress"] ?? null,
            "completed_tasks" => $tasks["completed"] ?? null,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view("tasks.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        # TODO: Get the user identification for this
        $taskAttributes = $request->validate([
            "title" => ["required"],
            "description" => ["required"],
            "due_date" => ["required", "date"],
        ]);

        $taskAttributes["created_by"] = auth()->id();
        $task = Task::create($taskAttributes);

        return redirect("/tasks");
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
