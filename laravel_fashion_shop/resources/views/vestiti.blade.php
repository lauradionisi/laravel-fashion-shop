@extends('layouts.app')

@section('title')
    
@section('content')

    @foreach ($vestiti as $vestito)
    <div class="dresses-container">
        <div class="dress">
            <span> {{ $vestito['category'] }} </span>
            <span> {{ $vestito['brand'] }} </span>
            <span> {{ $vestito['size'] }} </span>
            <span> {{ $vestito['type'] }} </span>
            <span> {{ $vestito['price'] }} </span>
        </div>
        
    </div>
    

    @endforeach

@endsection