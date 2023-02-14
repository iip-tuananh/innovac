<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="@yield('title')" />
    <meta name="robots" content="noodp,index,follow" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="@yield('description')" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ url()->current() }}" />
    <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:secure_url" content="@yield('image')" />
    <meta property="og:image:width" content="598" />
    <meta property="og:image:height" content="333" />
    <meta property="og:image:alt" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="@yield('image')" />
    <!-- Fav Icon -->
    <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
    <link rel="preload" as="script" href="{{ asset('frontend/js/jquery.js') }}" />
    <script src="{{ asset('frontend/js/jquery.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('frontend/js/cookie.js') }}" />
    <script src="{{ asset('frontend/js/cookie.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('frontend/js/swiper.js') }}" />
    <script src="{{ asset('frontend/js/swiper.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{asset('frontend/js/quickview.js')}}" />
    <script src="{{asset('frontend/js/quickview.js')}}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('frontend/js/lazy.js') }}" />
    <script src="{{ asset('frontend/js/lazy.js') }}" type="text/javascript"></script>
    <link rel="preload" href="{{ asset('frontend/css/main.scss.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/index.scss.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/404page.scss.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/bootstrap-4-3-min.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/quickviews_popup_cart.scss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/toastr.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/snow.style.css')}}">
    <script src="{{asset('frontend/js/toastr.min.js')}}"></script>
    @yield('css')
    <style>
        :root {
            --mainColor: #ff5c00;
            --textColor: #231f20;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-4-3-min.css') }}">
    <link href="{{ asset('frontend/css/main.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as='style' type="text/css"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link href="{{ asset('frontend/css/font.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('frontend/css/index.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('frontend/css/quickviews_popup_cart.scss.css') }}" rel="stylesheet" type="text/css"
        media="all" />
    <style>
        :root {
            --gradient1: #eb3349;
            --gradient1_2: #f45c43;
            --gradient3: #092477;
            --gradient4: #3a529b;
            --pricecolor: #ff5c00;
        }
    </style>
    <script>
        $(document).ready(function($) {
            awe_lazyloadImage();
        });

        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        }
        window.awe_lazyloadImage = awe_lazyloadImage;
    </script>
    <script>
        const io = new IntersectionObserver((e, t) => {
                e.forEach(e => {
                    e.isIntersecting && (e.target.src = e.target.dataset.src, e.target.classList.add("loaded"),
                        t.unobserve(e.target))
                })
            }),
            bo = new IntersectionObserver((e, t) => {
                e.forEach(e => {
                    if (e.isIntersecting) {
                        const r = e.target;
                        r.style.backgroundImage = r.dataset.background, e.target.classList.add("loaded"), t
                            .unobserve(e.target)
                    }
                })
            });
        document.addEventListener("DOMContentLoaded", function() {
            const arr = document.querySelectorAll('.lazy')
            arr.forEach((v) => {
                io.observe(v);
            })
            const arrBg = document.querySelectorAll('.lazy_bg')
            arrBg.forEach((v) => {
                bo.observe(v);
            })
        })
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WB6T2NQ');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '955862305797994');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=955862305797994&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB6T2NQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @if (session()->has('successBill'));
    <div id="popup-notify" class="quickview-product">
        <div id="close-qw" class="quickview-overlay"></div>
        <div class="quick-view-product">
            <div class="row ">
                <div class="col-12 notify-modal">
                    <img class="img-tichxanh" src="{{url('frontend/img/tichxanh.png')}}" alt="">
                </div>
                <div class="col-12 notify-modal h3-notify">
                    <h3 > Đặt hàng thành công</h3>
                </div>
                <div class="col-12 notify-modal">
                    Đơn hàng của quý khách đã được cập nhật.Chúng tôi sẽ sớm liên hệ với quý khách để bàn giao sản phẩm
                </div>
                <div class="col-12 notify-modal">
                    Cảm ơn quý khách đã tin tưởng và sử dụng dịch vụ của chúng tôi !
                </div>
            </div>
            <div class="row"></div>
        <a title="Close" class="quickview-close close-window" href="javascript:;" onclick="removeNotify()">
            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
                <path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path>
            </svg>
        </a>
        </div>
    </div>     
    @endif
    <div class="opacity_menu"></div>
    @include('layouts.header.index')
    @yield('content')
    @include('layouts.footer.index')
    
    <a href="#" class="backtop" title="Lên đầu trang">
        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-up" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-up fa-w-10">
            <path fill="currentColor"
                d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z"
                class=""></path>
        </svg>
    </a>
    <link rel="preload" as="style" href="{{ asset('frontend/css/ajaxcart.scss.css') }}" type="text/css">
    <link href="{{ asset('frontend/css/ajaxcart.scss.css') }}" rel="stylesheet" type="text/css"
        media="all" />
    <div class="backdrop__body-backdrop___1rvky"></div>
    <div id="popup-cart-desktop" class="popup-cart">
    </div>
    <div id="popup-cart-mobile" class="popup-cart-mobile">
    </div>
    <div id="quick-view-product" class="quickview-product" style="display:none">
    </div>
    <link rel="preload" as="script" href="{{asset('frontend/js/main.js')}}" />
    <script src="{{asset('frontend/js/main.js')}}" type="text/javascript">
    </script>
    <style>
        .swatch.error {
        background-color: #fff5f5;
        padding: 5px 12px;
        }
        .swatch.error .message-error{
        color: #ff5c00
        }
        .swatch.error .click-color{
        background-color: #ffff;
        }
    </style>
    @yield('js')
    {{-- data-quick-view --}}
    <script>
        $('.quick-view-pro').click(function(){
            var id = $(this).data('id');
            var url = $(this).data('url');
            $.ajax({
                type : 'POST',
                url : url,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {id : id},
                success:function(data){
                    $('#quick-view-product').css("display", "block");
                    $('#quick-view-product').html(data.html);
                }
            })
        })
    </script>

    {{-- add-to-cart --}}
    <script>
        $('.add_to_cart').click(function(e){
        e.preventDefault();
        var id = $(this).parent().find('input[name=id]').val();
        var quantity = $('input[name=quantity]').val();
        var color = $('input[name=color]').val();
        var price = $('input[name=product_price]').val();
        var url = $(this).data('url');
        if ($('input[name=color]').empty() && color == '') {
            $('.swatch').addClass('error');
            $('.message-error').html('<span>Vui lòng chọn phân loại bảo hành</span>'); 
        } else {
            $.ajax({
                type: "POST",
                url: url,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {id: id, quantity: quantity, color: color, price: price },
                success: function(data){
                    $('.top-cart-content').html(data.html1);
                    $('.count_item_pr').html(data.html2);
                    $('.backdrop__body-backdrop___1rvky').addClass('active');
                    if ($(window).width() > 768) {
                        $('#popup-cart-desktop').html(data.html3);
                        $('#popup-cart-desktop').addClass('active');
                        $('#popup-cart-mobile').removeClass('active');
                    } else {
                        $('#popup-cart-mobile').html(data.html5);
                        $('#popup-cart-desktop').removeClass('active');
                        $('#popup-cart-mobile').addClass('active');
    
                    }
                }
            })
        }
        })
    </script>

    {{-- update-cart --}}
    <script>
        function btnMinus(e) {
            var id = e;
            var result = document.getElementById('qty'+id); var qtypro = result.value; if( !isNaN( qtypro ) && qtypro > 1 ) result.value--;
            var quantity = result.value;
            var url = $('.data-update-cart').data('url');
            $.ajax({
                type:'get',
                url:url,
                data: {id:id, quantity:quantity},
                success: function(data) {
                    $('.top-cart-content').html(data.html1);
                    $('.count_item_pr').html(data.html2);
                    $('.CartPageContainer').html(data.html3);
                    $('.CartMobileContainer').html(data.html6);
                    $('#popup-cart-desktop').html(data.html4);
                }
            })
        }
        function btnPlus(e) {
            var id = e;
            var result = document.getElementById('qty'+id); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;
            var quantity = result.value;
            var url = $('.data-update-cart').data('url');
            $.ajax({
                type:'get',
                url:url,
                data: {id:id, quantity:quantity},
                success: function(data) {
                    $('.top-cart-content').html(data.html1);
                    $('.count_item_pr').html(data.html2);
                    $('.CartPageContainer').html(data.html3);
                    $('.CartMobileContainer').html(data.html6);
                    $('#popup-cart-desktop').html(data.html4);
                }
            })
        }
        function removeItemCart(e) {
            var id = e
            var url = $('.remove-item-cart').data('url');
            $.ajax({
                type: 'get',
                url:url,
                data: {id:id},
                success: function(data) {
                    $('.top-cart-content').html(data.html1);
                    $('.count_item_pr').html(data.html2);
                    $('.CartPageContainer').html(data.html3);
                    $('.CartMobileContainer').html(data.html6);
                    $('#popup-cart-desktop').html(data.html4);
                }
            })
        }
    </script>
    {{-- romove-cart-popup --}}
    <script>
        function removePopup() {
            $('#popup-cart-desktop').removeClass('active');
            $('.backdrop__body-backdrop___1rvky').removeClass('active');
            $('#popup-cart-mobile').removeClass('active');
        }
        $('.backdrop__body-backdrop___1rvky').click(function() {
            $('#popup-cart-desktop').removeClass('active');
            $('#popup-cart-mobile').removeClass('active');
            $('.backdrop__body-backdrop___1rvky').removeClass('active');
        })
    </script>
    {{-- romove-notify-popup --}}
    <script>
        function removeNotify() {
            $('#popup-notify').css('display', 'none');
            }
            $('.quickview-overlay ').click(function() {
            $('#popup-notify').css('display', 'none');
            })
    </script>
    <div id="sidebar-all" class="d-none">
        <div class="sidebar-all-wrap-right container" data-type="wishlist">
            <div class="sidebar-all-wrap-right-main">
                <div class="sidebar-all-wrap-right-main-list row">
                </div>
            </div>
        </div>
    </div>
    <div class="compare-sidebar">
        <div class="sidebarAllMainCompare">
            <div class="sidebarAllHeader">
                <div class="container">
                    <div class="title">
                        <a href='/so-sanh-san-pham' title="Bấm vào đây để tới trang so sánh">
                            <span>Bấm vào đây để tới trang so sánh</span>
                        </a>
                        <span class="closeSidebar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path d="M12.9996 12.9996L1 1" stroke="#292D32" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13 1.00024L12.25 1.75022M1.00035 12.9999L7.00018 7.00007L9.50037 4.49988"
                                    stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="sidebarAllBody">
                </div>
            </div>
        </div>
    </div>
    <div class="overplayAll"></div>
    <div id="popupCartModal" class="modal fade" role="dialog"></div>
    <div class="addThis_listSharing addThis_listing">
        <div class="addThis_item">
            <a class="addThis_item-icon" href="tel:{{$setting->phone1}}" rel="nofollow" aria-label="phone"
                title="Gọi ngay cho chúng tôi ">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22" cy="22" r="22" fill="url(#paint2_linear)" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.0087 9.35552C14.1581 9.40663 14.3885 9.52591 14.5208 9.61114C15.3315 10.148 17.5888 13.0324 18.3271 14.4726C18.7495 15.2949 18.8903 15.9041 18.758 16.3558C18.6214 16.8415 18.3953 17.0971 17.384 17.9109C16.9786 18.239 16.5988 18.5756 16.5391 18.6651C16.3855 18.8866 16.2617 19.3212 16.2617 19.628C16.266 20.3395 16.7269 21.6305 17.3328 22.6232C17.8021 23.3944 18.6428 24.3828 19.4749 25.1413C20.452 26.0361 21.314 26.6453 22.2869 27.1268C23.5372 27.7488 24.301 27.9064 24.86 27.6466C25.0008 27.5826 25.1501 27.4974 25.1971 27.4591C25.2397 27.4208 25.5683 27.0202 25.9268 26.5772C26.618 25.7079 26.7759 25.5674 27.2496 25.4055C27.8513 25.201 28.4657 25.2563 29.0844 25.5716C29.5538 25.8145 30.5779 26.4493 31.2393 26.9095C32.1098 27.5187 33.9703 29.0355 34.2221 29.3381C34.6658 29.8834 34.7427 30.5821 34.4439 31.3534C34.1281 32.1671 32.8992 33.6925 32.0415 34.3444C31.2649 34.9323 30.7145 35.1581 29.9891 35.1922C29.3917 35.222 29.1442 35.1709 28.3804 34.8556C22.3893 32.3887 17.6059 28.7075 13.8081 23.65C11.8239 21.0084 10.3134 18.2688 9.28067 15.427C8.67905 13.7696 8.64921 13.0495 9.14413 12.2017C9.35753 11.8438 10.2664 10.9575 10.9278 10.4633C12.0288 9.64524 12.5365 9.34273 12.9419 9.25754C13.2193 9.19787 13.7014 9.24473 14.0087 9.35552Z"
                        fill="white" />
                    <defs>
                        <linearGradient id="paint2_linear" x1="22" y1="-7.26346e-09" x2="22.1219"
                            y2="40.5458" gradientUnits="userSpaceOnUse">
                            <stop offset="50%" stop-color="#e8434c" />
                            <stop offset="100%" stop-color="#d61114" />
                        </linearGradient>
                    </defs>
                </svg>
                <span class="tooltip-text">Gọi ngay cho chúng tôi </span>
            </a>
        </div>
        <div class="addThis_item">
            <a class="addThis_item-icon" href="https://zalo.me/{{$setting->phone1}}" target="_blank"
                rel="nofollow noreferrer" aria-label="zalo" title="Chat với chúng tôi qua Zalo ">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22" cy="22" r="22" fill="url(#paint4_linear)" />
                    <g clip-path="url(#clip0)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z"
                            fill="white" />
                        <path
                            d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z"
                            fill="white" />
                        <path
                            d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z"
                            fill="white" />
                        <path
                            d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z"
                            fill="#0068FF" />
                    </g>
                    <defs>
                        <linearGradient id="paint4_linear" x1="22" y1="0" x2="22"
                            y2="44" gradientUnits="userSpaceOnUse">
                            <stop offset="50%" stop-color="#3180f6" />
                            <stop offset="100%" stop-color="#096de8" />
                        </linearGradient>
                        <clipPath id="clip0">
                            <rect width="26.3641" height="24.2" fill="white"
                                transform="translate(8.78906 9.90234)" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="tooltip-text">Chat với chúng tôi qua Zalo </span>
            </a>
        </div>
        <div class="addThis_item">
            <a class="addThis_item-icon" href="mailto:{{$setting->email}}" aria-label="email"
                title="Gửi email cho chúng tôi ">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22" cy="22" r="22" fill="url(#paint1_linear)" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.4589 11.6667H32.5414C33.1621 11.6667 33.6993 11.8861 34.153 12.3245C34.6062 12.7634 34.8332 13.2904 34.8332 13.9064C34.8332 14.6435 34.599 15.3481 34.1319 16.0197C33.6639 16.6914 33.0816 17.2655 32.3846 17.7413C30.0672 19.3131 28.3185 20.4998 27.1311 21.3061C26.4785 21.7489 25.9931 22.0787 25.6817 22.2905C25.6355 22.3222 25.5634 22.3723 25.4675 22.4396C25.3643 22.5117 25.2337 22.6037 25.0729 22.7174C24.7625 22.9368 24.5048 23.114 24.2994 23.2495C24.0938 23.3846 23.8457 23.5363 23.5545 23.7043C23.2631 23.8724 22.9887 23.9983 22.7309 24.0823C22.4731 24.1661 22.2344 24.2082 22.0148 24.2082H22.0006H21.9863C21.7667 24.2082 21.5281 24.1661 21.2702 24.0823C21.0125 23.9983 20.7378 23.8721 20.4466 23.7043C20.1552 23.5363 19.9068 23.385 19.7017 23.2495C19.4964 23.114 19.2386 22.9368 18.9284 22.7174C18.7672 22.6037 18.6366 22.5118 18.5334 22.4393L18.5233 22.4323C18.4325 22.3688 18.3638 22.3208 18.3195 22.2905C17.9197 22.0157 17.4354 21.6846 16.8739 21.3022C16.2152 20.8532 15.4486 20.3329 14.5671 19.7359C12.9342 18.6303 11.9554 17.9654 11.6308 17.7413C11.0388 17.3494 10.4802 16.8107 9.95513 16.1248C9.43011 15.4387 9.16748 14.8018 9.16748 14.214C9.16748 13.4864 9.36539 12.8796 9.76184 12.3944C10.158 11.9095 10.7234 11.6667 11.4589 11.6667ZM33.4002 19.2392C31.4494 20.5296 29.7913 21.6405 28.4258 22.5725L34.8324 28.8337V18.0213C34.4217 18.4695 33.9443 18.8752 33.4002 19.2392ZM9.1665 18.0214C9.58659 18.4788 10.0691 18.8848 10.6132 19.2393C12.6414 20.5863 14.2935 21.6952 15.5757 22.5701L9.1665 28.8335V18.0214ZM34.0421 30.8208C33.6172 31.1883 33.1173 31.3745 32.5403 31.3745H11.4578C10.8809 31.3745 10.3807 31.1883 9.95575 30.8208L17.2287 23.7122C17.4107 23.8399 17.5789 23.9592 17.7306 24.0679C18.2751 24.4597 18.7165 24.7654 19.0556 24.9845C19.3944 25.2041 19.8455 25.4279 20.4091 25.6564C20.9726 25.8853 21.4976 25.9993 21.9847 25.9993H21.9989H22.0132C22.5002 25.9993 23.0253 25.8852 23.5888 25.6564C24.152 25.4279 24.6032 25.2041 24.9423 24.9845C25.2814 24.7654 25.7231 24.4597 26.2672 24.0679C26.427 23.955 26.5961 23.8362 26.7705 23.7141L34.0421 30.8208Z"
                        fill="white" />
                    <defs>
                        <linearGradient id="paint1_linear" x1="22" y1="0" x2="22"
                            y2="44" gradientUnits="userSpaceOnUse">
                            <stop offset="50%" stop-color="#22e7f9" />
                            <stop offset="100%" stop-color="#03d2e4" />
                        </linearGradient>
                    </defs>
                </svg>
                <span class="tooltip-text">Gửi email cho chúng tôi </span>
            </a>
        </div>
    </div>
    <a href="{{$setting->google}}" target="_blank" rel="noopener noreferrer">
    <div class="chat-mess">
        <i class="bi bi-messenger"></i>
    </div>
    </a>
    <div style="visibility:hidden; position: absolute; z-index: -1; bottom: 0; left: 0;">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-quickview">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 8" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.99929 0.908334C4.86815 0.908334 3.20577 2.12566 1.76033 3.90586C1.71565 3.96089 1.71565 4.03911 1.76033 4.09414C3.20577 5.87434 4.86815 7.09167 6.99929 7.09167C9.13043 7.09167 10.7928 5.87434 12.2383 4.09414C12.2829 4.03911 12.2829 3.96089 12.2383 3.90586C10.7928 2.12566 9.13043 0.908334 6.99929 0.908334ZM1.12634 3.39109C2.63915 1.52791 4.51047 0.0916672 6.99929 0.0916672C9.48812 0.0916672 11.3594 1.52791 12.8722 3.39109C13.1605 3.74608 13.1605 4.25392 12.8722 4.60891C11.3594 6.47209 9.48812 7.90833 6.99929 7.90833C4.51047 7.90833 2.63915 6.47209 1.12634 4.60891C0.838096 4.25392 0.838097 3.74608 1.12634 3.39109Z"
                        fill="#7B7B7B" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.99948 2.95C6.41958 2.95 5.94948 3.4201 5.94948 4C5.94948 4.5799 6.41958 5.05 6.99948 5.05C7.57938 5.05 8.04948 4.5799 8.04948 4C8.04948 3.4201 7.57938 2.95 6.99948 2.95ZM5.13281 4C5.13281 2.96907 5.96855 2.13333 6.99948 2.13333C8.03041 2.13333 8.86615 2.96907 8.86615 4C8.86615 5.03093 8.03041 5.86666 6.99948 5.86666C5.96855 5.86666 5.13281 5.03093 5.13281 4Z"
                        fill="#7B7B7B" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-wishlist">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 11" fill="none">
                    <path
                        d="M1.21763 5.64124C0.581381 3.86545 1.37671 1.60538 3.12641 1.12108C4.08078 0.798209 5.35327 1.12106 5.98952 2.08967C6.62577 1.12106 7.89826 0.798209 8.85263 1.12108C10.7614 1.76682 11.3977 3.86545 10.7614 5.64124C9.96609 8.38563 6.78483 10 5.98952 10C5.19421 9.83856 2.17201 8.54707 1.21763 5.64124Z"
                        stroke="#7B7B7B" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-compare">
                <svg x="0" y="0" viewBox="0 0 459 459.648"
                    style="enable-background:new 0 0 512 512">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="m416.324219 293.824219c0 26.507812-21.492188 48-48 48h-313.375l63.199219-63.199219-22.625-22.625-90.511719 90.511719c-6.246094 6.25-6.246094 16.375 0 22.625l90.511719 90.511719 22.625-22.625-63.199219-63.199219h313.375c44.160156-.054688 79.945312-35.839844 80-80v-64h-32zm0 0"
                        fill="#7B7B7B" data-original="#000000" style=""></path>
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="m32.324219 165.824219c0-26.511719 21.488281-48 48-48h313.375l-63.199219 63.199219 22.625 22.625 90.511719-90.511719c6.246093-6.25 6.246093-16.375 0-22.625l-90.511719-90.511719-22.625 22.625 63.199219 63.199219h-313.375c-44.160157.050781-79.949219 35.839843-80 80v64h32zm0 0"
                        fill="#7B7B7B" data-original="#000000" style=""></path>
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-viewmore">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 11" fill="none">
                    <path
                        d="M12.9764 9.08131C12.7355 9.31672 12.7355 9.70421 12.9764 9.93962C13.2096 10.1675 13.5821 10.1675 13.8153 9.93962L17.8089 6.03635C18.1099 5.74213 18.1099 5.25784 17.8089 4.96362L13.8153 1.06038C13.5821 0.832464 13.2096 0.832464 12.9764 1.06038C12.7355 1.29579 12.7355 1.68328 12.9764 1.91869L15.592 4.47507C15.7522 4.63172 15.6413 4.90386 15.4172 4.90386L1.34615 4.90385C1.01691 4.90385 0.75 5.17076 0.75 5.50001C0.75 5.82925 1.01691 6.09616 1.34615 6.09616L15.4172 6.09617C15.6413 6.09617 15.7522 6.36831 15.5919 6.52496L12.9764 9.08131Z"
                        fill="url(#paint0_linear_158_2937)" stroke="url(#paint1_linear_158_2937)"
                        stroke-width="0.5" />
                    <defs>
                        <linearGradient id="paint0_linear_158_2937" x1="9.5" y1="10" x2="9.5"
                            y2="0.999999" gradientUnits="userSpaceOnUse">
                            <stop offset="0.786458" stop-color="#3A529B" />
                        </linearGradient>
                    </defs>
                </svg>
            </symbol>
        </svg>
    </div>
</body>
</html>
