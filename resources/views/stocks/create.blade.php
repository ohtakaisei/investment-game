@extends('layout.app')

@section('content')

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

@endsection