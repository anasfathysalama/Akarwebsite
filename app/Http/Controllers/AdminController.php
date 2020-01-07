<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Akar;
use App\Contact;

class AdminController extends Controller
{
    public function index(User $user , Akar $akar , Contact $cont)
    {
      $users = User::all()->count();
      $akars = Akar::all()->count();
      $contactUs = Contact::all()->count();
      return view('admin.home.index' , compact('users' , 'akars' , 'contactUs'));
    }
}
