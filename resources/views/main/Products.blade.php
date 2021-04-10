@extends('main.index2')
@section('secondary')
    <span id="bc_img" name="products"></span>
    <div class="mehsullar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-12 col-md-12 col-12 mainfilter">
                        <p class="kataloq">KATALOQ</p>
                        @foreach($categories as $category)
                            <p class="filter" id="{{$category->category}}">
                                <i class="fas fa-caret-right" ></i>{{$category->category}}
                            </p>
                        @endforeach
                        <p class="filter" id="Digər çeşidlər">
                            <i class="fas fa-caret-right" ></i>Digər çeşidlər
                        </p>
                    </div>
                    <div class="col-lg-10 col-sm-12 col-md-12 col-12 prods">
                        <div class="container">
                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-lg-4 col-sm-12 col-md-12 col-12 box" name="{{$product->category}}">
                                        <a href="/mainproduct/{{$product->id}}">
                                            <div class="photo product-pht">
                                                <img src="{{asset('images/'.$product->image1.'')}}" alt="">
                                            </div>
                                            <p class="l-dymdn-istehsal">{{$product->name}}</p>
                                            <p class="Masir-texnologiyada-Copy">{{$product->weight*1000}} qr</p>
                                            <p class="Masir-texnologiyada-Copy">{{round($product->price, 2)}} AZN</p>

                                        </a>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
