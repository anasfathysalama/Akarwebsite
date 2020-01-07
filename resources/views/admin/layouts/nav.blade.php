



{{-- USERS --}}

<li class="treeview">
  <a href="#">
    <i class="fa fa-users pull-right"></i> <span  style="margin-right:25px">التحكم فى الاعضاء</span> <i class="fa fa-angle-right pull-left"></i>
  </a>
  <ul class="treeview-menu">
    <li class="active"><a href="{{ url('adminpanel/users/create') }}"><i class="fa fa-circle-o"></i>اضافة عضو </a></li>
    <li><a href="{{ url('/adminpanel/users') }}"><i class="fa fa-circle-o"></i> كل الاعضاء</a></li>
  </ul>
</li>


{{-- SETTING--}}

<li class="treeview">
  <a href="#">
    <i class="fa fa-cog pull-right"></i> <span  style="margin-right:25px">الاعدادات</span> <i class="fa fa-angle-right pull-left"></i>
  </a>
  <ul class="treeview-menu">
    <li class="active"><a href="{{ url('adminpanel/settings') }}"><i class="fa fa-circle-o"></i>اعدادت الموقع </a></li>
  </ul>
</li>


{{-- SHOW AKARAT--}}

<li class="treeview">
  <a href="#">
    <i class="fa fa-home pull-right"></i> <span  style="margin-right:25px">العقارات</span> <i class="fa fa-angle-right pull-left"></i>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ url('adminpanel/akar') }}"><i class="fa fa-circle-o"></i>كل العقارات</a></li>
    <li class="active"><a href="{{ url('/adminpanel/addAkar') }}"><i class="fa fa-circle-o"></i> اضافة عقار</a></li>

  </ul>
</li>


{{-- SHOW CONTACT US --}}

<li class="treeview">
  <a href="#">
    <i class="fa fa-envelope-o pull-right"></i> <span  style="margin-right:25px">الرسائل الواردة</span> <i class="fa fa-angle-right pull-left"></i>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ url('adminpanel/contact') }}"><i class="fa fa-circle-o"></i>كل الرسائل</a></li>
   

  </ul>
</li>
