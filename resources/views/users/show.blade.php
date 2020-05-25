@extends("layout.app")

@section("content")
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                        <div class="card-body">
                            <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                        </div>                    
                    <h3 class="card-title">現在のポイントは、{{ $user->point }}</h3>
                </div>
            </div>
        </aside>
    </div>
@endsection