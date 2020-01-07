@extends('layouts.app')

@section('title')

اضافة عقار

@endsection

@section('header')



@endsection

@section('content')


<div class="container">
   
        
<form action="{{ url('/user/create') }}" method="POST" enctype="multipart/form-data">         

 @include('admin.akar.form')

</form>
   
</div>
                                				
	

@endsection