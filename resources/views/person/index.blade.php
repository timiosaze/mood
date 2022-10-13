@extends('layouts.app')

@section('content')

    <div class="mx-10 my-20">
        
        <livewire:datatables>
        <x-sort-icon
            field="email"
            :sortField = "$sortField"
            :sortAsc = "$sortAsc"
        />
    </div>

@endsection