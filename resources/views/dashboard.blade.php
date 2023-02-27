<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @role('admin')
            <h1>Soy admin</h1>
        @endrole
        @role('maestro')
            <h1>Soy maestro</h1>
        @endrole
        @role('alumno')
            <h1>Soy alumno</h1>
        @endrole
    </div>
</x-app-layout>
