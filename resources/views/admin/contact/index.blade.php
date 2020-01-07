@extends('admin.layouts.layout')

@section('title')
الرسائل الواردة     
@endsection

@section('header')

    {!! Html::style('admin/plugins/datatables/dataTables.bootstrap.css') !!}

@endsection


@section('content')

    <section class="content-header">
        <h1>
        الرسائل الواردة 
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
                        <h3 class="box-title"> الرسائل الواردة  </h3>
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
                                <th>اسم المرسل</th>
                                <th>البريد الالكترونى</th>
                                <th> محتوى الرسالة </th>
                                <th>وقت الاضافة </th>
                                
                                <th>التحكم</th>



                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $cont as $contact)

                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->content }}</td>
                                    <td>{{ $contact->created_at->diffForHumans() }}</td>
                                    <td>

                                         <a href="{{ url('/adminpanel/contact/'. $contact->id . '/delete') }}">حذف </a>

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
