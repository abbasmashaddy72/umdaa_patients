<div class="relative justify-between w-full pt-3 pb-1 pl-2 pr-2 overflow-y-auto bg-white md:flex md:flex-row dark:bg-gray-700">

    @if($perPageInput)
        <div class="flex flex-row justify-center mb-2 md:justify-start md:mb-0">
            <div class="relative h-10">

                <select wire:model.lazy="perPage"
                        class="block px-3 py-2 pr-8 leading-tight text-gray-700 border border-gray-300 rounded appearance-none bg-white-200 focus:outline-none focus:bg-white focus:border-gray-500 dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 dark:border-gray-500">
                    @foreach($perPageValues as $value)
                        <option value="{{$value}}">
                            @if($value == 0)
                                {{ trans('livewire-powergrid::datatable.labels.all') }}
                            @else
                                {{ $value }}
                            @endif
                        </option>
                    @endforeach
                </select>

                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <x-livewire-powergrid::icons.down/>
                </div>
            </div>
            <div class="hidden w-full pl-4 sm:block md:block lg:block" style="padding-top: 6px;">
            </div>
        </div>
    @endif

    @if(filled($data))
        <div>
            @if(method_exists($data, 'links'))
                {!! $data->links(powerGridThemeRoot().'.pagination', ['recordCount' => $recordCount]) !!}
            @endif
        </div>
    @endif
</div>


