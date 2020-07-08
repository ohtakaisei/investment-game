@extends('layout.app')

@section('content')
<div class="container">
    @include('stocks.stock', ['stock' => $stock])
    </div>
@endsection