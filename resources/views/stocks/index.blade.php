@extends('layouts.app')

@section('content')
    @include('stock.stock', ['stock' => $stock])
@endsection