<x-app-layout>
    @section('title')
        Dashboard
    @endsection
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-5 mx-auto">
                        <div class="flex flex-wrap -m-4 text-center">
                            <div class="w-1/2 p-4 sm:w-1/4">
                                <div class="p-2 bg-indigo-500 rounded-lg xl:p-6">
                                    <h2 class="text-3xl font-medium text-white title-font sm:text-4xl">
                                        {{ $doctor_count }}</h2>
                                    <p class="font-bold leading-relaxed text-gray-100">Doctors</p>
                                </div>
                            </div>
                            <div class="w-1/2 p-4 sm:w-1/4">
                                <div class="p-2 bg-indigo-500 rounded-lg xl:p-6">
                                    <h2 class="text-3xl font-medium text-white title-font sm:text-4xl">
                                        {{ $review_count }}</h2>
                                    <p class="font-bold leading-relaxed text-gray-100">Reviews</p>
                                </div>
                            </div>
                            <div class="w-1/2 p-4 sm:w-1/4">
                                <div class="p-2 bg-indigo-500 rounded-lg xl:p-6">
                                    <h2 class="text-3xl font-medium text-white title-font sm:text-4xl">
                                        {{ $service_count }}</h2>
                                    <p class="font-bold leading-relaxed text-gray-100">Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mb-10 text-gray-600 body-font">
                    <div class="container px-5 mx-auto">
                        <div class="flex flex-wrap -m-4">
                            <div class="w-full p-4 md:w-1/2">
                                <div class="container p-4 mx-auto mt-8 space-y-4 sm:p-0">
                                    <div class="flex">
                                        <div class="m-auto">
                                            <h3 class="text-xl font-semibold leading-tight text-gray-800">Doctor Count
                                                Locality Wise</h3>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                                        <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 32rem;">
                                            <livewire:livewire-pie-chart :pie-chart-model="$pieChartModel2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-4 md:w-1/2">
                                <div class="container p-4 mx-auto mt-8 space-y-4 sm:p-0">
                                    <div class="flex">
                                        <div class="m-auto">
                                            <h3 class="text-xl font-semibold leading-tight text-gray-800">Review Count
                                                Doctor Wise</h3>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                                        <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 32rem;">
                                            <livewire:livewire-pie-chart :pie-chart-model="$pieChartModel1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @push('scripts')
        @livewireChartsScripts
    @endpush
</x-app-layout>
