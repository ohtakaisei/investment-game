@extends("layout.app")

@section("content")
<div class="container">
<div class="text-center welcome">
    <h1>プロフィール</h1>
    <hr>
    </div>
    <div class="text-center">
                    <h3 class="card-title">トレーダー「{{ $user->name }}」</h3>
                        <div class="card-body">
                            <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                        </div>                    
                    <h3 class="card-title">あなたの所持金は<span style="color: #ff5252; font-size: 24px;">{{ $user->point }}</span>円です。</h3>
    </div>
    </div>

    <!--プロフィール解説--> 
                <div class="text-center welcome">
                <h1>プロフィールとは</h1>
                
                <hr>
                <p>ここに書かれているのが現在あなたが所持している「所持金」に当たります。</p>
                <p>自分でBetした履歴や増えたお金減ったお金を確認することは{!! link_to_route("signup.get","株ゲームページ", [],["class" => ""]) !!}で
                みることができますが、所持金の変化をみることはできません。</p>
                <p>履歴から自分のBetの結果を確認したら、所持金が増えているかどうかはここで確認してください！</p>
                </div>
    </div>

@endsection