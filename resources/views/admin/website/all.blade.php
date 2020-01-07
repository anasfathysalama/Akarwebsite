@extends('layouts.app')

@section('title')
كل العقارات
@endsection

@section('header')

{!!  Html::style('custom/allAkar.css') !!}

@endsection

@section('content')


<div class="container">
   
            @foreach($akar as $akar)
			<div class="col-md-6 column productbox">
				<img src="{{ $akar->image }}" class="img-responsive">
				<div class="producttitle">{{ $akar->type }}</div>
				<div class="productprice">
					<div class="pull-left">
					<a href="{{ url('/showdetails/'.$akar->id) }}" class="btn btn-danger btn-sm" role="button">التفاصيل</a>
					</div>
					<div class="pricetext">   السعر :  {{ $akar->price }}</div>
					<div class="pricetext"> المساحة :{{ $akar->squer }}  </div>
				</div>
				<hr>
			</div>

            @endforeach 

               
   
</div>
                                				
	

@endsection