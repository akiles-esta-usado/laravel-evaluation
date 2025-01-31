<x-layout>
    <x-page-heading>Crear Tarea</x-page-heading>

    <x-forms.form method="POST" action="/tasks/create" class="bm-10">
        <x-forms.input label="Título" name="title" required autofocus/>
        <x-forms.textarea label="Descripción" name="description" required autofocus/>        
        <x-forms.input label="Expiración" name="due_date" type="date" required autofocus/>
        <x-forms.button>Crear la Tarea</x-forms.button>

    </x-forms.form>

</x-layout>