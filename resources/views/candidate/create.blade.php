@extends('layouts.app')

@section('content')

<section class="mx-auto md:max-w-3xl mt-12 px-3">
    <form action="{{ route('save') }}" method="POST">
     @csrf  
    
    <div class="mb-12">
        <h2 class="flex items-center text-base font-semibold mb-4">
            <span class="flex items-center ring-1 ring-blue-500 rounded-full border p-1 mr-2 animate-bounce">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                  </svg>
                  
            </span> 
            <span>Comment</span>
        </h2>
        <textarea name="comment" class="@error('comment') border-red-600 @else border-gray-300  @enderror
                    mt-1
                    block
                    w-full
                    rounded-md
                    
                    shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                  " rows="3">{{ old('comment') }}</textarea>
        @if($errors->has('comment'))
            <span class="font-semibold text-sm text-red-600">{{ $errors->first('comment') }}</span>
        @endif
    </div>
    <div class="mb-12">
        <h2 class="flex items-center text-base font-semibold mb-4">
            <span class="flex items-center ring-1 ring-blue-500 rounded-full border p-1 mr-2 animate-bounce">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                  </svg>
                  
            </span> 
            <span>Known Achievement?</span>
        </h2>
        <textarea name="achievement" class="@error('achievement') border-red-600 @else border-gray-300  @enderror
                    mt-1
                    block
                    w-full
                    rounded-md
                    shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                  " rows="3">{{ old('achievement') }}</textarea>
        @if($errors->has('achievement'))
            <span class="font-semibold text-sm text-red-600">{{ $errors->first('achievement') }}</span>
        @endif
    </div>
    <div class="mb-12">
        <h2 class="flex items-center text-base font-semibold mb-4">
            <span class="flex items-center ring-1 ring-blue-500 rounded-full border p-1 mr-2 animate-bounce">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                  </svg>
                  
            </span> 
            <span>States Winning Percent</span>
        </h2>
        <div x-data="states" class="grid xl:grid-cols-2 sm:grid-cols-1 gap-10">
            <template x-for="state in data">
                <div @click="removeAttr()">
                    <input type="hidden" :value="state.id" name="state_id[]" disabled>
                    <label for="default-range" :class="{ 'text-blue-500': state.value > 50, 'text-red-500' : state.value < 50 }"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" x-text="state.state + ': ' + state.value + '%'"></label>
                    <input id="default-range" name="user_prediction[]" x-model="state.value" type="range" value="50" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" disabled>
                </div>
            </template>
        </div>
    </div>
    <div class="mb-12 text-end">
        <button type="submit" class=" py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-medium rounded text-base">Save</button>
    </div>
    </form>
</section>


@endsection