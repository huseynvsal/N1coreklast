$('.sliderall').slick({
    dots: false,
    autoplay:true,
    fade: true,
    autoplaySpeed:5000,
    responsive: [
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

    $('.main .slider-nav1').slick({
        infinite:true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed:3000,
        dots: false,
        focusOnSelect: true,
    });


AOS.init();

$(function(){
  $(window).on("scroll",function(){
      if($(window).scrollTop()>50){
        $('.counter').each(function(){
          var $this=$(this),
          countTo=$this.attr('data-count');
          $({countNum: $this.text()}).animate({
              countNum: countTo
          },

          {
              duration:2000,
              easing: 'linear',
              step: function() {
                  $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                  $this.text(this.countNum);
              },
          });
        });
      }
  })
})

var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

$(document).ready(function(){
  $('.tab-a').click(function(){
    $(".tab").removeClass('tab-active');
    $(".tab[data-id='"+$(this).attr('data-id')+"']").addClass("tab-active");
    $(".tab-a").removeClass('active-a');
    $(this).parent().find(".tab-a").addClass('active-a');
   });
});


if($('.newparts .buttons .newpart-botton').length){
    $('.newparts .buttons .newpart-botton').eq(0).addClass('button1');
    var category = $('.button1').attr('id').toLowerCase();

    $(".slider-nav1 .slick-track .slick-slide ").filter(function() {
        $(this).toggle($(this).find('a').attr('name').toLowerCase().indexOf(category) > -1);
    });
    $('.slick-track .slick-slide').each(function (){
        if ($(this).css('display') == 'none'){
            $(this).html('');
            $(this).remove();
        }
    });
    $('.main .slider-nav1').slick('unslick');

    $('.main .slider-nav1').slick({
        infinite:true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed:3000,
        dots: false,
        focusOnSelect: true,
    });
}


$(document).on('click' ,'.buttons .newpart-botton' , function (){
    $('.newpart-botton').removeClass('button1');
    $(this).addClass('button1');
    var category = $(this).attr('id').toLowerCase();

    $('.main .slider-nav1').slick('unslick');
    $('.slider-nav1').html('');
    $.ajax({
        type: "POST",
        url: "get_products",
        data: {
             "_token": csrftoken
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                response.products.forEach(filter_prod);
                function filter_prod(item, index) {
                    $('.asdf').append(`<div class="boxs">
                                                <a name="${item['category']}"  href="/mainproduct/${item['id']}">
                                                <div class="image">
                                                    <img src="../images/${item['image1']}" >
                                                </div>
                                                <span class="Kpkli-baton-75">${item['name']}</span> <br>
                                                <span class="la-nv-buda-ununda">Əla növ buğda unundan</span> <br>
                                                <img style="display: inline;"  src="../img/combined-shape-copy.png" alt="">
                                                <span class="-kg">${item['weight']} kg</span>
                                                </a>
                                            </div>`);

                }
                $(".asdf .boxs").filter(function() {
                        $(this).toggle($(this).find('a').attr('name').toLowerCase().indexOf(category) > -1);
                    });
                $('.asdf .boxs').each(function (){
                    if ($(this).css('display') == 'none'){
                        $(this).html('');
                        $(this).remove();
                    }
                });
                $('.main .slider-nav1').slick({
                    infinite:true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    autoplay:true,
                    autoplaySpeed:3000,
                    dots: false,
                    focusOnSelect: true,
                });
            }

        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
})
$('.mainfilter').on('click' ,'.filter' , function (){
    var category = $(this).attr('id').toLowerCase();
    $(".row .box ").filter(function() {
        $(this).toggle($(this).attr('name').toLowerCase().indexOf(category) > -1);

    });
})






function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


$(document).ready(function(){
    let span =$('#bc_img');
    if(span.attr('name') == 'virtualtur') {
        $('.sliderall').css("background-image", "url(../img/600X4003-min.jpg)");
    }
    else if(span.attr('name') == 'contact') {
        $('.sliderall').css("background-image", "url(../img/middle4.jpg)");
    }
    else if(span.attr('name') == 'mainproduct') {
        $('.sliderall').css("background-image", "url(../img/middle3.jpg)");
    }
    else if(span.attr('name') == 'about') {
        $('.sliderall').css("background-image", "url(../img/600X4002-min.jpg)");
    }
    else if(span.attr('name') == 'products') {
        $('.sliderall').css("background-image", "url(../img/600X4003-min.jpg)");
        $('.sliderall').css("background-position", "bottom");
    }
    else if(span.attr('name') == 'mainpage') {
        $('.sliderall').css("background-image", "url(../img/middle2.jpg)");
        $('.sliderall').css("background-position", "bottom");
    }
});







