<?php

namespace App\Http\Controllers;
use App\User;
use App\admin;
use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
   
     public function index()
     {
    
        return view('admin.login');
    }
    

     public function register(){
         return view('admin.register');
     }


 	public function setSuccessMessage($message){
 		session()->flash('message',$message);
    	session()->flash('type','success');
	}

 		public function setErrorMessage($message){
 		 session()->flash('message',$message);
    session()->flash('type','danger');
 	}

  public function showRegisterForm(){
         return view('admin.register');
     }

 public function processRegister(Request $request){
 //validation
 $this->validate($request,[
     'name'=>'required|min:5',
     'email'=>'required|email|unique:users,email',
     'password'=>'required|min:6',
 ]);
 //indert data
 $data=[
     'name' => $request->input('name'),
     'email' => strtolower($request->input('email')),
     'password' => bcrypt($request->input('password')),
 ];

 //redirect
 try{
     User::create($data);
    $this->setSuccessMessage('user account created');

 return redirect()->route('login');

 }catch(Exception $e){
    $this->setErrorMessage($e->getMessage());

     return redirect()->back();
}


 }



 public function showLoginForm(){
     return view('admin.login');
 }






 public function processLogin(Request $request){
 	//validation
 $this->validate($request,[

     'email'=>'required|email',
     'password'=>'required|min:6',
]);

 	$credentials=$request->except(['_token']);
 if(auth()->attempt($credentials)){
 	return redirect()->route('tution_fee');
 }
 	 $this->setErrorMessage('Invalid credentials');
	 return redirect()->back();
 }




 public function logout(){
    auth()->logout();

     $this->setSuccessMessage('user has been logout');

     return redirect()->route('login');
 }



}
