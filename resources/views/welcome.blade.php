@extends('layouts.app')

@section('title')
   أهلا بك
@endsection

@section('header')


   {!!  Html::style("main/css/reset.css") !!}
  {!!  Html::style("main/css/style.css") !!}
  {!!  Html::script("main/js/modernizr.js") !!}


@endsection
@section('content')

<div class="banner text-center">
  <div class="container">
    <div class="banner-info">
      <h1>
      اهلا بك فى موقعنا المتميز
      </h1>
      <p>Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus,<br>
        sem quas potenti malesuada vel phasellus.</p>
      <a class="banner_btn" href="{{ url('/user/create') }}">أضف اعلانك من هنا</a> </div>
  </div>
</div>


 


  
     
<ul class="cd-items cd-container">
		
@foreach(\App\Akar::all() as $akar)
		<li class="cd-item">
			<img src="{{ $akar->image }}" >
		
    </li> <!-- cd-item -->
  @endforeach

	</ul> <!-- cd-items -->



@endsection


@section('footer')

{!!  Html::script("main/js/jquery-2.1.1.js") !!}
{!!  Html::script("main/js/velocity.min.js") !!}

<script>

  function urlHome()
  {
    return "{{ Request::root() }}";
  }

</script>
{!!  Html::script("main/js/main.js") !!}



@endsection