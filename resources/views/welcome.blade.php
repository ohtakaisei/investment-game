@extends('layout.app')

@section('content')
    @if (Auth::check())
    <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                        
                    </div>
                    <div class="card-body">
                        <img class="rounded img-fluid" src="{{ Gravatar::src(Auth::user()->email, 500) }}" alt="">
                    </div>
                </div>
            </aside>
            
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>投資ゲームで遊ぼう！</h1>
            
            {!! link_to_route("signup.get","会員登録", [],["class" => "btn btn-lg btn-primary"]) !!}
        </div>
    </div>
    @endif
@endsection