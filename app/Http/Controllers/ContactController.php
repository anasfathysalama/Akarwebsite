<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\RequestContact;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.website.contact.contact');
    }

    public function store(Request $request)
    {
       

        $cont = Contact::create([

            'name'       => $request->name,
            'email'     => $request->email,
            'content' => $request->content,
       
                 
        ]);
       
        return redirect('/contact')->withFlashMessage('تم الارسال بنجاح');
    }

    public function show()
    {
        $cont = new Contact();
        $cont = $cont->all();
        return view('admin.contact.index' , compact('cont'));
    }

    public function destroy($id)
    {
        $cont = Contact::find($id);
        $cont->delete();
        return redirect('/adminpanel/contact')->withFlashMessage('تم الحذف بنجاح');

    }
}
