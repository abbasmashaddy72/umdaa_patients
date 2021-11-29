<div class="flex flex-wrap">
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

        </style>
    @endpush
    <div class="p-2 lg:w-1/2">
        <div class="relative">
            <label for="name" class="text-sm leading-7 text-gray-600">State</label>
            <select id='selState' name='state'
                class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                <option value=''>-- Select State --</option>
                @foreach ($states as $item)
                    <option value="{{ $item->id }}" @if ($item->id == $state_id) selected @endif>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="p-2 lg:w-1/2">
        <div class="relative">
            <label for="name" class="text-sm leading-7 text-gray-600">City</label>
            <select id='selCity' name="city"
                class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                <option value=''>-- Select State First --</option>
            </select>
        </div>
    </div>
    <div class="p-2 lg:w-1/2">
        <div class="relative">
            <label for="name" class="text-sm leading-7 text-gray-600">Locality</label>
            <select id='selLocality' name='locality_id'
                class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                <option value='0'>-- Select City First --</option>
            </select>
        </div>
    </div>
    @push('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script>
            function getCities(state_id, city_id) {
                $.ajax({
                    url: "{{ url('get-cities-by-state') }}",
                    type: "POST",
                    data: {
                        state_id: state_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        var selected;
                        $.each(result.cities, function(key, value) {
                            selected = '';
                            if (city_id == value.id) {
                                selected = 'selected';
                            } else {
                                // selected = 'false';
                            }
                            $("#selCity").append('<option ' + selected + ' value="' + value.id +
                                '">' + value.name + '</option>');
                        });
                        $('#selLocality').html(
                            '<option value="">-- Select City First --</option>');
                    }
                });
            }
            getCities(<?= $state_id ?>, <?= $city_id ?>);
        </script>
        <script>
            function getLocalities(city_id, locality_id) {
                $.ajax({
                    url: "{{ url('get-localities-by-cities') }}",
                    type: "POST",
                    data: {
                        city_id: city_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        var selected;
                        $.each(result.localities, function(key, value) {
                            selected = '';
                            if (locality_id == value.id) {
                                console.log(locality_id)
                                console.log(value.id)
                                selected = 'selected';
                            } else {
                                console.log(city_id)
                                // selected = 'false';
                            }
                            $("#selLocality").append('<option ' + selected + ' value="' + value
                                .id +
                                '">' + value.name + '</option>');
                        });
                    }
                });
            }
            getLocalities(<?= $city_id ?>, <?= $locality_id ?>);
        </script>
        <script>
            $(document).ready(function() {
                $("#selState").select2();
                $("#selCity").select2();
                $("#selLocality").select2();
                $('#selState').on('change', function() {
                    var state_id = this.value;
                    $("#selCity").html('');
                    $.ajax({
                        url: "{{ url('get-cities-by-state') }}",
                        type: "POST",
                        data: {
                            state_id: state_id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(result) {
                            $.each(result.cities, function(key, value) {
                                $("#selCity").append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                            $('#selLocality').html(
                                '<option value="">-- Select City First --</option>');
                        }
                    });
                });
                $('#selCity').on('change', function() {
                    var city_id = this.value;
                    $("#selLocality").html('');
                    $.ajax({
                        url: "{{ url('get-localities-by-cities') }}",
                        type: "POST",
                        data: {
                            city_id: city_id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(result) {
                            $.each(result.localities, function(key, value) {
                                $("#selLocality").append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        }
                    });

                });
            });
        </script>
    @endpush
</div>
