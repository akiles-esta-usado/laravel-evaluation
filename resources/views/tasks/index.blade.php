<x-layout>
    <div class="space-y-10">
        <section class="pt-10">
            <x-section-heading>Tasks</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($tasks as $task)
                    <x-task-card :$task/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>