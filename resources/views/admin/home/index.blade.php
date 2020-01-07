@extends('admin.layouts.layout')

@section('content')



    <div class="row">
        <div class="box">
        <h3 style="text-align:center;"> معلومات الموقع </h3>
            <div class="box-header with-border">
            
                <div class="col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-blue"><i class="ion ion-ios-cart-outline"></i></span>
                        <div class="info-box-content">
                        <span class="info-box-text">عدد العقارات الموجودة على الموقع</span>
                        <span class="info-box-number">{{ $akars }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-envelope-o"></i></span>
                        <div class="info-box-content">
                        <span class="info-box-text">عدد الرسائل الواردة </span>
                        <span class="info-box-number">{{ $contactUs }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                

                <div class="col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                        <div class="info-box-content">
                        <span class="info-box-text">عدد الاعضاء </span>
                        <span class="info-box-number">{{ $users }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->

                </div>

               
            </div>
            <div class="clearfix visible-sm-block"></div>
        </div>   
        
    </div>
   
@endsection















     


