@props(["user"])

<div class="p-4 bg-black/5 rounded-xl flex flex-row gap-x-6">

    <div>
        <img src="https://dummyimage.com/90x90" alt="" class="rounded-xl">
    </div>

    <div class="flex-1 flex flex-col">
        <div class="self-start text-sm">Junior</div>
        <h3 class="font-bold text-xl">{{ $user->name }}</h3>
        <p class="text-sm mt-auto">{{$user->email}}</p>
    </div>

</div>