@if (Session::has('message'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
        class="relative flex items-center justify-between px-3 py-3 bg-green-200 rounded-lg text-white-600">
        <div>
            <span class="font-semibold text-white-700">{{ Session::get('message') }}</span>
        </div>
        <div>
            <button type="button" @click="show = false" class="text-yellow-700 ">
                <span class="text-2xl">&times;</span>
            </button>
        </div>
    </div>
@endif

@if ($errors->any())
    <div x-data="{ show: true }" x-show="show"
        class="relative flex items-center justify-between px-3 py-3 text-red-600 bg-red-200 rounded-lg">
        <div>
            @foreach ($errors->all() as $error)
                <li>
                    <span class="font-semibold text-red-700">{{ $error }}</span>
                </li>
            @endforeach
        </div>
        <div>
            <button type="button" @click="show = false" class="text-red-700 ">
                <span class="text-2xl">&times;</span>
            </button>
        </div>
    </div>
@endif
