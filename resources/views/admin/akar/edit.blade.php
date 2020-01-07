@extends('admin.layouts.layout')

@section('title')

تعديل بيانات العضو 

    {{ $akar->name }}
  
@endsection

@section('header')



@endsection



@section('content')

<section class="content-header">
  <h1>
  تعديل بيانات العقار

    {{ $akar->name }}
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    <li><a href="{{ url('/adminpanel/users') }}">التحكم فى العقارات</a></li>
    <li class="active"><a href="{{ url('/adminpanel/users/'. $akar->id .'/edit') }}">
    تعديل بيانات العقار
            |

      {{ $akar->name }}
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
          تعديل بيانات العقار

             {{ $akar->name }}
           </h3>
        </div><!-- /.box-header -->
        <div class="box-body">

         <form method="post" action="{{ url('/adminpanel/akar/'.$akar->id.'/update') }}" >

             {{ csrf_field() }}


             <div class="form-group">
                 <div class="col-md-12">
                     <input type="text"  value="{{$akar->name}}" name="name" class="form-control" placeholder="اسم العقار" />
                 </div>
             </div>
             <div class="form-group">
                 <div class="col-md-12">
                     <input type="text"   value="{{$akar->price}}" name="price" class="form-control"  placeholder="ادخل السعر"/>
                 </div>
             </div>
             <div class="form-group">
                 <div class="col-md-12">
                     <input type="text"  value="{{$akar->type}}" name="type" class="form-control" placeholder=" نوع العقار " />
                 </div>
             </div>
             <div class="form-group">
                 <div class="col-md-12">
                     <input type="text"  value="{{$akar->squer}}" name="squer" class="form-control" placeholder="مساحة العقار" />
                 </div>
             </div>
             <div class="form-group">
                 <div class="col-md-12">
                     <input type="text"  value="{{$akar->bu_type}}" name="bu_type" class="form-control"  placeholder="حالة العقار"/>
                 </div>
             </div>
             <div class="form-group">
                 <div class="col-md-12">
                     <textarea class="form-control"    name="description" placeholder="وصف العقار" rows="3">
                         {{ $akar->description}}
                     </textarea>
                 </div>
             </div>

             



             <div class="form-group">
                 <div class="col-md-12">
                     <button type="submit" class="btn btn-warning">

                         تنفيذ العملية
                     </button>
                 </div>
             </div>


         </form>






          

        </div>
      </div>
     </div>
   </div>
</section>


@endsection


@section('footer')



@endsection
