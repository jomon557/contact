<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller
{
    public function welcome(){
        $users = User::get();
         return view('welcome',compact('users'));
    }

    public function Create(Request $request){

        request()->validate(['name'=>'required','phone_number'=>'required|min:10']);
        
        $data = $request->all();

        $New_data=[
            'name'=>$data['name'],
            'phone_number'=>$data['phone_number'],
        ];

        $test1=new User;
        $test1=User::Create($New_data);
        $User = new User();

        return redirect('/');
    
    }

    public function List()
    {
        $users = User::get();
        return view('welcome',compact('users'));
    }
    public function view($id)
    {
         $user = User::find(decrypt($id));
         return view('ViewUser',compact('user'));
    }
    public function edit($id)
    {
         $user = User::find(decrypt($id));
         return view('EditUser',compact('user'));
    }
    public function update(Request $request)
    {
        $id = decrypt(request('id'));
        $user = User::find($id);
        $user->update([

            'name'   =>request('name'),
            'phone_number' =>request('phone_number'),       
        ]);
         return redirect('/');
    }
    public function delete($id)
    {
          User::find(decrypt($id))->delete();
          $users = User::get();
          return back();
    }
}
