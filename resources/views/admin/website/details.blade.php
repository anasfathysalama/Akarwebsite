@extends('layouts.app')

@section('title')
كل العقارات
@endsection

@section('header')

{!!  Html::style('custom/allAkar.css') !!}

@endsection

@section('content')


<div class="container">
   
           
			<div class="col-md-6 column productbox">
				<img src="{{ '/' . $akar->image }}" class="img-responsive">
				<div class="producttitle">{{ $akar->type }}</div>
				<div class="productprice">
					
					<div class="pricetext">   السعر :  {{ $akar->price }}</div>
                    <div class="pricetext"> المساحة : {{ $akar->squer }}  </div>
                    <div class="pricetext"> حالة العقار : {{ $akar->bu_type }}  </div>
					<div class="pricetext"> الوصف : {{ $akar->description }}  </div>
                   
				</div>
				<hr>
            </div>
            <div class="col-md-6">

			<div id="googleMap" style="width:100%;height:400px;"></div>
             
            </div>

           

               
   
</div>
                                				
	

@endsection

@section('footer')

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e135df739e30183"></script>


@endsection