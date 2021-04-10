@extends('Admin.index')
@section('body')
    <script src="/assets/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
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
                                    <div style="width: 100%" class="radio d-flex align-items-center justify-content-around">
                                        <label ><input type="radio" class="radio" name="optradio" value="spc" checked> Xüsusiyyət ilə</label>
                                        <label><input type="radio" class="radio" name="optradio" value="about"> Ümumi məlumat ilə</label>
                                    </div>
                                    <input type="file" name="image1" accept="image/*" class="form-control"><br>
                                    <input type="file" name="image2" accept="image/*" class="form-control"><br>
                                    <input type="file" name="image3" accept="image/*" class="form-control"><br>
                                    <input type="file" name="image4" accept="image/*" class="form-control"><br>
                                    <input type="text" name="name" placeholder="Məhsul adı" class="form-control"><br>
                                    <span class="spec">
                                        <input type="text" name="ingredient" placeholder="Tərkibi" class="form-control"><br>
                                        <input type="number" name="value" placeholder="Məhsulun qida dəyəri, q" class="form-control"><br>
                                        <input type="number" name="protein" placeholder="Zülal, q" class="form-control"><br>
                                        <input type="number" name="fat" placeholder="Yağ, q" class="form-control"><br>
                                        <input type="number" name="energy" placeholder="Enerji dəyəri, kC" class="form-control"><br>
                                        <input type="number" name="weight" placeholder="Net çəkisi, kq" class="form-control"><br>
                                        <input type="number" name="life" placeholder="Saxlama müddəti, saat" class="form-control"><br>
                                        <input type="text" name="condition" placeholder="Saxlama şəraiti" class="form-control"><br>
                                    </span>
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
    <script>
        $('input[name=optradio]').change(function () {
            if ($("input[name=optradio]:checked").val() == 'spc') {
                $('.spec').html('');
                $('.spec').append('<input type="text" name="ingredient" placeholder="Tərkibi" class="form-control"><br>\n' +
                    '              <input type="number" name="value" placeholder="Məhsulun qida dəyəri, q" class="form-control"><br>\n' +
                    '              <input type="number" name="protein" placeholder="Zülal, q" class="form-control"><br>\n' +
                    '              <input type="number" name="fat" placeholder="Yağ, q" class="form-control"><br>\n' +
                    '              <input type="number" name="energy" placeholder="Enerji dəyəri, kC" class="form-control"><br>\n' +
                    '              <input type="number" name="weight" placeholder="Net çəkisi, kq" class="form-control"><br>\n' +
                    '              <input type="number" name="life" placeholder="Saxlama müddəti, saat" class="form-control"><br>\n' +
                    '              <input type="text" name="condition" placeholder="Saxlama şəraiti" class="form-control"><br>')
                $('.add_p_content').addClass('add_product');
                $('.add_product').removeClass('add_p_content');
            }
            if ($("input[name=optradio]:checked").val() == 'about') {
                $('.spec').html('');
                $('.spec').append('<textarea name="text" id="myTextarea" class="tinymce"></textarea><br>');
                tinymce.init({
                    selector: '.tinymce',
                    height: 400,
                    width: 574,
                    verify_html: false,
                    theme: 'silver',
                    plugins: [
                        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                        'searchreplace wordcount visualblocks visualchars code fullscreen table',
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "emoticons template paste textcolor colorpicker textpattern"
                    ],
                    toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                    toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help | tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
                    image_advtab: true,
                    file_picker_callback: function(callback, value, meta) {
                        if (meta.filetype == 'image') {
                            $('#upload').trigger('click');
                            $('#upload').on('change', function() {
                                var file = this.files[0];
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    callback(e.target.result, {
                                        alt: ''
                                    });
                                };
                                reader.readAsDataURL(file);
                            });
                        }
                    },
                    templates: [{
                        title: 'Test template 1',
                        content: 'Test 1'
                    },
                        {
                            title: 'Test template 2',
                            content: 'Test 2'
                        }
                    ],
                    content_css: []
                });
                $('.add_product').addClass('add_p_content');
                $('.add_p_content').removeClass('add_product');
            }
        })
    </script>
@endsection
