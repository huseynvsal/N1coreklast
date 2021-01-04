@extends('main.index2')
@section('secondary')
    <div class="container mt-5">
        <div class="row">
            @foreach($advertisements as $advertisement)
                <div class="col-6 container">
                    <img style="width: 100%" src="{{asset('images/'.$advertisement->image)}}" alt="">
                </div>
                <div class="col-9 container mt-5">
                    {!! $advertisement->content !!}
                </div>
            @endforeach
        </div>
    </div>
@endsection
