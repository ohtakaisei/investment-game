@extends('layout.app')

@section('content')
<div class="container">
    <h1>株価予想UP＆DOWN</h1>





<div class="row">
    <div class="col-6">
        {!! Form::model($bet, ['action' => 'GameController@store']) !!}
        
        <div class="form-group">
            {!! Form::label('bets_point', 'かける金額') !!}
            {!! Form::number('bets_point', null, ['class' => 'form-control', 'placeholder' => '例：1', 'min' => 1, 'max' => 10000]) !!}
            
            
            {!! Form::label('direction', 'UP&DOWN') !!}<br>
             {!! Form::select('direction', [
            'up' => 'up！',
            'down' => 'down！']
            ) !!}<br>
            
            {!! Form::submit('BETS!') !!}
        </div>
    </div>
</div>
</div>

<div class="container">
    <h1>この画面の説明</h1>
    <p>好きな金額を入れてから、方向を決めてみよう！</p>
    <p>「<storng>かける金額</storng>」のところに金額を書く。「<storng>UP&DOWN</storng>」のところに方向を書こう！</p>
    <p>指定が終わったら、「bet」のボタンを押そう！</p>
</div>
@endsection