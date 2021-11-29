<div class="flex flex-col">
    <div class="my-2 overflow-x-auto sm:mx-6 lg:mx-8">
        <div class="inline-block w-full min-w-full py-5 align-middle sm:px-6 lg:px-8">

            @include($theme->layout->header, [
                'enabledFilters' => $enabledFilters
            ])

            @if(config('livewire-powergrid.filter') === 'outside')
                @if(count($makeFilters) > 0)
                    <div>
                        <x-livewire-powergrid::frameworks.tailwind.filter
                            :makeFilters="$makeFilters"
                            :theme="$theme"
                        />
                    </div>
                @endif
            @endif

            <div class="my-3">
                @include($theme->layout->message)
            </div>

            <div class="relative overflow-hidden overflow-x-auto overflow-y-auto bg-white shadow">
                @include($table)
            </div>

            @include($theme->footer->view)
        </div>
    </div>
</div>
