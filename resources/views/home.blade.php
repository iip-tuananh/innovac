@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image) }}
@endsection
@section('css')
    <link rel='stylesheet' href='{{ asset('frontend/css/owl.carousel.min.css') }}' type='text/css' />
    <link rel='stylesheet' href='{{ asset('frontend/css/owl.theme.default.min.css') }}' type='text/css' />
@endsection
@section('js')
    <script type='text/javascript' src='{{ asset('frontend/js/owl.carousel.min.js') }}'></script>
    <script>
        $('.home-banner').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
@endsection
@section('content')
    <div class="bodywrap">
        <h1 class="d-none">innovac - </h1>
        <div class="bg-index">
            <section class="section_slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 slider">
                            <div class="home-slider swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($banners as $banner)
                                        <div class="swiper-slide">
                                            <a href="{{ $banner->link }}" class="clearfix" title="banner">
                                                <picture>
                                                    <source media="(min-width: 1200px)" srcset="{{ $banner->image }}">
                                                    <source media="(min-width: 992px)" srcset="{{ $banner->image }}">
                                                    <source media="(min-width: 569px)" srcset="{{ $banner->image }}">
                                                    <source media="(max-width: 567px)" srcset="{{ $banner->image }}">
                                                    <img width="578" height="445" src="{{ $banner->image }}"
                                                        alt="banner" class="img-responsive" />
                                                </picture>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 banner">
                            @if (isset($bannerPhu[0]))
                                <div class="item thumb-1">
                                    <a class="image_hover" href="#" title="banner phu">
                                        <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="{{ $bannerPhu[0]->image }}" alt="banner phu">
                                    </a>
                                </div>
                            @endif
                            @if (isset($bannerPhu[1]))
                                <div class="item thumb-2">
                                    <a class="image_hover" href="#" title="banner phu">
                                        <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="{{ $bannerPhu[1]->image }}" alt="banner phu">
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 banner">
                            @if (isset($bannerPhu[2]))
                                <div class="item thumb-3">
                                    <a class="image_hover" href="#" title="banner phu">
                                        <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="{{ $bannerPhu[2]->image }}" alt="banner phu">
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <script>
                var swiper = new Swiper('.home-slider', {
                    autoplay: false,
                    pagination: {
                        el: '.home-slider .swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.home-slider .swiper-button-next',
                        prevEl: '.home-slider .swiper-button-prev',
                    },
                });
            </script>
            <section class="section_product_featured module_product">
                <div class="container">


                    <div class="block-title">
                        <h2>
                            <a href="san-pham-noi-bat" title="Thương hiệu">Thương hiệu</a>
                        </h2>

                    </div>

                    <div class="block-product">
                        <div class="product-featured-swiper swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($productBrands as $brand)
                                    <div class="swiper-slide">
                                        <div class="item_product_main">
                                            <a class="variants product-action ">
                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover" href="/iphone-13-pro-max-256gb"
                                                        title="iPhone 13 Pro Max 256GB">
                                                        <img class="lazyload"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                            data-src="{{ $brand->image }}" alt="iPhone 13 Pro Max 256GB">
                                                    </a>

                                                    <div class="actions-primary">
                                                        <input class="hidden" type="hidden" name="variantId"
                                                            value="70241732" />

                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <script>
                var swiperwish = new Swiper('.product-featured-swiper', {
                    slidesPerView: 6,
                    loop: false,
                    grabCursor: true,
                    spaceBetween: 20,
                    roundLengths: true,
                    slideToClickedSlide: false,
                    navigation: {
                        nextEl: '.product-featured-swiper .swiper-button-next',
                        prevEl: '.product-featured-swiper .swiper-button-prev',
                    },
                    pagination: {
                        el: '.product-featured-swiper .swiper-pagination',
                        clickable: true,
                    },
                    autoplay: false,
                    breakpoints: {
                        300: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        500: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        991: {
                            slidesPerView: 5,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 6,
                            spaceBetween: 20
                        }
                    }
                });
            </script>
            <div class="section_category">
                <div class="container">
                    <div class="block-title">
                        <h2>
                            Danh mục phổ biến
                        </h2>
                    </div>

                    <div class="block-content">
                        <div class="cate-swiper swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($categoryProduct as $cate)
                                    <div class="swiper-slide item image_cate">
                                        <div class="box_cate">
                                            <div class="img-cate">
                                                <img src="{{ $cate->avatar }}" alt="">
                                            </div>
                                            <div class="info info_cate ">
                                                <h3>
                                                    <a href="{{ route('allListProCate', ['cate' => $cate->slug]) }}"
                                                        title="{{ languageName($cate->name) }}">
                                                        {{ languageName($cate->name) }}
                                                    </a>
                                                </h3>
                                                <div class="count">({{ count($cate->product) }} sản phẩm)</div>
                                            </div>
                                        </div>

                                        {{-- <div class="image_cate col-8">
                                    <img src="{{$cate->avatar}}" alt="">
                                </div> --}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <script>
                var swiperwish = new Swiper('.cate-swiper', {
                    slidesPerView: 5,
                    loop: false,
                    grabCursor: true,
                    spaceBetween: 20,
                    roundLengths: true,
                    slideToClickedSlide: false,
                    navigation: {
                        nextEl: '.cate-swiper .swiper-button-next',
                        prevEl: '.cate-swiper .swiper-button-prev',
                    },
                    pagination: {
                        el: '.cate-swiper .swiper-pagination',
                        clickable: true,
                    },
                    autoplay: false,
                    breakpoints: {
                        300: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        500: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        991: {
                            slidesPerView: 4,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 5,
                            spaceBetween: 20
                        }
                    }
                });
            </script>
            <link rel="preload" as="script"
                href="//bizweb.dktcdn.net/100/449/923/themes/875305/assets/count.js?1670831590614" />
            <script src="//bizweb.dktcdn.net/100/449/923/themes/875305/assets/count.js?1670831590614" type="text/javascript">
            </script>
            <div class="section_deal_hot">
                <div class="container">
                    <div class="block-title">
                        <h2>
                            <a href="san-pham-noi-bat" title="Sản phẩm nổi bật">
                                Sản phẩm nổi bật
                            </a>
                        </h2>
                        {{-- <div class="timer">
                       <span class="text d-none">Hết hạn trong:</span>
                       <div class="time" data-countdown="countdown" data-date="10-2-2022-09-15-45"></div>
                   </div> --}}
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-12">
                                <div class="deal-hot-swiper swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach ($hotProduct as $product)
                                            <div class="swiper-slide flashsale__item" data-pdid="27357045"
                                                data-inventory-quantity="300" data-available="true">
                                                @include('layouts.product.item', ['product' => $product])
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                window.falshSale = {
                    type: "hours",
                    dateStart: "",
                    dateFinish: "",
                    hourStart: "00:00",
                    hourFinish: "24",
                    activeDay: "7",
                    finishAction: "show",
                    percentMin: "40",
                    percentMax: "80",
                    maxInStock: "300",
                    useSoldQuantity: false,
                    quantityType: "sold",
                    timestamp: new Date().getTime(),
                }
            </script>
            <script src="{{ asset('frontend//js/flashsale.js') }}" defer></script>
            <section class="section_three_banner section_product">
                <div class="container">
                    <div class="block-title">
                        <h2>
                            <a href="san-pham-noi-bat" title="Sản phẩm nổi bật">
                                Khuyến mãi đặc biệt
                            </a>
                        </h2>
                    </div>
                    <div class="row">
                        @foreach ($bannerAds as $banner)
                            <div class="col-md-4 col-12 block-item">
                                <p  class="thumb image_hover" title="Sapo">
                                    <img width="377" height="207" class="lazy"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="{{ $banner->image }}" alt="ND Tech">
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @foreach ($categoryProduct as $key => $cate)
            @if (count($cate->product) > 0)
                @if ($key % 2 != 0)
                    <section class="section_product_1 section_product">
                        <div class="container">
                            <div class="block-title">
                                <h2>
                                    <a href="dien-thoai"
                                        title="{{ languageName($cate->name) }}">{{ languageName($cate->name) }}</a>
                                </h2>
                                @if (count($cate->typeCate) > 0)
                                    <div class="link-list">
                                        @foreach ($cate->typeCate as $type)
                                            <a href="/samsung"
                                                title="{{ languageName($type->name) }}">{{ languageName($type->name) }}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-12 col-left">
                                    <div class="block-product">
                                        <div class="product-1-swiper swiper-container">
                                            <div class="swiper-wrapper">
                                                @foreach ($cate->product as $product)
                                                    <div class="swiper-slide">
                                                        @include('layouts.product.item', ['product' => $product])
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-md-block d-none block-banner col-right">
                                    <a href="#" class="thumb image_hover" title="ND Tech">
                                        <img class="lazyload" width="377" height="534"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="//bizweb.dktcdn.net/100/449/923/themes/875305/assets/img_banner_1.jpg?1670831590614"
                                            alt="ND Tech">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        var swiperwish = new Swiper('.product-1-swiper', {
                            slidesPerView: 4,
                            loop: false,
                            grabCursor: true,
                            slidesPerColumn: 2,
                            slidesPerColumnFill: 'row',
                            spaceBetween: 20,
                            roundLengths: true,
                            slideToClickedSlide: false,
                            navigation: {
                                nextEl: '.product-1-swiper .swiper-button-next',
                                prevEl: '.product-1-swiper .swiper-button-prev',
                            },
                            pagination: {
                                el: '.product-1-swiper .swiper-pagination',
                                clickable: true,
                            },
                            autoplay: false,
                            breakpoints: {
                                300: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                500: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                640: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                768: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                991: {
                                    slidesPerView: 3,
                                    spaceBetween: 20
                                },
                                1200: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                }
                            }
                        });
                    </script>
                @else
                    <section class="section_product_2 section_product">
                        <div class="container">
                            <div class="block-title">
                                <h2>
                                    <a href="dien-thoai"
                                        title="{{ languageName($cate->name) }}">{{ languageName($cate->name) }}</a>
                                </h2>
                                @if (count($cate->typeCate) > 0)
                                    <div class="link-list">
                                        @foreach ($cate->typeCate as $type)
                                            <a href="/samsung" title="{{ languageName($type->name) }}">{{ languageName($type->name) }}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-12 col-left order-md-2">
                                    <div class="block-product">
                                        <div class="product-2-swiper swiper-container">
                                            <div class="swiper-wrapper">
                                                @foreach ($cate->product as $product)
                                                    <div class="swiper-slide">
                                                        @include('layouts.product.item', [ 'product' => $product ])
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-md-block d-none block-banner col-right order-md-1">
                                    <a href="#" class="thumb image_hover" title="ND Tech">
                                        <img class="lazyload" width="377" height="534"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="//bizweb.dktcdn.net/100/449/923/themes/875305/assets/img_banner_2.jpg?1670831590614"
                                            alt="ND Tech">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        var swiperwish = new Swiper('.product-2-swiper', {
                            slidesPerView: 4,
                            loop: false,
                            grabCursor: true,
                            slidesPerColumn: 2,
                            slidesPerColumnFill: 'row',
                            spaceBetween: 20,
                            roundLengths: true,
                            slideToClickedSlide: false,
                            navigation: {
                                nextEl: '.product-2-swiper .swiper-button-next',
                                prevEl: '.product-2-swiper .swiper-button-prev',
                            },
                            pagination: {
                                el: '.product-2-swiper .swiper-pagination',
                                clickable: true,
                            },
                            autoplay: false,
                            breakpoints: {
                                300: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                500: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                640: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                768: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                991: {
                                    slidesPerView: 3,
                                    spaceBetween: 20
                                },
                                1200: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                }
                            }
                        });
                    </script>
                @endif
            @endif
            @endforeach
            <section class="section_one_banner">
                <a href="#" class="thumb" title="ND Tech">
                    <img class="lazyload" width="1920" height="212"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                        data-src="//bizweb.dktcdn.net/100/449/923/themes/875305/assets/img_one_banner.jpg?1670831590614"
                        alt="ND Tech">
                </a>
            </section>
            <section class="section_blog">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 ">
                            <div class="block-title">
                                <h2>
                                    <a href="tin-tuc" title="Tin tức mới nhất">Tin tức mới nhất</a>
                                </h2>
                            </div>
                            <div class="block-blog">
                                <div class="blog-swiper swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach ($hotBlogs as $blog)
                                            <div class="swiper-slide">
                                                <div class="item-blog">
                                                    <div class="block-thumb">
                                                        <a class="thumb" title="{{languageName($blog->title)}}" href="{{route('detailBlog',['slug'=>$blog->slug])}}">
                                                            <img class="lazyload"
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                                data-src="{{$blog->image}}">
                                                        </a>
                                                    </div>
                                                    <div class="block-content">
                                                        <h3>
                                                            <a href="{{route('detailBlog',['slug'=>$blog->slug])}}"">{{languageName($blog->title)}}</a>
                                                        </h3>
                                                        <div class="post">
                                                            <div class="time-post f">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                                    height="14" viewBox="0 0 13 14" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M6.19926 4.25024C6.49268 4.25024 6.73054 4.48811 6.73054 4.78153V8.051C6.73054 8.34442 6.49268 8.58228 6.19926 8.58228C5.90583 8.58228 5.66797 8.34442 5.66797 8.051V4.78153C5.66797 4.48811 5.90583 4.25024 6.19926 4.25024Z"
                                                                        fill="#7B7B7B" />
                                                                    <path
                                                                        d="M7.26187 8.32356C7.26187 8.91041 6.78614 9.38614 6.19929 9.38614C5.61245 9.38614 5.13672 8.91041 5.13672 8.32356C5.13672 7.73672 5.61245 7.26099 6.19929 7.26099C6.78614 7.26099 7.26187 7.73672 7.26187 8.32356Z"
                                                                        fill="#7B7B7B" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M4.20142 1.75332C5.44136 1.05586 6.95535 1.05586 8.19529 1.75332L10.3204 2.94872C11.603 3.67016 12.3967 5.02729 12.3967 6.49883V8.73132C12.3967 10.2029 11.603 11.56 10.3204 12.2814L8.19529 13.4768C6.95535 14.1743 5.44136 14.1743 4.20142 13.4768L2.07627 12.2814C0.793712 11.56 0 10.2029 0 8.73132V6.49883C0 5.02729 0.793712 3.67016 2.07627 2.94872L4.20142 1.75332ZM7.67435 2.67944C6.75788 2.16392 5.63884 2.16392 4.72236 2.67944L2.59721 3.87484C1.64923 4.40807 1.06258 5.41117 1.06258 6.49883V8.73132C1.06258 9.81898 1.64923 10.8221 2.59721 11.3553L4.72236 12.5507C5.63884 13.0662 6.75788 13.0662 7.67435 12.5507L9.7995 11.3553C10.7475 10.8221 11.3341 9.81898 11.3341 8.73132V6.49883C11.3341 5.41117 10.7475 4.40807 9.79951 3.87484L7.67435 2.67944Z"
                                                                        fill="#7B7B7B" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M4.51457 0.236639C4.67733 0.480781 4.61136 0.810641 4.36722 0.973403L2.24207 2.39017C1.99792 2.55293 1.66806 2.48696 1.5053 2.24282C1.34254 1.99868 1.40851 1.66881 1.65265 1.50605L3.77781 0.0892861C4.02195 -0.0734752 4.35181 -0.00750317 4.51457 0.236639Z"
                                                                        fill="#7B7B7B" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M7.88225 0.236639C8.04502 -0.00750317 8.37488 -0.0734752 8.61902 0.0892861L10.7442 1.50605C10.9883 1.66881 11.0543 1.99868 10.8915 2.24282C10.7288 2.48696 10.3989 2.55293 10.1548 2.39017L8.02961 0.973403C7.78547 0.810641 7.71949 0.480781 7.88225 0.236639Z"
                                                                        fill="#7B7B7B" />
                                                                </svg>
                                                              {{date('d-m-Y', strtotime($blog->updated_at))}}
                                                            </div>
                                                            <div class="time-post">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                    height="13" viewBox="0 0 11 13" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M5.49918 1.06452C4.61731 1.06452 3.90241 1.77942 3.90241 2.66129C3.90241 3.54316 4.61731 4.25806 5.49918 4.25806C6.38106 4.25806 7.09596 3.54316 7.09596 2.66129C7.09596 1.77942 6.38106 1.06452 5.49918 1.06452ZM2.83789 2.66129C2.83789 1.1915 4.02939 0 5.49918 0C6.96897 0 8.16047 1.1915 8.16047 2.66129C8.16047 4.13108 6.96897 5.32258 5.49918 5.32258C4.02939 5.32258 2.83789 4.13108 2.83789 2.66129Z"
                                                                        fill="#7B7B7B" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M5.4958 7.45146C4.07636 7.44025 2.82529 7.85563 1.87218 8.21234C1.38538 8.39454 1.06452 8.8791 1.06452 9.4449V11.887C1.06452 12.1809 0.826216 12.4192 0.532258 12.4192C0.2383 12.4192 0 12.1809 0 11.887V9.4449C0 8.48202 0.554151 7.56901 1.49905 7.21537C2.47721 6.84927 3.88055 6.37415 5.5042 6.38697C6.9418 6.39832 8.08405 6.78769 9.0795 7.12702C9.18426 7.16273 9.28739 7.19788 9.38906 7.23199C10.3852 7.56609 11 8.50832 11 9.5239V11.887C11 12.1809 10.7617 12.4192 10.4677 12.4192C10.1738 12.4192 9.93548 12.1809 9.93548 11.887V9.5239C9.93548 8.9302 9.58017 8.41888 9.05056 8.24125C8.94767 8.20674 8.84527 8.17196 8.74304 8.13723C7.73957 7.79637 6.75338 7.46138 5.4958 7.45146Z"
                                                                        fill="#7B7B7B" />
                                                                </svg>
                                                                <span>Innovac</span>
                                                            </div>
                                                        </div>
                                                        <p class="justify desc">
                                                            {{languageName($blog->description)}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        @endforeach
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <script>
                var swiperreview = new Swiper('.review-swiper', {
                    slidesPerView: 1,
                    loop: false,
                    grabCursor: true,
                    spaceBetween: 0,
                    roundLengths: true,
                    slideToClickedSlide: true,
                    navigation: {
                        nextEl: '.review-swiper .swiper-button-next',
                        prevEl: '.review-swiper .swiper-button-prev',
                    },
                    pagination: {
                        el: '.review-swiper .swiper-pagination',
                        clickable: true,
                    },
                    autoplay: false,
                    breakpoints: {
                        300: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        500: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        768: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        991: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        1200: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        }
                    }
                });
                var swiperwish = new Swiper('.blog-swiper', {
                    slidesPerView: 3,
                    loop: false,
                    grabCursor: true,
                    spaceBetween: 20,
                    roundLengths: true,
                    slideToClickedSlide: false,
                    navigation: {
                        nextEl: '.blog-swiper .swiper-button-next',
                        prevEl: '.blog-swiper .swiper-button-prev',
                    },
                    autoplay: false,
                    breakpoints: {
                        300: {
                            slidesPerView: 1,
                            spaceBetween: 10
                        },
                        500: {
                            slidesPerView: 1,
                            spaceBetween: 10
                        },
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 10
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        991: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        }
                    }
                });
            </script>
        </div>
        <script>
            (function($) {
                "use strict";
                $.ajaxChimp = {
                    responses: {
                        "We have sent you a confirmation email": 0,
                        "Please enter a valueggg": 1,
                        "An email address must contain a single @": 2,
                        "The domain portion of the email address is invalid (the portion after the @: )": 3,
                        "The username portion of the email address is invalid (the portion before the @: )": 4,
                        "This email address looks fake or invalid. Please enter a real email address": 5
                    },
                    translations: {
                        en: null
                    },
                    init: function(selector, options) {
                        $(selector).ajaxChimp(options)
                    }
                };
                $.fn.ajaxChimp = function(options) {
                    $(this).each(function(i, elem) {
                        var form = $(elem);
                        var email = form.find("input[type=email]");
                        var label = form.find("label[for=" + email.attr("id") + "]");
                        var settings = $.extend({
                            url: form.attr("action"),
                            language: "en"
                        }, options);
                        var url = settings.url.replace("/post?", "/post-json?").concat("&c=?");
                        form.attr("novalidate", "true");
                        email.attr("name", "EMAIL");
                        form.submit(function() {
                            var msg;

                            function successCallback(resp) {
                                if (resp.result === "success") {
                                    msg = "We have sent you a confirmation email";
                                    label.removeClass("error").addClass("valid");
                                    email.removeClass("error").addClass("valid")
                                } else {
                                    email.removeClass("valid").addClass("error");
                                    label.removeClass("valid").addClass("error");
                                    var index = -1;
                                    try {
                                        var parts = resp.msg.split(" - ", 2);
                                        if (parts[1] === undefined) {
                                            msg = resp.msg
                                        } else {
                                            var i = parseInt(parts[0], 10);
                                            if (i.toString() === parts[0]) {
                                                index = parts[0];
                                                msg = parts[1]
                                            } else {
                                                index = -1;
                                                msg = resp.msg
                                            }
                                        }
                                    } catch (e) {
                                        index = -1;
                                        msg = resp.msg
                                    }
                                }
                                if (settings.language !== "en" && $.ajaxChimp.responses[msg] !==
                                    undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[
                                        settings.language] && $.ajaxChimp.translations[settings
                                        .language][$.ajaxChimp.responses[msg]]) {
                                    msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp
                                        .responses[msg]
                                    ]
                                }
                                label.html(msg);
                                label.show(2e3);
                                if (settings.callback) {
                                    settings.callback(resp)
                                }
                            }
                            var data = {};
                            var dataArray = form.serializeArray();
                            $.each(dataArray, function(index, item) {
                                data[item.name] = item.value
                            });
                            $.ajax({
                                url: url,
                                data: data,
                                success: successCallback,
                                dataType: "jsonp",
                                error: function(resp, text) {
                                    console.log("mailchimp ajax submit error: " + text)
                                }
                            });
                            var submitMsg = "Submitting...";
                            if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp
                                .translations[settings.language] && $.ajaxChimp.translations[settings
                                    .language]["submit"]) {
                                submitMsg = $.ajaxChimp.translations[settings.language]["submit"]
                            }
                            label.html(submitMsg).show(2e3);
                            return false
                        })
                    });
                    return this
                }
            })(jQuery);
        </script>
    </div>
@endsection
