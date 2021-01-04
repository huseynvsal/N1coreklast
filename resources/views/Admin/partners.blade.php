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
                    <h4 class="page-title">Partnyorlar Cədvəli</h4>
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
                <div class="col-6 container">
                    <div class="card">
                        <div class="card-body">
                            <div class="elave_divi col-3 container mb-3" >
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addpartnermodal">Əlavə et</button>
                            </div>


                            <div class="modal fade" id="addpartnermodal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Əlavə etmə</h4>
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_partner">
                                                @csrf
                                                <input type="file" name="image" accept="image/*" class="form-control"><br>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark add_partner">Əlavə et</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="modal fade" id="editpartnermodal" role="dialog" name="">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Düzəliş etmə</h4>
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_partner">
                                                @csrf
                                                <input type="file" name="image" accept="image/*" class="form-control"><br>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success edit_partner ">Yadda saxla</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">#</th>
                                        <th class="text-center" scope="col">Şəkil</th>
                                        @can('isAdmin')<th class="text-center" scope="col">Düzəlt / Sil</th>@endcan
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($partners as $key=>$partner)
                                        <tr id="{{$partner->id}}">
                                            <th class="text-center" scope="row">{{$key+1}}</th>
                                            <td class="text-center"><input class="partner-img" style="width: 140px; height: 90px" type="image" src="{{asset('img/'.$partner->image.'')}}"></td>
                                            <td class="text-center"><button class="btn btn-info edit-partner" data-toggle="modal" data-target="#editpartnermodal"><i class="fa fa-pencil"></i></button><br><br><button class="btn btn-danger delete-partner" href="#deletepartnermodal" data-toggle="modal"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Modal HTML -->
                            <div id="deletepartnermodal" class="modal fade" name="">
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
                                            <button type="button" class="btn btn-danger delete_partner" data-dismiss="modal">Bəli</button>
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
