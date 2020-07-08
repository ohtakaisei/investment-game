@extends('layout.app')

@section('content')
<div class="container">
    @if (Auth::check())
     <div class="text-center welcome">
        <h1>TOP画面</h1>
        <hr>
        </div>
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
        <!--ゲーム説明-->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <h2>このゲームのやり方…</h2>
                <p>このゲームは実際の日経平均株価を当てるゲームです。会員登録をしたユーザーには、それぞれ100000円が
                追加されます。そのお金を使用して、30分後の株価が上がるかはたまた下がるかどうか
                を予想してください。</p>
                <p>当たっていた場合、あなたが賭けた分の金額はプラスとなります。しかし外した場合、あなたが
                賭けた分の金額はマイナスとなります。</p>
                <p>あなたが賭けることのできる金額は1円から10000円となっており、全額失った場合
                その時点でゲームオーバーとなります。</p>
                <br>
                {!! link_to_route('stocks.index', 'やってみる！', [], ['class' => 'btn btn-primary']) !!}
            </div>
            <div class="col-lg-6">
                <img src="https://pbs.twimg.com/profile_images/1248923076089143297/iHUVrBMK_400x400.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    </div>
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>投資ゲームで遊ぼう！</h1>
            
            {!! link_to_route("signup.get","会員登録", [],["class" => "btn btn-lg btn-primary"]) !!}
        </div>
    </div>
    <!--説明開始-->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">プログラミング言語</h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">このサイト作成に使ったプログラミング言語やフレームワーク</p>
            </div>
        </div>
    </div>
    <!--画像-->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fab fa-php"></i>
                <h3>PHP</h3>
                <p>Laravelフレームワークの中にPHPが含まれています</p>
            </div>
    
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fab fa-laravel"></i>
                <h3>Laravel</h3>
                <p>PHPのフレームワークLaravelで9割作成しています</p>
            </div>
    
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-bold"></i>
                <h3>Bootstrap</h3>
                <p>簡単なデザインはBootstrapとCSSで作成しています</p>
            </div>        
            
        </div>
        <hr class="my-4">
    </div>
    
    <!--ゲーム説明-->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <h2>このゲームのやり方…</h2>
                <p>このゲームは実際の日経平均株価を当てるゲームです。会員登録をしたユーザーには、それぞれ100000円が
                追加されます。そのお金を使用して、30分後の株価が上がるかはたまた下がるかどうか
                を予想してください。</p>
                <p>当たっていた場合、あなたが賭けた分の金額はプラスとなります。しかし外した場合、あなたが
                賭けた分の金額はマイナスとなります。</p>
                <p>あなたが賭けることのできる金額は1円から10000円となっており、全額失った場合
                その時点でゲームオーバーとなります。</p>
                <br>
                {!! link_to_route("signup.get","やってみる！", [],["class" => "btn btn-primary"]) !!}
            </div>
            <div class="col-lg-6">
                <img src="https://pbs.twimg.com/profile_images/1248923076089143297/iHUVrBMK_400x400.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    </div>
    @endif
@endsection