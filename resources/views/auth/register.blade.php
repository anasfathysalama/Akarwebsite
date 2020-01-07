@extends('layouts.app')

@section('title')
تسجيل عضوية جديدة
@endsection

@section('content')
<div class="container">

    <div class="form-group">

      <hr>
      <h3> تسجيل عضوية جديدة</h3>
      <hr>

      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


              <div class="col-md-12">
                  <input  type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="الاسم بالكامل" required autofocus>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


              <div class="col-md-12">
                  <input  type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="البريد الاكترونى" required>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          
    
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


              <div class="col-md-12">
                  <input  type="password" class="form-control" name="password" placeholder="كلمة المرور" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">


              <div class="col-md-12">
                  <input  type="password" class="form-control" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-12">
                  <button type="submit" class="btn btn-warning">
                تسجيل عضوية جديدة
                  </button>
              </div>
          </div>
      </form>



    </div>

    <div class="clearfix">

    </div>
    <br>


</div>
@endsection
