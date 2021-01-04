@extends('main.index2')
@section('secondary')

    <span id="bc_img" name="about"></span>
    <div class="maintext">
            <div class="container">
                <div class="slide-text">
                    <div class="container">
                            <p class="n-geni-mhsul-ei">№1 Çorək Zavodu</p>
                            <p class="Satda-olan-rk-v ">Haqqımızda</p>
                    </div>
                </div>
                @foreach($aboutus as $about)
                    {!! $about->content !!}
                @endforeach
            </div>
        </div>



        <div class="slide-text2" >
            <div class="container">
                    <p class="Hr-yerd-1-ol">Hər yerdə №1 ol</p>
                    <p class="Mhsullarmz-keyfiy">Məhsullarımız keyfiyyəti ilə öndə</p>
            </div>
        </div>

    @if($advertisements->count() > 0)
        <div class="products">
            <div class="container">
                <div class="row">
                    @foreach($advertisements as $advertisement)
                        <div class="col-lg-4 box col-xl-4 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-duration="2000" >
                            <div class="photo">
                                <img src="{{asset('images/'.$advertisement->image)}}" alt="">
                            </div>
                            <p class="l-dymdn-istehsal">{{$advertisement->name}}</p>
                            <p class="Masir-texnologiyada-Copy">{{$advertisement->about}}</p>
                            <a href="advertisement/{{$advertisement->id}}">
                    <span class="TRAFLI ">ƏTRAFLI
                            <i class="material-icons ox" style="transform: scale(-1);">keyboard_backspaces</i>
                        </span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif




        <div class="plus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 col-12">
                        <div class="number">
                            <img src="{{asset('img/group-32.png')}}" alt="">
                            <span class=" k counter" data-count="200">0</span>
                            <span class="k">k+</span>
                        </div>
                        <p class="rk-gn-rzind-bi">  <span> ƏDƏD</span>  <br>
                        buğda tərkibli çeşidlər  gün ərzində bişirilir</p>
                    </div>
                    <div class="col-lg-3 col-xl-3 ccol-md-12 col-sm-12 col-12">
                        <div class="number">
                            <img src="{{asset('img/group-33.png')}}" alt="">
                            <span class=" k counter" data-count="100">0</span>
                            <span class="k">k+</span>
                        </div>
                        <p class="rk-gn-rzind-bi"> <span>ƏDƏD</span>   <br>
                            istehsalatda çalışır</p>
                    </div>
                    <div class="col-lg-3 col-xl-3 ccol-md-12 col-sm-12 col-12">
                        <div class="number">
                            <img src="{{asset('img/group-34.png')}}" alt="">
                            <span class=" k counter" data-count="400">0</span>
                            <span class="k">k+</span>
                        </div>
                        <p class="rk-gn-rzind-bi"> <span>ƏDƏD</span>   <br>
                        şirniyyat çeşidləri gün ərzində bişirilir</p>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 col-12 ">
                        <div class="number">
                            <img src="{{asset('img/group-35.png')}}" alt="">
                            <span class="k counter" data-count="168">0</span>
                            <span class="k">k+</span>
                        </div>
                        <p class="rk-gn-rzind-bi"> <span>ƏDƏD</span>  <br>
                        çovdar tərkiblə çeşidlər gün ərzində bişirilir</p>
                    </div>
                </div>
            </div>
        </div>

@endsection
