@extends('layout.app')

@section('content')

    <h1>株価予想UP＆DOWN</h1>





<div class="row">
    <div class="col-6">
        {!! Form::model($bet, ['action' => 'GameController@store']) !!}
        
        <div class="form-group">
            {!! Form::label('bets_point', 'かけるpoint数:') !!}
            {!! Form::select('bets_point', [
            '100' => '100points',
            '500' => '500points',
            '700' => '700points',
            '1000' => '1000points',
            '2000' => '2000points',
            '3000' => '3000points',
            '4000' => '4000points',
            '5000' => '5000points',
            '6000' => '6000points',
            '10000' => '10000points']
            ) !!}
            
            {!! Form::label('direction', 'up&down:') !!}
             {!! Form::select('direction', [
            'up' => 'up！',
            'down' => 'down！']
            ) !!}
            
            {!! Form::submit('BETS!') !!}
        </div>
    </div>
</div>

@endsection