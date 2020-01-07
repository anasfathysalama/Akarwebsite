
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


        <div class="col-md-12">
            {!! Form::text('name' , null , ['class' => 'form-control' , 'placeholder' => "ادخل الاسم"]) !!}

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


        <div class="col-md-12">
            {!! Form::select('admin' , ['0' => 'user' , '1' => 'admin'] , ['class' => 'form-control']) !!}

            @if ($errors->has('admin'))
                <span class="help-block">
                    <strong>{{ $errors->first('admin') }}</strong>
                </span>
            @endif
        </div>
    </div>
   

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


        <div class="col-md-12">
        {!! Form::text('email' , null , ['class' => 'form-control' , 'placeholder' => "البريد الالكترونى"]) !!}

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    @if(!isset($user))

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

    @endif
    
   

    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-warning">

              تنفيذ العملية
           </button>
        </div>
    </div>
