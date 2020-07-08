<P>現在は<?php echo date("Y-m-d H:i:s"); ?>です</p>

<h1>現在の日経平均株価</h1>

<h1>{{ $stock->price }}</h1>
<P>＊最新の株価を見るためにリロードしてください。（command+R)</P>

{!! link_to_route('stocks.create', 'Betしに行く！', [], ['class' => 'btn btn-primary']) !!}

<h1>{{ Auth::user()->name }}のBet履歴</h1>
<table class="table">
  <thead class="thead-dark">
      
    <tr>
      <th scope="col">日付・時間</th>
      <th scope="col">投資額</th>
      <th >判定結果</th>
      <th >履歴削除</th>
    </tr>
  </thead>
  <tbody>
          @foreach ($bets as $bet)
    <tr>
      <th scope="row">{!! $bet->created_at !!}</th>
      <td>{!! $bet->bets_point !!}円</td>
      <td><strong>{!! $bet->result !!}</strong></td>
      <td>{!! Form::model($bet, ['route' => ['stocks.destroy', $bet->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}</td>
    </tr>
        @endforeach
  </tbody>
</table>
{{ $bets->links('pagination::bootstrap-4') }}