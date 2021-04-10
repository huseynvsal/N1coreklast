$('.col-6').on('click','.add_product',function(){
    var formData = new FormData($('#add_product')[0]);
    $.ajax({
        type: "POST",
        url: "add_product",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Məhsul Əlavə olundu');
                $('input[name=image1]').val('');
                $('input[name=image2]').val('');
                $('input[name=image3]').val('');
                $('input[name=image4]').val('');
                $('input[name=name]').val('');
                $('input[name=ingredient]').val('');
                $('input[name=value]').val('');
                $('input[name=protein]').val('');
                $('input[name=fat]').val('');
                $('input[name=energy]').val('');
                $('input[name=weight]').val('');
                $('input[name=life]').val('');
                $('input[name=condition]').val('');
                $('input[name=price]').val('');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$('.col-6').on('click','.add_p_content',function(){
    var formData = new FormData($('#add_product')[0]);
    var content = tinymce.get("myTextarea").getContent();
    formData.append('mycontent', content);
    $.ajax({
        type: "POST",
        url: "add_p_content",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Məhsul Əlavə olundu');
                $('input[name=image1]').val('');
                $('input[name=image2]').val('');
                $('input[name=image3]').val('');
                $('input[name=image4]').val('');
                $('input[name=name]').val('');
                $('input[name=price]').val('');
                $('textarea[name=text]').text('');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$('table tbody').on('click','.delete_product',function(){
    var id = $(this).parents('tr').attr('id');
    $('#product_confirm').attr('name',id);
});

$('#product_confirm').on("click", ".btn-danger" ,function()
{
    var id = $(this).parents('#product_confirm').attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_product",
        data: {
            'id':id, "_token": csrftoken
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                toastr.success('Məhsul silindi');
                tr.remove();
                sehifele();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});

function sehifele() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('th:eq(0)').text(++i);
    })
}



$('.modal-footer').on('click','.add_partner',function(){
    var formData = new FormData($('#add_partner')[0]);
    $.ajax({
        type: "POST",
        url: "add_partner",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.message == 'success') {
                toastr.success('Partnyor Əlavə olundu');
                $('tbody').append('<tr id="' + response.id + '">' +
                    '<th class="text-center" scope="row"></th>\n' +
                    '<td class="text-center"><input class="partner-img" style="width: 140px; height: 90px" type="image" src="img/' + response.status + '"></td>\n' +
                    '<td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#editpartnermodal"><i class="fa fa-pencil"></i></button><br><br><button class="btn btn-danger" href="#deletepartnermodal" data-toggle="modal"><i class="fa fa-trash"></i></button></td>\n' +
                    '</tr>');
                $('#addpartnermodal').modal('hide');
                sehifele();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
$('table tbody').on('click','.delete-partner',function(){
    var id = $(this).parents('tr').attr('id');
    console.log(id);
    $('#deletepartnermodal').attr('name',id);
});
$('#deletepartnermodal').on("click", ".delete_partner" ,function()
{
    var id = $(this).parents('#deletepartnermodal').attr('name');
    var tr = $('#'+id+'');
    console.log(id)
    $.ajax({
        type: "POST",
        url: "delete_partner",
        data: {
            'id':id, "_token": csrftoken
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                toastr.success('Partnyor silindi!');
                tr.remove();
                sehifele();
            }
        }
    })
});
$('table tbody').on('click','.edit-partner', function (){
    var id = $(this).parents('tr').attr('id');
    $('#editpartnermodal').attr('name',id);
});
$('#editpartnermodal .modal-footer').on('click','.edit_partner',function() {
    var formData = new FormData($('#edit_partner')[0]);
    var id = $(this).parents('#editpartnermodal').attr('name');
    var tr = $('#'+id+'');
    formData.append('id',id);
    $.ajax({
        type: "POST",
        url: "/edit_partner",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.message == 'success') {
                toastr.success('Partnyor məlumatları yeniləndi');
                if($('#editpartnermodal input[name=image]').get(0).files.length !== 0){
                    tr.find($('.partner-img')).attr('src','images/'+response.file+'');
                }
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$('.modal-footer').on("click", ".add_category" ,function()
{
    var cat_input = $(this).parents('.modal-content').find('input[name=category]');
    var category = $(this).parents('.modal-content').find('input[name=category]').val().trim();
    $.ajax({
        type: "POST",
        url: "add_category",
        data: {
            'category':category, "_token": csrftoken
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                toastr.success('Kateqoriya əlavə olundu')
                $('tbody').append('<tr id="' + response.id + '">' +
                    '<th class="text-center" scope="row"></th>\n' +
                    '<td class="text-center">' + category + '</td>\n' +
                    '<td class="text-center"><button class="btn btn-info edit_category" data-toggle="modal" data-target="#edit_cat"><i class="fa fa-pencil"></i></button><br><br><button class="btn btn-danger delete_category" href="#category_confirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>\n' +
                    '</tr>');
                cat_input.val('');
                $('#add_cat').modal('hide');
                sehifele();
            }
        }
    })
});

$('table').on('click', '.edit_category', function (){
    var id = $(this).parents('tr').attr('id');
    $('#edit_cat').attr('name',id);
    var cat = $(this).parents('tr').find('td:eq(0)').text().trim();
    $('#edit_cat').find('input[name=category]').val(cat);

});

$('#edit_cat .modal-footer').on('click','.edit_cat',function() {
    var category = $(this).parents('#edit_cat').find('input[name=category]').val().trim();
    var id = $(this).parents('#edit_cat').attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "edit_category",
        data: {
            'id':id, 'category':category, "_token": csrftoken
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                toastr.success('Kateqoriya məlumatı yeniləndi')
                tr.find('td:eq(0)').text(category);
                $('#edit_cat').modal('hide');
            }
        }
    })
});


$('.content .big-image').on('click','.edit_images',function(){
    var id = $(this).attr('id');
    $('#edit_image').attr('name',id);
    $a = $('#image1').attr('src');
    $('#image_upsert1 img').attr('src',$a);
    $b = $('#image2').attr('src');
    $('#image_upsert2 img').attr('src',$b);
    $c = $('#image3').attr('src');
    $('#image_upsert3 img').attr('src',$c);
    $d = $('#image4').attr('src');
    $('#image_upsert4 img').attr('src',$d);

    $('#image_upsert1').on('click','.btns_upsert .btn-info',function(){
        $('#image_upsert1').html('<input accept="image/*" type="file" name="image1" class="form-control"><br><button class="btn btn-warning"><i class="fa fa-times"></i></button>');
    });

    $('#image_upsert1').on('click','.btn-warning', function(){
        $('#image_upsert1').html('<img class="product_s_pic" src="'+$a+'">\n' +
            '<div class="btns_upsert">\n' +
            '<button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>\n' +
            '</div>');
    });

    $('#image_upsert2').on('click','.btns_upsert .btn-info',function(){
        $('#image_upsert2').html('<input accept="image/*" type="file" name="image2" class="form-control"><br><button class="btn btn-warning"><i class="fa fa-times"></i></button>');
    });

    $('#image_upsert2').on('click','.btn-warning', function(){
        $('#image_upsert2').html('<img class="product_s_pic" src="'+$b+'">\n' +
            '<div class="btns_upsert">\n' +
            '<button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>\n' +
            '</div>');
    });

    $('#image_upsert3').on('click','.btns_upsert .btn-info',function(){
        $('#image_upsert3').html('<input accept="image/*" type="file" name="image3" class="form-control"><br><button class="btn btn-warning"><i class="fa fa-times"></i></button>');
    });

    $('#image_upsert3').on('click','.btn-warning', function(){
        $('#image_upsert3').html('<img class="product_s_pic" src="'+$c+'">\n' +
            '<div class="btns_upsert">\n' +
            '<button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>\n' +
            '</div>');
    });

    $('#image_upsert4').on('click','.btns_upsert .btn-info',function(){
        $('#image_upsert4').html('<input accept="image/*" type="file" name="image4" class="form-control"><br><button class="btn btn-warning"><i class="fa fa-times"></i></button>');
    });

    $('#image_upsert4').on('click','.btn-warning', function(){
        $('#image_upsert4').html('<img class="product_s_pic" src="'+$d+'">\n' +
            '<div class="btns_upsert">\n' +
            '<button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>\n' +
            '</div>');
    });

    $('#edit_image .modal-footer').on('click','.btn-success',function (){
        var formData = new FormData($('#image_form')[0]);
        if($('input[name=image1]').length){
            if ($('input[name=image1]').get(0).files.length !== 0){
                var image1 = $('input[name=image1]').val().replace(/C:\\fakepath\\/i, '');
            }
            else{
                toastr.error('Şəkil daxil etməlisiniz!!!')
            }
        }
        if($('input[name=image2]').length) {
            if ($('input[name=image2]').get(0).files.length !== 0) {
                var image2 = $('input[name=image2]').val().replace(/C:\\fakepath\\/i, '');
            }
            else{
                toastr.error('Şəkil daxil etməlisiniz!!!')
            }
        }
        if($('input[name=image3]').length) {
            if ($('input[name=image3]').get(0).files.length !== 0) {
                var image3 = $('input[name=image3]').val().replace(/C:\\fakepath\\/i, '');
            }
            else{
                toastr.error('Şəkil daxil etməlisiniz!!!')
            }
        }
        if($('input[name=image4]').length) {
            if ($('input[name=image4]').get(0).files.length !== 0) {
                var image4 = $('input[name=image3]').val().replace(/C:\\fakepath\\/i, '');
            }
            else{
                toastr.error('Şəkil daxil etməlisiniz!!!')
            }
        }
        formData.append('id', id);
        $.ajax({
            type: "POST",
            url: "/edit_images",
            data: formData,
            cache:false,
            processData:false,
            contentType:false,
            success:function (response){
                if (response.message == 'success') {
                    if($('input[name=image1]').length) {
                        if($('input[name=image1]').get(0).files.length !== 0){
                            var src1 =URL.createObjectURL($('input[name=image1]').get(0).files[0]);
                            $('#image1').attr('src' , src1);
                            $('#picture').attr('src' , src1);
                        }
                    }
                    if($('input[name=image2]').length) {
                        if($('input[name=image2]').get(0).files.length !== 0){
                            var src2 =URL.createObjectURL($('input[name=image2]').get(0).files[0]);
                            $('#image2').attr('src' , src2);
                        }

                    }
                    if($('input[name=image3]').length) {
                        if($('input[name=image3]').get(0).files.length !== 0) {
                            var src3 =URL.createObjectURL($('input[name=image3]').get(0).files[0]);
                            $('#image3').attr('src' , src3);
                        }
                    }
                    if($('input[name=image4]').length) {
                        if($('input[name=image4]').get(0).files.length !== 0) {
                            var src3 =URL.createObjectURL($('input[name=image4]').get(0).files[0]);
                            $('#image4').attr('src' , src3);
                        }
                    }
                    toastr.success('Dəyişikliklər yadda saxlanıldı');
                    $('#edit_image').modal('hide');
                }
            },
            error: function (request, error, response) {
                toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
            }
        });
    });
});
$('.product-info').on('click','.edit_product',function () {
    var id = $(this).attr('id');
    var name = $('#edit_p_name').text();
    var ingredient = $('#edit_p_ingredient').text();
    var value = $('#edit_p_value').text();
    var protein = $('#edit_p_protein').text();
    var fat = $('#edit_p_fat').text();
    var energy = $('#edit_p_energy').text();
    var weight = $('#edit_p_weight').text();
    var life = $('#edit_p_life').text();
    var condition = $('#edit_p_condition').text();
    var price = $('#edit_p_price').text();
    var category = $('#edit_p_category').text();
    var content = $('.product-info pre').html();
    // if (content == ''){
        $(this).parents('.product-info').html('  <input value="'+name+'" type="text" name="name" placeholder="Məhsul adı" class="form-control"><br>\n' +
            '                                    <input value="'+ingredient+'" type="text" name="ingredient" placeholder="Tərkibi" class="form-control"><br>\n' +
            '                                    <input value="'+value+'" type="number" name="value" placeholder="Məhsulun qida dəyəri, q" class="form-control"><br>\n' +
            '                                    <input value="'+protein+'" type="number" name="protein" placeholder="Zülal, q" class="form-control"><br>\n' +
            '                                    <input value="'+fat+'" type="number" name="fat" placeholder="Yağ, q" class="form-control"><br>\n' +
            '                                    <input value="'+energy+'" type="number" name="energy" placeholder="Enerji dəyəri, kC" class="form-control"><br>\n' +
            '                                    <input value="'+weight+'" type="number" name="weight" placeholder="Net çəkisi, kq" class="form-control"><br>\n' +
            '                                    <input value="'+life+'" type="number" name="life" placeholder="Saxlama müddəti, saat" class="form-control"><br>\n' +
            '                                    <input value="'+condition+'" type="text" name="condition" placeholder="Saxlama şəraiti" class="form-control"><br>\n' +
            '                                    <input value="'+price+'" type="number" name="price" placeholder="Qiyməti, manat" class="form-control"><br>\n' +
            '                                    <select id="category_select" name="category" class="form-control">\n' +
            '                                        <option disabled hidden selected value="">Kateqoriya</option>\n' +
            '                                    </select>' +
            '                                    <div class="btns"><button class="btn btn-light go_back">Geri qayıt</button><button class="btn btn-dark go_save">Yadda saxla</button></div>');
    // }
    // else{
    //     $(this).parents('.product-info').html('  <input value="'+name+'" type="text" name="name" placeholder="Məhsul adı" class="form-control"><br>\n' +
    //         '                                    <textarea name="text" id="myTextarea" class="tinymce"><pre>'+content+'</pre></textarea><br>\n' +
    //         '                                    <input value="'+price+'" type="number" name="price" placeholder="Qiyməti, manat" class="form-control"><br>\n' +
    //         '                                    <select id="category_select" name="category" class="form-control">\n' +
    //         '                                        <option disabled hidden selected value="">Kateqoriya</option>\n' +
    //         '                                    </select>' +
    //         '                                    <div class="btns"><button class="btn btn-light go_back">Geri qayıt</button><button class="btn btn-dark go_save_c">Yadda saxla</button></div>');
    // }
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
    setTimeout(function() {
        $('#category_select option').each(function (){
            if ($(this).val() == category){
                $(this).attr('selected','selected');
            }
        });
    }, 500);
    $(document).on('click','.go_back',function () {
        if (content == ''){
            $(this).parents('.product-info').html('' +
                '               <button id="'+id+'" class="btn btn-info edit_product"><i class="fa fa-pencil"></i></button>\n' +
                '                <p class="caption"><span id="edit_p_name">'+name+'</span></p>\n' +
                '                <p>Tərkibi : <span id="edit_p_ingredient">'+ingredient+'</span></p>\n' +
                '                <p><span id="edit_p_value">'+value+'</span> qr. Məhsulun qida dəyəri: </p>\n' +
                '                <p>Zülal, q.-<span id="edit_p_protein">'+protein+'</span></p>\n' +
                '                <p>Yağ, q.-<span id="edit_p_fat">'+fat+'</span></p>\n' +
                '                <p>Enerji dəyəri – <span id="edit_p_energy">'+energy+'</span> kC (264 kkal)</p>\n' +
                '                <p>Net çəkisi, kq.- <span id="edit_p_weight">'+weight+'</span> (+/-3%)</p>\n' +
                '                <p>Saxlama müddəti: <span id="edit_p_life">'+life+'</span> saat</p>\n' +
                '                <p>Saxlama şəraiti: <span id="edit_p_condition">'+condition+'</span></p>\n' +
                '                <p>Qiyməti: <span id="edit_p_price">'+price+'</span></p>\n' +
                '                <p>Kateqoriyası: <span id="edit_p_category">'+category+'</span></p>');
        }
        else{
            $(this).parents('.product-info').html('' +
                '               <button id="'+id+'" class="btn btn-info edit_product"><i class="fa fa-pencil"></i></button>\n' +
                '                <p class="caption"><span id="edit_p_name">'+name+'</span></p>\n' +
                '                <pre>'+content+'</pre>\n' +
                '                <p>Qiyməti: <span id="edit_p_price">'+price+'</span></p>\n' +
                '                <p>Kateqoriyası: <span id="edit_p_category">'+category+'</span></p>');
        }
    });

    $(document).on('click', '.go_save', function (){
        var div = $(this).parents('.product-info');
        var new_name = $(this).parents('.product-info').find('input[name=name]').val().trim();
        var new_ingredient = $(this).parents('.product-info').find('input[name=ingredient]').val().trim();
        var new_value = $(this).parents('.product-info').find('input[name=value]').val().trim();
        var new_protein = $(this).parents('.product-info').find('input[name=protein]').val().trim();
        var new_fat = $(this).parents('.product-info').find('input[name=fat]').val().trim();
        var new_energy = $(this).parents('.product-info').find('input[name=energy]').val().trim();
        var new_weight = $(this).parents('.product-info').find('input[name=weight]').val().trim();
        var new_life = $(this).parents('.product-info').find('input[name=life]').val().trim();
        var new_condition = $(this).parents('.product-info').find('input[name=condition]').val().trim();
        var new_price = $(this).parents('.product-info').find('input[name=price]').val().trim();
        var new_category = $(this).parents('.product-info').find('select[name=category] option:selected').val().trim();
        $.ajax({
            type: "POST",
            url: "/edit_products",
            data: {
                'id':id, 'name':new_name, 'ingredient':new_ingredient, 'value':new_value, 'protein':new_protein, 'fat':new_fat, 'energy':new_energy, 'weight':new_weight, 'life':new_life, 'condition':new_condition, 'price':new_price, 'category':new_category, "_token": csrftoken
            },
            success:function(response)
            {
                if(response.message == 'success')
                {
                    toastr.success('Məhsul məlumatları yeniləndi');
                    div.html('' +
                        '               <button id="'+id+'" class="btn btn-info edit_product"><i class="fa fa-pencil"></i></button>\n' +
                        '                <p class="caption"><span id="edit_p_name">'+new_name+'</span></p>\n' +
                        '                <p>Tərkibi : <span id="edit_p_ingredient">'+new_ingredient+'</span></p>\n' +
                        '                <p><span id="edit_p_value">'+new_value+'</span> qr. Məhsulun qida dəyəri: </p>\n' +
                        '                <p>Zülal, q.-<span id="edit_p_protein">'+new_protein+'</span></p>\n' +
                        '                <p>Yağ, q.-<span id="edit_p_fat">'+new_fat+'</span></p>\n' +
                        '                <p>Enerji dəyəri – <span id="edit_p_energy">'+new_energy+'</span> kC (264 kkal)</p>\n' +
                        '                <p>Net çəkisi, kq.- <span id="edit_p_weight">'+new_weight+'</span> (+/-3%)</p>\n' +
                        '                <p>Saxlama müddəti: <span id="edit_p_life">'+new_life+'</span> saat</p>\n' +
                        '                <p>Saxlama şəraiti: <span id="edit_p_condition">'+new_condition+'</span></p>\n' +
                        '                <p>Qiyməti: <span id="edit_p_price">'+new_price+'</span> manat</p>\n' +
                        '                <p>Kateqoriyası: <span id="edit_p_category">'+new_category+'</span></p>');
                }
            }
        })
    });

    $(document).on('click', '.go_save_c', function (){
        var div = $(this).parents('.product-info');
        var new_name = $(this).parents('.product-info').find('input[name=name]').val().trim();
        var new_content = tinymce.get("myTextarea").getContent();
        var new_price = $(this).parents('.product-info').find('input[name=price]').val().trim();
        var new_category = $(this).parents('.product-info').find('select[name=category] option:selected').val().trim();
        $.ajax({
            type: "POST",
            url: "/edit_products_c",
            data: {
                'id':id, 'name':new_name, 'mycontent':new_content, 'price':new_price, 'category':new_category, "_token": csrftoken
            },
            success:function(response)
            {
                if(response.message == 'success')
                {
                    toastr.success('Məhsul məlumatları yeniləndi');
                    div.html('' +
                        '               <button id="'+id+'" class="btn btn-info edit_product"><i class="fa fa-pencil"></i></button>\n' +
                        '                <p class="caption"><span id="edit_p_name">'+new_name+'</span></p>\n' +
                        '                '+new_content+'\n' +
                        '                <p>Qiyməti: <span id="edit_p_price">'+new_price+'</span> manat</p>\n' +
                        '                <p>Kateqoriyası: <span id="edit_p_category">'+new_category+'</span></p>');
                }
            }
        })
    });
});

$('table tbody').on('click','.delete_message',function(){
    var id = $(this).parents('tr').attr('id');
    $('#message_confirm').attr('name',id);
});

$('#message_confirm').on("click", ".btn-danger" ,function()
{
    var id = $(this).parents('#message_confirm').attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_message",
        data: {
            'id':id, "_token": csrftoken
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                toastr.success('Mesaj silindi');
                tr.remove();
                sehifele();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});


