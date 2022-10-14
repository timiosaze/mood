<div>
    <div class=" flex flex-row justify-between items-center">
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
            <input
                wire:model="search"
                type="search"
                class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-sm
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                "
                id="exampleSearch2"
                placeholder="Search"
            />
            </div>
        </div>
        <div class="ml-auto">
            <div class="form-check text-sm ">
                <input wire:model="male" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                    male
                </label>
            </div>
        </div>
        {{-- <div class="ml-5">
            <div class="form-check text-sm ">
                <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                    female
                </label>
            </div>
        </div> --}}
    </div>
<div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
    <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
        <thead>
            <tr class="text-left text-xl">
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    <button>ID</button>
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    <div class="flex items-center">
                        <button wire:click="sortBy('name')">Name</button>
                        @if($sortField != 'name' )
                            <span></span>
                        @elseif($sortAsc)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 font-bold ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                            </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 font-bold ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        @endif
                    </div>
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    <div class="flex items-center">
                        <button wire:click="sortBy('age')">Age</button>
                        <x-sort-icon field="age" :sortField="$sortField" :sortAsc="$sortAsc" />
                    </div>
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    <div class="flex items-center">
                        <button wire:click="sortBy('email')">Email</button>
                        <x-sort-icon field="email" :sortField="$sortField" :sortAsc="$sortAsc" />
                    </div> 
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    <div class="flex items-center">
                        <button>Address</button>
                        <x-sort-icon field="address" :sortField="$sortField" :sortAsc="$sortAsc" />
                    </div>
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    <div class="flex items-center">
                        <button wire:click="sortBy('gender')">Gender</button>
                        <x-sort-icon field="gender" :sortField="$sortField" :sortAsc="$sortAsc" />
                    </div>
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    <div class="flex items-center">
                        <button wire:click="sortBy('salary')">Salary</button>
                        <x-sort-icon field="salary" :sortField="$sortField" :sortAsc="$sortAsc" />
                    </div>
                </th>

            </tr>
        </thead>
        <tbody>
                @foreach ($persons as $person)
                <tr class="text-xs">
                    <td class="border-dashed border-t border-gray-200 userId">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{$person->id}}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 firstName">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{$person->name}}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 lastName">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{$person->age}}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 emailAddress">
                        <span class="text-gray-700 px-6 py-3 flex items-center"
                            >{{$person->email}}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 phoneNumber">
                        <span class="text-gray-700 px-6 py-3 flex items-center"
                            >{{$person->address}}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 gender">
                        <span class="text-gray-700 px-6 py-3 flex items-center"
                            >{{$person->gender}}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 phoneNumber">
                        <span class="text-gray-700 px-6 py-3 flex items-center"
                            >{{$person->salary}}</span>
                    </td>
                </tr>

                @endforeach

        </tbody>
    </table>
</div>
<div class="mt-6">
    {{ $persons->links() }}
</div>

</div>