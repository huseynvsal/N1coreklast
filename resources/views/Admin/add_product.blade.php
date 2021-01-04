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
                    <h4 class="page-title">Məhsul Əlavə et</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Məhsul Əlavə et</li>
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
                            <div class="container col-6">
                                <br>
                                <!-- Modal -->
                                <form id="add_product">
                                    @csrf
                                    <input type="file" name="image1" accept="image/*" class="form-control"><br>
                                    <input type="file" name="image2" accept="image/*" class="form-control"><br>
                                    <input type="file" name="image3" accept="image/*" class="form-control"><br>
                                    <input type="file" name="image4" accept="image/*" class="form-control"><br>
                                    <input type="text" name="name" placeholder="Məhsul adı" class="form-control"><br>
                                    <input type="text" name="ingredient" placeholder="Tərkibi" class="form-control"><br>
                                    <input type="number" name="value" placeholder="Məhsulun qida dəyəri, q" class="form-control"><br>
                                    <input type="number" name="protein" placeholder="Zülal, q" class="form-control"><br>
                                    <input type="number" name="fat" placeholder="Yağ, q" class="form-control"><br>
                                    <input type="number" name="energy" placeholder="Enerji dəyəri, kC" class="form-control"><br>
                                    <input type="number" name="weight" placeholder="Net çəkisi, kq" class="form-control"><br>
                                    <input type="number" name="life" placeholder="Saxlama müddəti, saat" class="form-control"><br>
                                    <input type="text" name="condition" placeholder="Saxlama şəraiti" class="form-control"><br>
                                    <input type="number" name="price" placeholder="Qiyməti, manat" class="form-control"><br>
                                    <select name="category" class="form-control">
                                        <option disabled hidden selected>Kateqoriya</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->category}}" id="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                        <option value="Digər çeşidlər">Digər çeşidlər</option>
                                    </select>
                                </form>
                                <button type="button" class="add_product btn btn-lg btn-dark offset-5">Əlavə et</button>
                            </div><br>

                            <!-- Modal HTML -->

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
@endsection
