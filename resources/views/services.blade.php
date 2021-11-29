<x-app-layout>
    @section('title')
        Services
    @endsection
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="text-right">
                    <a href="{{ route('service.create') }}">
                        <button
                            class='inline-flex items-center px-4 py-2 m-5 text-xs font-semibold tracking-widest text-white uppercase transition bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25'>
                            Add Service
                        </button>
                    </a>
                </div>
                @livewire('service-table')
            </div>
        </div>
    </div>
</x-app-layout>
