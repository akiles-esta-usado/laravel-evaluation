<x-panel class="flex flex-col text-center">
    <p class="self-start text-sm">{{$task->status}}</p>

    <div class="py-8">
        <a href="/tasks/{{$task->id}}" class="text-xl font-bold">{{$task->title}}</a>
        <p class="text-sm mt-4"> {{$task->description}} </p>
    </div>

    <div class="flex flex-row gap-x-6 p-4">
        <h3 class="font-bold" >Encargado</h3>
        @if ($task->assigned_user == null)
            <p class="font-bold" >No asignado</p>
        @else
            <a href="#"> {{$task->assigned_user}} </a>
        @endif
    </div>

    <div class="flex flex-row gap-x-6 p-4">
        <h3 class="font-bold" >Expiración</h3>
        <a href="#"> {{$task->due_date}} </a>
    </div>

</x-panel>