@extends('admin.layouts.layout')

@section('title')

تعديل بيانات العضو 

    {{ $user->name }}
  
@endsection

@section('header')



@endsection



@section('content')

<section class="content-header">
  <h1>
  تعديل بيانات العضو 

    {{ $user->name }}         
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    <li><a href="{{ url('/adminpanel/users') }}">التحكم فى الاعضاء</a></li>
    <li class="active"><a href="{{ url('/adminpanel/users/'. $user->id .'/edit') }}">
    تعديل بيانات العضو 

      {{ $user->name }}
    </a></li>

  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
          تعديل بيانات العضو 

             {{ $user->name }}         
           </h3>
        </div><!-- /.box-header -->
        <div class="box-body">

          {!! Form::model($user , ['url' => ['/adminpanel/users' , $user->id ] , 'method' => 'PATCH']) !!}

            @include('admin.user.form')

          {!! Form::close() !!}
           
          {!! Form::open(['url' => '/adminpanel/users/changePassword' , 'method' => 'POST']) !!}
             
             <input type="hidden" value="{{ $user->id }}" name="user_id">

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


              <div class="col-md-12">
              <input  type="password" class="form-control" name="password" placeholder="كلمة المرور" required>

              @if ($errors->has('password'))
                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
              </div>
              <div class="col-md-12">
                  <button type="submit" class="btn btn-warning">

    تغيير كلمة المرور
                  </button>
              </div>


            </div>
            

          {!! Form::close() !!}

          

        </div>
      </div>
     </div>
   </div>
</section>


@endsection


@section('footer')



@endsection
