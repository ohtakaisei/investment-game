@extends('layout.app')

@section('content')
<div class="container">
  <div class="text-center welcome">
      <h1>ログイン</h1>
      <hr>
  </div>
  
  <div class="row">
      <div class="col-sm-6 offset-sm-3">
          
          {!! Form::open(["route" => "login.post"]) !!}
          <div class="form-group">
              {!! Form::label("email", "Email") !!}
              {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
          </div>
          
            <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            <p class="mt-2">新しいユーザーですか？ {!! link_to_route('signup.get', '新規登録する！') !!}</p>
      </div>
  </div>
  </div>
  @endsection