@extends('admin.layouts.layout')

@section('title')

التحكم فى الاعضاء

@endsection

@section('header')

 {!! Html::style('admin/plugins/datatables/dataTables.bootstrap.css') !!}

@endsection


@section('content')

<section class="content-header">
  <h1>
    التحكم فى الاعضاء

  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> الرئيسية
    </a></li>
    <li class="active"><a href="{{ url('/adminpanel/users') }}">التحكم فى الاعضاء
    </a></li>
  </ol>
</section>

        <!-- Main content -->
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">التحكم فى الاعضاء</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>اسم المستخدم</th>
                        <th>البريد الاكترونى</th>
                        <th>توقيت الاضافة</th>
                        <th>الصلاحيات</th>
                        <th colspan="2">التحكم</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach( $user as $userInfo)

                      <tr>
                        <td>{{ $userInfo->id }}</td>
                        <td>{{ $userInfo->name }}</td>
                        <td>{{ $userInfo->email }}</td>
                        <td>{{ $userInfo->created_at }}</td>
                        <td>{{ $userInfo->admin == 1 ? 'مدير' : 'عضو' }}</td>
                        <td>
                            <a href="{{ url('/adminpanel/users/'. $userInfo->id . '/edit') }}">تعديل بيانات العضو</a>
                        </td>
                        
                        <td>
                        
                             <a href="{{ url('/adminpanel/users/'. $userInfo->id . '/delete') }}">حذف العضو</a>
                       
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
