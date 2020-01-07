<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;
use App\Akar;

class UsersController extends Controller
{
    public function index(User $user)
    {
      $user = $user->all();
      return view('admin.user.index' , compact('user'));
    }

    public function create()
    {
      return view('admin.user.add');

    }

    public function store(Request $request , User $users)
    {
      $users->create($request->all());

        return redirect('/adminpanel/users')->withFlashMessage('تمت اضافة العضو بنجاح');
    }

    public function edit($id)
    {
      $user = new User;
      $user = $user->find($id);
      return view('admin.user.edit' , compact('user'));

    }

    public function update($id , Request $request)
    {
      $userUpdate = new User;
      $userUpdate = $userUpdate->find($id);
      $userUpdate->fill($request->all())->save();
      return redirect('/adminpanel/users')->withFlashMessage('تمت التعديل بنجاح');


    }

    public function updatePassword(Request $request)
    {
      $user = new User ;
      $userUpdate = $user->find( $request->user_id );
      $password = bcrypt( $request->password );
      $userUpdate->fill([ 'password' => $password ])->save();
      return redirect('/adminpanel/users')->withFlashMessage('تم تغيير كلمة المرور بنجاح ');

    }

    public function destroy($id)
    {
      $user = new User ;
      if($id != 1){
          $user->find($id)->delete();
          Akar::where('user_id' , $id)->delete();
          return redirect('/adminpanel/users')->withFlashMessage('تم الحذف بنجاح ');
      }

        return redirect('/adminpanel/users')->withFlashMessage('لا يمكن حذف هذا العضو   ');



    }
}
