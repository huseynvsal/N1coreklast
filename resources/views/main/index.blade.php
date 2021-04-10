<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N1CorekZavodu</title>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <script>
        var csrftoken = "{{ csrf_token() }}"
    </script>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('slick/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('slick/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('slick/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('slick/css/style.css.map')}}">
    <link rel="stylesheet" href="{{asset('slick/css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/toast.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/fullpage.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullpage.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6 col-sm-6 col-xl-6 left">
                        <div class="Bitmap">
                            <i class="material-icons">phone_in_talk</i>
                        </div>
                        <span class="Qaynar-xtt-994-12">Qaynar xətt: (994 12) 565 26 68</span>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-6  col-6 col-sm-6 right">
                        <span class="AZ">AZ</span>
                        <span class="EN">EN</span>
                        <span class="RU"> RU</span>
                        <div class="Group-2">
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header3">
            <div class="container">
                <div class="header2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-xl-4 col-md-4  col-sm-4 col-4 left">
                                <div class="Group-12">
                                    <a href="/"><img src="{{asset('img/group-12.png')}}" alt=""></a>
                                </div>
                                <div class="Bitmap1">
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-8 col-md-8  col-sm-8 col-8 right">
                                <div class="dropdown">
                                    <div class="dropbtn">
                                        <a class="Haqqmzda" href="/about">HAQQIMIZDA</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <div class="dropbtn">
                                        <a class="Virtual-tur" href="/virtualtur">VİRTUAL  TUR</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <div class="dropbtn">
                                        <a class="Mhsullar" href="/products">MƏHSULLAR</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <div class="dropbtn">
                                        <a class="laq " href="/contact">ƏLAQƏ</a>
                                    </div>
                                </div>
                            </div>
                            <span class="phone" style="right: 81px;top: 86px;font-size: 50px;cursor:pointer;z-index: 999;position: absolute;color: white;" onclick="openNav()">&#9776;</span>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="left">
                                <div class="Bitmap">
                                    <i class="material-icons">phone_in_talk</i>
                                </div>
                                <span class="Qaynar-xtt-994-12">Qaynar xətt: (994 12) 565 26 68</span>
                            </div>
                            <div class="right">
                                <span class="AZ">AZ</span>
                                <span class="EN">EN</span>
                                <span class="RU"> RU</span>
                            </div>
                                <div class="links">
                                    <a href="/about">HAQQIMIZDA</a>
                                <a href="/virtualtur">VİRTUAL  TUR</a>
                                <a href="/products">MƏHSULLAR</a>
                                <a href="/contact">ƏLAQƏ</a>
                                </div>
                              </div>

                            </div>
                </div>
                </div>
            </div>


            <div class="sliderall">
                <div class="image">
                    <img class="img-fluid" style="justify-content: center;" src="{{asset('img/56095-bread-wallpaper-2880x1800-158396407148138.jpg')}}" alt="">
                    <div class="image-text" >
                            <p class="n-son-texnologiyala">Ən son texnologiyalarla <br>
                                hazırlanan çörək çeşidləri</p>
                            <p class="Biz-biirdiyimiz-r" >Biz bişirdiyimiz çörəyə <br>
                                ilk toxunan siz olun!</p>
                            <p class="Masir-texnologiyada" >Müasir texnologiyadan istifadə və professional personalın işə cəlb edilməsi ilə biz yüksək <br> keyfiyyətin saxlanılmasını zəmanət altına almışıq.</p>
                            <span class="TRAFLI ">ƏTRAFLI
                                <i class="material-icons ox" style="transform: scale(-1);">keyboard_backspaces</i>
                            </span>
                        </div>
                    <div class="overlay"></div>
                    <div class="ortuk"></div>
                </div>
                <div class="image">
                    <img class="img-fluid" style="justify-content: center;" src="{{asset('img/wp2003973.jpg')}}" alt="">
                    <div class="image-text" >
                        <p class="n-son-texnologiyala">Ən isti,tazə <br>
                            müxtəlif çörək növləri</p>
                        <p class="Biz-biirdiyimiz-r" >Bizim isti çörək qoxusunu <br>
                            ilk siz hiss edin!</p>
                        <p class="Masir-texnologiyada" >Müasir texnologiyadan istifadə və professional personalın işə cəlb edilməsi ilə biz yüksək <br> keyfiyyətin saxlanılmasını zəmanət altına almışıq.</p>
                        <span class="TRAFLI ">ƏTRAFLI
                            <i class="material-icons ox" style="transform: scale(-1);">keyboard_backspaces</i>
                        </span>
                    </div>
                    <div class="overlay"></div>
                    <div class="ortuk"></div>
                </div>
        </div>
        </div>





@yield('main')
        @if($partners->count() > 0)
        <div class="slide-text4" >
            <div class="container">
                    <p class="Bizim-stnlklrimi">Geniş satış əhatəsi</p>
                    <p class="-rk-zavodu-sah">Partnyorluq etdiyimiz <br>
                        mağaza şəbəkələri</p>
            </div>
        </div>

        <div class="brends brendler">
            <div class="container">
                <div class="brend_images">
                    @foreach($partners as $partner)
                    <div class="image">
                        <img src="{{asset('img/'.$partner->image.'')}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="yellow">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 box1" style="margin-top: 10px; text-align: left;">
                        <span style="font-size: 30px;font-family: Gotham-Bold;text-align: left;">Əks əlaqə</span>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 box2">
                        <i class="fas fa-envelope"></i>
                        <span>INFO@N1COREK.AZ</span>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 box3">
                        <i class="fas fa-phone-volume"></i>
                        <span>(+994 12) 565 26 67</span>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 box4" style="padding: 0%;">
                        <button><a href="#ex1" rel="modal:open">Məktub yaz  </a></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-sm-6 col-6 box1">
                        <img class="img1" src="{{asset('img/group-12.png')}}" srcset="{{asset('img/group-12@2x.png')}} 2x, {{asset('img/group-12@3x.png')}} 3x">
                    </div>
                    <div class="col-lg-2 col-xl-2 col-md-6 col-sm-6 col-6 box1">
                        <img class="img2" src="{{asset('img/logo2.png')}}"srcset="{{asset('img/bitmap1@2x.png')}} 2x,{{asset('img/bitmap1@3x.png')}} 3x">
                    </div>
                    <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12 col-12 box2 row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <p class="Haqqmzda">Haqqımızda</p>
                            <p class="irkt-haqqnda-Rhb">Şirkət haqqında <br>
                                Rəhbərlik <br>
                                Struktur <br>
                                </p>
                        </div>

                        <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
                            <p class="Haqqmzda">Məhsullar</p>
                            <p class="irkt-haqqnda-Rhb">Şirniyyat çeşidləri <br>
                                Buğda tərkiblə çeşidlər <br>
                                Çovdar tərkibli çeşidlər <br>
                                Digər çeşidlər</p>
                        </div>
                        <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
                            <p class="Haqqmzda">Virtual tur</p>
                            <p class="irkt-haqqnda-Rhb">Virtual tur <br>
                                Fotoqalereya <br>
                                Videoqalereya</p>
                        </div>
                        <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
                            <p class="Haqqmzda">Əlaqə</p>
                            <p class="irkt-haqqnda-Rhb">(+994 12) 565 26 68 <br>
                                (+994 12) 565 26 67</p>
                            <p class="irkt-haqqnda-Rhb">Bakı şəhər. Xətai rayonu, Aşıq Ələskər küçəsi. 15A <u>info@n1chorekzavodu.az</u>  <u> www.n1chorekzavodu.az</u></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="xett">
            <hr>
        </div>


        <div class="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 col-12">
                        <p class="zavod1">© 2020 №1 Çörək Zavodu MMC</p>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 col-12">
                        <p class="zavod2">Design by O! idealand 2020</p>
                    </div>
                </div>
            </div>
        </div>






    <div id="ex1" class="modal">
        <p class="p1">Отправить сообщение</p>
        <p class="p2">Заполните все поля формы и отправьте нам сообщение. Наш менеджер свяжется с Вами в ближайшее время.</p>
        <label for="">Ваше имя:*</label>
        <input type="text">
        <label for="">Email:*</label>
        <input type="email">
        <label for="">Email:*</label>
        <input  class="inptext" type="text" placeholder="(___) ___-__-__">
        <label for="">Ваше сообщение:</label>
        <textarea name="" id="" cols="46" rows="5"></textarea>
        <p>Прикрепить вложение:</p>
        <input class="text" type="file">
        <input type="checkbox">
        <span>соглашаюсь с </span>
        <a>Политикой конфиденциальности</a> <br>
        <button class="sendd">Send</button>
        <a href="#close-modal" rel="modal:close" class="close-modal ">X</a>
    </div>



    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-long-arrow-alt-up"></i></button>

</div>



</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('slick/js/jquery.js')}}"></script>
<script src="{{asset('slick/js/slick.js')}}"></script>
{{--<script src="{{asset('slick/js/script.js')}}"></script>--}}
<script src="{{asset('slick/js/script.min.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('js/script2.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('slick/js/jquery.js')}}"></script>
<script src="{{asset('slick/js/slick.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('slick/js/jquery.js')}}"></script>
<script src="{{asset('slick/js/slick.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/toast.js')}}"></script>
<script src="{{asset('js/add.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="{{asset('vendors/easings.min.js')}}"></script>
<script src="{{asset('vendors/scrolloverflow.min.js')}}"></script>
<script src="{{asset('js/fullpage.js')}}"></script>
<script src="{{asset('js/fullpage.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="{{asset('slick/js/jquery.js')}}"></script>
<script src="{{asset('slick/js/slick.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</html>
