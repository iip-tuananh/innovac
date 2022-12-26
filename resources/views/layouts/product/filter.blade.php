<div class="row margin">
   @foreach ($product as $pro)
   <div class="col-6 col-xl-3 col-lg-4 col-md-4 padding">
      @include('layouts.product.item',['product'=>$pro])
   </div>
   @endforeach
</div>