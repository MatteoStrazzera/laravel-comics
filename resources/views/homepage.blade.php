@extends('layouts.app')

@section('content')
    <h1>Welcome page</h1>

    <div class="container">
        <div class="row row-cols-1 row-cols-lg-6 g-4">

            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="Title" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
