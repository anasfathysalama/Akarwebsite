@extends('layouts.app')

@section('title')
 تسجيل دخول
@endsection

@section('content')

<div class="container">

  <div class="form-group">
    <hr>
    <h3 >تسجيل الدخول</h3>
    <hr>

    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <div class="col-md-12">
                <input  type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="البريد الالكترونى" required autofocus>

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

        <div class="form-group form-check">
            <div class="col-md-12">
                <div class="form-check-input">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرنى
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-warning">
                    تسجيل الدخول
                </button>

                <a class="banner_btn" href="{{ route('password.request') }}">
                    هل نسيت كلمة المرور ؟
                </a>
            </div>
        </div>
    </form>

  </div>
  <div class="clearfix">

  </div>
  <br>


</div>




@endsection
