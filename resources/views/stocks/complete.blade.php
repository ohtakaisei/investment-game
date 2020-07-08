@extends('layout.app')

@section('content')
<div class="container">
    <div class="text-center welcome">
<h1>betが完了しました！</h1>
<hr>
</div>
<p>あなたは{{ $bet->bets_point }}円を{{ $bet->direction }}方向へ投資しました!!</p>
{!! link_to_route('stocks.index', '株ゲームに戻る', [], ['class' => 'btn btn-primary']) !!}

{!! link_to_route('stocks.create', 'もっとBetしに行く！', [], ['class' => 'btn btn-primary']) !!}

</div>
@endsection