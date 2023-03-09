<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\blogs;
class homecontroller extends Controller
{
    public function loadregister(){
        return view('register');
    }
    public function loadlogin(){
        return view('login');
    }
    public function register(Request $request){
        
        $user = new user();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->dob = $request->dob;
        $user->mobno = $request->mobno;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login')->with('success', 'User Registered successfully');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home')
                ->withSuccess('Signed in');
        }
        else {
            
            return redirect()->back()->with('error', 'Login details are not valid');
        }
    }
    public  function logout()
    {
        session()->flush();
        Auth::logout();

        return redirect(route('home'));
    }
    public function loadprofile(){
        $data = Auth::user();
        return view('profile',compact('data'));
    }
    public function updateprofile(Request $request){
        $user = user::find(Auth::user()->id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->dob = $request->dob;
        $user->mobno = $request->mobno;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('profile')->with('success', 'User Profile Updated successfully');
    }
    public function loadblogs(){
        $data=blogs::all();
        return view('blogs',compact('data'));
    }
    public function loadaddblog(){
        return view('addblog');
    }
    public function addblog(Request $request){
        $blog = new blogs();
        $blog->title = $request->title;
        $blog->tags = $request->tags;
        $blog->description = $request->description;
        $blog->Author = Auth::user()->username;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $path = $image->store('public/blogs/' . $name);
            $path = str_replace('public', '', $path);
            $blog->image = $path;
        }
        
        $blog->save();
        return redirect()->route('blogs')->with('success', 'Blog Added successfully');
    }
    public function viewblog(Blogs $blog){
        $data['blog'] = $blog;
        return view('singleblog', $data);
    }
}
