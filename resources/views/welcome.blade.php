@extends('layout.app')

@section('content')
    @if (Auth::check())
    {{ Auth::user()->name }}
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>投資ゲームで遊ぼう！</h1>
            {!! link_to_route("signup.get","会員登録", [],["class" => "btn btn-lg btn-primary"]) !!}
        </div>
    </div>
    @endif
@endsection