<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <a href="{{ url('repositories') }}" class="px-4 rounded-md bg-red-500 text-white">Repositorios</a>
            </div>
        </div>
    </div>
</x-app-layout>
