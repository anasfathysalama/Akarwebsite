<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Akar;

class AkarController extends Controller
{
    public function index()
    {
        $akarInfo = new Akar();
        $akarInfo = $akarInfo->all();
        return view('admin.akar.index' , compact('akarInfo'));
    }

    public function addAkar()
    {
        return view('admin.akar.add');

    }

    public  function  store(Request $request)
    {
        $validatedAkarInfo = $request->validate([
            'name'        => 'required',
            'price'       => 'required',
            'type'        => 'required',
            'squer'       => 'required',
            'bu_type'     => 'required',
            'description' => 'required',
            'image'       => 'required|image',
            ]);

        $image = $request->image;
        $new_img = time(). $image->getClientOriginalName();
        $image->move('uploads/akarImage' , $new_img );

      

        $akar = Akar::create([

            'name'       => $request->name,
            'price'       => $request->price,
            'type'       => $request->type,
            'squer'      => $request->squer, 
            'bu_type'    => $request->bu_type, 
            'user_id'    =>$request->user()->id,
            'description'=> $request->description,
            'image'      => 'uploads/akarImage/' . $new_img,
            
                 
        ]);
        
        return redirect('/adminpanel/akar');

    }

    public function edit($id)
    {
        $akar = new Akar();
        $akar = $akar->find($id);
        return view('admin.akar.edit' , compact('akar'));

    }

    public function update(Request $request ,$id)
    {
        $akar = new Akar();
        $akar = $akar->find($id);

        if ( $request->hasFile('image') )
        {
           $image = $request->image;
           $new_img = time(). $image->getClientOriginalName();
           $image->move('uploads/posts/' , $new_img );

           $akar->image = 'uploads/akarImage/' . $new_img ;
        }

        $akar->name    = $request->name;
        $akar->price   = $request->price;
        $akar->type    = $request->type;
        $akar->squer   = $request->squer;
        $akar->bu_type = $request->bu_type;
        $akar->user_id = $request->user()->id;
        $akar->description = $request->description;

        $akar->save();

        return redirect('/adminpanel/akar')->withFlashMessage('تمت التعديل بنجاح');


    }

    public function destroy($id)
    {
        $akar = Akar::find($id);
        $akar->delete();
        return redirect('/adminpanel/akar')->withFlashMessage('تم الحذف بنجاح');

    }

    public function showAll()
    {
        $akar = Akar::all();
        return view('admin.website.all' , compact('akar'));
    }

    public function showDetails($id)
    {
        $akar = Akar::find($id);
        return view('admin.website.details' , compact('akar'));
       
    }

    public function getAjaxInfo(Request $request , Akar $akar)
    {
       return $akar->find($request->id)->toJson();
    }

    public function userShow()
    {
        return view('admin.website.userAdd.userAdd');
    }

    public function userStore(Request $request)
    {
        $validatedAkarInfo = $request->validate([
            'name'        => 'required',
            'price'       => 'required',
            'type'        => 'required',
            'squer'       => 'required',
            'bu_type'     => 'required',
            'description' => 'required',
            'image'       => 'required|image',
            ]);

        $image = $request->image;
        $new_img = time(). $image->getClientOriginalName();
        $image->move('uploads/akarImage' , $new_img );

      

        $akar = Akar::create([

            'name'       => $request->name,
            'price'       => $request->price,
            'type'       => $request->type,
            'squer'      => $request->squer, 
            'bu_type'    => $request->bu_type, 
            'user_id'    =>$request->user()->id,
            'description'=> $request->description,
            'image'      => 'uploads/akarImage/' . $new_img,
            
                 
        ]);
        
        return redirect('/')->withFlashMessage('تم الاضافة بنجاح');
        
    }

    public function showUserBulding(Akar $akar)
    {
        $user = \Auth::user();
        $akar = $akar->where('user_id' , $user->id)->paginate(10);
        return view('admin.website.userAdd.showuseritem' , compact('akar' , 'user'));


    }


}
