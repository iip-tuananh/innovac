@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" />	
<link href="{{asset('frontend/css/collection_style.scss.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('js')

@endsection
@section('content')
<div class="bodywrap">
   <div class="layout-collection">
      <section class="bread-crumb">
         <div class="container">
            <ul class="breadcrumb" >
               <li class="home">
                  <a  href="/" ><span >Trang chủ</span></a>						
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
   
            <li><strong ><span>{{isset($cateno) ? languageName($cateno->name) : $cateBrand->name}}</span></strong></li>
 

            </ul>
         </div>
      </section>
      <div class="container">
         <div class="row margin-10-">
            <aside class="dqdt-sidebar sidebar col-lg-3 col-12 padding-10">
               <div class="aside-content aside-cate">
                  <div class="title-head">
                     Danh mục sản phẩm
                  </div>
                  <nav class="nav-category">
                     <ul class="nav navbar-pills">
                        @if (isset($cate_id))
                        <input type="text" name="cateno" data-id="{{$cate_id}}" class="cate-id" hidden>
                        @elseif(isset($type_id))
                        <input type="text" name="cateno" data-id="{{$type_id}}" class="type-id" hidden>
                        @endif
                        @foreach ($categoryProduct as $cate)
                           <li class="nav-item  relative">
                              
                              <a title="{{languageName($cate->name)}}" class="nav-link" href="{{route('allListProCate',['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                           </li>   
                        @endforeach
                     </ul>
                  </nav>
               </div>
               <script>
                  $(".open_mnu").click(function(){
                     $(this).toggleClass('cls_mn').next().slideToggle();
                  });
               </script>
               <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/449/923/themes/875305/assets/search_filter.js?1670831590614" />
               <script src="//bizweb.dktcdn.net/100/449/923/themes/875305/assets/search_filter.js?1670831590614" type="text/javascript"></script>
               <div class="aside-filter clearfix">
                  <div class="aside-hidden-mobile">
                     <div class="filter-container fillter-url" data-url="{{route('filterProduct')}}">
                        <div class="clearfix"></div>
                        <aside class="aside-item filter-vendor">
                           <div class="aside-title">Thương hiệu 
                              <span class="nd-svg collapsible-plus">
                              </span>
                           </div>
                           <div class="aside-content filter-group">
                              <ul class="filter-vendor">
                                 @foreach ($brands as $key=>$brand)
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                       <label for="{{$key}}">
                                          <input type="radio" id="{{$key}}" name="brand" class="brand-check"  data-id="{{$brand->id}}"  value="{{$brand->name}}" />
                                          <i class="fa"></i>
                                          {{ $brand->name}}
                                       </label>
                                    </li>
                                 @endforeach
                              
                              </ul>
                              <script>
                                 $(".brand-check").click(function(){
                                    var brand = $(this).data('id');
                                    var cate = $('.cate-id').data('id');
                                    var type = $('.type-id').data('id');
                                    var url = $('.fillter-url').data('url');
                                    $.ajax({
                                       type: "POST",
                                       url: url,
                                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                       data : {
                                          brand:brand,
                                          cate:cate,
                                          type:type
                                       },
                                       success: function(data){
                                          $('.products-view').html(data.html);
                                       },

                                    })
                                 });
                              </script>		
                           </div>
                        </aside>
                        
                        <aside class="aside-item filter-price">
                           <div class="aside-title">Chọn mức giá 
                              <span class="nd-svg collapsible-plus">
                              </span>
                           </div>
                           <div class="aside-content filter-group">
                              <ul>
                                 <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label for="filter-duoi-2-000-000d">
                                    <input type="checkbox" id="filter-duoi-2-000-000d" onchange="toggleFilter(this);" data-group="Khoảng giá" data-field="price_min" data-text="Dưới 2.000.000đ" value="(<2000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    Giá dưới 2.000.000đ
                                    </label>
                                    </span>
                                 </li>
                                 <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label for="filter-2-000-000d-4-000-000d">
                                    <input type="checkbox" id="filter-2-000-000d-4-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="2.000.000đ - 4.000.000đ" value="(>2000000 AND <4000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    2.000.000đ - 4.000.000đ							
                                    </label>
                                    </span>
                                 </li>
                                 <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label for="filter-4-000-000d-7-000-000d">
                                    <input type="checkbox" id="filter-4-000-000d-7-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="4.000.000đ - 7.000.000đ" value="(>4000000 AND <7000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    4.000.000đ - 7.000.000đ							
                                    </label>
                                    </span>
                                 </li>
                                 <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label for="filter-7-000-000d-13-000-000d">
                                    <input type="checkbox" id="filter-7-000-000d-13-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="7.000.000đ - 13.000.000đ" value="(>7000000 AND <13000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    7.000.000đ - 13.000.000đ							
                                    </label>
                                    </span>
                                 </li>
                                 <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label for="filter-tren13-000-000d">
                                    <input type="checkbox" id="filter-tren13-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="Trên 13.000.000đ" value="(>13000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    Giá trên 13.000.000đ
                                    </label>
                                    </span>
                                 </li>
                              </ul>
                           </div>
                        </aside>
                     </div>
                  </div>
               </div>
                 
            </aside>
            <div class="block-collection col-lg-9 col-12 padding-10">
               <h1 class="title-page d-none">Điện thoại</h1>
               <div class="banner-collection">
                  <a class="image_hover" href="#" title="Banner collection">
                  <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
                     data-src="//bizweb.dktcdn.net/100/449/923/themes/875305/assets/banner-collection.png?1670831590614" alt="Banner collection"/>
                  </a>
               </div>
               <div class="category-products">
                  <div class="sortPagiBar clearfix">
                     <div class="sort-cate clearfix">
                        <div id="sort-by">
                           <label class="left">Sắp xếp theo</label>
                           <ul class="ul_col">
                              <li>
                                 <span>
                                 Mặc định 
                                 </span>
                                 <ul class="content_ul">
                                    <li><a href="javascript:;" onclick="sortby('default')">Mặc định</a></li>
                                    <li><a href="javascript:;" onclick="sortby('alpha-asc')">A &rarr; Z</a></li>
                                    <li><a href="javascript:;" onclick="sortby('alpha-desc')">Z &rarr; A</a></li>
                                    <li><a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
                                    <li><a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
                                    <li><a href="javascript:;" onclick="sortby('created-desc')">Hàng mới nhất</a></li>
                                    <li><a href="javascript:;" onclick="sortby('created-asc')">Hàng cũ nhất</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="products-view products-view-grid list_hover_pro">
                     <div class="row margin">
                        @foreach ($list as $pro)
                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 padding">
                           @include('layouts.product.item',['product'=>$pro])
                        </div>
                        @endforeach
                     </div>
                  </div>
                  <div class="pagenav">
                     {{ $list->links() }}
                  </div>
               </div>
            </div>
         </div>
         <div id="open-filters" class="open-filters d-lg-none d-xl-none">
            <i class="fa fa-filter"></i>
            <span>Lọc</span>
         </div>
      </div>
   </div>
   <div class="opacity_sidebar"></div>
   <script>
      var colName = "Điện thoại";
      
      var colId = 2906169;
      
      var selectedViewData = "data";
   </script>
   <script>
      (function($){"use strict";$.ajaxChimp={responses:{"We have sent you a confirmation email":0,"Please enter a valueggg":1,"An email address must contain a single @":2,"The domain portion of the email address is invalid (the portion after the @: )":3,"The username portion of the email address is invalid (the portion before the @: )":4,"This email address looks fake or invalid. Please enter a real email address":5},translations:{en:null},init:function(selector,options){$(selector).ajaxChimp(options)}};$.fn.ajaxChimp=function(options){$(this).each(function(i,elem){var form=$(elem);var email=form.find("input[type=email]");var label=form.find("label[for="+email.attr("id")+"]");var settings=$.extend({url:form.attr("action"),language:"en"},options);var url=settings.url.replace("/post?","/post-json?").concat("&c=?");form.attr("novalidate","true");email.attr("name","EMAIL");form.submit(function(){var msg;function successCallback(resp){if(resp.result==="success"){msg="We have sent you a confirmation email";label.removeClass("error").addClass("valid");email.removeClass("error").addClass("valid")}else{email.removeClass("valid").addClass("error");label.removeClass("valid").addClass("error");var index=-1;try{var parts=resp.msg.split(" - ",2);if(parts[1]===undefined){msg=resp.msg}else{var i=parseInt(parts[0],10);if(i.toString()===parts[0]){index=parts[0];msg=parts[1]}else{index=-1;msg=resp.msg}}}catch(e){index=-1;msg=resp.msg}}if(settings.language!=="en"&&$.ajaxChimp.responses[msg]!==undefined&&$.ajaxChimp.translations&&$.ajaxChimp.translations[settings.language]&&$.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]){msg=$.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]}label.html(msg);label.show(2e3);if(settings.callback){settings.callback(resp)}}var data={};var dataArray=form.serializeArray();$.each(dataArray,function(index,item){data[item.name]=item.value});$.ajax({url:url,data:data,success:successCallback,dataType:"jsonp",error:function(resp,text){console.log("mailchimp ajax submit error: "+text)}});var submitMsg="Submitting...";if(settings.language!=="en"&&$.ajaxChimp.translations&&$.ajaxChimp.translations[settings.language]&&$.ajaxChimp.translations[settings.language]["submit"]){submitMsg=$.ajaxChimp.translations[settings.language]["submit"]}label.html(submitMsg).show(2e3);return false})});return this}})(jQuery);
   </script>
 
@endsection