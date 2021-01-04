@extends('Admin.index')
@section('body')
<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Məhsullar cədvəli</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Məhsullar cədvəli</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="container col-2"><br>


                                </div><br>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr id="less_info">
                                                <th class="text-center" scope="col">Düzəlt/Sil</th>
                                                <th class="text-center" scope="col">#</th>
                                                <th class="text-center" scope="col">ID</th>
                                                <th class="text-center" scope="col">Məhsulun adı</th>
                                                <th class="text-center" scope="col">Şəkil</th>
                                                <th class="text-center" scope="col">Qiymət (manat)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $key=>$product)
                                            <tr class="tr" id="{{$product->id}}">
                                                <td class="text-center"><a href="edit_product/{{$product->id}}"><button class="btn btn-info"><i class="fa fa-pencil"></i></button></a><br><br><button class="btn btn-danger delete_product" href="#product_confirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>
                                                <th class="text-center" scope="row">{{$key+1}}</th>
                                                <th class="text-center" scope="row">{{$product->id}}</th>
                                                <td class="text-center name">{{$product->name}}</td>
                                                <td class="text-center"><input class="product-img" type="image" src="{{asset('images/'.$product->image1.'')}}"></td>
                                                <td class="text-center">{{$product->price}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Modal HTML -->
                                <div id="product_confirm" class="modal fade" name="confirm">
                                    <div class="modal-dialog modal-confirm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="icon-box">
                                                    <i class="material-icons">&#xE5CD;</i>
                                                </div>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Bu məlumatları silmək istədiyinə əminsən?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Xeyr</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Bəli</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
        </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->

@endsection
