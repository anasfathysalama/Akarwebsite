@extends('layouts.app')

@section('title')
اتصل بنا

@endsection

@section('header')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

@endsection


@section('content')
  <!--Form with header-->
  <div class="container">
    <h2 class="text-center">تواصل معنا</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">

            <form action="{{ url('/contact') }}" method="POST">
              {{ csrf_field() }}
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> اترك رسالتك</h3>
                                
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="name"  placeholder="الاسم بالكامل" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="nombre" name="email"  placeholder="البريد الالكترونى" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control" name="content" placeholder="ادخل رسالتك...." required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="ارسال" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
            
@section('footer')

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection