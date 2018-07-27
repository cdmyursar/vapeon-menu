@extends('layouts.app')
@section('content')
<h1>Products</h1>
<p>This is Vape On WIP Menu System</p>
@if(count($products) >0)
    @foreach($products as $product)
        <ul>
            <li>{{$product}}</li>
        </ul>
    @endforeach
@endif

@endsection
