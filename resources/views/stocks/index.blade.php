@extends('layout.app')

@section('content')
    @include('stocks.stock', ['stock' => $stock])
@endsection