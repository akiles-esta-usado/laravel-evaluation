<x-layout>
    <div class="space-y-10">
        <section class="pt-10">
            <x-section-heading>Users</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($users as $user)
                    <x-user.user-card-wide :$user/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>