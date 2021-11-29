<div>
    <div class="container p-3 mt-4 mb-4">
        <div class="row">
            <div class="mb-2 col-lg-4 col-12 col-md-4">
                <select class="form-select w-100" wire:model='searchLocality'>
                    <option value="" selected>Select Locality</option>
                    @foreach ($locations as $item)
                        <option value="{{ $item->locality->id }}">{{ $item->locality->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-2 col-12 col-md-8 col-lg-8">
                <input type="text" wire:model="searchTerm" class="form-control" placeholder="Search Here" autofocus>
            </div>
        </div>
        <div class="mt-5 row">
            @if ($doctors && $doctors->count() > 0)
                @foreach ($doctors as $doctor)
                    <div class="mb-4 text-center col-12 col-md-4 col-lg-4">
                        <div class="card w-100">
                            <div class="card-body image d-flex flex-column justify-content-center align-items-center">
                                <button class="btn btn-secondary">
                                    @if (!empty($doctor->photo))
                                        <img src="{{ asset('images/doctors/' . $doctor->photo) }}" height="100"
                                            width="100" />
                                    @else
                                        <img src="{{ asset('images/doctors/no-doctor-image-300x300.png') }}"
                                            height="100" width="100" />
                                    @endif
                                </button>
                                <span class="mt-3 name">Dr. {{ $doctor->name }}</span>
                                <span class="idd">{{ $doctor->qualification }}</span>
                                <div class="flex-row gap-2 d-flex justify-content-center align-items-center">
                                    <span class="idd1">{{ $doctor->department->title }}</span>|<br>
                                    <span class="idd1">{{ $doctor->locality->name }}</span>
                                </div>
                                <div class="mt-2 d-flex">
                                    <a href="tel:+91-812592-0072">
                                        <button class="btn1 btn-dark">Book Appointment</button>
                                    </a>
                                </div>
                                <div class="mt-3 text">
                                    <span>{{ $doctor->about }}</span>
                                </div>
                                <div class="flex-row gap-3 mt-3 icons d-flex justify-content-center align-items-center">
                                    <span>
                                        <a href="{{ $doctor->t_link }}" target="_blank">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="{{ $doctor->f_link }}" target="_blank">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="{{ $doctor->i_link }}" target="_blank">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="{{ $doctor->l_link }}" target="_blank">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </span>
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
</div>
