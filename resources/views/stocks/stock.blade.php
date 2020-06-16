<P>現在は<?php echo date("Y-m-d H:i:s"); ?>です</p>

<h1>現在の日経平均株価</h1>

<h1>{{ $stock->price }}</h1>
<P>＊最新の株価を見るためにリロードしてください。（command+R)</P>

{!! link_to_route('stocks.create', 'Betしに行く！', [], ['class' => 'btn btn-primary']) !!}

<h3>結果</h3>
{{ $answer }}