<x-layout>
    <div class="space-y-10">
        <section class="pt-10">
            <x-section-heading>Pending Tasks</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($pending_tasks as $task)
                    <x-task-card :$task/>
                @endforeach
            </div>
        </section>

        <section class="pt-10">
            <x-section-heading>In Progress Tasks</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($in_progress_tasks as $task)
                    <x-task-card :$task/>
                @endforeach
            </div>
        </section>

        <section class="pt-10">
            <x-section-heading>Completed Tasks</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($completed_tasks as $task)
                    <x-task-card :$task/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>