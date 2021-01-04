@extends('main.index2')
@section('secondary')
    <div class="container mt-5">

        <div class="row">
            @foreach($news as $new)
                <div class="col-6 container">
                    <img style="width: 100%" src="{{asset('images/'.$new->image)}}" alt="">
                </div>
            <div class="col-9 container mt-5">
                {!! $new->content !!}
            </div>

            @endforeach
        </div>
    </div>

@endsection
