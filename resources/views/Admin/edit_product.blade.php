@extends('Admin.index')
@section('body')
<div class="modal fade" id="edit_image" role="dialog" name="mdl">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Şəkillər</h4>
                <button type="button" class="close bagla" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <form id="image_form">
                    @csrf
                    <label class="form-control">Əsas şəkil</label>
                    <div class="image_upsert" id="image_upsert1">
                        <img class="product_s_pic" src="">
                        <div class="btns_upsert">
                            <button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>
                        </div>
                    </div>
                    <label class="form-control">İkinci şəkil</label>
                    <div class="image_upsert" id="image_upsert2">
                        <img class="product_s_pic" src="">
                        <div class="btns_upsert">
                            <button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>
                        </div>
                    </div>
                    <label class="form-control">Üçüncü şəkil</label>
                    <div class="image_upsert" id="image_upsert3">
                        <img class="product_s_pic" src="">
                        <div class="btns_upsert">
                            <button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>
                        </div>
                    </div>
                    <label class="form-control">Dördüncü şəkil</label>
                    <div class="image_upsert" id="image_upsert4">
                        <img class="product_s_pic" src="">
                        <div class="btns_upsert">
                            <button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success bagla">Yadda saxla</button>
            </div>
        </div>

    </div>
</div>
@foreach($products as $product)
<div class="mainproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 col-sm12-col-12 product-photo">
                <section class="content">
                    <div class="big-image">
                        <button id="{{$product->id}}" class="btn btn-info edit_images" data-toggle="modal" data-target="#edit_image"><i class="fa fa-pencil"></i></button>
                        <img id="picture" src="{{asset('images/'.$product->image1.'')}}">
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 col-3 col-md-3">
                            <div class="thumb" onclick="document.getElementById('picture').src=''+document.getElementById('image1').src+''">
                                <img id="image1" src="{{asset('images/'.$product->image1.'')}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-3 col-md-3">
                            <div class="thumb" onclick="document.getElementById('picture').src=''+document.getElementById('image2').src+''">
                                <img id="image2" src="{{asset('images/'.$product->image2.'')}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-3 col-md-3">
                            <div class="thumb" onclick="document.getElementById('picture').src=''+document.getElementById('image3').src+''">
                                <img id="image3" src="{{asset('images/'.$product->image3.'')}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-3 col-md-3">
                            <div class="thumb" onclick="document.getElementById('picture').src=''+document.getElementById('image4').src+''">
                                <img id="image4" src="{{asset('images/'.$product->image4.'')}}">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 product-info">
                <button id="{{$product->id}}" class="btn btn-info edit_product"><i class="fa fa-pencil"></i></button>
                <p class="caption"><span id="edit_p_name">{{$product->name}}</span></p>
                @if($product->content == '')
                    <p>Tərkibi : <span id="edit_p_ingredient">{{$product->ingredient}}</span></p>
                    <p><span id="edit_p_value">{{$product->value}}</span> qr. Məhsulun qida dəyəri: </p>
                    <p>Zülal, q.-<span id="edit_p_protein">{{$product->protein}}</span></p>
                    <p>Yağ, q.-<span id="edit_p_fat">{{$product->fat}}</span></p>
                    <p>Enerji dəyəri – <span id="edit_p_energy">{{$product->energy}}</span> kC (264 kkal)</p>
                    <p>Net çəkisi, kq.- <span id="edit_p_weight">{{$product->weight}}</span> (+/-3%)</p>
                    <p>Saxlama müddəti: <span id="edit_p_life">{{$product->life}}</span> saat</p>
                    <p>Saxlama şəraiti: <span id="edit_p_condition">{{$product->condition}}</span></p>
                @else
                    <p><span id="edit_p_content">{!!$product->content!!}</span></p>
                @endif
                <p>Qiyməti: <span id="edit_p_price">{{$product->price}}</span> manat</p>
                <p>Kateqoriyası: <span id="edit_p_category">{{$product->category}}</span></p>
            </div>
        </div>
    </div>
</div>
@endforeach
<script>

        $('.product-info').on('click','.edit_product',function () {
            setTimeout(function() {
            $('#category_select').append('' +
                '@foreach($categories as $category)\n' +
                '    <option value="{{$category->category}}" id="{{$category->id}}">{{$category->category}}</option>\n' +
                '@endforeach
                    <option value="Digər çeşidlər">Digər çeşidlər</option>');
            }, 300);
        });
</script>
@endsection
