@extends('admin.layouts.layout')

@section('title')

    التحكم فى العقارات
@endsection

@section('header')

    {!! Html::style('admin/plugins/datatables/dataTables.bootstrap.css') !!}

@endsection


@section('content')

    <section class="content-header">
        <h1>
            التحكم فى العقارات

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> الرئيسية
                </a></li>
            <li class="active"><a href="{{ url('/adminpanel/akar') }}">التحكم فى العقارات
                </a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">التحكم فى العقارات</h3>
                    </div><!-- /.box-header -->


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم العقار</th>
                                <th>السعر</th>
                                <th> نوع العقار</th>
                                <th>مساحة العقار</th>
                                <th>حالة البيع</th>
                                <th>وصف</th>
                                <th colspan="2">التحكم</th>



                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $akarInfo as $akar)

                                <tr>
                                    <td>{{ $akar->id }}</td>
                                    <td>{{ $akar->name }}</td>
                                    <td>{{ $akar->price }}</td>
                                    <td>{{ $akar->type }}</td>
                                    <td>{{ $akar->squer }}</td>
                                    <td>{{ $akar->bu_type }}</td>
                                    <td>{{ $akar->description }}</td>
                                    <td>
                                        <a href="{{ url('/adminpanel/akar/'. $akar->id . '/edit') }}">تعديل </a>
                                    </td>
                                    <td>

                                         <a href="{{ url('/adminpanel/akar/'. $akar->id . '/delete') }}">حذف </a>

                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div><!-- /.box-header -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->


@endsection


@section('footer')

    {!! Html::script('admin/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/plugins/datatables/dataTables.bootstrap.min.js') !!}

    <script type="text/javascript">

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });

    </script>

@endsection
