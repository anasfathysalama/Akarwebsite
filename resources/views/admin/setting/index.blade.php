@extends('admin.layouts.layout')

@section('title')

اعدادات الموقع
@endsection

@section('header')



@endsection



@section('content')

    <section class="content-header">
        <h1>
            اعدادات الموقع
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li class="active"><a href="{{ url('/adminpanel/sitesetting') }}"> اعدادت الموقع</a></li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                          اعدادات الموقع
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                        <table class="table">
                            <thead>
                            <tr >
                                <th scope="col" style="direction: rtl; text-align: right;">اسم الموقع</th>
                                <th scope="col" style="direction: rtl; text-align: right;">اسم البحث</th>
                                <th scope="col" style="direction: rtl; text-align: right;"> محتوى الموقع</th>

                            </tr>
                            </thead>
                            @foreach($siteSetting as $set)
                            <tbody>
                                <tr>
                                    <td>{{ $set->slug }}</td>
                                    <td>{{ $set->namesetting }}</td>
                                    <td>{{ $set->value }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('footer')



@endsection
