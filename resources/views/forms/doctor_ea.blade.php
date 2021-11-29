<x-app-layout>
    @section('title')
        Add Doctor
    @endsection
    @push('styles')
        <style>
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
            {{ __('Add Doctor') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form method="POST" action={{ $action }} enctype="multipart/form-data">
                    @csrf
                    <div class="mx-auto lg:w-1/2 md:w-2/3">
                        <div class="flex flex-wrap items-center justify-center m-5">
                            <div x-data="showImage()" class="mx-auto w-52 xl:mr-0 xl:ml-6">
                                <div
                                    class="h-64 p-5 border-2 border-gray-200 border-dashed rounded-md shadow-sm dark:border-dark-5">
                                    <div class="relative h-40 mx-auto cursor-pointer image-fit zoom-in">
                                        <label class="inline-block mb-2 text-gray-500">Upload
                                            Image(jpg,png) <br> only 300 x 300 <span
                                                class="text-red-700">*</span></label>
                                        <div class="flex items-center justify-center w-full">
                                            <label
                                                class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                <div class="relative flex flex-col items-center justify-center pt-7">
                                                    @if (!empty($data->photo))
                                                        <img id="preview" class="absolute inset-0 w-full h-36"
                                                            src="{{ asset('images/doctors/' . $data->photo) }}">
                                                    @else
                                                        <img id="preview" class="absolute inset-0 w-full h-36">
                                                    @endif
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-12 h-12 text-gray-400 group-hover:text-gray-600"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <p
                                                        class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                        Select a photo</p>
                                                </div>
                                                <input name="photo" type="file" class="opacity-0" accept="image/*"
                                                    @change="showPreview(event)" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto lg:w-1/2 md:w-2/3">
                        <div class="flex flex-wrap m-5">
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
                                    <input type="text" id="name" name="name" value="{{ $data->name ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Department Name</label>
                                    <select name="department_id" id="department_id"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($dept_data as $item)
                                            <option value="{{ $item->id }}" @if (!empty($data->department_id) && $data->department_id == $item->id) selected @endif>
                                                {{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Qualification</label>
                                    <input type="text" id="name" name="qualification"
                                        value="{{ $data->qualification ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            @if (Route::currentRouteName() == 'doctor.create')
                                @livewire('city-locality-dropdown')
                            @else
                                @livewire('city-locality-dropdown',['state_id' => $state_id, 'city_id' =>
                                $city_id,'locality_id' => $locality_id])
                            @endif
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="number" class="text-sm leading-7 text-gray-600">Twitter URL</label>
                                    <input type="text" id="email" name="t_link" value="{{ $data->t_link ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Facebook URL</label>
                                    <input type="text" id="name" name="f_link" value="{{ $data->f_link ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="email" class="text-sm leading-7 text-gray-600">Instagram URL</label>
                                    <input type="text" id="email" name="i_link" value="{{ $data->i_link ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">LinkedIn URL</label>
                                    <input type="text" id="name" name="l_link" value="{{ $data->l_link ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>

                            <br>
                            <br>

                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="email" class="text-sm leading-7 text-gray-600">About</label>
                                    <textarea id="about" name="about"
                                        class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $data->about ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Extra
                                        Services</label>
                                    <textarea id="message" name="extra_services"
                                        class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $data->extra_services ?? '' }}</textarea>
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
        <script>
            $('#department_id').select2();

            function showImage() {
                return {
                    showPreview(event) {
                        if (event.target.files.length > 0) {
                            var src = URL.createObjectURL(event.target.files[0]);
                            var preview = document.getElementById("preview");
                            preview.src = src;
                            preview.style.display = "block";
                        }
                    }
                }
            }
        </script>
    @endpush
</x-app-layout>
