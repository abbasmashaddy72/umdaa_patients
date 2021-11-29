<div>
    <div class="flex flex-col p-8 bg-white shadow-md hover:shodow-lg rounded-2xl">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-16 h-16 p-3 text-blue-400 border border-blue-100 rounded-2xl bg-blue-50" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="flex flex-col ml-3">
                    <div class="font-medium leading-none">Are you sure to Delete?</div>
                    <p class="mt-1 text-sm leading-none text-gray-600">By Deleting you will loos your Services.</p>
                </div>
            </div>
            <form method="post" action="{{ route('service.destroy', ['id' => $del_id]) }}">
                @csrf
                <button type="submit"
                    class="px-5 py-2 ml-4 text-sm font-medium tracking-wider text-white bg-red-500 border-2 border-red-500 rounded-full shadow-sm flex-no-shrink hover:shadow-lg">Delete</button>
            </form>
        </div>
    </div>
</div>
