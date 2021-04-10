@extends('main.index')
@section('main')

    <span id="bc_img" name="mainpage"></span>
    <div class="plus2">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 col-12">
                    <img src="{{asset('img/chef-copy-2.png')}}"  data-aos-duration="2000" data-aos="zoom-in"alt="">
                    <p class="Peakar-mtxssisl">Peşakar<br>mütəxəssislər</p>
                    <p class="Masir-texnologiyada">Müasir texnologiyadan istifadə və professional personalın işə cəlb edilməsi ilə biz yüksək</p>
                </div>
                <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 col-12">
                    <img src="{{asset('img/health-care-copy.png')}}"  data-aos-duration="2000" data-aos="zoom-in"alt="">
                    <p class="Peakar-mtxssisl">Sağlamlığınızı  <br>
                        düşünərək</p>
                    <p class="Masir-texnologiyada">Müasir texnologiyadan istifadə və professional personalın işə cəlb edilməsi ilə biz yüksək</p>
                </div>
                <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 col-12">
                    <img src="{{asset('img/combined-shape.png')}}" data-aos-duration="2000"  data-aos="zoom-in" alt="">
                    <p class="Peakar-mtxssisl">Əl dəymədən <br>
                        istehsal</p>
                    <p class="Masir-texnologiyada">Müasir texnologiyadan istifadə və professional personalın işə cəlb edilməsi ilə biz yüksək</p>
                </div>
                <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 col-12">
                    <img src="{{asset('img/combined-shape1.png')}}" data-aos-duration="2000" data-aos="zoom-in" alt="">
                    <p class="Peakar-mtxssisl">Alman <br>
                        keyfiyyəti</p>
                    <p class="Masir-texnologiyada">Müasir texnologiyadan istifadə və professional personalın işə cəlb edilməsi ilə biz yüksək</p>
                </div>


            </div>
        </div>
    </div>




    <div class="slide-text">
        <div class="container">
            <p class="n-geni-mhsul-ei">Ən geniş məhsul çeşidi</p>
            <p class="Satda-olan-rk-v ">Satışda olan çörək
                və şirniyyatlar</p>
        </div>
    </div>


    <div class="tabmenu">
        <div class="container">
            <div class="newparts">
                <div class="buttons d-flex align-items-center justify-content-center row">
                    @foreach($categories as $category)
                    <button id="{{$category->category}}" class="newpart-botton col-12 col-sm-12 col-lg-3">{{$category->category}}</button>
                    @endforeach
                        <button id="Digər çeşidlər" class="newpart-botton col-12 col-sm-12 col-lg-3">Digər çeşidlər</button>
                </div>

                <div class="opentext">
                    <div class="slider">
                        <div class="main">
                            <div class="slider slider-nav1 asdf">
                                @foreach($products as $product)
                                <div class="boxs">
                                    <a name="{{$product->category}}"  href="/mainproduct/{{$product->id}}">
                                    <div class="image">
                                        <img src="{{asset('images/'.$product->image1)}}" >
                                    </div>
                                    <span class="Kpkli-baton-75">{{$product->name}}</span> <br>
                                    <span class="la-nv-buda-ununda">Əla növ buğda unundan</span> <br>
                                    <img style="display: inline;" src="{{asset('img/combined-shape-copy.png')}}" alt="">
                                    <span class="-kg">{{$product->weight}} kg</span>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
{{--                    <div class="slider">--}}
{{--                        <div class="carousel-wrap">--}}
{{--                            <div id="owl-carousel" class="owl-carousel">--}}
{{--                                @foreach($products as $product)--}}
{{--                                    <a name="{{$product->category}}"  href="/mainproduct/{{$product->id}}">--}}
{{--                                        <div class="boxs item">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="{{asset('images/'.$product->image1)}}">--}}
{{--                                            </div>--}}
{{--                                            <span class="Kpkli-baton-75">{{$product->name}}</span> <br>--}}
{{--                                            <span class="la-nv-buda-ununda">Əla növ buğda unundan</span> <br>--}}
{{--                                            <img style="display: inline;" class="image2" src="{{asset('img/combined-shape-copy.png')}}" alt="">--}}
{{--                                            <span class="-kg">{{$product->weight}} kg</span>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>





    <div class="corek2   " >
        <div class="container">
            <div class="row">
                <div class="text2 " id="videotext"  data-aos="fade-right" data-aos-duration="2000">
                    <p class="n-son-texnologiyala">Ən son texnologiyalarla <br>
                        hazırlanan çörək çeşidləri</p>
                    <p class="Biz-biirdiyimiz-r">Biz bişirdiyimiz çörəyə <br>
                        ilk toxunan siz olun!</p>
                    <p class="Masir-texnologiyada">Müasir texnologiyadan istifadə və professional personalın işə cəlb edilməsi ilə biz yüksək <br> keyfiyyətin saxlanılmasını zəmanət altına almışıq.</p>
                    <span class="TRAFLI ">ƏTRAFLI
                        <i class="material-icons ox" style="transform: scale(-1);">keyboard_backspaces</i>
                    </span>
                </div>
            </div>
        </div>
        <div class="hero-wrapper">
            <div class="hero">
                <figure>
                    <video autoplay muted loop>
                        <source src="{{asset('video/№1 Gilan Çörək Zavodu - Reklam (Video Çarx).mp4')}}" type="video/mp4">
                    </video>
                </figure>
            </div>
        </div>
        <div class="overlay"></div>
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
