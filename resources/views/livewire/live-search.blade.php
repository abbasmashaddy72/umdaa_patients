<div>
    <div class="container p-3 mt-4 mb-4">
        <div class="row">
            <div class="mb-2 col-lg-4 col-12 col-md-4" wire:ignore>
                <select class="form-select w-100" id="select2-dropdown" style="background-color: rgb(36,124,255, 0.5);"
                    wire:model='searchLocality'>
                    <option value="" selected>Select Locality</option>
                    @foreach ($doc_locations as $item)
                        <option value="{{ $item->locality->id }}">{{ $item->locality->name }}
                        </option>
                    @endforeach
                    @foreach ($static_location as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-2 col-12 col-md-8 col-lg-8">
                <input type="text" wire:model="searchTerm" class="form-control"
                    style="background-color: rgb(36,124,255, 0.3);" placeholder="Speciality / Service / Doctor Name"
                    autofocus>
            </div>
        </div>
        <div class="mt-5 row">
            @if ($doctors && $doctors->count() > 0)
                @foreach ($doctors as $doctor)
                    <div class="mb-4 text-center col-12 col-md-4 col-lg-4">
                        <div class="card w-100">
                            <div class="card-body image d-flex flex-column justify-content-center align-items-center">
                                <button class="btn btn-secondary" style="border-radius: 50%;">
                                    @if (!empty($doctor->photo))
                                        <img src="{{ asset('images/doctors/' . $doctor->photo) }}" height="100"
                                            width="100" />
                                    @else
                                        <img src="{{ asset('images/doctors/no-doctor-image-300x300.png') }}"
                                            height="100" width="100" />
                                    @endif
                                </button>
                                <span class="mt-3 name">Dr.
                                    {{ $doctor->name }}</span>
                                <span class="idd">{{ $doctor->qualification }}</span>
                                <div class="flex-row gap-2 d-flex justify-content-center align-items-center">
                                    <span class="idd1">{{ $doctor->department->title }}</span>|<br>
                                    <span class="idd1">{{ $doctor->locality->name }}</span>
                                </div>
                                <div class="mt-2 d-flex">
                                    <a href="tel:+91-812592-0072">
                                        <button class="btn1 btn-warning">Book Appointment</button>
                                    </a>
                                    <span class="ms-3">
                                        <button class="btn1 btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#{{ str_replace([' ', '.'], '_', $doctor->name) }}">Learn
                                            More</button>
                                    </span>
                                </div>
                                <div class="mt-3 text">
                                    <span>{{ $doctor->about }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="{{ str_replace([' ', '.'], '_', $doctor->name) }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Dr. {{ $doctor->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body hero-banner">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 offset-lg-1 order-lg-1">
                                                @if (!empty($doctor->popup_image))
                                                    <img src="{{ asset('images/doctors/popup/' . $doctor->popup_image) }}"
                                                        class="img-fluid" alt="{{ $doctor->name }}" />
                                                @else
                                                    <img src="{{ asset('images/doctors/no-doctor-image-300x300.png') }}"
                                                        class="img-fluid" alt="{{ $doctor->name }}" />
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <h1 class="mt-3 mb-3">{{ __('Services') }}</h1>
                                                <a href="tel:+91-8125-920072"
                                                    class="mb-3 border btn1 btn-warning btn-lg">Book
                                                    Appointment</a>
                                                <div class="mt-5">
                                                    @if (!empty($doctor->services->titles))
                                                        @foreach (explode(',', $doctor->services->titles) as $item)
                                                            <li class="lead fw-normal">{{ $item }}</li>
                                                        @endforeach
                                                    @else
                                                        <li class="lead fw-normal">{{ __('No Services Available') }}
                                                        </li>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center text-dark">No Doctors found</p>
            @endif
        </div>
    </div>
    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#select2-dropdown').select2();
                $('#select2-dropdown').on('change', function(e) {
                    var data = $('#select2-dropdown').select2("val");
                    @this.set('searchLocality', data);
                });
            });
        </script>
    @endsection
</div>
