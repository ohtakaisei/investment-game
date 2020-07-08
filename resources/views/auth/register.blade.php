@extends("layout.app")

@section("content")
<div class="container">
    <div class="text-center welcome">
        <h1>会員登録</h1>
        <hr>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(["route" => "signup.post"]) !!}
            <div class="form-group">
                {!! Form::label("name", "Name") !!}
                {!! Form::text("name", old("name"), ["class" => "form-control"]) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label("email", "Email") !!}
                {!! Form::text("email", old("email"), ["class" => "form-control"]) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label("password", "Password") !!}
                {!! Form::password("password", ["class" => "form-control"]) !!}
            </div> 
            
            <div class="form-group">
                {!! Form::label("password", "Password") !!}
                {!! Form::password("password_confirmation", ["class" => "form-control"]) !!}
            </div>
            
            {!! Form::submit("登録！", ["class" => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
        </div>
    </div>
    </div>
    @endsection