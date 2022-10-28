<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class profileController extends Controller
{

    public function index(Request $request){

        return view('auth.profile');

    }

    public function updateProfile(Request $request){

        $request->validate([
           'first_name' => ['required','string','max:255'],
           'last_name' => ['required', 'string', 'max:255'],
           'phone_number' => 'required|numeric|digits:11',
           'password' => ['required',  Rules\Password::defaults()],
           'image' => 'image|mimes:jpeg,png,jpg|max:500',
       ]);

           $requestid = auth()->user()->id;
           $image_path = $request->oldpic;

       if($request->file('image')){

           $path = $request->file('image');
           $data = file_get_contents($path);
           $image_path = base64_encode($data); 
       }

        
       $affected = User::where('id', $requestid)
                         ->update([
                           'first_name' => $request->first_name,
                           'last_name' => $request->last_name,
                           'phone_number' => $request->phone_number,
                           'profile_pic' => $image_path,
                           'password' => Hash::make($request->password),
                       ]);
           if($affected)
               redirect()->back()->with('status', 'Profile Update Successful');
        
       }
}
