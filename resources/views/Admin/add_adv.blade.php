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
                    <h4 class="page-title">Reklam Əlavə et</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Reklam Əlavə et</li>
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
                                <form id="adv">
                                    @csrf
                                    <p>Örtük şəkli</p>
                                    <input type="file" name="cover_image" accept="image/*" class="form-control"><br>
                                    <p>Başlıq</p>
                                    <input type="text" name="name" class="form-control"><br>
                                    <p>Qısa məzmun </p>
                                    <textarea name="about" id="" class="form-control"></textarea><br>
                                </form>
                            </div><br>
                            <h3 class="container text-center">Səhifənin məzmunu </h3><br>
                            <textarea name="text" id="myTextarea" class="tinymce"></textarea>
                            <br>
                            <input name=image type=file id="upload" hidden onchange="">
                            <button type="button" class="add_product btn btn-lg btn-dark offset-5">Əlavə et</button>
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
        tinymce.init({
            selector: '.tinymce',
            height: 800,
            width: 1190,
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
        $(document).on('click' , '.btn-dark' , function (){
            var mycontent = tinymce.get("myTextarea").getContent();
            var formData = new FormData($('#adv')[0]);
            formData.append('mycontent',mycontent)
            $.ajax({
                type: "POST",
                url: "add_adv",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.message == 'success') {
                        toastr.success('Məlumatlar yeniləndi');
                        $('input[name=name]').val('');
                        $('textarea[name=about]').val('');
                        $('input[name=cover_image]').val('');
                        tinymce.get("myTextarea").setContent('');
                    }
                },
                error: function (request, error, response) {
                    toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                }
            });

        })
    </script>
@endsection
