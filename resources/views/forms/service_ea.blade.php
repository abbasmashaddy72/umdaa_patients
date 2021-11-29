<x-app-layout>
    @section('title')
        Add Service
    @endsection
    @push('styles')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <style>
            .select2-selection__rendered {
                line-height: 35px !important;
            }

            .select2-container .select2-selection--single {
                height: 40px !important;
            }

            .select2-selection__arrow {
                height: 40px !important;
            }

            [x-cloak] {
                display: none;
            }

            .svg-icon {
                width: 1em;
                height: 1em;
            }

            .svg-icon path,
            .svg-icon polygon,
            .svg-icon rect {
                fill: #333;
            }

            .svg-icon circle {
                stroke: #4691f6;
                stroke-width: 1;
            }

        </style>
    @endpush
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Service') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form method="POST" action={{ $action }}>
                    @csrf
                    <div class="mx-auto lg:w-1/2 md:w-2/3">
                        <div class="flex flex-wrap m-5">
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Department Name</label>
                                    <select name="department_id" id="department_id"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($dep_data as $item)
                                            <option value="{{ $item->id }}" @if (!empty($data->department_id) && $data->department_id == $item->id) selected @endif>
                                                {{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="email" class="text-sm leading-7 text-gray-600">Titles</label>
                                    <span class="text-xs text-gray-500">Write all titles comma seprated</span>
                                    <textarea id="titles" name="titles"
                                        class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $data->titles ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="w-full p-2 mb-4">
                                <button class="p-2 mx-auto text-white bg-gray-800 rounded" type="submit">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#department_id').select2();
            });
        </script>
    @endpush
</x-app-layout>
