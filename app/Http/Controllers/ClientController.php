<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\Websitemail;
use App\Models\Client;

class ClientController extends Controller
{
    public function ClientLogin(){
        return view('client.client_login');
}
    public function ClientRegister(){
        return view('client.client_register');
    }

    
    public function ClientRegisterSubmit(Request $request){
        $request->validate([
            'name' =>['required','string','max:200'],
            'email' =>['required','string','unique:clients']
        ]);
    
    Client::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=> Hash::make($request->address),
        'role'=>'client',
        'status'=>'0',
    ]);

    $notification = array(
        'message' => 'Client Update Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('client.login')->with($notification);
}



}
